<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Dashboard\Company;
use App\Models\Dashboard\CompanyFile;

class AdminCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth');
        $this->middleware(['permission:read-Role','auth:admin'])->only(['index']);
        $this->middleware(['permission:create-Role','auth:admin'])->only(['create', 'store']);
        $this->middleware(['permission:edit-Role','auth:admin'])->only(['edit', 'update']);
    }
/**
     * Display a listing of the companies.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::with('user', 'country')->orderBy('created_at', 'desc')->paginate(5);

        return view('backend.pages.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.company.create');
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
        return view('backend.pages.company.show', compact('company', 'data', 'files'));
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
