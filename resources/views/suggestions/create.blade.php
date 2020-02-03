<div >
    {!! Form::open(['action' => 'suggController@store','id'=>'makesugg']) !!}
    {{ csrf_field() }}
    <div class="form-group">
       {{Form::text('post', $data,['style'=>'display:none'])}}
        <div class="input-group mb-3">
        {{Form::text('sugg', '',['required','class'=>'form-control','placeholder'=>'Enter suggestion..','aria-label'=>'','aria-describedby'=>'basic-addon2'])}}
        <div class="input-group-append">
    {{Form::submit('˃',['class'=>'input-group-text btn btn-danger','style'=>'','id'=>'basic-addon2'])}}
          </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

