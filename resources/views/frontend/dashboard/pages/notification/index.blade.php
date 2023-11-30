@extends('frontend.dashboard.layouts.master')
@section('title', 'Notifications')

@section('content')
<div class="container">
    <div class="container my-5 rounded shadow-lg bg-white py-5">
        <div class="mb-3">
            <h1 >
                {{__('Dashboard.Notifications')}}
            </h1>
        </div>
        <div class="">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name"></th>
                    <th scope="col" class="sort" data-sort="name">{{__('Dashboard.File Name')}}</th>
                    <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Statement')}}</th>
                    <th scope="col" class="sort" data-sort="name">{{__('Dashboard.Date')}}</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Fileone.pdf</td>
                        <td>121290192990</td>
                        <td>20/10/1990</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Fileno_two.pdf</td>
                        <td>121290192990</td>
                        <td>20/10/1990</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>hellohowareyoutoday.pdf</td>
                        <td>121290192990</td>
                        <td>20/10/1990</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection