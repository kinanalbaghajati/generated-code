<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::latest()->get();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('backend.invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'invoice_number' => 'required|unique:invoices|numeric'
            ]);
            $notification = createNotification('success', 'Inserted Successfully');

            $generated_code = Code::where('is_used', false)->first();
            if (is_null($generated_code))
            {
                $false_notification = createNotification('warning', '8000 Codes Have Been Used !!');
                return redirect()->back()->with($false_notification);
            }
            $invoice = new Invoice();
            $invoice->invoice_number = $request->invoice_number;
            $invoice->generated_code = $generated_code->code;
            $invoice->user_id = auth()->user()->id;
            $invoice->created_at = Carbon::now();
            $invoice->save();

            Code::where('id', $generated_code->id)->update(['is_used' => true]);

            return redirect()->back()->with($notification);
        } catch (\Throwable $throwable) {
            $notification = createNotification('error', $throwable->getMessage());
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {

            $request->validate([
                'invoice_number' => 'required|unique:invoices|numeric'
            ]);

            $invoice = new Invoice();
            $invoice->invoice_number = $request->invoice_number ?? $invoice->invoice_number;
            $notification = createNotification('warning', 'Updated Successfully');
            return redirect()->back()->with($notification);
        } catch (\Throwable $throwable) {
            $notification = createNotification('error', $throwable->getMessage());
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $invo = Invoice::where(['id' => $id])->first();
            Code::where('code', $invo->generated_code)->update(['is_used' => false]);
            $invo->delete();
            $notification = createNotification('success', 'Deleted Successfully');

            return back()->with($notification);
        } catch (\Throwable $th) {
            $notification = createNotification('error', $th->getMessage());
            return back()->with($notification);
        }
    }
}
