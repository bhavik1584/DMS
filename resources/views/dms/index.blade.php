@extends('main')


@section('content')


<x-dms.folder-list :props="['folders'=>$folders]"/>

@endsection