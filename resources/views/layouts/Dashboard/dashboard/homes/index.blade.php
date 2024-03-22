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
                                        <th>Detiles</th>
                                        <th>Action</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($homes as $homes)
                                        <tr>
                                            <td>{{ $homes->id }}</td>
                                            <td>{{ $homes->name }}</td>


                                            <td> <a
                                                    href="{{ route('homes.show', $homes->id) }}"class="btn btn-success btn-sm ">Detiles</a>
                                            </td>



                                            <td>
                                                <a href="{{ route('homes.edit', $homes->id) }}"
                                                    class="btn btn-info btn-sm">Edit</a>
                                                    <form action="{{ route('homes.destroy', $homes->id) }}" method="post">
                                                        @csrf
                                                        @method('Delete')
                                                        <button type="submit"
                                                            class="btn btn-danger  btn-sm mt-2">delete</button>
                                                    </form>
                                            </td>
                                            <td>{{ $homes->created_at }}</td>
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
