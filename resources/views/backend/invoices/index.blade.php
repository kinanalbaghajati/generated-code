@extends('backend.base_dashboard')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Invoices</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">all Invoices</li>
                            <li class="breadcrumb-item active" aria-current="page"> Invoices</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Invoices Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Inserted By</th>
                            <th>Invoice Number</th>
                            <th>Generated Code</th>
                            <th>Create Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                      @foreach($invoices as $key=> $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <span class="badge badge-info" style="font-size: 14px">{{$item->user->name}}</span></td>
                            <td><span class="badge badge-primary" style="font-size: 14px">{{$item->invoice_number}}</span></td>
                            <td><span class="badge badge-dark" style="font-size: 14px">{{$item->generated_code}}</span></td>
                            <td><span class="badge badge-success" style="font-size: 14px">{{\Carbon\Carbon::parse($item->created_at)->format('Y-m-d H:i:s')}}</span></td>
                            <td>
                                <button type="button" class="btn btn-warning btn-flat"
                                        style="font-size: 18px"
                                        data-toggle="modal"
                                        data-target="#editModel{{$item->id}}">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </button> &nbsp;
                                <a href="{{route('invoice.destroy', $item->id)}}"
                                   role="button" data-confirm-delete="true"
                                   class="btn btn-danger btn-flat "
                                   style="font-size: 18px">
                                    <span class='glyphicon glyphicon-trash'></span>
                                </a>
                            </td>
                        </tr>
                      @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
            @foreach($invoices as $key=> $item)
                <div class="modal fade bs-example-modal-lg" id="editModel{{$item->id}}" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <form action="{{ route('invoice.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content" style="background-color: #272E48">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Edit {{$item->name}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row mb-3">
                                        <div class="col">
                                            <label class="form-control-label" for="name">Invoice Number</label>
                                            <input type="text" class="form-control" id="name" name="invoice_number"
                                                   value="{{ $item->invoice_number ?? '' }}">
                                            @error('name')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-rounded btn-dark" data-dismiss="modal"
                                    >Close
                                    </button>
                                    <button type="submit" class="btn btn-rounded btn-primary float-right">Submit</button>
                                </div>

                            </div>
                        </form>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            @endforeach
        </div>

        <!-- ./row -->
    </section>


@endsection
