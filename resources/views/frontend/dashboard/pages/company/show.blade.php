@extends('frontend.dashboard.layouts.master')
@section('title', 'Company')

@section('content')
<div class="container-fluid">
  <div class=" my-5 rounded shadow-lg bg-white py-5">
    <div class="row">
      <div class="col-md-6">
        <h1 class="m-3">
        {{__('Dashboard.Company Info')}}
        </h1>
      </div>
      <div class="col-md-6 text-right ">
          <a href="{{ route('companies.index') }}" class="btn btn-sm btn-primary mr-3"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
      </div>
    </div>
    <div class="row mt-5 m-3">
      <div class="col-md-4">
        <span>{{__('Dashboard.Company Name')}}</span>
        <h3>{{ $company->name }}</h3>
      </div>
      <div class="col-md-4">
        <span>{{__('Dashboard.Company Location')}}</span>
        <h3>{{ $company->country->name }}</h3>
      </div>
      <div class="col-md-4">
        <span>{{__('Dashboard.Company Capital')}}</span>
        <h3>{{ $data['capital'] }}$</h3>
      </div>
    </div>
    <div class="row mt-3 m-3">
      <div class="col-md-4">
        <span>{{__('Dashboard.Company Email')}}</span>
        <h3>{{ $company->user->email }}</h3>
      </div>
      <div class="col-md-4 ">
        <span>{{__('Dashboard.Company Phone')}}</span>
        <h3>{{ $company->mobile }}</h3>
      </div>
      <div class="col-md-4">
        <span>{{__('Dashboard.Company Activity')}}</span>
        <h3>{{ $data['activity'] }}</h3>
      </div>
    </div>
    <div class="row mt-3 m-3">
        <div class="col-md-4">
            <span>{{__('Dashboard.Is The Company Regesterd in other country?')}}</span>
            <h3>{{ $data['regesterd'] }}</h3>
        </div>
        <div class="col-md-4">
            <span>{{__('Dashboard.Notes')}}</span>
            <h3>{{ $data['note'] }}</h3>
        </div>
        <div class="col-md-4">
            <span>{{__('Dashboard.Partners')}}</span>
            <h3>{{ $data['partners'] }}</h3>
        </div>
    </div>
    <div class="row mt-3 m-3">

        <div class="col-md-4">
            <span>{{__('Dashboard.Partners')}}</span>
            @foreach($data['Patner_name'] as $name)
                <h3 class="mt-3">{{$name}}</h3>
            @endforeach
        </div>
        <div class="col-md-4">
            <span >{{__('Dashboard.Partners Countries')}}</span>
            @foreach($data['Patner_country'] as $country)
                <h3 class="mt-3">{{$country}}</h3>
            @endforeach
        </div>

    </div>

  </div>
  <div class=" my-5 rounded shadow-lg bg-white py-5">
    <div class="row m-3">
      <div class="col-md-6">
        <h1>
        {{__('Dashboard.All Files')}}
        </h1>
      </div>
      <div class="col-md-6 text-right">
        <a href="{{ route('companyfile',$company->id) }}" class="btn btn-sm btn-success "><i class="fas fa-plus"></i>{{__('Dashboard.Add New File')}}</a>
      </div>
    </div>
    <div class="">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
          <th scope="col" class="sort" data-sort="name"></th>
          <th scope="col" class="sort" data-sort="name">{{__('Dashboard.File Name')}}</th>
          <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Start Date')}}</th>
          <th scope="col" class="sort" data-sort="name">{{__('Dashboard.End Date')}}</th>
          <th scope="col" class="sort" data-sort="name"></th>
          </tr>
        </thead>
        <tbody>
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
                    <a href="{{ route('companyfile.show', $file->id) }}" class="dropdown-item "><i class="fa-solid fa-eye fa-lg p-2"></i>{{__('Dashboard.Review')}}</a>
                    <a href="{{ route('companyfile.renew_request', $file->id) }}" class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg p-2"></i>{{__('Dashboard.Renew')}}</a>
                    <a href="{{ route('companyfile.edit', $file->id) }}" class="dropdown-item"><i class="fa-solid fa-pen fa-lg p-2"></i>{{__('Dashboard.Edit')}}</a>
                    <form action="{{ route('companyfile.destroy',$file->id) }}" method="POST">

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
@endsection