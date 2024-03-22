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
                            <h1> Protfolio Edit</h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form ">
                                <form action="{{ route('protfolio.update', $protfolio->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    <div class="from-control row">
                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control"
                                                    value="{{ $protfolio->portfolio_title }}" name="portfolio_title">
                                            </div>


                                            <label for=" " class="col-sm-4 col-from-lable "> Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control"
                                                    value="{{ $protfolio->portfolio_description }}"
                                                    name="portfolio_description">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">Protfolio Photo
                                                Show</label>
                                            <div class="col-sm-8 mb-3">
                                                <img src="{{ asset('/uploads/portfolio_photo') }}/{{ $protfolio->portfolio_photo }}"
                                                    alt="" width="80" height="50">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">Protfolio Photo</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="file" class="form-control"
                                                    value="{{ $protfolio->portfolio_photo }}" name="portfolio_photo">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Edit Protfolio</button>
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
