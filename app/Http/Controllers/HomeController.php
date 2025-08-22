<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show demo page with Bootstrap
     */
    public function bootstrap()
    {
        return view('demo.bootstrap');
    }

    /**
     * Show demo page with jQuery
     */
    public function jquery()
    {
        return view('demo.jquery');
    }

    /**
     * Show demo page with Vue.js
     */
    public function vue()
    {
        return view('demo.vue');
    }

    /**
     * Show demo page with Chart.js
     */
    public function charts()
    {
        return view('demo.charts');
    }

    /**
     * Show demo page with Calendar
     */
    public function calendar()
    {
        return view('demo.calendar');
    }

    /**
     * Show demo page with Maps
     */
    public function maps()
    {
        return view('demo.maps');
    }

    /**
     * Show demo page with Forms
     */
    public function forms()
    {
        return view('demo.forms');
    }

    /**
     * Show demo page with Tables
     */
    public function tables()
    {
        return view('demo.tables');
    }
}
