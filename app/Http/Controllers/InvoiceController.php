<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;


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

            $generated_code = Code::where('is_used', false)->inRandomOrder()->first();
            if (is_null($generated_code))
            {
                $false_notification = createNotification('warning', '8000 Codes Have Been Used !!');
                return redirect()->back()->with($false_notification);
            }else
            {
                $encryptedValue = Crypt::encryptString($generated_code->code);
                $decryptedValue = Crypt::decryptString($encryptedValue);
            }
            $invoice = new Invoice();
            $invoice->invoice_number = $request->invoice_number;
            $invoice->generated_code = $encryptedValue ??$generated_code->code;
            $invoice->user_id = auth()->user()->id;
            $invoice->created_at = Carbon::now();
            $invoice->save();

            Code::where('id', $generated_code->id)->update(['is_used' => true]);



            Session::put('code', $decryptedValue);
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
            $kinan = 'kinan';
            return redirect()->back()->with($notification ,$kinan);
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
           $code =  Code::where('code', Crypt::decryptString($invo->generated_code))->first();
            $code->update(['is_used'=> false]);
            $invo->delete();
            $notification = createNotification('success', 'Deleted Successfully');

            return back()->with($notification);
        } catch (\Throwable $th) {
            $notification = createNotification('error', $th->getMessage());
            return back()->with($notification);
        }
    }
}
