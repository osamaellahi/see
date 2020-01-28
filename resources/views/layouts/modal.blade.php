<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Fill Information and send your request</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        {!! Form::open([ 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'Title',['style'=>'font-weight:bold'])}}
    <br><small>Ask any question(Relating to your projects / tasks ) ?</small>
    {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Enter tite..'])}}
</div>
<div class="form-group">
    {{Form::label('catrgory', 'Select a category',['style'=>'font-weight:bold'])}}
    {{Form::select('size', array('1' => 'Education', '2' => 'Planting'), 'Education',['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body' ,['style'=>'font-weight:bold'])}}
    <br><small>Explain your question here .</small>
    {{Form::text('body', '',['class'=>'form-control','id'=>'article','placeholder'=>'Enter Body..'])}}
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
{{Form::submit('Submit request',['class'=>'btn btn-primary'])}}

  </div>
  
{!! Form::close() !!}
    </div>
   
  </div>
</div>
</div>