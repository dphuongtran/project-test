<?php

namespace Backend\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        toastr()->success('Data has been saved successfully!');

        return view('backend/dashboard::index');
    }
}
