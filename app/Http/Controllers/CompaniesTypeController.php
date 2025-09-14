<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies_type;

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
        $data = $request->validate([
            
            'name' => 'required',       # form fields
            'description' => 'required' # required|numeric|unique|... 

            ]            
        );

        $data['phone'] = '1234567890'; ## add other fields data
        $data['created_at'] = now();

        $new_companies_type = Companies_type::create($data);
        
        return redirect('companies_type');


    }
    
}
