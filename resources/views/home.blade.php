@extends('layout/home-layout')

@section('space-work')
    <h2 class="mb-4">selamat datang {{ Auth::user()->name }}</h2>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-3"> <a href="{{ route('kpi') }}"><img src="{{ asset('images/helpdesk.png') }}"
                        alt="" style="width:100%"></a></div>
            <div class="col-6 col-sm-3"> <a href="{{ route('kpi') }}"><img src="{{ asset('images/CC.png') }}" alt=""
                        style="width:100%"></a></div>
            <div class="col-6 col-sm-3"><a href="{{ route('kpi') }}"><img src="{{ asset('images/employee.png') }}"
                        alt="" style="width:100%"></a></div>
            <div class="col-6 col-sm-3"><a href="{{ route('kpi') }}"><img src="{{ asset('images/purchasing.png') }}"
                        alt="" style="width:100%"></a></div>
            <div class="w-100"></div>
            <div class="col-6 col-sm-3"> <a href="{{ route('kpi') }}"><img src="{{ asset('images/TD.png') }}"
                        alt="" style="width:100%"></a></div>
            <div class="col-6 col-sm-3"><a href="{{ route('kpi') }}"><img src="{{ asset('images/kpi.png') }}"
                        alt="" style="width:100%"></a></div>
        </div>
    </div>
@endsection
