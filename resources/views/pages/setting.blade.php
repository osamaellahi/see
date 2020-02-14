@extends('layouts.app')
@section('content')
@include('in.leftside')
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <div class="card">
                <div class="card-header">
                    change layouts
                </div>
                <div class="card-body row">
                    <div class="card col-md-5 lay"  id="laynormal" style="display:inline-block;float:left;" >
                        <div class="card-header ">
                            Normal 
                        </div>
                        <div class="card-body">
                            <img src="{{URL::asset('/image/normallayout.png')}}" alt="profile Pic" height="200" width="100%">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-outline-primary" style="width:100%" id="call1" >select</button>
                        </div>
                     </div><br><div class="col-md-1"></div>
                     <div class="card col-md-5 lay"  id="lay2" style="display:inline-block;float:left">
                        <div class="card-header">
                             Second 
                        </div>
                        <div class="card-body">
                            <img src="{{URL::asset('/image/layout2.png')}}" alt="profile Pic" height="200" width="100%">
                      
                        </div> 
                        <div class="card-footer">
                            <button class="btn btn-outline-primary" style="width:100%" id="call2" >select</button>
                        </div>
                     </div> 
                     <div class="card col-md-5 lay"  id="laybw" style="display:inline-block;float:left;margin-top:5px">
                        <div class="card-header">
                             Color-blind
                        </div>
                        <div class="card-body">
                            <img src="{{URL::asset('/image/layoutcolorblind.png')}}" alt="profile Pic" height="200" width="100%">
                      
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-outline-primary" style="width:100%" id="call3" >select</button>
                        </div>
                     </div>
                </div>
        </div>
    </div>
    <div class="col-md-1">
    </div>
</div>
 <!-- jQuery -->
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>


@endsection