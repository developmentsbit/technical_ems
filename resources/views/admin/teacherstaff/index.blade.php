@extends('layouts.master')
@section('content')

@push('header_styles')
<!-- third party css -->
<link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<!-- third party css end -->

@endpush


<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('teacherstaff.viewtitle')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
            @if (\App\Traits\RolePermissionTrait::checkRoleHasPermission('role', 'create'))
                @slot('action_button1')
                    @lang('common.add_new')
                @endslot
                @slot('action_button1_link')
                    {{ route('teacherstaff.create') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h3>@lang('teacherstaff.managetitle')</h3><br>
				<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
					<thead class="mythead">
						<tr>
							<th>#</th>
							<th>@lang('teacherstaff.department')</th>
							<th>@lang('teacherstaff.name')</th>
							<th>@lang('teacherstaff.email')</th>
							<th>@lang('teacherstaff.mobile')</th>
							<th>@lang('teacherstaff.shift')</th>
							<th>@lang('teacherstaff.type')</th>
							<th>@lang('common.image')</th>
							<th>@lang('common.action')</th>
						</tr>
					</thead>
					<tbody class="tbody" id="showtdata">
						@php $i=1;  @endphp
						@if(isset($data))
						@foreach($data as $d)
						<tr id="tr{{ $d->id }}">
							<td>{{ $i++ }}</td>
							<td>{{ $d->department }}</td>
							<td>{{ $d->name }}</td>
							<td>{{ $d->email }}</td>
							<td>{{ $d->mobile }}</td>
							<td>
								@if($d->shift == 1)
								<span>1st Shift</span>
								@endif
								@if($d->shift == 2)
								<span>2nd Shift</span>
								@endif
							</td>
							<td>
								@if($d->type == 1)
								<span>@lang('teacherstaff.teacher')</span>
								@endif
								@if($d->type == 2)
								<span>@lang('teacherstaff.staff')</span>
								@endif
								@if($d->type == 3)
								<span>@lang('teacherstaff.department_head')</span>
								@endif
							</td>
							<td><img src="{{ asset($d->image) }}" style="max-height: 50px;"></td>
							<td>
								<div class="btn-group">
									<a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="{{ route("teacherstaff.edit",$d->id) }}">@lang('common.edit')</a>
									<form action="{{ route('teacherstaff.destroy',$d->id) }}" method="post">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onClick="return confirm('Are You Sure?')">@lang('common.delete')</button>
									</form>
								</div>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>










@push('footer_scripts')
<!-- third party js -->
<script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
<!-- end demo js-->


@endpush

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
	@if(Session::has('message'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true
	}
	toastr.success("{{ session('message') }}");
	@endif

	@if(Session::has('error'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true
	}
	toastr.error("{{ session('error') }}");
	@endif

	@if(Session::has('info'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true
	}
	toastr.info("{{ session('info') }}");
	@endif

	@if(Session::has('warning'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true
	}
	toastr.warning("{{ session('warning') }}");
	@endif
</script>





@endsection
