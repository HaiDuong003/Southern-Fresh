@extends('layouts.app')
@section('content')
<style>
    .avatar_infor{
        background-repeat: no-repeat;
    }
</style>
<div class="card">
    @if(!empty($userProfile))
    <div class="card-header">
        <h4 class="card-title">{{ $userProfile->name }}</h4>
        <p class="card-category">{{ $userProfile->role }}</p>
    </div>
    <div class="card-body row">
        <div class="col-3">
            <img src="{{ asset('assets/img/log.jpg') }}" alt="" class="avata_infor circle-text" style="text-align: center; height: 150px; line-height: 150px; background-size: cover; background-repeat: no-repeat;">
        </div>
        <div class="col-9">
            <div class="">
                <p><b>Name:</b> {{ $userProfile->name }}</p>
                <p>{{ $userProfile->email }}</p>
                <button class="btn btn-info" disabled="disabled">Eidt Profile</button>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="legend"><i class="la la-circle text-success"></i> Completed</div>
    </div>
    @else
    <p class="text-danger">Why you here? Get out now!</p>
    @endif
</div>
@endsection