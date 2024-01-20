@extends('layouts.master')
@section('content')
<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />
<div class="container mt-2">
		@component('components.breadcrumb')
            @slot('title')
                @lang('subjectpriority.addtitle')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form method="post" class="btn-submit" action="{{ route('subjectpriority.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="row myinput">
                        <div class="col-lg-4 col-md-4 col-12" style="border-right: 1px solid lightgray;">
                            <div class="row myinput">
                                <div class="form-group mb-3 col-md-12">
                                    <label>@lang('subjectpriority.departname'): <span class="text-danger" style="font-size: 15px;">*</span></label>
                                    <div class="input-group mt-2">
										<select class="form-control" name="department_id" id="department_id" required="" onchange="getteacher();">
											<option value="">@lang("common.select_one")</option>
											@if(isset($department))
											@foreach($department as $d)
											<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->department ?: $d->department_name_bn}}@else {{$d->department_name_bn ?: $d->department}}@endif</option>
											@endforeach
											@endif
										</select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <label>@lang('subjectpriority.teachername'):</label>
                                    <div class="input-group mt-2">
										<select class="form-control" name="teacher_id" id="teacher_id" required="" onchange="showsubjectpriority()">
											<option>@lang("common.select_one")</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <label>@lang('subjectpriority.semester'):</label>
                                    <div class="input-group mt-2">
										<select class="form-control" name="semester_id" id="semester_id" onchange="getsemester();">
											@if(isset($semester))
											@foreach($semester as $d)
											<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->semester_name ?: $d->semester_name_bn}}@else {{$d->semester_name_bn ?: $d->semester_name}}@endif</option>
											@endforeach
											@endif
										</select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <label>@lang('subjectpriority.section'):</label>
                                    <div class="input-group mt-2">
										<select class="form-control" name="section_id" id="section_id">
											@if(isset($section))
											@foreach($section as $d)
											<option value="{{ $d->id }}">@if($lang == 'en'){{ $d->section_name ?: $d->section_name_bn}}@else {{$d->section_name_bn ?: $d->section_name}}@endif</option>
											@endforeach
											@endif
										</select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <label>@lang('subjectpriority.shift'):</label>
                                    <div class="input-group mt-2">
										<select class="form-control" name="shift" id="shift">
											<option value="1st Shift">First Shift</option>
											<option value="2nd Shift">Second Shift</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <label>@lang('subjectpriority.subjectname'):</label>
                                    <div class="input-group mt-2">
										<select class="form-control" name="subject_id" id="subject_id">
											<option value="">@lang("common.select_one")</option>

										</select>
                                    </div>
                                </div>
								<div class="modal-footer border-0">
									<button type="submit" class="btn btn-success button border-0">@lang('common.save')</button>
								</div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="card">
							<h4 class="font-weight-bold">@lang('subjectpriority.viewtitle')</h4><hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <div id="showsubjectpriority"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</form>
			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>



<script src="{{ asset('assets/js/vendor/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/demo.quilljs.js') }}"></script>


<script type="text/javascript">
	function getteacher(){
		let department_id = $("#department_id").val();
		$.ajax({
			url: "{{ url('getteacher') }}/"+department_id,
			type: 'get',
			data:{},
			success: function (data)
			{
				$("#teacher_id").html(data);
				getsubject();
			},
			error:function(errors){
				alert("Error")
			}
		});

	}


	function getsubject(){
		let department_id = $("#department_id").val();
		let semester_id = $("#semester_id").val();
		$.ajax({
			url: "{{ url('getsubject') }}",
			type: 'get',
			data:{department_id:department_id,semester_id:semester_id},
			success: function (data)
			{
				$("#subject_id").html(data);
				

			},
			error:function(errors){
				alert("Error")
			}
		});

	}


	function getsemester(){

		let department_id = $("#department_id").val();
		let semester_id = $("#semester_id").val();
		$.ajax({
			url: "{{ url('getsubject') }}",
			type: 'get',
			data:{department_id:department_id,semester_id:semester_id},
			success: function (data)
			{
				$("#subject_id").html(data);
				

			},
			error:function(errors){
				alert("Error")
			}
		});

	}



	function getsemester(){

		let department_id = $("#department_id").val();
		let semester_id = $("#semester_id").val();
		$.ajax({
			url: "{{ url('getsubject') }}",
			type: 'get',
			data:{department_id:department_id,semester_id:semester_id},
			success: function (data)
			{
				$("#subject_id").html(data);
			},
			error:function(errors){
				alert("Error")
			}
		});

	}




	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.loading').hide();
	$(".btn-submit").submit(function(e){
		e.preventDefault();
		var data = $(this).serialize();

		$.ajax({
			url:'{{ url('insertsubjectpiority') }}',
			method:'POST',
			data:data,

			beforeSend:function(response) { 
				$('.loading').show();
				$('.button').hide();

			},

			success:function(response){

				$('#subject_id').val('');
				$('.loading').hide();
				$('.button').show();

				UIkit.notification({
					message: 'Subject Priority Added Done',
					status: 'primary',
					pos: 'bottom-center',
					timeout: 2000
				});

				showsubjectpriority();
				


			},

			error:function(error){

				alert("Already Added Subject Priority");
				$('.loading').hide();
				$('.button').show();
				
			}
		});
	});



	function showsubjectpriority(){

		let teacher_id = $("#teacher_id").val();
		$.ajax({
			url: "{{ url('showsubjectpriority') }}/"+teacher_id,
			type: 'get',
			data:{},
			success: function (data)
			{
				$("#showsubjectpriority").html(data);
			},
			error:function(errors){
				alert("Error")
			}
		});

	}


	function deletesubjectpriority(id){

		if (confirm("Are You Sure?")) {
			$.ajax(
			{
				url: "{{ url('deletesubjectpriority') }}/"+id,
				type: 'get',
				success: function()
				{
					$('#tr'+id).hide();
					showsubjectpriority();


					UIkit.notification({
						message: 'Subject Priority Remove Done',
						status: 'warning',
						pos: 'bottom-center',
						timeout: 2000
					});


				},
				errors:function(){


				}
			});

		}
		else{

		}
		
		
	}

</script>



@endsection

