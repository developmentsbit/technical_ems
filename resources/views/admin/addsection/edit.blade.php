@extends('layouts.master')
@section('content')



<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />




<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('addsection.addtitle')
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
                    {{ route('addsection.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h3>@lang('addsection.addtitle')</h3><br>
				<form method="post" class="btn-submit" action="{{ route('addsection.update',$data->id) }}" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
					<div class="row myinput">
						<div class="form-group mb-3 col-md-6">
							<label>@lang('addsection.name'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="section_name" id="section_name" required="" value="{{$data->section_name}}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('addsection.section_name_bn'): </label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="section_name_bn" id="section_name_bn" value="{{$data->section_name_bn}}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('addsection.status'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<select class="form-control" name="status">
									<option @if($data->status == 1) selected @endif value="1">@lang('common.active')</option>
									<option @if($data->status == 2) selected @endif value="2">@lang('common.inactive')</option>
								</select>
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

