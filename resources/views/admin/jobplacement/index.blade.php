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
                @lang('jobplacement.viewtitle')
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

				<h3>@lang('jobplacement.managetitle')</h3><br>

				<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
					<thead class="mythead">
						<tr>
              <th>#</th>
							<th>@lang('jobplacement.name')</th>
							<th>@lang('jobplacement.organization')</th>
							<th>@lang('jobplacement.designation')</th>
							<th>@lang('jobplacement.phone')</th>
							<th>@lang('jobplacement.image')</th>
							<th>@lang('jobplacement.status')</th>
							<th>@lang('common.action')</th>
						</tr>
					</thead>
          <tbody class="tbody" id="showtdata">
            @php
            $sl=1;
            @endphp
            @if($data)
            @foreach($data as $showdata)
            <tr id="tr{{ $showdata->id }}">
              <td>{{$sl++}}</td>
              <td>{{$showdata->name}}</td>
              <td>{{$showdata->institute}}</td>
              <td>{{$showdata->job_title}}</td>
              <td>{{$showdata->phone}}</td>
							<td><img src="{{asset('job_replacement_img')}}/{{$showdata->roll}}.{{$showdata->img}}" style="max-height: 50px;"></td>
							<td>
                @if($showdata->approve == 1)
                 <a href="{{ url('/Inactivejobplacement/'. $showdata->id) }}" class="btn btn-success">Active</a>
                @else
                 <a href="{{ url('/Activejobplacement/'. $showdata->id) }}" class="btn btn-warning">Inactive</a>
                @endif
              </td>
              <td>
                <div class="btn-group">
                  <form action="{{ route('jobplacement.destroy',$showdata->id) }}" method="post">
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





<meta name="_token" content="{!! csrf_token() !!}" />
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
      dom: 'Bfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    } );
  } );


  function check_all()
  {

    if($('#chkbx_all').is(':checked')){
      $('input.check_elmnt2').prop('disabled', false);
      $('input.check_elmnt').prop('checked', true);
      $('input.check_elmnt2').prop('checked', true);
    }else{
      $('input.check_elmnt2').prop('disabled', true);
      $('input.check_elmnt').prop('checked', false);
      $('input.check_elmnt2').prop('checked', false);
    }
  } 


  function chekMain(getID){

    if($('#linkID-'+getID).is(':checked')){

      $("input#sublinkID-"+getID).attr('disabled', false);
      $("input#sublinkID-"+getID).attr('checked', true);

    }else{
      $("input#sublinkID-"+getID).attr('disabled', true);
      $("input#sublinkID-"+getID).attr('checked', false);

    }

  }




</script>
<script type="text/javascript">
  function loadModel(id)
  {
    $(".modal-body").load("{{URL::to('AdminMainMenuModel')}}"+'/'+id);
  }




  function DeleteAdmin(getId){

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    })

    $.ajax({

      type: "POST",
      url: "{{URL::to('AdminDeleteById')}}/"+getId,
      data: {id:getId},
      dataType: 'json',
      success: function (data) {



        if(data.success)
        {


         $.gritter.add({
           title:data.status,
           text: 'Data Delete Successfully',
           image:  '{{URL::to("/")}}/public/NeddImg/okkk.png',
           sticky: false

         });   

         $('#tr-'+getId).hide();



       } else if(data.error){

        $.gritter.add({
         title: data.error2,
         text:  data.status,
         image:  '{{URL::to("/")}}/public/NeddImg/delete.png',
         sticky: false

       });  

      }


    },
    error: function (data) {
      console.log('Error:', data);
    }
  });

  }

</script>


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
