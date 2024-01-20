@extends('layouts.master')
@section('content')



<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />




<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('add_subject.edittitle')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
            @if (\App\Traits\RolePermissionTrait::checkRoleHasPermission('role', 'create'))
                @slot('action_button1')
                    @lang('common.view')
                @endslot
                @slot('action_button1_link')
                    {{ route('add_subject.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">

		<div class="card">
			<div class="card-body">

				<h3>@lang('add_subject.edittitle')</h3><br>
				<form method="post" class="btn-submit" action="{{ route('add_subject.update',$data->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row myinput">
                    <div class="form-group mb-3 col-md-6">
							<label>@lang('add_subject.subject_serial_no'): </label><span class="text-danger">*</span>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="number" name="serial" id="serial" required  value="{{ $data->serial }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('add_subject.departmentname'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<select class="form-control form-control-sm" name="department_id" id="department_id">
									@if(isset($department))
									@foreach($department as $d)
									<option value="{{ $d->id }}" <?php if ($d->id == $data->department_id) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $d->department }}@else {{$d->department_name_bn}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('add_subject.semestername'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<select class="form-control form-control-sm" name="semester_id" id="semester_id">
									@if(isset($semester))
									@foreach($semester as $s)
									<option value="{{ $s->id }}" <?php if ($s->id == $data->semester_id) {
										echo "selected";
									} ?>>@if($lang == 'en'){{ $s->semester_name }}@else {{$s->semester_name_bn}}@endif</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('add_subject.subject_name_en'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="subject_name" id="subject_name"  required="" value="{{ $data->subject_name }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('add_subject.subject_name_bn'): </label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="subject_name_bn" id="subject_name_bn"  value="{{ $data->subject_name_bn }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('add_subject.subject_code'): </label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="subject_code" id="subject_code"  value="{{ $data->subject_code }}">
							</div>
						</div>
                        <div class="form-group mb-3 col-md-12">
							<label>@lang('add_subject.status'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<select class="form-control form-control-sm" name="status">
									<option @if($data->status == 1) selected @endif value="1">@lang('common.active')</option>
									<option @if($data->status == 2) selected @endif value="2">@lang('common.inactive')</option>
								</select>
							</div>
						</div>
						<div class="modal-footer border-0">
							<button type="submit" class="btn btn-success button border-0">@lang('common.update')</button>
						</div>
					</div>
				</form>
			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>



<script src="{{ asset('assets/js/vendor/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/demo.quilljs.js') }}"></script>



@endsection

