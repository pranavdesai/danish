<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Page;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect('/');
    }
    public function showPages(){
        $getPages = Page::where('active','1')->get();        
        return view('welcome')->With('showPages',$getPages); 
    }
}
