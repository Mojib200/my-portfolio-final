@extends('layouts.Dashboard.dashboard_master')

@section('content')


    <div class="container-fluid">
        <div class="content-body mt-5">




            <div class="col-lg-12">
            </div>


            <div class="row">
                <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="card  mt-3">
                        <div class="card-header text-center">
                            <h1> All  Views</h1>
                        </div>
                        <div class="card-body card-control">
                            <table class="table table-brodered text-center">
                                <thead>
                                    <tr>
                                        <th class="width80">SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($castomer as $castomer)
                                        <tr>
                                            <td>{{ $castomer->id }}</td>
                                            <td>{{ $castomer->castomer_name }}</td>
                                            <td>{{ $castomer->castomer_email }}</td>
                                            <td>{{ $castomer->castomer_description }}</td>
                                            <td>

                                                    <form action="{{ route('castomer.destroy', $castomer->id) }}" method="post">
                                                        @csrf
                                                        @method('Delete')
                                                        <button type="submit"
                                                            class="btn btn-danger  btn-sm mt-2">delete</button>
                                                    </form>
                                            </td>
                                            <td>{{ $castomer->created_at }}</td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger"> Data Not Found </div>
                                    @endforelse

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
