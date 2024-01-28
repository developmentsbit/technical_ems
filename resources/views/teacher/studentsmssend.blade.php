
@extends('teacher.index')
@section('content')

@php

$department = DB::table("department")->get();
$semester = DB::table("semesters")->where('status',1)->get();
$section  = DB::table("addsection")->get();


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
									<option value="">@lang('studentsms.select_department')</option>
									@if(isset($department))
									@foreach($department as $d)
									<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->department ?: $d->department_name_bn}}@else {{$d->department_name_bn ?: $d->department}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-3">
								<label>Semester:</label>
								<select  name="semester_id" class="form-control" required="">
									<option value="">@lang('notices.select_semester')</option>
									@if(isset($semester))
									@foreach($semester as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $d->semester_name) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $d->semester_name ?: $d->semester_name_bn}}@else {{$d->semester_name_bn ?: $d->semester_name}}@endif</option>
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
									<option value="">@lang('notices.select_section')</option>
									@if(isset($section))
									@foreach($section as $d)
									<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->section_name ?: $d->section_name_bn}}@else {{$d->section_name_bn ?: $d->section_name}}@endif</option>
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