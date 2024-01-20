

<h3>@lang('subjectpriority.teachername') : <b>{{ $data[0]->name }}</b></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>@lang('subjectpriority.departname')</th>
                <th>@lang('subjectpriority.semester')</th>
                <th>@lang('subjectpriority.section')</th>
                <th>@lang('subjectpriority.shift')</th>
                <th>@lang('subjectpriority.subjectinfo')</th>
                <th>@lang('common.action')</th>
            </tr>

        </thead>

        <tbody>
            @foreach($data as $d)
            <tr id="tr-{{ $d->id }}">
                <td>@if($lang == 'en'){{ $d->department ?: $d->department_name_bn}}@else {{$d->department_name_bn ?: $d->department}}@endif</td>
                <td>@if($lang == 'en'){{ $d->semester_name ?: $d->semester_name_bn}}@else {{$d->semester_name_bn ?: $d->semester_name}}@endif</td>
                <td>@if($lang == 'en'){{ $d->section_name ?: $d->section_name_bn}}@else {{$d->section_name_bn ?: $d->section_name}}@endif</td>
                <td>{{ $d->shift }}</td>
                <td>{{ $d->subject_code }} - @if($lang == 'en'){{ $d->subject_name ?: $d->subject_name_bn}}@else {{$d->subject_name_bn ?: $d->subject_name}}@endif</td>
                <td>
                    <a onclick="deletesubjectpriority({{ $d->id }})" class="btn btn-danger btn-sm">X</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
