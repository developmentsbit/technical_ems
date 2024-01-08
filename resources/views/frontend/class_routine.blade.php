@extends('frontend.index')
@section('content')



<div class="container">
  <div class="col-sm-12 col-12" id="mainpage">


   <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
    <ul class="list-group p-0">
      <li class="list-group-item font-weight-bold bg-success text-light" id="about">@lang('frontend.classroutines')</li>
      <li class="list-group-item">

        <div class="table table-responsive">
          <table id="example" class="display table-bordered" style="width:100%">
            <thead>
              <tr style="font-size: 15px;">
                <th>@lang('frontend.sl')</th>
                <th>@lang('frontend.date')</th>
                <th>@lang('frontend.title')</th>
                <th>@lang('frontend.departmentname')</th>
                <th>@lang('frontend.semestername')</th>
                <th>@lang('frontend.shift')</th>
                <th>@lang('frontend.download')</th>
              </tr>
            </thead>
            <tbody>


              @php
              $i = 1;
              @endphp
              @if(isset($data))
              @foreach($data as $d)

              <tr style="font-size: 12px;">
                <td>{{ $i++ }}</td>
							  <td>{{ $d->date }}</td>
                <td><a href="{{ asset($d->image) }}" target="blank" style="text-decoration: none;color: black">@if($lang == 'en'){{ $d->title ?: $d->title_bn}}@else {{$d->title_bn ?: $d->title}}@endif</a></td>
                <td>@if($lang == 'en'){{ $d->department ?: $d->department_name_bn }}@else {{$d->department_name_bn ?: $d->department}}@endif</td>
                <td>@if($lang == 'en'){{ $d->semester_name ?: $d->semester_name_bn }}@else {{$d->semester_name_bn ?: $d->semester_name}}@endif</td>
                <td>
                  @if($d->shift == 1)
                  <span>@lang('common.first_shift')</span>
                  @endif
                  @if($d->shift == 2)
                  <span>@lang('common.second_shift')</span>
                  @endif
							</td>
                <td><a  href="{{ asset($d->image) }}" class="btn btn-sm btn-danger" download="" ><img src="{{ asset("/") }}frontend/img/pdf_icon.png" class="img-fluid"></a></td>
              </tr>


              @endforeach
              @endif



            </table>

          </div>

        </li>

      </ul>
    </div>
  </div>





</div>
</div>







@endsection