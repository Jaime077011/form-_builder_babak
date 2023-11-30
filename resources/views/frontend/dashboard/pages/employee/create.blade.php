@extends('frontend.dashboard.layouts.master')
@section('title', 'Create employee')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
<div class="card">
<div class="card-header">
    <div class="row align-items-center">
    <div class="col-8">
        <h3 class="mb-0">{{__('Dashboard.Create Employee')}}</h3>

    </div>
    <div class="col-4 text-right">
        <a href="{{ route('employee.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
    </div>
    </div>
</div>
<div class="card-body">
    <form action="{{ route('employee.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.English Name')}}</label>
            <input name="en_name" type="text" class="form-control" required id="exampleFormControlInput1" placeholder="">
            @error('en_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <input name="user_id" value="{{ auth()->user()->id }}" type="hidden" required class="form-control" id="exampleFormControlInput1" placeholder="">
        <div class="">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Arabic Name')}}</label>
                <input name="ar_name" type="text" class="form-control" required id="exampleFormControlInput1" placeholder="">
                @error('ar_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            </div>
        <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Email')}}</label>
            <input name="email" type="email" class="form-control" required id="exampleFormControlInput1" placeholder="">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Phone Number')}}</label>
            <input name="phone" type="text" pattern="[0-9]+" class="form-control" required id="exampleFormControlInput1" placeholder="">
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Company')}}</label>
                <select class="form-control form-control-lg" name="company_id"  value="{{ old('company_id') }}"  autofocus >
                    @foreach ($compaines as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
                {{-- <input name="company_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
                @error('company_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
            </div>
            <div class=" ">
                <div class="form-group ">
                    <label for="exampleFormControlInput1">{{__('Dashboard.Gender')}}</label>
                    <select class="form-control form-control-lg" name="gender"  value="{{ old('gender') }}"  autofocus >
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                    </select>
                    {{-- <input name="gender" type="text" required class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
                    @error('gender')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror <br>
                </div>
                </div>
                <div class=" ">
                    <div class="form-group ">
                        <label for="exampleFormControlInput1">{{__('Dashboard.Nationallity')}}</label>
                        <select class="form-control form-control-lg" name="nationality_id"  value="{{ old('nationality_id') }}"  autofocus >
                            @foreach ($nationalities as $nationality)
                            <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input name="nationality_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
                        @error('nationality_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                    </div>
        <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Job')}}</label>
            <select class="form-control form-control-lg" name="job_title_id"  value="{{ old('job_title_id') }}"  autofocus >
                @foreach ($job_titles as $job)
                <option value="{{ $job->id }}">{{ $job->name }}</option>
                @endforeach
            </select>
            {{-- <input name="job_title_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
            @error('job_title_id')
            <small class="text-danger">{{ $message }}</small>
            @enderror <br>
        </div>
        </div>
        {{-- <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">Files</label>
                <input name="files" type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('files')
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

