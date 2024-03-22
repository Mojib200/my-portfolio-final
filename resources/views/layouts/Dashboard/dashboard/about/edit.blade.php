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
                            <h1> About Edit</h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form ">
                                <form action="{{ route('about.update', $about->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    <div class="from-control row">
                                        <label for=" " class="col-sm-4 col-from-lable ">Exam Name SSC</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" value="{{ $about->exam_name_ssc }}"
                                                name="exam_name_ssc">
                                        </div>

                                        <label for=" " class="col-sm-4 col-from-lable ">Exam Year SSC</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="number" class="form-control" value="{{ $about->exam_year_ssc }}"
                                                name="exam_year_ssc">
                                        </div>

                                        <label for=" " class="col-sm-4 col-from-lable ">Exam Year HSC</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control" value="{{ $about->exam_name_hsc }}"
                                                name="exam_name_hsc">
                                        </div>

                                        <label for=" " class="col-sm-4 col-from-lable ">Exam Year
                                            HSC</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="number" class="form-control" value="{{ $about->exam_year_hsc }}"
                                                name="exam_year_hsc">
                                        </div>
                                        <label for=" " class="col-sm-4 col-from-lable ">About
                                            Description</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control"
                                                value="{{ $about->myself_long_description }}"
                                                name="myself_long_description">
                                        </div>
                                        <label for=" " class="col-sm-4 col-from-lable ">About Photo
                                            Show</label>
                                        <div class="col-sm-8 mb-3">
                                            <img src="{{ asset('/uploads/about_photo') }}/{{ $about->about_photo }}"
                                                alt="" width="80" height="50">
                                        </div>


                                        <label for=" " class="col-sm-4 col-from-lable ">About
                                            Photo</label>
                                        <div class="col-sm-8 mb-3">
                                            <input type="file" class="form-control" placeholder="about_photo"
                                                name="about_photo">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Edit About</button>
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
