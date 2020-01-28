<div >
    {!! Form::open(['action' => 'suggController@store' , 'method' => 'POST']) !!}
    <div class="form-group">
       {{Form::text('sugg', '',['class'=>'form-control','placeholder'=>'Enter suggestion..'])}}
       {{Form::text('post', $data,['style'=>'display:none'])}}
    </div>
    {{Form::submit('Suggest',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
    
</div>