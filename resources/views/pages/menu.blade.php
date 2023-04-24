
@extends('layouts.layout')
@section('title') Home @endsection
@section('description') The main page of the restaurant. @endsection
@section('keywords') restaurant, food, eat, delicious, home @endsection

@section('content')
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Special Menu</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Special Menu</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row special-list">
                @foreach($menus as $menu)
                    <div class="col-lg-4 col-md-6 special-grid {{$menu->type}}">
                        <div class="gallery-single fix">
                            <img src="images/{{$menu->imageMenu}}" class="img-fluid" alt="{{$menu->altMenu}}">
                            <div class="why-text">
                                <h4>{{$menu->nameMenu}}</h4>
                                <p>{{$menu->descMenu}}</p>
                                <h5> ${{$menu->price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$menus->links()}}
        </div>

    </div>

    <!-- End Menu -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
                    </p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->
@endsection
