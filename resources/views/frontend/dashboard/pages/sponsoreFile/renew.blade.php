@extends('frontend.dashboard.layouts.master')
@section('title', 'file')

@section('content')
<div class="container-fluid">
    <div class=" my-5 rounded shadow-lg bg-white py-5">
        <div class="row">
            <div class="col-md-6">
            <h1 class="m-3">
                {{__('Dashboard.Renew File')}}
            </h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('sponsore.show', $sponsore->id) }}" class="btn btn-sm btn-primary mr-8 ml-4"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
            </div>
        </div>
        <div class="card-body">
        <form action="{{route('sponsorefile.renew', ['id' => $file->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="">
                    <div class="form-group ">
                        <h2 >{{__('Dashboard.Add your notes')}}</h2>
                        <textarea class="form-control" id="exampleFormControlTextarea1" required rows="3" name=note></textarea>                        @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <div class="text-center">
                <button class="btn btn-primary ">{{__('Dashboard.Send')}}</button>
                </div>

        </form>
        </div>

    </div>
</div>
@endsection