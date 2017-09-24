<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('open_house.index');
    }
}