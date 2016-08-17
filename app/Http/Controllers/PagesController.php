<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use Auth;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        if(Auth::guest() || !Auth::user()->isAdmin()){            
            redirect('/')->send();
        }
    }

    public function index()
    {
    	$getPages = Page::all();
        return view('pages.page')->with('getPages',$getPages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$inputs = $request->all();
        $product = Page::Create($inputs);

        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getPage = Page::where('id',$id)->first();

        if(!empty($getPage)){
            return view('pages.edit')->with('getPage',$getPage);
        }else{
            return redirect('/');
        } 

    	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$updatePage = Page::find($id);
        $updatePage->name = $request->name;
        $updatePage->page = $request->heading;
        $updatePage->description = $request->description;
        $updatePage->active = $request->active;
        $updatePage->save();

        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::find($id)->delete();
        return redirect()->route('page.index');
    }
}