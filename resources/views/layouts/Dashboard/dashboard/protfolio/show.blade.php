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
                            <h1> My Self Detiles</h1>
                        </div>
                        <div class="card-body">


                            <label for=""> <h1 class="mt-3 text-center">Only For Description</h1></label>
                            <table class="table table-brodered text-center" border="1">
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Profile Photo </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $protfolio->portfolio_title }}</td>
                                        <td>{{ $protfolio->portfolio_description }}</td>
                                        <td><img src="{{ asset('/uploads/portfolio_photo') }}/{{ $protfolio->portfolio_photo }}"
                                            alt="" width="80" height="50"></td>



                                    </tr>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
