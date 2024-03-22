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
                            <h1> Education Detiles</h1>
                        </div>
                        <div class="card-body">


                            <label for=""> <h1 class="mt-3 text-center">Only For Description</h1></label>
                            <table class="table table-brodered text-center" border="1">
                                <thead>
                                    <tr>


                                        <th>Description</th>
                                        <th>Exam SSC</th>
                                        <th>Exam Year</th>
                                        <th>Exam HSC </th>
                                        <th>Exam Year </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>{{ $about->myself_long_description }}</td>
                                        <td>{{ $about->exam_name_ssc }}</td>
                                        <td>{{ $about->exam_year_ssc }}</td>
                                        <td>{{ $about->exam_name_hsc }}</td>
                                        <td>{{ $about->exam_year_hsc }}</td>


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
