<?php

namespace App\Http\Controllers\Frontend\Dashboard\Sponsore;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\Employer;
use App\Models\Dashboard\EmployerFile;
use App\Models\Dashboard\jobTitle;
use App\Models\Dashboard\Nationality;
use App\Models\Dashboard\Sponsore;
use App\Models\Dashboard\SponsoreFile;
use Illuminate\Http\Request;

class SponsoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $employees = Employer::where('user_id', auth()->user()->id)->orderBy('id')->get();

        $sponsored = Sponsore::with('user')->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);
        
        if($request->employer){
            $sponsored = Sponsore::where('employer_id', $request->employer)->orderBy('created_at', 'desc')->paginate(5);
        }
        return view('frontend.dashboard.pages.sponsore.index', compact('sponsored', 'employees'));
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employers = Employer::where('user_id', auth()->user()->id)->orderBy('id')->get();
        $nationalities = Nationality::all();
        $job_titles = jobTitle::all();
        return view('frontend.dashboard.pages.sponsore.create', compact('employers', 'nationalities', 'job_titles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $sponsored = Sponsore::create($request->all());

        return redirect()->route('sponsore.index')->with('success', 'Sponsore created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sponsore = Sponsore::findOrFail($id);
        $files = SponsoreFile::where('sponsore_id', $id)->orderBy('created_at', 'desc')->get();

        return view('frontend.dashboard.pages.sponsore.show', compact('sponsore', 'files'));
    }
    public function show_single(string $id)
    {

        $sponsored = Sponsore::where('employer_id', $id)->orderBy('created_at', 'desc')->get();

        return view('frontend.dashboard.pages.sponsore.show_employer_sponsored', compact('sponsored'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sponsored = Sponsore::findOrFail($id);
        $employers = Employer::where('user_id', auth()->user()->id)->orderBy('id')->get();
        $nationalities = Nationality::all();
        $job_titles = jobTitle::all();
        return view('frontend.dashboard.pages.sponsore.edit', compact('sponsored', 'employers', 'nationalities', 'job_titles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sponsored = Sponsore::findOrFail($id);
        $sponsored->update($request->all());

        return redirect()->route('sponsore.index')->with('success', 'sponsored updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsored = Sponsore::findOrFail($id);
        $sponsored->delete();

        return redirect()->route('sponsore.index')->with('success', 'sponsore deleted successfully.');
    }
}
