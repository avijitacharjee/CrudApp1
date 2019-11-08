@extends('layouts.app')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-10'>
                <h3>List biodatas Name</h3>
            </div>
            <div class='col-sm-02'>
                <a class='btn btn-sm btn-success' href={{route('biodata.create')}}> Create biodata </a>
            </div>
        </div>

        @if($message= Session::get('success'))
            <div class='alert alert-success'>
                <p>{{$message}}</p>
            </div>
        @endif
    <div>
@endsection