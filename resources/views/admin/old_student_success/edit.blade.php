@extends('layouts.master')
@section('content')



<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />




<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('alumni_success.edittitle')
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
                    {{ route('old_student_success.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">

		<div class="card">
			<div class="card-body">

				<h3>@lang('alumni_success.edittitle')</h3><br>
				<form method="post" class="btn-submit" action="{{ route('old_student_success.update',$data->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row myinput">
						<div class="form-group mb-3 col-md-12">
							<label>@lang('alumni_success.date'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control" type="date" name="date" id="date"  required="" value="{{ $data->date }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('alumni_success.title_en'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="title" id="title"  required="" value="{{ $data->title }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('alumni_success.title_bn'): </label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="title_bn" id="title_bn"  value="{{ $data->title_bn }}">
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('alumni_success.details'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<textarea id="summernote"  class="form-control w-100" rows="10" type="text" name="details" required="">{{ $data->details }}</textarea>
							</div>
						</div>
						<div class="form-group mb-3 col-md-6">
							<label>@lang('alumni_success.details_bn'):</label>
							<div class="input-group mt-2">
								<textarea id="summernote1"  class="form-control w-100" rows="10" type="text" name="details_bn" >{{ $data->details_bn }}</textarea>
							</div>
						</div>
						<div class="form-group mb-3 col-md-12">
							<label>@lang('alumni_success.image'):</label>
							<div class="input-group mt-2">
								<input class="form-control" type="file" name="image" id="image">
								<br>
							</div>
							<a href="{{ asset($data->image) }}" download="" class="btn btn-info">@lang('alumni_success.download')</a>
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

