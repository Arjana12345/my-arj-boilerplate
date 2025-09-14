<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesTypeController extends Controller
{
    public function index()
    {
        return view('companies_type.index');
    }

    public function create()
    {
        return view('companies_type.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
    
}
