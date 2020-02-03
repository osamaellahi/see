@foreach ($data as $solution)
<div class="card-header">
   <h5 style="">  {{$solution->name}} <i class="fa fa-caret-right"></i> </h5>{!! $solution->sol !!}
</div>
<br>
@endforeach