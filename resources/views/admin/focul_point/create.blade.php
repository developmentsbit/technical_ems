@extends('layouts.master')
@section('content')

<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />


<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('focul_point.addtitle')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
            @if (\App\Traits\RolePermissionTrait::checkRoleHasPermission('role', 'create'))
                @slot('action_button1')
                  <i class="fa fa-eye"></i>  @lang('common.view')
                @endslot
                @slot('action_button1_link')
                    {{ route('focul_point.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">

		<div class="card">
			<div class="card-body">
				<h3>@lang('focul_point.addtitle')</h3><br>
				<form method="post" class="btn-submit" action="{{ route('focul_point.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="row myinput">
						<div class="form-group mb-3 col-md-4">
							<label>@lang('focul_point.name'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="name" id="name"  required="">
							</div>
						</div>
						<div class="form-group mb-3 col-md-4">
							<label>@lang('focul_point.designation'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="designation" id="designation" required="">
							</div>
						</div>
						<div class="form-group mb-3 col-md-4">
							<label>@lang('focul_point.duration'): </label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="duration" id="duration" >
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('focul_point.father'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="father_name" id="father_name" >
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('focul_point.mother'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="mother_name" id="mother_name" >
							</div>
						</div>
						<div class="form-group mb-3 col-md-4">
							<label>@lang('focul_point.phone'): </label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="phone" id="phone">
							</div>
						</div>
						<div class="form-group mb-3 col-md-4">
							<label>@lang('focul_point.mobile'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="mobile" id="mobile"  required="">
							</div>
						</div>
						<div class="form-group mb-3 col-md-4">
							<label>@lang('focul_point.email'):</label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="text" name="email" id="email" >
							</div>
						</div>
						<div class="form-group mb-3 col-md-12">
							<label>@lang('focul_point.address'): </label>
							<div class="input-group mt-2">
								<textarea  class="form-control form-control-sm w-100" rows="5" type="text" name="address"></textarea>
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('focul_point.status'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<select class="form-control form-control-sm" name="status">
                                    <option value="1">@lang('common.active')</option>
									<option value="2">@lang('common.inactive')</option>
								</select>
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('focul_point.image'):</label>
							<div class="input-group mt-2">
								<input class="form-control form-control-sm" type="file" name="image" id="image">
							</div>
						</div>
						<div class="modal-footer border-0">
							<button type="button" class="btn btn-secondary border-0" onClick="window.location.reload();">@lang('common.close')</button>
							<button type="submit" class="btn btn-success button border-0">@lang('common.save')</button>
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

