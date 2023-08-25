@extends('layout/app')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
    @endforeach
@endif

@if (Session::has('error'))
    <p style="color:red;">{{ Session::get('error') }}</p>
@endif
<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="p-5  rounded-3 col-lg-4 "
            style="width: 25rem; background-color: #d4d5d5; border-top-right-radius: 39px;
                    border-top-left-radius: 39px;
                    border-bottom-right-radius: 39px;
                    border-bottom-left-radius: 39px;">
            <div class="mb-3 text-center">
                <img src="{{ asset('images/asrimotor-logo.png') }}" alt="" style="width:100%">
                <H2 class='text-dark'>Asri Motor Single Window</H2>
                <hr>
            </div>
            <div class="row">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" name="login"
                                class="btn btn-outline-light btn-lg mt-3 col-md-12"
                                style="background-color: #92C874" value='login' /><i
                                class="bi bi-box-arrow-in-right"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
