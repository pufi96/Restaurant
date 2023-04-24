@extends('layouts.layout')
@section('title') Users @endsection
@section('description') Preview users. @endsection
@section('keywords') shop, online, contact, about @endsection
@section('content')
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Users
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container min-vh-100 mt-4 ">
        <form action="{{route('doRegistration')}}" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-5">Create</button>
            </div>
            @csrf
        </form>
        <div class="mb-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Change Status</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Change Status</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nameUser}}</td>
                                    <td>{{$user->surnameUser}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->idRole}}</td>
                                    <td>{{$user->active}}</td>
                                    <td>
                                        <form action="{{route('usersChange', $user->id)}}" method="GET">
                                            <input type="submit" class="btn btn-success my-2" value="Change"/>
                                            @csrf
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('usersActive', $user->id)}}" method="GET">
                                            <input type="submit" class="btn btn-success my-2" value="Change"/>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
@endsection
