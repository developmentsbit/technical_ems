
<option value="">Select Teacher</option>

@foreach($data as $d)

<option value="{{ $d->id }}">{{ $d->name }}</option>

@endforeach