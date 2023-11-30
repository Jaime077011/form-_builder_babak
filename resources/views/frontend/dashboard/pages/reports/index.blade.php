@extends('frontend.dashboard.layouts.master')
@section('title', 'Reports')

@section('content')
<div class="container my-9">
    <div class="row ">
        <div class="col-md-4" style="text-align: -webkit-center;">
        <div onclick="location.href='{{ route('dashboard.reports.company_reports') }}';" class="card" style="width: 17rem; cursor: pointer;">
            <div class="thumbnail text-center mt-5">
                <img src="{{ asset("frontend/assets/img/Asset_11.png")}}" class="thumb" alt="...">
            </div>
            <div class="card-body mt-2 text-center">
              <h2 class="card-text">{{__('Dashboard.Company Reports')}}</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="text-align: -webkit-center;">
            <div onclick="location.href='{{ route('dashboard.reports.employee_reports') }}';" class="card" style="width: 17rem; cursor: pointer;">
                <div class="thumbnail text-center mt-5">
                    <img src="{{ asset("frontend/assets/img/Asset_12.png")}}" class="thumb" alt="...">
                </div>
                <div class="card-body mt-2 text-center">
                  <h2 class="card-text">{{__('Dashboard.employee Reports')}}</h2>
                </div>
              </div>
        </div>
            <div class="col-md-4" style="text-align: -webkit-center;">
                <div onclick="location.href='{{ route('dashboard.reports.sponserd_reports') }}';" class="card" style="width: 17rem; cursor: pointer;">
                    <div class="thumbnail text-center mt-5">
                        <img src="{{ asset("frontend/assets/img/Asset_13.png")}}" class="thumb" alt="...">
                    </div>
                    <div class="card-body mt-2 text-center">
                      <h2 class="card-text">{{__('Dashboard.Sponsored Reports')}}</h2>
                    </div>
                  </div>
            </div>
    </div>
</div>

@endsection 