@extends('frontend.dashboard.layouts.master')
@section('title', 'Edit Sponsored')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
<div class="card">
<div class="card-header">
    <div class="row align-items-center">
    <div class="col-8">
        <h3 class="mb-0">{{__('Dashboard.Edit Sponsored')}}</h3>
    </div>
    <div class="col-4 text-right">
        <a href="{{route('sponsore.index')}}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
    </div>
    </div>
</div>
<div class="card-body">
    <form action="{{route('sponsore.update', $sponsored)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <input name="user_id" value="{{ auth()->user()->id }}" type="hidden" required class="form-control" id="exampleFormControlInput1" placeholder="">

        <div class="">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Arabic Name')}}</label>
            <input name="ar_name" type="text" class="form-control" id="exampleFormControlInput1" required value="{{$sponsored->ar_name}}">
            @error('ar_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>

        <div class="">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.English Name')}}</label>
                <input name="en_name" type="text" class="form-control" id="exampleFormControlInput1" required value="{{$sponsored->en_name}}">
                @error('en_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            </div>
        {{-- <div class=" ">

        <div class="form-group ">
            <label for="exampleFormControlInput1">Employer</label>
            <select class="form-control form-control-lg" name="employer_id"  value="{{ old('employer_id') }}" value="{{$sponsored->employer_id}}" autofocus >
                @foreach ($employers as $employee)
                <option value="{{ $employee->id }}">{{ $employee->en_name }}</option>
                @endforeach
            </select>
            @error('employer_id')
            <small class="text-danger">{{ $message }}</small>
            @enderror <br>
        </div>
        </div> --}}
        <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Email')}}</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" required  value="{{$sponsored->email}}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class=" ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Phone Number')}}</label>
            <input name="phone" type="text" pattern="[0-9]+" class="form-control" id="exampleFormControlInput1" required value="{{$sponsored->phone}}">
            @error('phone_number')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        {{-- <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">Gender</label>
                <select class="form-control form-control-lg" name="gender"  value="{{ old('gender') }}"  autofocus value="{{$sponsored->gender}}">
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
                @error('gender')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
            </div> --}}
            {{-- <div class=" ">
                <div class="form-group ">
                    <label for="exampleFormControlInput1">Nationality</label>
                    <select class="form-control form-control-lg" name="nationality_id"  value="{{ $sponsored->nationality_id }}"  autofocus >
                        @foreach ($nationalities as $nationality)
                        <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                        @endforeach
                    </select>
                    @error('nationality_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror <br>
                </div>
                </div> --}}
                {{-- <div class=" ">
                    <div class="form-group ">
                        <label for="exampleFormControlInput1">{{__('Dashboard.Job')}}</label>
                        <select class="form-control form-control-lg" name="job_title_id"  value="{{ old('job_title_id') }}" value="{{ $sponsored->job_title_id }}" autofocus >
                            @foreach ($job_titles as $job)
                            <option value="{{ $job->id }}">{{ $job->name }}</option>
                            @endforeach
                        </select>
                        @error('job_title_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                    </div> --}}
        <div class=" ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Relative relation')}}</label>
                <input name="relative_relation" type="text" class="form-control" id="exampleFormControlInput1" required value="{{$sponsored->relative_relation}}">
                @error('relative_relation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
            </div>

    <button class=" btn  btn-primary ">{{__('Dashboard.Save')}}</button>
    </form>
</div>
</div>
</div>
@endsection

