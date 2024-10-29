@extends('backend.base_dashboard')
@section('content')
    <section class="content">
        <div class="d-flex align-items-center justify-content-around">
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-primary-light rounded w-60 h-60">
                            <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                        </div>
                        <div class="">
                            <p class="text-mute mt-20 mb-0 font-size-16">Accountants</p>
                            <h3 class="text-white mb-0 font-weight-500">{{formatNumber(\App\Models\User::count()-1)}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-success-light rounded w-60 h-60">
                            <i class="text-success mr-0 font-size-24 fa fa-file-archive-o"></i>
                        </div>
                        <div class="">
                            <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
                            <h3 class="text-white mb-0 font-weight-500">{{formatNumber(\App\Models\Invoice::count())}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
