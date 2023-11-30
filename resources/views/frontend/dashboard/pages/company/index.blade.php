@extends('frontend.dashboard.layouts.master')
@section('title', 'Companies')
@section('content')

{{-- <ul>
  @foreach ($companies as $company)
      <li>
          <a href="{{ route('companies.show', $company->id) }}">Comapny Name : {{ $company->name }}</a>
          <p>Created by: {{ $company->user->name }}</p>
          <p>Country: {{ $company->country->name }}</p>
      </li>
  @endforeach
</ul> --}}
<div class="container-fluid">
<div class=" my-5 rounded shadow-lg bg-white py-5">
  <div class="row">
    <div class="col-md-6">
      <h2 class="mb-4 ml-6 mr-4">{{__('Dashboard.Companies')}}</h2>
    </div>
    <div class="col-md-6 text-right">
      <a href="#" class="btn btn-sm btn-success mr-3 "><i class="fas fa-plus"></i>{{__('Dashboard.Add New Company')}}</a>
    </div>
  </div>
<div class="">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
      <th scope="col" class="sort" data-sort="name"></th>
      <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Company Name')}}</th>
      <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Company Owner')}}</th>
      <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Company Country')}}</th>
      <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Created At')}}</th>
      <th scope="col" class="sort" data-sort="name"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
        <tr>
            <td></td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->user->name }}</td>
            <td>{{ $company->country->name }}</td>
            <td>{{ $company->created_at }}</td>
            <td><a href="{{ route('companies.show', $company->id) }}" class="btn btn-sm btn-outline-info">{{__('Dashboard.View')}}</a></td>
          </tr>
        @endforeach
        
    </tbody>
  </table>
  <div class="justify-content-center m-2">{{ $companies->links()}}</div>

    
</div>

</div>
</div>
<div>
  {{-- <div>
  {!! html_entity_decode($form) !!}
  </div> --}}
  
</div>

@endsection