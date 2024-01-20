


@extends('teacher.index')
@section('content')
<div class="content-body">
	<div class="container-fluid mt-3">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">@lang('notices.managetitle')</h4>
					<div class="table-responsive">
						<table class="table table-striped table-bordered zero-configuration">
							<thead>
								<tr>
									<th>@lang('common.date')</th>
									<th>@lang('teacher.department_info')</th>
									<th>@lang('teacher.subjectname')</th>
									<th>@lang('teacher.title')</th>
									<th>@lang('teacher.file')</th>
									<th>@lang('common.action')</th>
								</tr>
							</thead>
							<tbody>

								@if(isset($data))
								@foreach($data as $d)
								<tr>
									<td>{{ $d->date }}</td>
									<td>
										Department-- <span class="text-success">@if($lang == 'en'){{ $d->department ?: $d->department_name_bn}}@else {{$d->department_name_bn ?: $d->department}}@endif</span><br>
										Semester-- <span class="text-success">@if($lang == 'en'){{ $d->semester_name ?: $d->semester_name_bn}}@else {{$d->semester_name_bn ?: $d->semester_name}}@endif</span><br>
										Section-- <span class="text-success">@if($lang == 'en'){{ $d->section_name ?: $d->section_name_bn}}@else {{$d->section_name_bn ?: $d->section_name}}@endif</span><br>
										Shift-- <span class="text-success">
											@if($d->type == 1)
											<span>1st Shift</span>
											@endif
											@if($d->type == 2)
											<span>2nd Shift</span>
											@endif</span>
									</td>
									<td>@if($lang == 'en'){{ $d->subject_name ?: $d->subject_name_bn}}@else{{$d->subject_name_bn ?: $d->subject_name}}@endif</td>
									<td>@if($lang == 'en'){{ $d->title ?: $d->title_bn}}@else{{$d->title_bn ?: $d->title}}@endif</td>
									<td><a href="{{ url($d->image) }}" download="" class="btn btn-success btn-sm">Download</a></td>
									<td><a onclick="return confirm('Are you sure?')" href="{{ url("deletet_notice/".$d->id) }}" class="btn btn-danger btn-sm">Delete</a>
									<a href="{{ url("editt_notice/".$d->id) }}" class="btn btn-info btn-sm">Edit</a>
								</td>
								</tr>

								@endforeach
								@endif

							</table>
						</div>
					</div>
				</div>
			</div>

		</div>


		@endsection









