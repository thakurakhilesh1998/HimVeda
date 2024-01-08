<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestSeriesController extends Controller
{
    public function index()
    {
        return view('admin.TestSeries.create');
    }
}
