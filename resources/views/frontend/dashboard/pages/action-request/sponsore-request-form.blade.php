@extends('frontend.dashboard.layouts.master')
@section('title', 'Create file')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">{{__('Dashboard.Create New File')}}</h3>
                </div>

            </div>
        </div>
        <div class="card-body">
            {!! html_entity_decode($sponsorerequest->content) !!}
        </div>
    </div>
</div>

@endsection