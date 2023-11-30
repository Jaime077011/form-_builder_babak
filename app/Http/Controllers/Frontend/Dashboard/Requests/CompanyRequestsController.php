<?php

namespace App\Http\Controllers\Frontend\Dashboard\Requests;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\CompanyRequests;
use Illuminate\Http\Request;
use doode\FormBuilder\Models\Form;


class CompanyRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::orderBy('id')->get();


        return view('frontend.dashboard.pages.action-request.company-requests', compact('forms'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('frontend.dashboard.pages.action-request.company-request-form');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
