<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies_type;

class CompaniesTypeController extends Controller
{
    public function index()
    {
        $all_companies_types = Companies_type::all();
        return view('companies_type.index', ['companies_type' => $all_companies_types]);
        
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

    public function update(Companies_type $company_data)
    {
        #dd($company_data);
        return view('companies_type.update', ["company_data" => $company_data]);
    }

    public function update_store(Companies_type $company_data, Request $request)
    {
        $data = $request->validate([
            
            'name'          => 'required',      # form fields
            'description'   => 'required'      # required|numeric|unique|... 
            
            ]            
        );

       
        $data['updated_at'] = now();

        $company_data->update($data);
        return redirect(route('companies_type.index'))->with('success', 'updated successfully');
    }
    
}
