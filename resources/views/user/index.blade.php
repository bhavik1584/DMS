@extends('main')
{{-- html section --}}
@section('content')
    <div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            {{$dataTable->table()}}
        </div>
    </div>
@endsection
{{-- script section  --}}
@section('script')
    {{$dataTable->scripts()}}
@endsection