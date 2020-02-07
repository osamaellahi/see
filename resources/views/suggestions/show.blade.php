@foreach ($data[0] as $sugg)
@if (($data[1]->id)==($sugg->post_id))
    

<div style="margin-bottom:4px;padding:2px;background:lightblue;margin-left:5px;1px solid lightblue;border-radius:2px;float:left;width:auto;display:inline-block;">
 
 <button class="btn btn-default" style="padding:0%;color:blueviolet" data-toggle="tooltipnow" title="{{$sugg->suggest}} by {{$sugg->name}}">
  <small >
  {{ substr(strip_tags($sugg->suggest) ,0,70)  }}{{ strlen($sugg->suggest)>70 ? " ... ":"" }}
  </small>                
 </button>
</div>

@endif
@endforeach
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltipnow"]').tooltip();
  });
</script>
