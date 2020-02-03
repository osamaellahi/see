<script src="https://cdn.tiny.cloud/1/nt87b1kaammkt1auagr3fmrxdcuva64srnq71p7t72ttwhip/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins:'link code',
        plugins:'table',
    auto_focus : "elm1",
    
      });
    </script>
          <div style="margin:0%">
{!! Form::open(['action' => 'SolutionsController@store' , 'method' => 'POST']) !!}

        {{Form::text('post_id', $post->id,['style'=>'display:none;'])}}
    <div class="form-group">
        <br><small>Explain your solution here .</small>
        {{Form::textarea('solution', '',['class'=>'form-control','rows'=>'18','id'=>'article','placeholder'=>'Enter Body..'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!}

</div>