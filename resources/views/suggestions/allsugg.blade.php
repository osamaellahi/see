@include('layouts.app')

    <!-- jQuery -->

<div id="server-results">{{--<!--
@if (count($data)>0)
@foreach ($data as $sugg)
<div class="suggestclass">
    <a href=""  class="link" data-toggle="tooltipnow" title="{{$sugg->name}}" class="suggestlink" >{!! $sugg->suggest !!}</a>
</div>
@endforeach
@endif
-->--}}
</div>
<div id="upload-progress"><div class="progress-bar"></div></div> <!-- Progress bar added -->
<div class="form">
    {!! Form::open(['action' => 'suggController@add','method'=>'POST','id'=>'my_form']) !!}
    {{ csrf_field() }}
    <div class="form-group">
       {{Form::text('post', '2',['style'=>'display:none'])}}
        <div class="input-group mb-3">
        {{Form::text('sugg', '',['required','class'=>'form-control','placeholder'=>'Enter suggestion..','aria-label'=>'','aria-describedby'=>'basic-addon2'])}}
        <div class="input-group-append">
    {{Form::submit('˃',['class'=>'input-group-text btn btn-danger','style'=>'','id'=>'basic-addon2'])}}
          </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script>

$("#my_form").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.post( post_url, form_data, function( response ) {
	  $("#server-results").html( response );
	});

	$.get( post_url, form_data, function( response ) {
     // render(response);
    render(response); 
     //  $("#server-results").hide();
        //$("#").html(content);--}}
    });
});

var output=document.getElementById("server-results");
 function render(data)
{

  var l=data.length-1;
       var content;
       var i=l;
        content ='<a href="" style="display:inline-block;" title="'+data[l].name+'" class="suggestclass">'+data[l].suggest+'</a>' ;
        //output.insertAdjacentElement('beforeend',content);
   conosole.log(content);
       //output.insertAdjacentHTML('beforeend',content);
}

      </script>
