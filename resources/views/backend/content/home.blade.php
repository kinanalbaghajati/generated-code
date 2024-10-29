@extends('backend.base_dashboard')
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Editors</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Forms</li>
                            <li class="breadcrumb-item active" aria-current="page">Editors</li>
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
                    <div class="box-header">
                        <h4 class="box-title">CK Editor<br>
                            <small>Advanced and full of features</small>
                        </h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form>
						<textarea id="editor1" name="editor1" rows="10" cols="80">
												This is my textarea to be replaced with CKEditor.
						</textarea>
                        </form>
                    </div>
                </div>
                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Bootstrap WYSIHTML5<br>
                            <small>Bootstrap html5 editor</small>
                        </h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form>
					<textarea class="textarea" placeholder="Place some text here" 
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </form>
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>


@endsection
{{--<div class="cke_screen_reader_only cke_copyformatting_notification"><div aria-live="polite"></div></div>--}}
