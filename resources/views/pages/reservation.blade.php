@extends('layouts.layout')

@section('title') Contact @endsection
@section('description') Learn more about us or contact us. @endsection
@section('keywords') shop, online, contact, about @endsection

@section('content')
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Reservation
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container min-vh-100 mt-4 mb-5">
        <div>
            @if(Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif
            @if(Session::get('succ'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('succ')}}
                </div>
            @endif

            <form action="{{route('doReservation')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name='email' placeholder="name@example.com"/>
                </div>
                @error('email')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
                <div class="form-group">
                    <label for="date">Select date</label>
                    <input type="date" class="form-control" name="date" id="date"/>
                </div>
                @error('date')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>
                @error('message')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container -->
@endsection
