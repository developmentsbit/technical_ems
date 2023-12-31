@extends('layouts.master')
@section('content')



<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />


<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('semester.edittitle')
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
                    {{ route('semester.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">

		<div class="card">
			<div class="card-body">
				<h3>@lang('semester.edittitle')</h3><br>
				<form method="post" class="btn-submit" action="{{ route('semester.update',$data->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row myinput">
						<div class="form-group mb-3 col-md-6">
							<label>@lang('semester.name_en'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="semester_name" id="semester_name"  required="" value="{{ $data->semester_name }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('semester.name_bn'): </label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="semester_name_bn" id="semester_name_bn"  value="{{ $data->semester_name_bn }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('semester.status'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<select class="form-control" name="status">
									@if($data->status == 1)
									<option value="1">@lang('common.active')</option>
									<option value="2">@lang('common.inactive')</option>
									@else
									<option value="2">@lang('common.inactive')</option>
									<option value="1">@lang('common.active')</option>
									@endif
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

