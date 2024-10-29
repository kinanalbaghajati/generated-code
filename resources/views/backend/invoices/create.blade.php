@extends('backend.base_dashboard')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Add Invoice Num</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Invoices </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Invoice Num</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Insert Invoice</h4>
                    </div>
                    <div class="box-body">
                        <form method="post" action="{{route('invoice.insert')}}">
                            @csrf
                      <div class="row">

                          <div class="col-md-9 col-lg-9 col-sm-12">
                              <div class="form-group">
                                  <label>Invoice Number</label>
                                  <div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-file-archive-o"></i></span>
								</span>
                                      <input type="Number" required name="invoice_number" class="form-control" placeholder="Invoice Number">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-lg-3 col-sm-12">
                              <button type="submit" class="btn btn-rounded btn-primary mb-5 float-right mr-5">Submit</button>
                          </div>

                      </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- ./row -->
    </section>


@endsection
{{--<div class="cke_screen_reader_only cke_copyformatting_notification"><div aria-live="polite"></div></div>--}}
