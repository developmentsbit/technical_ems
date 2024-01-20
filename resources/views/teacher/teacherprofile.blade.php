
@extends('teacher.index')
@section('content')


@php
$data = DB::table("teacherstaff")->where('id',Auth('teacher')->user()->id)->first();
$department = DB::table("department")->get();
@endphp




<div class="content-body">

 <div class="container-fluid mt-3">



  <div class="bg-white p-5">

   <h2>My Profile Update</h2><hr><br>
   <form method="post" class="row" action="{{ url('/updateteacherdashboard') }}/{{$data->id}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group col-md-3">
     <label >SL No.</label>
     <input type="text" readonly="" name="sl"  placeholder="Ex:1" class="form-control" required="" value="{{$data->sl}}">
</div>

<div class="form-group col-md-6">
     <label >Teacher Name</label>
     <input type="text" name="name" placeholder="Teacher Name" class="form-control" required="" value="{{$data->name}}">
</div>


<div class="form-group col-md-3">
     <label >Type</label>
     <select disabled="" class="form-control" required>
          @if($data->type == 1)
          <option value="1">@lang('teacherstaff.teacher')</option>
          <option value="2">@lang('teacherstaff.staff')</option>
          <option value="3">@lang('teacherstaff.department_head')</option>
          @elseif($data->type == 2)
          <option value="2">@lang('teacherstaff.staff')</option>
          <option value="1">@lang('teacherstaff.teacher')</option>
          <option value="3">@lang('teacherstaff.department_head')</option>
          @elseif($data->type == 3)
          <option value="3">@lang('teacherstaff.department_head')</option>
          <option value="1">@lang('teacherstaff.teacher')</option>
          <option value="2">@lang('teacherstaff.staff')</option>
          @else
          <option value="1">@lang('teacherstaff.teacher')</option>
          <option value="2">@lang('teacherstaff.staff')</option>
          <option value="3">@lang('teacherstaff.department_head')</option>
          @endif
     </select>
</div>
<div class="form-group col-md-3">
     <label >Department</label>
     <select disabled="" name="department_id" class="form-control" required="">
          @if(isset($department))
          @foreach($department as $d)
          <option value="{{ $d->id }}" <?php if ($d->id == $d->department) {echo "selected";} ?>>{{ $d->department }}</option>
          @endforeach
          @endif
     </select>
</div>


<div class="form-group col-md-3">
     <label >Designation</label>
     <input type="text" name="designation" placeholder="Designation" class="form-control"   value="{{$data->designation}}">
</div>

<div class="form-group col-md-3">
     <label >Father's Name</label>
     <input type="text" name="father_name" placeholder="Father's Name" class="form-control"  value="{{$data->father_name}}">
</div>



<div class="form-group col-md-3">
     <label >Mother's Name</label>
     <input type="text" name="mother_name" placeholder="Mother's Name" class="form-control"  value="{{$data->mother_name}}">
</div>



<div class="form-group col-md-4">
     <label >Mobile</label>
     <input type="number" min="11" name="mobile" placeholder="Mobile" class="form-control"   value="{{$data->mobile}}">
</div>


<div class="form-group col-md-4">
     <label >Email</label>
     <input type="email" name="email" placeholder="Email" class="form-control"  value="{{$data->email}}">
</div>


<div class="form-group col-md-4">
     <label >Date Of Birth</label>
     <input type="text" name="dob"  class="form-control"   value="{{$data->dob}}">
</div>

<div class="form-group col-md-3">
     <label >Blood Group</label>
     <input type="text" name="blood" placeholder="Ex:A+" class="form-control" value="{{$data->blood}}">
</div>

<div class="form-group col-md-3">
     <label >Religion</label>
     <input type="text" name="religion" placeholder="Religion" class="form-control"  value="{{$data->religion}}">
</div>



<div class="form-group col-md-6">
     <label >Gender</label>
     <select name="gender" class="form-control">
          @if($data->gender == 'Male')
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          @elseif($data->gender == 'Female')
          <option value="Female">Female</option>
          <option value="Male">Male</option>
          @else
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          @endif
     </select>
</div>


<div class="form-group col-md-6">
     <label >Present Address</label>
     <textarea name="present_address" placeholder="Present Address" rows="5" class="form-control" > {!! $data->present_address !!}</textarea>
</div>



<div class="form-group col-md-6">
     <label >Parmanent Address</label>
     <textarea name="parmanent_address" placeholder="Parmanent Address" rows="5" class="form-control" >{!! $data->parmanent_address !!}</textarea>
</div>

<div class="input-group mt-3 col-md-12">
     <div class="custom-file">
      <input type="file" class="custom-file-input" type="file" id="file" name="image" onchange="readURL(this);" accept="image" >
      <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
</div>
</div>

<img src="{{ url($data->image) }}" id="one" class="img-fluid" alt="" style="height: 100px;">
<br>

<div class="form-group col-md-12">
     <label >Password</label>
     <input type="text" name="password"  class="form-control"   value="{{$data->show_password}}">
</div>


<div class="input-group mt-3 col-md-12">
     <input type="submit" value="Update Information" class="btn btn-success">
</div>
</form>
</div>



</div>

</div>

@endsection
