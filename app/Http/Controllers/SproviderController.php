<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\solutionprovider;
use App\reference;

class SproviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=auth()->user()->id;
        
        $solpr= solutionprovider::where('user_id','=',$id)->get();
      $chk='no';
        if(!empty($solpr))
        {
            $chk='no';
            foreach($solpr as $sol)
            {
                if($sol->status=="rejected")
                {
                    $chk='yes';
                           if($chk=='yes')
                            {
                                $sol->status="applied";
                                $sol->save();  
                                $ref = new reference;
                                $ref->soloution_provider=$sol->id;
                                $ref->name = $request->input('name');
                                $ref->email = $request->input('email');
                                $ref->qualification = $request->input('qualification');
                                $ref->permission = $request->input('per');
                                $ref->facebook  = $request->input('facebook');
                                $ref->twitter = $request->input('twitter');
                                $ref->github = $request->input('github');
                                $ref->save();
                            }
                }
            }
        }
        if($chk=='no')
        {
        $solp= new solutionprovider;
        $solp->user_id = auth()->user()->id;
        $solp->status="applied";
        $solp->save();
        $ref = new reference;
        $ref->soloution_provider=$solp->id;
        $ref->name = $request->input('name');
        $ref->email = $request->input('email');
        $ref->qualification = $request->input('qualification');
        $ref->permission = $request->input('per');
        $ref->facebook  = $request->input('facebook');
        $ref->twitter = $request->input('twitter');
        $ref->github = $request->input('github');
        $ref->save();
        }

        
        return back();
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
        $ref=reference::find($id);
        $ref->name = $request->input('name');
        $ref->email = $request->input('email');
        $ref->qualification = $request->input('qualification');
        $ref->permission = $request->input('per');
        $ref->facebook  = $request->input('facebook');
        $ref->twitter = $request->input('twitter');
        $ref->github = $request->input('github');
        $ref->save();

        return redirect()->action('PostsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $ref =reference::find($id);
        $sol = solutionprovider::find($request->input('sol_id'));
        $ref->delete();
        $sol->delete();

        
        return redirect()->action('PostsController@index');
    }
}
