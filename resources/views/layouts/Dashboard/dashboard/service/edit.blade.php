@extends('layouts.Dashboard.dashboard_master')

@section('content')


    <div class="container-fluid">
        <div class="content-body mt-5">




            <div class="col-lg-12">

            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card  mt-3">
                        <div class="card-header text-center">
                            <h1> Service Edit</h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form ">
                                <form action="{{ route('service.update',$service->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    <div class="from-control row">
                                        <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" value="{{ $service->service_name }}"
                                                name="service_name">
                                        </div>


                                        <label for=" " class="col-sm-4 col-from-lable ">Description</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" value="{{ $service->service_description }}"
                                                name="service_description">
                                        </div>
                                        <label for=" " class="col-sm-4 col-from-lable "></label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" value="{{ $service->service_logo }}"
                                                name="service_logo">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Edit service</button>
                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
