<?php
    $data[0]=auth::user()->posts;
    $data[1]=App\Solution::all();        
    $data[2]=App\suggestion::all();
    $data[3]= App\solutionprovider::all();
?>
<h5 style="border-bottom:1px solid crimson;padding:5px;text-align:center">My posts</h5>
@foreach ($data[0] as $post)
<div class="card">    
                
    <div class="card-header" style="border-bottom: 0px;">
    <h5>
      <img src="
      https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
      "  class="rounded-circle img-fluid zoom"  height="45px" width="50px" alt="{{$post->user->name}}">
     
    {{$post->user->name}}<small style="float:right">{{$post->created_at}}</small></h5>
            </div>
    <div class="card-header">
    <h5><a href="/see/public/posts/{{$post->id}}" class="link">{{$post->title}}</a>
      <?php $chk='false'; ?>
@if(count($data[3])>0)
 @foreach ($data[3] as $sp)
 @if (((auth()->user()->id)==($sp->user_id))&&($sp->status=="verified"))
 <a href="/see/public/posts/{{$post->id}}" class="link" style="float:right"><small>Give solution <i class="fa fa-arrow-circle-right"></i></small></a>
      <?php $chk='true'; ?>
 @endif   
 @endforeach
 @endif
 <?php
 if($chk=='false')
 {
 echo ' <a href="/see/public/posts/'.$post->id.'" class="link" style="float:right"><small>see solution <i class="fa fa-arrow-circle-right"></i></small></a>
 ';
 }
 ?>
</p>
      
                
    </h5>
    
        </div>
        <div class="card-body" >
            <p>
                {{ substr(strip_tags($post->body) ,0,300)  }}{{ strlen($post->body)>300 ? " ... ":"" }}
                @if(strlen($post->body)>180)
                <a href="/see/public/posts/{{$post->id}}" class="btn btn-outline-info " style="float:right">Read more</a>
                @endif
            </p>
        
        </div>
       <div style="display:inline-block;border-bottom:.2px solid rosybrown;">
        
    
       <?php
       $j=0;
       $k=0;
        foreach ($data[2] as $sugg)
        {
            if(($sugg->post_id)==($post->id))
            {
                $j++;
            }
        }

        foreach ($data[1] as $sol)
        {
            if(($sol->post_id)==($post->id))
            {
                $k++;
            }
        }
        ?>
  <p style="font-size:14px;margin-left:5px;display:inline-block;
    padding:10px;color:rosybrown;cursor: pointer;">suggestion</p><p style="display:inline-block"><?php echo $j; ?></p>
        
        <p style="font-size:14px;margin-left:5px;display:inline-block;
          padding:10px;color:rosybrown;cursor: pointer;">solution</p><p style="display:inline-block"><?php echo $k; ?></p>

    </div>
    <div class="card" style="border:0.1px solid white">
        
                <strong>Suggestions</strong>
        
                <div class="card-body" style="display:inline-block">
                  
                  <!------suggestion getting from --->
                    @include('suggestions.show', ['data' => [$data[2],$post]])
                  <!------ending suggestion --->

                <!------suggestion creating --->
                  @include('suggestions.create', ['data' => $post->id])
                <!------ending suggestion --->
        </div>
    </div>
    </div>
    <br>
    @endforeach