
@extends('teacher.index')
@section('content')


@php
  $t_coursematerial = DB::table("t_coursematerial")->where('teacher_id',Auth('teacher')->user()->id)->count();
  $t_notices = DB::table("t_notices")->where('teacher_id',Auth('teacher')->user()->id)->count();
  $t_result = DB::table("t_result")->where('teacher_id',Auth('teacher')->user()->id)->count();
  $t_students = DB::table("student_information")->where('department',Auth('teacher')->user()->department)->count();
@endphp

<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Course Materials</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $t_coursematerial }}</h2>
                            <p class="text-white mb-0">Course Materials</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Notices</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $t_notices }}</h2>
                            <p class="text-white mb-0">Notices</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Results Publish</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $t_result }}</h2>
                            <p class="text-white mb-0">Results Publish</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Students</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $t_students }}</h2>
                            <p class="text-white mb-0">Students</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>

@endsection