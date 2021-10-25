@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <div class="row center">
            {{-- RUT --}}
            <div class="col  mb-3">
                <label for="doctor_id">RUT</label>
                <input readonly class="form-control" type="text" name="doctor_id" id="doctor_id" 
                value="{{ old('doctor_id', $doctor->doctor_id) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Nombres --}}
            <div class="col  mb-3">
                <label for="name">Nombres</label>
                <input readonly class="form-control" type="text" name="name" id="name" 
                value="{{ old('name', $doctor->name) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Apellidos --}}
            <div class="col  mb-3">
                <label for="last_name">Apellidos</label>
                <input readonly class="form-control" type="text" name="last_name" id="last_name" 
                value="{{ old('last_name', $doctor->last_name) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Email --}}
            <div class="col  mb-3">
                <label for="email">Email</label>
                <input readonly class="form-control" type="text" name="email" id="email" 
                value="{{ old('email', $doctor->email) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Direccion --}}
            <div class="col  mb-3">
                <label for="address">Direccion</label>
                <input readonly class="form-control" type="text" name="address" id="address" 
                value="{{ old('address', $doctor->address) }}">
            </div>
        </div>

        {{-- Especialidad --}}
        
        <div class="col mb-3">
            <label for="name">Especialidad</label>
            <select readonly class="form-control" name="specialization" id="specialization">
                @include('dashboard/partials/options-specialization',['val' => $doctor->specialization])
            </select>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <a href="{{ URL::previous() }}" class="btn btn-outline-danger btn-sm" >Salir</a>
        </div>
    </div>
@endsection