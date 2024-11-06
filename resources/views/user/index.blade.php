@extends('main')
{{-- html section --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('user.create')}}" class="btn  btn-outline-dark float-right">
                <i class="fas fa-plus"></i>
            </a>
        </div>
        <div class="card-body overflow-auto">
            {{$dataTable->table()}}
        </div>
    </div>
@endsection
{{-- script section  --}}
@section('script')
    {{$dataTable->scripts()}}
@endsection