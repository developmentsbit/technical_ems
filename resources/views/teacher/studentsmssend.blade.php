
@extends('teacher.index')
@section('content')

@php

$department = DB::table("department")->where('show',1)->get();
$semester = DB::table("semester_info")->where('status',1)->get();
$section  = DB::table("section_info")->get();


@endphp


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Search Student</h4><br>
					<div class="basic-form">
						<form method="get" class="row" action="{{ url("searchstudentdata") }}" enctype="multipart/form-data">

							@csrf

							<div class="form-group col-md-3">
								<label>Department:</label>
								<select  name="department_id" class="form-control" required="">
									<option value="">Select Department</option>
									@if(isset($department))
									@foreach($department as $d)

									<option value="{{ $d->id }}">{{ $d->department_name }}</option>

									@endforeach
									@endif
								</select>
							</div>



							<div class="form-group col-md-3">
								<label>Semester:</label>
								<select  name="semester_id" class="form-control" required="">
									<option value="">Select Semester</option>
									@if(isset($semester))
									@foreach($semester as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $data->semester) {
										echo "selected";
									} ?>>{{ $d->semester }}</option>
									@endforeach
									@endif
								</select>
							</div>



							<div class="form-group col-md-3">
								<label>Shift:</label>
								<select  name="shift" class="form-control" required="">
									<option value="1st Shift">First Shift</option>
									<option value="2nd Shift">Second Shift</option>
								</select>
							</div>


							<div class="form-group col-md-3">
								<label>Section:</label>
								<select  name="section_id" class="form-control" required="">
									<option value="">Select Section</option>
									
									@if(isset($section))
									@foreach($section as $d)
									<option value="{{ $d->section_id }}">{{ $d->section }}</option>
									@endforeach
									@endif

								</select>
							</div>





							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-dark">Search Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

    
    



	</div>
</div>

@endsection