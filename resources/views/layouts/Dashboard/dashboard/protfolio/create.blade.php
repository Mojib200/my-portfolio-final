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
                                <h3 class="card title">Add Product</h3>
                                <div class="basic-form ">
                                    <form action="{{ route('protfolio.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Name"
                                                    name="portfolio_title">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">Product Photo</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="file" class="form-control" placeholder="Product photo"
                                                    name="portfolio_photo">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable "> Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Description"
                                                    name="portfolio_description">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add Products</button>
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
