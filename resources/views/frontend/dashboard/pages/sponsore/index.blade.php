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
                        <div class="col-6"><h3 class="">{{__('Dashboard.Sponsored')}}</h3>
                            <a href="{{route('sponsore.create')}}" class="btn btn-success"><b><i class="fas fa-plus"></i>{{__('Dashboard.Add new Sponsored')}}</b></a>
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #fff"><span>{{__('Dashboard.Employee')}}</span></button>
                                <div class="dropdown-menu dropdown-menu-m  dropdown-menu-right  py-0 overflow-hidden">
                                @foreach ($employees as $employer)
                                  <div class="px-3 py-3">
                                    <a href="{{route('sponsore.index', ['employer' => $employer->id])}}" class="text text-muted m-0 dropdown-item">{{$employer->en_name}}</a>
                                  </div>
                                @endforeach
                      
                                </div>
                              </li>
                        </div>
                        {{-- <div class="col-6 ">
                            <form>
                                <div class="row">
                                    <div class=" col-md-4 ">
                                        <label for="exampleFormControlInput1">{{__('Dashboard.Start Date')}}</label>
                                        <input name="password_confirmation" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        @error('password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror 
                                    </div>
                                    <div class=" col-md-4">
                                        <label for="exampleFormControlInput1">{{__('Dashboard.End Date')}}</label>
                                        <input name="password_confirmation" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        @error('password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror 
                                    </div>
                                    <div class="pt-5">
                                        <button class="btn btn-sm mx-3  btn-primary ">{{__('Dashboard.Filter')}}</button>
                                    </div>    
                                </div>
                            </form>
                        </div> --}}
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
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Employee')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Relative relation')}}</th>
                                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Created At')}}</th>
                                <th scope="col">{{__('Dashboard.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($sponsored as $sponsore)

                            <tr>
                                    <td>{{ $sponsore->en_name }}</td>
                                    <td>{{ $sponsore->email}}</td>
                                    <td>{{ $sponsore->phone }}</td>
                                    <td>{{ $sponsore->jobTitle->name}}</td>
                                    <td>{{ $sponsore->Employer->en_name}}</td>
                                    <td>{{ $sponsore->relative_relation }}</td>
                                    <td>{{ $sponsore->created_at }}</td>
                                    <td>                                    
                                        <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Dashboard.Action')}}</button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                          <a href="{{ route('sponsore.show', $sponsore->id) }}" class="dropdown-item "><i class="fa-solid fa-eye fa-lg p-2"></i>{{__('Dashboard.Review')}}</a>
                                          <a href="{{ route('sponsore.edit', $sponsore->id) }}" class="dropdown-item"><i class="fa-solid fa-pen fa-lg p-2"></i>{{__('Dashboard.Edit')}}</a>
                                          <form action="{{ route('sponsore.destroy', $sponsore->id) }}" method="POST">
                                          @csrf
                                          @method('delete')
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
</div>
@endsection

