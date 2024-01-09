@extends('frontend.index')
@section('content')



<div class="container">
  <div class="col-sm-12 col-12" id="mainpage">


   <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
    <ul class="list-group p-0">
      <li class="list-group-item font-weight-bold bg-success text-light" id="about">@lang('frontend.recruitment_notices')</li>
      <li class="list-group-item">

        <div class="table table-responsive">
          <table id="example" class="display table-bordered" style="width:100%">
            <thead>
              <tr style="font-size: 15px;">
                <th>@lang('frontend.sl')</th>
                <th>@lang('frontend.title')</th>
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
                <td>@if($lang == 'en'){{ $d->title ?: $d->title_bn}}@else {{$d->title_bn ?: $d->title}}@endif</td>
                <td>
                  <a href="{{ url('view_recruitment_notices',$d->id) }}" class="btn btn-sm btn-danger" target="_blank"><span uk-icon="icon: file-pdf; ratio: 1"></span>Open</a>
                  <a href="{{ asset($d->image) }}" class="btn btn-sm btn-danger" download="" ><span uk-icon="icon: download; ratio: 1"></span>Download</a>
                </td>
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