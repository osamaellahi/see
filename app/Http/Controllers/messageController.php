<?php

namespace App\Http\Controllers;
use App\User;
use App\messages;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('messages.index');
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
        $m=new messages;
        $m->from_user_id=auth()->user()->id;
        $m->to_user_id=$request->input('toid');
        $m->message=$request->input('message');
        $m->file='nofile';
        $m->status='sent';
        $m->save();
        $id=$request->input('toid');
        $data = messages::find($m->id);
            return response()->json($data);

    }
    public function print(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alluser()
    {   
        $da =User::all();
        return response()->json($da);
    }
    public function allmess(Request $request,$id)
    {   
        $query_one =messages::where([
            ['from_user_id', '=', auth()->user()->id],
            ['to_user_id', '=', $id]])
            ->orwhere(
               [ ['from_user_id', '=', $id],
            ['to_user_id', '=', auth()->user()->id]])
            ->get();
            return response()->json($query_one);
    }
   
    public function show($id)
    
    {
        $user=User::find($id);
        $query_one =messages::where([
        ['from_user_id', '=', auth()->user()->id],
        ['to_user_id', '=', $id]])
        ->orwhere(
           [ ['from_user_id', '=', $id],
        ['to_user_id', '=', auth()->user()->id]])
        ->orderBy('id')
        ->get();
        $data=array(
            $user,$query_one
        );
       return view('messages.message')->with('data',$data);
        
    }  
     public function see($request)
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
    public function delete(Request $request)
    {
        
        $m=$request->input('id');
        return '3223';
    }
}
