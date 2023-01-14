<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', compact('companies'));
    }

    public function create() {
        return view('companies.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        Company::create($request->post());
        return redirect()->route('companies.index')->with('success', 'Company has been created');
    }

    public function show(Company $company) {
        return view('companies.edit', compact('company'));
    }
}
