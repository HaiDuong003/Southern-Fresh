@extends('layouts.app')
@section('content')
<style>
    .avatar_infor{
        background-repeat: no-repeat;
    }
</style>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">{{ $employee->name }}</h4>
        <p class="card-category">{{ $employee->role }}</p>
    </div>
    <div class="card-body row">
        <div class="col-3">
            <img src="{{ asset('assets/img/log.jpg') }}" alt="" class="avata_infor circle-text" style="text-align: center; height: 150px; line-height: 150px; background-size: cover; background-repeat: no-repeat;">
        </div>
        <div class="col-9">
            <div class="">
                <p><b>Name: {{ $employee->name }}</b></p>
                <p>Email: {{ $employee->email }}</p>
                <a href=""><button class="btn btn-info" disabled="disabled">Eidt Profile</button></a>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="legend"><i class="la la-circle text-success"></i>{{ $employee->is_active == true ? 'Activated' : 'Non Active' }}</div>
    </div>
</div>
@endsection