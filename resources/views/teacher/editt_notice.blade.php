
@extends('teacher.index')
@section('content')

@php

$department = DB::table("department")->get();
$semester = DB::table("semesters")->get();
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
					<h4 class="card-title">@lang('notices.edittitle')</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("updatet_notice/".$data->id) }}" enctype="multipart/form-data">
							@csrf
							<div class="form-group col-md-4">
								<label>@lang('common.date') :<span class="text-danger" style="font-size: 15px;">*</span></label>
								<input class="form-control" type="date" name="date" id="date"  required="" value="{{ $data->date }}">
							</div>
							<div class="form-group col-md-4">
								<label>@lang('notices.departname') :</label>
								<select  name="department_id" class="form-control" required="">
									<option value="">@lang('notices.select_department')</option>
									@if(isset($department))
									@foreach($department as $d)

									<option value="{{ $d->id }}" <?php if ($d->id == $data->department_id) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $d->department ?: $d->department_name_bn}}@else {{$d->department_name_bn ?: $d->department}}@endif</option>

									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('notices.semester') :</label>
								<select  name="semester_id" class="form-control" required="">
									<option value="">@lang('notices.select_semester')</option>
									@if(isset($semester))
									@foreach($semester as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $data->semester_id) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $d->semester_name ?: $d->semester_name_bn}}@else {{$d->semester_name_bn ?: $d->semester_name}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('notices.shift') :</label>
								<select  name="type" class="form-control" required="">
									@if($data->type == "1")
									<option value="1">First Shift</option>
									<option value="2">Second Shift</option>
									@else
									<option value="2">Second Shift</option>
									<option value="1">First Shift</option>
									@endif
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('notices.section') :</label>
								<select  name="section_id" class="form-control" required="">
									<option value="">@lang('notices.select_section')</option>
									@if(isset($section))
									@foreach($section as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $data->section_id) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $d->section_name ?: $d->section_name_bn}}@else {{$d->section_name_bn ?: $d->section_name}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>@lang('notices.subjectname') :</label>
								<select  name="subject_id" class="form-control" required="">
									<option value="">@lang('notices.select_subject')</option>
									@if(isset($subject))
									@foreach($subject as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $data->subject_id) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $d->subject_name ?: $d->subject_name_bn}}@else{{$d->subject_name_bn ?: $d->subject_name}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-6">
								<label>@lang('notices.title_en') :</label>
								<input type="text" name="title" class="form-control" required="" value="{{ $data->title }}">
							</div>
							<div class="form-group col-md-6">
								<label>@lang('notices.title_bn') :</label>
								<input type="text" name="title_bn" class="form-control" value="{{ $data->title_bn }}">
							</div>
							<div class="form-group col-md-6">
								<label>@lang('notices.details_en') :</label>
								<textarea id="summernote"  class="form-control w-100" rows="10" type="text" name="details" >{{ $data->details }}</textarea>
							</div>
							<div class="form-group col-md-6">
								<label>@lang('notices.details_bn') :</label>
								<textarea id="summernote1"  class="form-control w-100" rows="10" type="text" name="details_bn" >{{ $data->details_bn }}</textarea>
							</div>
							<div class="form-group col-md-12">
								<label>@lang('notices.file') :</label>
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