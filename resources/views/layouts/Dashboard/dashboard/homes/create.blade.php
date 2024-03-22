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
                                {{-- @if (session('categorie_success'))
                                    <div class="alert alert-success ">
                                        {{ session('categorie_success') }}
                                    </div>
                                @endif --}}
                                <h3 class="card title">Add My Self</h3>
                                <div class="basic-form ">
                                    <form action="{{ route('homes.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Name"
                                                    name="name">
                                            </div>


                                            <label for=" " class="col-sm-4 col-from-lable ">My Self Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="My Self Description"
                                                    name="myself">
                                            </div>


                                            <label for=" " class="col-sm-4 col-from-lable ">Profile Photo</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="file" class="form-control" placeholder="profile_photo"
                                                    name="profile_photo">
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
