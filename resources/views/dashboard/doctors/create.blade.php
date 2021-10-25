@extends('dashboard.master')
@section('content')
<form action="{{ route('doctor.store') }}" method="post">
    @include('dashboard.doctors._form')
</form>
@endsection