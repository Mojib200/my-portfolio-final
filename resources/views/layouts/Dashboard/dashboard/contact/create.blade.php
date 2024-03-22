@extends('layouts.Dashboard.dashboard_master')

@section('content')
    <div class="container-fluid">
        <div class="content-body mt-5">




            <div class="col-lg-12">

            </div>



            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="card-body">

                                <h3 class="card title">Add Contact</h3>
                                <div class="basic-form ">
                                    <form action="{{ route('contact.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="contact_name"
                                                    name="contact_name">
                                            </div>


                                            <label for=" " class="col-sm-4 col-from-lable ">Email</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="email" class="form-control" placeholder="Email"
                                                    name="contact_email">
                                            </div>


                                            <label for=" " class="col-sm-4 col-from-lable ">Phone Number</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="number" class="form-control" placeholder="Phone Number"
                                                    name="phone_number">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Description"
                                                    name="myself_description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add My Self</button>
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
    </div>
@endsection
