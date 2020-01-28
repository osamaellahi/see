<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;
use App\Solution;
use App\suggestion;
class PostsController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Posts::orderBy('id', 'DESC')->get();
        $soltion=Solution::all();        
        $sugg=suggestion::all();

        $data =array(
            $posts, $soltion,$sugg
            );
        return view('posts.index')->with('data',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' =>'required'
        ]);

        $post = new Posts;
        $post->title =$request->input('title');
        $post->body =$request->input('body');
        $post->user_id=auth()->User()->id;
        $post->save();
        return redirect('posts')->with('success','Post created');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id)
    {
        $post= Posts::find($id);
        $soltion=Solution::where('post_id', '=', $id)->get();        
        $sugg=suggestion::where('post_id', '=', $id)->get();

        $data =array(
            $post, $soltion,$sugg
            );
        return view('posts.showdetail')->with('data',$data);
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
