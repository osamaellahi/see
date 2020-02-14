@extends('layouts.app')
@section('content')
@include('in.leftside')
<div class="col-md-12">
    <div class="col-md-1">
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                People who are near .
            </div>
            <div class="card-body" >
                <div class="row">
                    <?php
                $i=0; 
                ?>
                @foreach ($people as $p)
                <?php
                $i++; 
                ?>
                
                <div class="card col-md-5" style="float:left;margin-bottom:5px;" >
                    <div class="card-header" >
                      <div class="image"  style="float:left;display:inline-block;"> 
                           <img src="
                        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
                     " class="rounded-circle img-fluid zoom" height="45" width="50" alt="{{$p->name}}">
                      </div>
                      <div class="name"  style="float:left;display:inline-block;padding-top:0px;padding-left:5px;">
                       <h4> <a href="/see/public/pages/{{$p->id}}" class="link" >{{$p->name}}</a> </h4>
                      </div>
                      <div class="icons" style="float:right;display:inline-block;">
                          
                        <a href="" class="link"  style="color:black;" data-toggle="tooltipchat" title="Lets chat !!!"><i style="color:blueviolet;"class="fa fa-envelope circle"></i></a>
                        <script>
                          $(document).ready(function(){
                            $('[data-toggle="tooltipchat"]').tooltip();
                          });
                        </script> 
                        @include('group.add')
                      </div>
                  </div>
                  <div class="card-body" style="margin-bottom:5px ">
                      <p style="float:left;display:inline-block;cursor:help" data-toggle="tooltipposts" title="Total posts "><b style="color:blueviolet">{{count($p->posts)}}</b></p>
                      <script>
                          $(document).ready(function(){
                            $('[data-toggle="tooltipposts"]').tooltip();
                          });
                        </script> 
                        <?php
                            $sp=App\solutionprovider::all();
                            $chk="Not-Applied";
                            foreach($sp as $s)
                            {
                                if(($p->id)==($s->user_id))
                                {
                                    $chk=$s->status;
                                }
                            }
                            if($chk=='Not-Applied')
                            {
                                $chk='<b style="color:brown">Not-Applied</b>';
                            }
                            
                            if($chk=='rejected')
                            {
                                $chk='<b style="color:red">Rejected</b>';
                            }
                            if($chk=='applied')
                            {
                                $chk='<b style="color:darkgreen">Applied</b>';
                            }
                            if($chk=='verified')
                            {
                                $chk='<b style="color:blueviolet">Verified</b>';
                            }
                        ?>
                        <p style="float:right;display:inline-block;cursor:help" data-toggle="tooltipsp" title="Solution provider status"><small><?php echo $chk; ?></small></p>
                        <script>
                            $(document).ready(function(){
                              $('[data-toggle="tooltipsp"]').tooltip();
                            });
                          </script>   
                        <br /> <hr />
                    </div>
                
            </div>
            @if ($i%2!=0)
            <div class="col-md-2">
            </div>
                
            @endif
            
                @endforeach
                </div>
               
            </div>
        </div>
    </div>
    <div class="col-md-1">
    </div>
</div>

@endsection