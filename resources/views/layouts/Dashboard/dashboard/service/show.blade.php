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
                            <h1> Detiles</h1>
                        </div>
                        <div class="card-body">


                            <label for=""> <h1 class="mt-3 text-center">Only For Description</h1></label>
                            <table class="table table-brodered text-center" border="1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description </th>
                                        <th>Phone Number </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->service_description }}</td>
                                        <td>{{ $service->service_logo }}</td>

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
