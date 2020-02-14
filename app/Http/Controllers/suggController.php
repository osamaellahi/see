<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;
use App\solutionprovider;
use App\Solution;
use App\suggestion;
use Validator;
use Response;
class suggController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sugg =suggestion::all();
        
        return response()->json($sugg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $sugg = new suggestion;
            $sugg ->post_id=$request->input('post') ;
            $post_id=$request->input('post');
            $sugg ->suggest=  $request->input('sugg');
            if(empty($sugg ->suggest)){}
            else{
            $sugg ->name = auth()->user()->name;
            $sugg->save();
            $response=array ($sugg);
            }
            return back();
        
    }
    public function add(Request $request)
    {
        
            $sugg = new suggestion;
            $sugg ->post_id=$request->input('post') ;
            $post_id=$request->input('post');
            $sugg ->suggest=  $request->input('sugg');
            if(empty($sugg ->suggest)){}
            else{
            $sugg ->name = auth()->user()->name;
            $sugg->save();
            $response=array ($sugg);
            }
            $data =suggestion::all();
        return response()->json($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
