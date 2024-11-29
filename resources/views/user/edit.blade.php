@extends('main')
@section('title', $title)
@section('content')
    <div class="card">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body">
            @include('component.common.alert')
            <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('user.form')
            </form>
        </div>
    @endsection