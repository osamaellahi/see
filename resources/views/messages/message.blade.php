@extends('layouts.app')
@section('content')
@include('in.leftside')

<div class="container card">
    <h4 class="card-header" style="background:white">
      <a style="float:right" href="/see/public/message/" class="link"><small >back</small></a>
        <img src="
        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRckzeL7ufOox9b3vTrzwDBzFSMXmWqMaEJ8B7r2hV4kEcmHKM8&s
        "  class="rounded-circle img-fluid "  height="45px" width="50px" alt="{{$data[0]->name}}">
    <a href="/see/public/pages/{{$data[0]->id}}">{{$data[0]->name}}</a></h4> 
    <div style="overflow-y:scroll;height:450px;background:white;"  class="card-body"> 
   
      <div id="server-results"><!-- For server results --></div>
         </div>

    <div class="card-footer">
      
	<div id="upload-progress" style=" height: 5px;border: 1px solid #ddd;width: 100%;margin-bottom:2px;">
	
		<div class="progress-bar"
    style="background: darkorchid;    width: 0;    height: 5px;"></div></div> <!-- Progress bar added -->
    
      <div class="">
        {!! Form::open(['action' => 'messageController@store','method'=> 'POST','id'=>'message']) !!}
        {{ csrf_field() }}
        <div class="form-group">
           {{Form::text('toid', $data[0]->id,['class'=>'form-control','style'=>'display:none;'])}}
       
        <div class="input-group mb-3">
          {{Form::text('message', '',['rows'=>'2','required','class'=>'form-control','placeholder'=>'Enter message..'])}}
          <div class="input-group-append">
        {{Form::submit('send',['class'=>'input-group-text btn btn-danger','style'=>'','id'=>'basic-addon2'])}}
            </div>
          </div>
        </div>
        {!! Form::close() !!}
        </div>
</div> 
</div>

<script>
  var chkonce=0;
  var chk=0;
  window.setInterval(function(){
    data();
}, 8000);
data();
function data(){
  chkonce++;
    $.get("/see/public/message/allmess/{{$data[0]->id}}", function(response){
      renderall(response);
    });
}
  $("#message").submit(function(event){
        event.preventDefault(); //prevent default action 
    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = new FormData(this); //Encode form elements for submission
    
    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
    contentType: false,
    processData:false,
    xhr: function(){
    //upload Progress
    var xhr = $.ajaxSettings.xhr();
    if (xhr.upload) {
      xhr.upload.addEventListener('progress', function(event) {
        var percent = 0;
        var position = event.loaded || event.position;
        var total = event.total;
        if (event.lengthComputable) {
          percent = Math.ceil(position / total * 100);
        }
        //update progressbar
        $("#upload-progress .progress-bar").css("width", + percent +"%");
      }, true);
    }
    return xhr;
  }
    }).done(function(response){ //
       // $("#server-results").html(response);
     
     $("#upload-progress .progress-bar").css("width","0%");
     render(response);
    });
  });
  
  var output =document.getElementById('server-results');
  var content;
  
  function render(response)
  {
    chk++;
    if((response.from_user_id)==(' {{auth()->user()->id}} '))
      {
        var del='<div style="display:inline-block;float:right"><form  > <input type="text" name="id" value="'+response.id+'" style="display:none;"> <button type="submit" style="background:none;border:0px solid"><i class="fa fa-trash-o"></i> </button></form></div>';
      
      content+= '<div class="parent"  id="downhere'+chk+'"> '+del+' <p class="message" style="float:right;max-width:65%;">'+response.message+' <br><small style="float:right">'+response.created_at+'</small></p></div>';
    }
      else
      {
        content = '<div class="parent"  id="downhere'+chk+'"> <div ><p class="message" style="float:left;max-width:65%;">'+response.message+' </p></div></div>';
      
      }
      $("#server-results").append(content);
      elmnt =document.getElementById("downhere"+chk);
  elmnt.scrollIntoView();
      content="";

  }
  function renderall(response)
  {

    
    for(var i=0;i<response.length;i++)
    {
      chk++;
      if((response[i].from_user_id)==(' {{auth()->user()->id}} '))
      {
        var id=response[i].id;
        var icon ='<i class="fa fa-trash-o"></i>';
        var del='<div style="display:inline-block;float:right">{!! Form::open(["action" => ["messageController@delete"] ,"method" => "POST"]) !!} {{ csrf_field() }}{{Form::text("id",'+id+',["style"=>"display:none;"])}}  {{Form::submit("del",["class"=>"btn btn-outline-success","style"=>"border:0px solid #fff;"])}}  {!! Form::close() !!}    </div>';
      
        content+= '<div class="parent"  id="downhere'+chk+'"> '+del+' <p class="message" style="float:right;max-width:65%;">'+response[i].message+' <br><small style="float:right">'+response[i].created_at+'</small></p></div>';
      }
      else
      {
        content+= '<div class="parent "  id="downhere'+chk+'"> <p class="" id="talkbubble" style="float:left;max-width:65%;">'+response[i].message+' <br><small style="float:right">'+response[i].created_at+'</small> </p></div>';
     
      }
    }
      $("#server-results").html(content);
      if(chkonce==1)
      {
      elmnt =document.getElementById("downhere"+chk);
  elmnt.scrollIntoView();
      }
      content="";


  }
  
  </script>
  @endsection