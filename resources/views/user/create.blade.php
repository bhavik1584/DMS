@extends('main')
@section('title', $title)
@section('content')
    <div class="card">
        <div class="card-header">
            Add
        </div>
        <div class="card-body">
            @include('component.common.alert')
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('user.form')
            </form>
        </div>
    @endsection
