
@extends('teacher.index')
@section('content')

@php

$department = DB::table("add_department")->where('show',1)->get();
$semester = DB::table("semester_info")->where('status',1)->get();
$section  = DB::table("section_info")->get();
$subject = DB::table("subject_info")
->join('subject_priority','subject_priority.subject_id','subject_info.id')
->select('subject_info.*','subject_priority.admin_id')
->where("subject_priority.admin_id",Auth('teacher')->user()->id)
->get();


@endphp


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Edit Course Materials</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("updatcoursematerials/".$data->id) }}" enctype="multipart/form-data">

							@csrf

							<div class="form-group col-md-4">
								<label>Department:</label>
								<select  name="department_id" class="form-control" required="">
									<option value="">Select Department</option>
									@if(isset($department))
									@foreach($department as $d)

									<option value="{{ $d->dpt_id }}" <?php if ($d->dpt_id == $data->department_id) {
										echo "selected";
									} ?>>{{ $d->department_name }}</option>

									@endforeach
									@endif
								</select>
							</div>



							<div class="form-group col-md-4">
								<label>Semester:</label>
								<select  name="semester_id" class="form-control" required="">
									<option value="">Select Semester</option>
									@if(isset($semester))
									@foreach($semester as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $data->semester_id) {
										echo "selected";
									} ?>>{{ $d->semester }}</option>
									@endforeach
									@endif
								</select>
							</div>



							
							<div class="form-group col-md-4">
								<label>Shift:</label>
								<select  name="shift" class="form-control" required="">
									@if($data->shift == "1st Shift")
									<option value="1st Shift">First Shift</option>
									<option value="2nd Shift">Second Shift</option>
									@else
									<option value="2nd Shift">Second Shift</option>
									<option value="1st Shift">First Shift</option>
									
									@endif
								</select>
							</div>


							<div class="form-group col-md-4">
								<label>Section:</label>
								<select  name="section_id" class="form-control" required="">
									<option value="">Select Section</option>
									
									@if(isset($section))
									@foreach($section as $d)
									<option value="{{ $d->section_id }}" <?php if ($d->section_id == $data->section_id) {
										echo "selected";
									} ?>>{{ $d->section }}</option>
									@endforeach
									@endif

								</select>
							</div>


							<div class="form-group col-md-4">
								<label>Subject:</label>
								<select  name="subject_id" class="form-control" required="">
									<option value="">Select Subject</option>
									
									@if(isset($subject))
									@foreach($subject as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $data->subject_id) {
										echo "selected";
									} ?>>{{ $d->subName }}</option>
									@endforeach
									@endif

								</select>
							</div>



							<div class="form-group col-md-12">
								<label>Title:</label>
								<input type="text" name="title" class="form-control" required="" value="{{ $data->title  }}">
							</div>

							<div class="form-group col-md-12">
								<label>Details:</label>
								<textarea class="form-control summernote" name="details">{{ $data->details }}</textarea>
								
							</div>

							<div class="form-group col-md-12">
								<label>File:</label>
								<input type="file" name="image" class="form-control">
								<a href="{{ url($data->image) }}" download="" class="btn btn-warning">Download File</a>
								<input type="hidden" value="{{$data->image }}" name="old_image">
							</div>



							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-dark">Update Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>







	</div>
</div>

@endsection