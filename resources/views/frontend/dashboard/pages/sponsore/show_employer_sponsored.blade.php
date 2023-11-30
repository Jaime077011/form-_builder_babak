@extends('frontend.dashboard.layouts.master')
@section('title', 'Sponsored')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-6">
                        <h3 class="">{{__('Dashboard.Sponsored')}}</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('employee.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive pb-6">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Name')}}</th>
                                <th scope="col" class="sort" data-sort="budget">{{__('Dashboard.Email')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Phone Number')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Job')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Relative relation')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Created At')}}</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($sponsored as $sponsore)

                            <tr>
                                    <td>{{ $sponsore->en_name }}</td>
                                    <td>{{ $sponsore->email}}</td>
                                    <td>{{ $sponsore->phone }}</td>
                                    <td>{{ $sponsore->jobTitle->name}}</td>
                                    <td>{{ $sponsore->relative_relation }}</td>
                                    <td>{{ $sponsore->created_at }}</td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

