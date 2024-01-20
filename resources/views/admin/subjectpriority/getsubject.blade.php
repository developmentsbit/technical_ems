
<option value="">Select Subject</option>

@foreach($data as $d)

<option value="{{ $d->id }}">{{ $d->subject_name }}</option>

@endforeach