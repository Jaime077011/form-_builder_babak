@extends('frontend.dashboard.layouts.master')
@section('title', 'edit employee')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
<div class="card">
<div class="card-header">
    <div class="row align-items-center">
    <div class="col-8">
        <h3 class="mb-0">{{__('Dashboard.Edit Employee')}}</h3>
    </div>
    <div class="col-4 text-right">
        <a href="{{ route('employee.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
    </div>
    </div>
</div>
<div class="card-body">
    <form action="{{ route('employee.update', $employer)}}" method="post" enctype="multipart/form-data">

    @csrf
    @method('PUT')

        <div class="">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.English Name')}}</label>
            <input name="en_name" type="text" class="form-control" id="exampleFormControlInput1" required value="{{$employer->en_name}}">
            @error('en_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <input name="user_id" value="{{ auth()->user()->id }}" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="">
        <div class="">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Arabic Name')}}</label>
                <input name="ar_name" type="text" class="form-control" id="exampleFormControlInput1" required value="{{$employer->ar_name}}">
                @error('ar_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            </div>
        <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Email')}}</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" required value="{{$employer->email}}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Phone Number')}}</label>
            <input name="phone" type="text" pattern="[0-9]+" class="form-control" id="exampleFormControlInput1" required value="{{$employer->phone}}">
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        {{-- <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">Company</label>
                <input name="company_id" type="text" class="form-control" id="exampleFormControlInput1" value="{{$employer->company_id}}">
                @error('company_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
            </div> --}}
            {{-- <div class=" ">
                <div class="form-group ">
                    <label for="exampleFormControlInput1">Gender</label>
                    <input name="gender" type="text" class="form-control" id="exampleFormControlInput1" value="{{$employer->gender}}">
                    @error('gender')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror <br>
                </div>
                </div>
                <div class=" ">
                    <div class="form-group ">
                        <label for="exampleFormControlInput1">Nationality</label>
                        <input name="nationality_id" type="text" class="form-control" id="exampleFormControlInput1" value="{{$employer->nationality_id}}">
                        @error('nationality_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                    </div> --}}
        {{-- <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Job')}}</label>
            <input name="job_title_id" type="text" class="form-control" id="exampleFormControlInput1" value="{{$employer->job_title_id}}">
            @error('job_title_id')
            <small class="text-danger">{{ $message }}</small>
            @enderror <br>
        </div>
        </div> --}}





    <button class=" btn  btn-primary">{{__('Dashboard.Save')}}</button>

    </form>
</div>
</div>
</div>
@endsection

