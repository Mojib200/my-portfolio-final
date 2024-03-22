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

                                <h3 class="card title">Add About</h3>
                                <div class="basic-form ">
                                    <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Exam Name SSC</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="exam name ssc"
                                                    name="exam_name_ssc">
                                                </div>
                                                <label for=" " class="col-sm-4 col-from-lable ">Exam Year
                                                    SSC</label>
                                                <div class="col-sm-8 mb-3">
                                                    <input type="number" class="form-control" placeholder="exam year ssc"
                                                        name="exam_year_ssc">
                                                </div>

                                                <label for=" " class="col-sm-4 col-from-lable ">Exam Year
                                                    HSC</label>
                                                <div class="col-sm-8 mb-3">
                                                    <input type="text" class="form-control" placeholder="exam name hsc"
                                                        name="exam_name_hsc">
                                                </div>


                                                <label for=" " class="col-sm-4 col-from-lable ">Exam Year
                                                    HSC</label>
                                                <div class="col-sm-8 mb-3">
                                                    <input type="number" class="form-control" placeholder="exam year hsc"
                                                        name="exam_year_hsc">
                                                </div>
                                                <label for=" " class="col-sm-4 col-from-lable ">About
                                                    Description</label>
                                                <div class="col-sm-8 mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="About Description" name="myself_long_description">
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
                                                    <button type="submit" class="btn btn-primary">Add
                                                        About</button>
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
