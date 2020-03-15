@extends('layouts.app')
@section('content')
@include('in.leftside')

<div class="" style="margin-left:1%;margin-top:0%;margin-right:
1%;display:inline-block;background:azure;border:1px solid aquamarine;width:97%;height:100%">
<div class="card" id="contacts" style="float:left;display:inline-block;box-shadow:0px 0px;
width:100%;">
    
<?php
$allcont=App\User::all();
?>
<input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<div style="overflow-y:scroll;height:450px;">
<table id="myTable" class="table" >
  
@if (count($allcont)>0)
    
  @foreach ($allcont as $con)
  @if ($con->id!=auth()->user()->id)
  <tr>
    
  <td  style="width:100%" ><a href="/see/public/message/{{$con->id}}"  style="width:100%">{{$con->name}}</a></td>
  </tr>
  
  
  @endif
  @endforeach 
@else
    <p>no contact!!</p>
@endif
</table>
</div>

</div>

</div>
    
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
    </script>
@endsection