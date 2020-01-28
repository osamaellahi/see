@foreach ($data[0] as $sugg)
@if (($data[1]->id)==($sugg->post_id))
    

<div style="margin-bottom:4px;padding:2px;background:lightblue;margin-left:5px;1px solid lightblue;border-radius:2px;float:left;width:auto;display:inline-block;">
 
 <a href="" data-toggle="tooltipnow" title="{{$sugg->name}}" style="margin-bottom:0%;">{{ $sugg->suggest }}</a>
 <script>
     $(document).ready(function(){
       $('[data-toggle="tooltipnow"]').tooltip();
     });
     </script>
</div>
@endif
@endforeach
