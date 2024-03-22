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
                            <h1> My Self Edit</h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form ">
                                <form action="{{ route('homes.update',$homes->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    {{-- jokhon edit update delete korbo tokhon 1 line er jonno use korbo @method('put') ar multipul lin er jonno use korbo  @method('Patch') --}}

                                    <div class="from-control row">
                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" value="{{ $homes->name }}"
                                                    name="name">
                                            </div>


                                            <label for=" " class="col-sm-4 col-from-lable "> My Self Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" value="{{ $homes->myself }}"
                                                    name="myself">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">Profile Photo Show</label>
                                            <div class="col-sm-8 mb-3">
                                                <img src="{{ asset('/uploads/profile_photo') }}/{{ $homes->profile_photo }}"
                                                    alt="" width="80" height="50">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">profile Photo</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="file" class="form-control" value="{{ $homes->profile_photo }}"
                                                    name="profile_photo">
                                            </div>
                                        </div>


                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Edit My self</button>
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
