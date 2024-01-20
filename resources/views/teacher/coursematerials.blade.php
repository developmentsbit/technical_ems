
@extends('teacher.index')
@section('content')

@php

$department = DB::table("department")->get();
$semester = DB::table("semesters")->where('status',1)->get();
$section  = DB::table("addsection")->get();
$subject = DB::table("subject_info")
->join('subject_priority','subject_priority.subject_id','subject_info.id')
->select('subject_info.*','subject_priority.teacher_id')
->where("subject_priority.teacher_id",Auth('teacher')->user()->id)
->get();

@endphp


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">@lang('teacher.addtitle')</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("insertcoursematerials") }}" enctype="multipart/form-data">
							@csrf
							<div class="form-group col-md-4">
								<label>@lang('common.date') :<span class="text-danger" style="font-size: 15px;">*</span></label>
								<input type="date" class="form-control" name="date" required="">
							</div>
							<div class="form-group col-md-4">
								<label>@lang('teacher.departname') :</label>
								<select  name="department_id" class="form-control" required="">
									<option value="">@lang('teacher.select_department')</option>
									@if(isset($department))
									@foreach($department as $d)
									<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->department ?: $d->department_name_bn}}@else {{$d->department_name_bn ?: $d->department}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('teacher.semester') :</label>
								<select  name="semester_id" class="form-control" required="">
									<option value="">@lang('teacher.select_semester')</option>
									@if(isset($semester))
									@foreach($semester as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $d->semester_name) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $d->semester_name ?: $d->semester_name_bn}}@else {{$d->semester_name_bn ?: $d->semester_name}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('teacher.shift') :</label>
								<select  name="type" class="form-control" required="">
									<option value="1">First Shift</option>
									<option value="2">Second Shift</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('teacher.section') :</label>
								<select  name="section_id" class="form-control" required="">
									<option value="">@lang('teacher.select_section')</option>
									@if(isset($section))
									@foreach($section as $d)
									<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->section_name ?: $d->section_name_bn}}@else {{$d->section_name_bn ?: $d->section_name}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('teacher.subjectname') :</label>
								<select  name="subject_id" class="form-control" required="">
									<option value="">@lang('teacher.select_subject')</option>
									@if(isset($subject))
									@foreach($subject as $d)
									<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->subject_name ?: $d->subject_name_bn}}@else{{$d->subject_name_bn ?: $d->subject_name}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-6">
								<label>@lang('teacher.title_en') :</label>
								<input type="text" name="title" class="form-control" required="">
							</div>
							<div class="form-group col-md-6">
								<label>@lang('teacher.title_bn') :</label>
								<input type="text" name="title_bn" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<label>@lang('teacher.details_en') :</label>
								<textarea id="summernote"  class="form-control w-100" rows="10" type="text" name="details" ></textarea>
							</div>
							<div class="form-group col-md-6">
								<label>@lang('teacher.details_bn') :</label>
								<textarea id="summernote1"  class="form-control w-100" rows="10" type="text" name="details_bn" ></textarea>
							</div>
							<div class="form-group col-md-12">
								<label>@lang('teacher.file') :</label>
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-dark">@lang('common.save')</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection