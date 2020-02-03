@include('layouts.app')

    <!-- jQuery -->
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<div id="server-results">

@if (count($data)>0)
@foreach ($data as $sugg)
<div class="suggestclass">
    <a href=""  class="link" data-toggle="tooltipnow" title="{{$sugg->name}}" class="suggestlink" >{!! $sugg->suggest !!}</a>
</div>
@endforeach
@endif
</div>
<div id="server-results2"></div><div id="upload-progress"><div class="progress-bar"></div></div> <!-- Progress bar added -->
<div class="form">
    {!! Form::open(['action' => 'suggController@add','actiom'=>'POST','id'=>'my_form']) !!}
    {{ csrf_field() }}
    <div class="form-group">
       {{Form::text('post', $data[1]->id,['style'=>'display:none'])}}
        <div class="input-group mb-3">
        {{Form::text('sugg', '',['required','class'=>'form-control','placeholder'=>'Enter suggestion..','aria-label'=>'','aria-describedby'=>'basic-addon2'])}}
        <div class="input-group-append">
    {{Form::submit('˃',['class'=>'input-group-text btn btn-danger','style'=>'','id'=>'basic-addon2'])}}
          </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
  <script>
$("#my_form").submit(function(event){
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
        $("#server-results").html(response);
    });
});
$("#my_form").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.get( post_url, form_data, function( response ) {
       var l=response[1].length;
       var content;
       var i;
        for (i = 1;i<l;i++){

        content +='<a href="" style="display:inline-block;" title="'+response[1][i].name+'" class="suggestclass">'+response[1][i].suggest+'</a>' ;
        }
        $("#server-results").hide();
        $("#server-results2").html(content);
      
	});
});

      </script>
