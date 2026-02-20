<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.szolgaltatasok')
            ->with('services', \App\Models\Service::with('labels')->get())
            ->with('issues', \App\Models\Issue::all());

    }

}
