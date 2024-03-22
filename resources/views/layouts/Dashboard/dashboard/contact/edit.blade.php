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
                            <h1> Contact Edit</h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form ">
                                <form action="{{ route('contact.update',$contact->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    <div class="from-control row">
                                        <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" value="{{ $contact->contact_name }}"
                                                name="contact_name">
                                        </div>


                                        <label for=" " class="col-sm-4 col-from-lable ">Email</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="email" class="form-control" value="{{ $contact->contact_email }}"
                                                name="contact_email">
                                        </div>


                                        <label for=" " class="col-sm-4 col-from-lable ">Phone Number</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="number" class="form-control" value="{{ $contact->phone_number }}"
                                                name="phone_number">
                                        </div>
                                        <label for=" " class="col-sm-4 col-from-lable ">Description</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" value="{{ $contact->myself_description }}"
                                                name="myself_description">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Edit Contact</button>
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
