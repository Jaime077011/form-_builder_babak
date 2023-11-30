@extends('frontend.dashboard.layouts.master')
@section('title', 'Wallet')

@section('content')
<div class="container my-3">
    <div class="row ">
        <div class="col-md-3" style="text-align: -webkit-center;">
            <div  class="card" style="width: 13rem;">
                <div class="  mt-5">
                    <div>
                    <i class="fa-solid fa-credit-card fa-2xl" style="color: #575c66;"></i> 
                    </div>
                </div>
                <div class="card-body">
                    <div class="mx-1">
                        <span>{{__('Dashboard.Transfer Via Card Number')}}</span>
                    </div>
                    <h2 class="mt-1">300$</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="text-align: -webkit-center;">
            <div  class="card" style="width: 13rem;">
                <div class="  mt-5">
                    <div>
                        <i class="fa-solid fa-money-bill-transfer fa-2xl" style="color: #575c66;"></i>   

                    </div> 
                </div>
                <div class="card-body">
                    <div class="mx-1">
                        <span>{{__('Dashboard.Transfer Other Banks')}}</span>
                    </div>
                    <h2 class="mt-1">170$</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="text-align: -webkit-center;">
            <div  class="card" style="width: 13rem;">
                <div class="  mt-5">
                    <div>
                        <i class="fa-solid fa-building-columns fa-2xl" style="color: #575c66;"></i>

                    </div>
                </div>
                <div class="card-body">
                    <div class="mx-1">
                        <span>{{__('Dashboard.Transfer To The same bank')}}</span>
                    </div>
                    <h2 class="mt-1">300$</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 rounded shadow-lg bg-white py-5">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        {{__('Dashboard.Transactions')}}
                    </h1>
                </div>
                <div class="col-md-6">

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
                    </div>
                    </form>
            </div>
            <div class="mt-2">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name"></th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Transaction Name')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Transaction Date')}}</th>
                        <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Status')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Fileone.pdf</td>
                            <td>20/10/1990</td>
                            <td>continue</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Fileno_two.pdf</td>
                            <td>20/10/1990</td>
                            <td>continue</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>hellohowareyoutoday.pdf</td>
                            <td>20/10/1990</td>
                            <td>continue</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>

@endsection