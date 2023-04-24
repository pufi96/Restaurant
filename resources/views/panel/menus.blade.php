@extends('layouts.layout')
@section('title') Menus @endsection
@section('description') Preview users. @endsection
@section('keywords') shop, online, contact, about @endsection
@section('content')
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Menus
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container min-vh-100 mt-4">
        <form action="{{route('menusAdd')}}" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Descriptiopn</label>
                <input type="text" class="form-control" id="desc" name="desc" />
            </div>
            <div class="mb-3">
                <label for="alt" class="form-label">Image alt</label>
                <input type="text" class="form-control" id="alt" name="alt" />
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" />
            </div>
            <div class="mb-5">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type">
                    <option value="drinks">Drink</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                </select>
                <span class="ml-5">
                    <label for="visible" class="form-label ml-3">Visible:</label>
                    <input type="radio" name="visible" value="1" checked/>
                    <label for="visible" class="form-label ml-3">Not visible:</label>
                    <input type="radio" name="visible" value="0"/>
                </span>
                <span>
                    <label for="img" class="form-label ml-5 mr-3">Image:</label>
                    <input type="file" name="img" id="img"/>
                </span>
                <span>
                    <input type="submit" class="btn btn-success my-2" value="Add"/>
                </span>
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
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Alt</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Visible</th>
                                    <th>Change</th>
                                    <th>Visible</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Alt</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Visible</th>
                                    <th>Change</th>
                                    <th>Visible</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($menus as $menu)
                                    <tr>
                                        <td>{{$menu->id}}</td>
                                        <td>{{$menu->nameMenu}}</td>
                                        <td>{{$menu->descMenu}}</td>
                                        <td>{{$menu->altMenu}}</td>
                                        <td>{{$menu->price}}</td>
                                        <td>{{$menu->type}}</td>
                                        <td>{{$menu->visible}}</td>
                                        <td>
                                            <form action="{{route('menusChange', $menu->id)}}" method="GET">
                                                @csrf
                                                <input type="submit" class="btn btn-success my-2" value="Edit"/>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{route('menusVisible', $menu->id)}}" method="GET">
                                                @csrf
                                                <input type="submit" class="btn btn-success my-2" value="Change"/>
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
