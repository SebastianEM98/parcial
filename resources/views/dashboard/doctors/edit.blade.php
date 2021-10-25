@extends('dashboard.master')
@section('content')
<form action="{{ route('doctor.update', $doctor->id) }}" method="post">
    @method('PUT')
    @include('dashboard.doctors._form')
</form>
@endsection