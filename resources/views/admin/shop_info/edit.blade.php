@extends('layouts.master')
@section('content')



<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />




<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('shop_info.edittitle')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
            @if (\App\Traits\RolePermissionTrait::checkRoleHasPermission('role', 'create'))
				@slot('action_button1')
                  <i class="fa fa-eye"></i> @lang('common.view')
                @endslot
                @slot('action_button1_link')
                    {{ route('shop_info.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h3>@lang('shop_info.edittitle')</h3><br>
				<form method="post" class="btn-submit" action="{{ route('shop_info.update',$data->id) }}" enctype="multipart/form-data">
					@csrf
					<div class="row myinput">
						<div class="form-group col-sm-12 col-md-12 col-lg-12 mt-2">
							<label>@lang('teacherstaff.department'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group mt-2">
								<select class="form-control" name="department_id" id="department_id">
                                    <option value="">@lang("common.select_one")</option>
									@if(isset($department))
									@foreach($department as $c)
									<option @if($data->department_id == $c->id) selected @endif value="{{ $c->id }}" @php $c->id == $data->department_id ?  "selected" : '' @endphp>{{ $c->department }}</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-group col-sm-12 col-md-12 col-lg-6 mt-2">
							<label>@lang('shop_info.title_en'): </label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="title" id="title" value="{{ $data->title }}">
							</div>
						</div>
						<div class="form-group col-sm-12 col-md-12 col-lg-6 mt-2">
							<label>@lang('shop_info.title_bn'): </label>
							<div class="input-group mt-2">
								<input class="form-control" type="text" name="title_bn" id="title_bn" value="{{ $data->title_bn }}">
							</div>
						</div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-2">
                            <label>@lang('shop_info.details'): </label>
							<div class="input-group mt-2">
                                <textarea id="summernote"  class="form-control form-control-sm w-100" rows="10" type="text" name="details">{{ $data->details }}</textarea>
							</div>
						</div>
						<div class="form-group col-sm-12 col-md-12 col-lg-6 mt-2">
                            <label>@lang('shop_info.details_bn'): </label>
							<div class="input-group mt-2">
                                <textarea id="summernote1"  class="form-control form-control-sm w-100" rows="10" type="text" name="details_bn">{{ $data->details_bn }}</textarea>
							</div>
						</div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 mt-2">
							<label>@lang('common.image'):</label>
							<div class="input-group -mt-2">
								<input class="form-control" type="file" name="image" id="image">
								<br>
							</div>
							<img src="{{ asset($data->image) }}" style="max-height: 100px;">
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

