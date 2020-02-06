<button type="button" style="float:right;" class="btn btn-outline-success"  data-toggle="modal" data-target="#basicExampleModal3" style="float:right">
    Delete request <i class="fa fa-trash" aria-hidden="true"></i></button>
<!---------- Modal------------------->
<div class="modal fade " id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel" style="color:red;">  Are you sure !!!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <?php
        foreach($sp as $it)
        {
            if($it->user_id==auth()->user()->id)
            {
                $solutionP=$it->id;
            }
        }
        $ref=App\reference::all();
        ?>
        @foreach ($ref as $it)
        @if($solutionP==($it->soloution_provider))
        {!! Form::open(['action' => ['SproviderController@destroy', $it->id] ,'method' => 'POST']) !!}
  {{Form::hidden('_method','DELETE')}}
  <p style="">Your request of applying to Solution Provider will be removed.<hr />You will always has option to apply in future</p>  
    {{Form::text('sol_id',$solutionP,['style'=>'display:none;'])}}
<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">No</button>
{{Form::submit('Yes',['class'=>'btn btn-outline-success'])}}
  </div>
  
{!! Form::close() !!}
@endif
@endforeach
    </div>
   
  </div>
</div>
</div>
<!------------------------------------------------------------>