@extends('frontend.index')
@section('content')

<div class="container">
    <div class="col-sm-12 col-12 pt-3 pb-5 bg-white">
  

<table class="table table-bordered">
  <tr>
    <td height="48" colspan="4" align="center"> <strong>Job Placement Information</strong></td>
    </tr>

  <tr Style="font-size:18px;">
    <td width="245" height="32"  style='padding-left: 15px;'>Name</td>
    <td width="27" align="center"><strong>:</strong></td>
    <td width="405">&nbsp;{{$showdata->name}}</td>
    <td width="255" rowspan="7">
      <?php
      $path =  base_path().'/public/job_replacement_img/'.$showdata->roll.'.'.$showdata->img;
      ?>
      @if(file_exists($path))
      <img src="{{asset('job_replacement_img')}}/{{$showdata->roll}}.{{$showdata->img}}" >
      @else
      <img src="{{asset('public')}}/noproductimage.jpg" >
      @endif
    </td>
  </tr>

  <tr Style="font-size:18px;">
    <td height="32" style='padding-left: 15px;'>Roll </td>
    <td align="center"><strong>:</strong></td>
    <td>&nbsp;  {{$showdata->roll}}</td>
    </tr>
  <tr Style="font-size:18px;">
    <td height="36" style='padding-left: 15px;'>Session</td>
    <td align="center"><strong>:</strong></td>
    <td>&nbsp; {{$showdata->session}} </td>
    </tr>
  <tr Style="font-size:18px;">
    <td height="32" style='padding-left: 15px;'>Organization</td>
    <td align="center"><strong>:</strong></td>
    <td>&nbsp;{{$showdata->institute}}</td>
    </tr>
  <tr Style="font-size:18px;">
    <td height="31" style='padding-left: 15px;'>Department</td>
    <td align="center"><strong>:</strong></td>
    <td>&nbsp;{{$showdata->department}}</td>
    </tr>
  <tr Style="font-size:18px;">
    <td height="32" style='padding-left: 15px;'>Designation</td>
    <td align="center"><strong>:</strong></td>
    <td>&nbsp;{{$showdata->job_title}} </td>
    </tr>
  <tr Style="font-size:18px;">
    <td height="39" style='padding-left: 15px;'>Phone</td>
    <td align="center"><strong>:</strong></td>
    <td colspan="2">&nbsp;{{$showdata->phone}}</td>
    </tr>
  <tr Style="font-size:18px;">
    <td height="36" style='padding-left: 15px;'>Details</td>
    <td align="center"><strong>:</strong></td>
    <td colspan="2">&nbsp;{{$showdata->details}}</td>
    </tr>
  
</table>
</div>

</div>



<script src="{{asset('public/custom_js/printThis.js')}}"></script>
<script type="text/javascript">
    function printPage(id){
        $('#'+id).printThis();
    }
</script>
@endsection