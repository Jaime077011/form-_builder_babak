@extends('frontend.dashboard.layouts.master')
@section('title', 'Create file')

@section('content')

<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">{{__('Dashboard.Update File')}}</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{route('companies.show', ['company' => $file->company_id])}}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('companyfile.update', ['id' => $file->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">
                    <div class="form-group ">
                        <label for="name">{{__('Dashboard.File Name')}}</label>
                        <input name="name" type="text" class="form-control" id="name" required value="{{$file->name}}" placeholder="">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <div class=" ">
                    <div class="form-group ">
                        <label for="start_date">{{__('Dashboard.Start Date')}}</label>
                        <input name="start_date" class="form-control" value="{{$file->start_date}}" required id="start_date" placeholder="">
                        @error('start_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <div class="">
                    <div class="form-group ">
                        <label for="end_date">{{__('Dashboard.End Date')}}</label>
                        <input name="end_date"  class="form-control" value="{{$file->end_date}}" required id="end_date" placeholder="">
                        @error('end_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <div class=" ">
                    <div class="form-group ">
                        <label for="file">{{__('Dashboard.File')}}</label>
                        <input name="file" type="file" class="form-control" required value="{{ old('file')}}" id="file" placeholder="">
                        <img src="{{ asset($file->filename) }}">
                        @error('file')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <button class="btn btn-primary">{{__('Dashboard.Update')}}</button>
            </form>
        </div>
    </div>
</div>
<script>
    $('#start_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
    });
    $('#end_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
    });
</script>
@endsection