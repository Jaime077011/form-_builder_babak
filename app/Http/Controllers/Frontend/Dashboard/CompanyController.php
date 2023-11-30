<?php

namespace App\Http\Controllers\Frontend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\CompanyFile;
use App\Models\Dashboard\CompanyRequests;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

/**
     * Display a listing of the companies.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::with('user', 'country')->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);
        // $form = CompanyRequests::findOrFail(1)->content;
        // dd($form);

        return view('frontend.dashboard.pages.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.dashboard.pages.create');
    }

    /**
     * Store a newly created company in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        $data = json_decode($company->company_data, true);
        $files = CompanyFile::where('company_id', $id)->orderBy('created_at', 'desc')->get();
        return view('frontend.dashboard.pages.company.show', compact('company', 'data', 'files'));
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('backend.pages.company.edit', compact('company'));
    }

    /**
     * Update the specified company in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    /**
     * Delete the specified company from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }


}
