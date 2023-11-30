@extends('frontend.dashboard.layouts.master')
@section('title', 'Company Reports')

@section('content')
<div class="container">
<div class="container my-5 rounded shadow-lg bg-white py-5">
    <div class="row mb-4">
        <div class=" col-md-8">
            <form>
                <div class="row">
                    <div class=" col-md-3 ">
                        <label for="exampleFormControlInput1">{{__('Dashboard.Company Name')}}</label>
                        <input name="Company Name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        @error('Company Name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                <div class=" col-md-3 ">
                    <label for="exampleFormControlInput1">{{__('Dashboard.Start Date')}}</label>
                    <input name="password_confirmation" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                    @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror 
                </div>
                <div class=" col-md-3">
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
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('dashboard.reports') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
        </div>
        </div>
    <div class="">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name"></th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.File Name')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.File Number')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Order Date')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Status')}}</th>
                <th scope="col" class="sort" data-sort="name"></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fa-solid fa-file-pdf fa-lg"></i></td>
                    <td>Fileone.pdf</td>
                    <td>121290192990</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>
                        <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Dashboard.Action')}}</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <button class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>Review</button>
                            <button class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg"></i>Renew</button>
                            <button class="dropdown-item"><i class="fa-solid fa-pen fa-lg"></i>Edit</button>
                            <button class="dropdown-item"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                        </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-file-pdf fa-lg"></i></td>
                    <td>Fileno_two.pdf</td>
                    <td>121290192990</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Dashboard.Action')}}</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <button class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>Review</button>
                                <button class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg"></i>Renew</button>
                                <button class="dropdown-item"><i class="fa-solid fa-pen fa-lg"></i>Edit</button>
                                <button class="dropdown-item"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                            </div>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-file-pdf fa-lg"></i></td>
                    <td>hellohowareyoutoday.pdf</td>
                    <td>121290192990</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Dashboard.Action')}}</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <button class="dropdown-item"><i class="fa-solid fa-eye fa-lg"></i>Review</button>
                                <button class="dropdown-item"><i class="fa-solid fa-arrows-rotate fa-lg"></i>Renew</button>
                                <button class="dropdown-item"><i class="fa-solid fa-pen fa-lg"></i>Edit</button>
                                <button class="dropdown-item"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                            </div>
                            </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection