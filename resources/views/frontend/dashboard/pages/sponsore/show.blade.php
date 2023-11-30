@extends('frontend.dashboard.layouts.master')
@section('title', 'Employee')

@section('content')
<div class="container">
    <div class="container my-5 rounded shadow-lg bg-white py-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <h1>
                {{__('Dashboard.Sponsored')}} 
                </h1>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('sponsore.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <span>{{__('Dashboard.Sponsored Name')}}</span>
                <h3>{{ $sponsore->en_name }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Gender')}}</span>
                <h3>{{ $sponsore->gender }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Job')}}</span>
                <h3>{{ $sponsore->jobTitle->name }}</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <span>{{__('Dashboard.Email')}}</span>
                <h3>{{ $sponsore->email }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Phone Number')}}</span>
                <h3>{{ $sponsore->phone }}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Nationallity')}}</span>
                <h3>{{ $sponsore->nationality->name  }}</h3>
            </div>
        </div>
    </div>
    <div class="container my-5 rounded shadow-lg bg-white py-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <h1>
                {{__('Dashboard.Sponsored Files')}}
                </h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('sponsorefile',$sponsore->id) }}" class="btn btn-sm btn-success "><i class="fas fa-plus"></i>{{__('Dashboard.Add New File')}}</a>
              </div>
        </div>
        <div class="row mt-5">
            <div class="table-responsive pb-6">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col" class="sort" data-sort="name"></th>
                        <th scope="col" class="sort" data-sort="budget">{{__('Dashboard.File Name')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Start Date')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.End Date')}}</th>
                        <th scope="col">{{__('Dashboard.Action')}}</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($files as $file)
                        <tr>
                          <td><i class="fa-solid fa-file-pdf fa-lg"></i></td>
                          <td>{{ $file->name }}</td>
                          <td>{{ $file->start_date }}</td>
                          <td>{{ $file->end_date }}</td>
                          <td>
                              <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Dashboard.Action')}}</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a href="{{ route('sponsorefile.show', $file->id) }}" class="dropdown-item "><i class="fa-solid fa-eye fa-lg p-2"></i>{{__('Dashboard.Review')}}</a>
                                  <a href="{{ route('sponsorefile.renew_request', $file->id) }}" class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg p-2"></i>{{__('Dashboard.Renew')}}</a>
                                  <a href="{{ route('sponsorefile.edit', $file->id) }}" class="dropdown-item"><i class="fa-solid fa-pen fa-lg p-2"></i>{{__('Dashboard.Edit')}}</a>
                                  <form action="{{ route('sponsorefile.destroy',$file->id) }}" method="POST">
                                  @csrf
                                  @method('post')
                                  <button class="dropdown-item"><i class="fa-solid fa-trash fa-lg p-2"></i>{{__('Dashboard.Delete')}}</button>
                                  </form>
              
                                </div>
                              </div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection