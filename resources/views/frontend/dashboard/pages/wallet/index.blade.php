@extends('frontend.dashboard.layouts.master')
@section('title', 'Wallet')

@section('content')
<div class="container">
<div class="container my-5 rounded shadow-lg bg-white py-5">
    <div class="row mb-3">
    <div class="col-md-6">
        <h1>
            {{__('Dashboard.Your Wallet')}}
        </h1>

    </div>
    <div class="col-md-6 rounded-circle text-right ">

    </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-4">
            <button class="btn disable " style="color:white; font-weight:700; background-color: #11cdef; border-radius:30px;">
                {{__('Dashboard.Credit')}} | 3000$
            </button>
            <a href="{{route('dashboard.wallet.add-to-wallet')}}" class="btn btn-primary mx-2" style="color:white; font-weight:700; border-radius:30px;">
                {{__('Dashboard.Add to Wallet')}}
            </a>
        </div>
        <div class="div col-md-6 mb-2 ">
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
    <div class="">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name"></th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Movement type')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Movement statement')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.The amount')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Paid up')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Date')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Debit balance')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Credit')}}</th>
                <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Net balance')}}</th>

            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Fileone.pdf</td>
                    <td>121290192990</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Fileone.pdf</td>
                    <td>121290192990</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Fileone.pdf</td>
                    <td>121290192990</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                    <td>20/10/1990</td>
                    <td>continue</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection