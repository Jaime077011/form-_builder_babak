@extends('frontend.dashboard.layouts.master')
@section('title', 'Action Requests')

@section('content')
<div class="container my-9">
  <div class="row ">
    <div class="col-md-4" style="text-align: -webkit-center;">
      <div onclick="location.href='{{ route('company_requests.index') }}';" class="card" style="width: 17rem; cursor: pointer;">
        <div class="thumbnail text-center mt-5">
          <img src="{{ asset("frontend/assets/img/Asset_11.png")}}" class="thumb" alt="...">
        </div>
        <div class="card-body mt-2 text-center">
          <h2 class="card-text">{{__('Dashboard.Company Requests')}}</h2>
        </div>
      </div>
    </div>
    <div class="col-md-4" style="text-align: -webkit-center;">
      <div onclick="location.href='{{ route('employee_requests.index') }}';" class="card" style="width: 17rem; cursor: pointer;">
        <div class="thumbnail text-center mt-5">
          <img src="{{ asset("frontend/assets/img/Asset_12.png")}}" class="thumb" alt="...">
        </div>
        <div class="card-body mt-2 text-center">
          <h2 class="card-text">{{__('Dashboard.Employee Requests')}}</h2>
        </div>
      </div>
    </div>
    <div class="col-md-4" style="text-align: -webkit-center;">
      <div onclick="location.href='{{ route('sponsore_requests.index') }}';" class="card" style="width: 17rem; cursor: pointer;">
        <div class="thumbnail text-center mt-5">
          <img src="{{ asset("frontend/assets/img/Asset_13.png")}}" class="thumb" alt="...">
        </div>
        <div class="card-body mt-2 text-center">
          <h2 class="card-text">{{__('Dashboard.Sponserd Requests')}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection