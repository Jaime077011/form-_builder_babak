@extends('backend.layouts.master')
@section('title', 'file')

@section('content')
<div class="container-fluid">

    <div class=" my-5 rounded shadow-lg bg-white py-5">
        <div class="row">
            <div class="col-md-6">
            <h1 class="ml-8 mr-4">
                {{__('Admin.File Information')}}
            </h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{route('all_companies.show', ['all_company' => $company])}}" class="btn btn-sm btn-primary mr-7 ml-3"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
            </div>
        </div>
        <div class="row mt-5 m-3 text-center">
            <div class="col-md-4">
                <span>{{__('Admin.File Name')}}</span>
                <h3>{{$file->name}}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Admin.Start Date')}}</span>
                <h3>{{$file->start_date}}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Admin.End Date')}}</span>
                <h3>{{$file->end_date}}</h3>
            </div>
        </div>
        <h1 class="m-3 mt-8 text-center">
            {{__('Admin.Read File')}}
        </h1>
        <div class="text-center">
            <img src={{asset($file->filename)}}>
        </div>
    </div>
</div>
@endsection