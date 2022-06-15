<?php

namespace App\Http\Controllers;

use App\Models\ServiceNetwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServiceNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service-network-application');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'company' => 'required',
            'email' => 'required|email',
            'zip_code' => 'numeric|nullable',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        ServiceNetwork::create(['first_name' => Str::ucfirst(request()->get('first_name')), 'last_name' => Str::ucfirst(request()->get('last_name')),
                                'company' => Str::ucfirst(request()->get('company')), 'industry' => request()->get('industry'),
                                'email' => request()->get('email'), 'phone' => request()->get('phone'),
                                'city' => Str::ucfirst(request()->get('city')), 'zip_code' => request()->get('zip_code'),
                                'state' => request()->get('state'), 'coverage_area' => request()->get('coverage_area'),
                                'message' => request()->get('message')]);
        
        return redirect()->back()->with('success', 'Your form has been submitted! Someone will be in contact with you in 4-5 business days.');
    }
}
