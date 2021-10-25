@extends('dashboard.master')
@section('content')
    <h6>Lista de Doctores</h6>
    <a href="{{ route('doctor.create') }}" class="btn btn-info btn-sm mb-3">Añadir doctor</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">RUT</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Especialidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->doctor_id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->last_name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->specialization }}</td>

                    <td>
                        <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-info btn-sm">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"
                            data-id="{{ $doctor->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $doctors->links() }}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-muted">¿Seguro que deseas eliminar el doctor seleccionado?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="eliminarDoctor" action="{{ route('doctor.destroy', 0) }}"
                    data-action="{{ route('doctor.destroy', 0) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
            $('#exampleModal').on('show.bs.modal', function(event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal
                        var id = button.data('id') // Extract info from data-* attributes
                        action =$('#eliminarDoctor').attr('data-action').slice(0, -1)
                        action += id
                        $('#eliminarDoctor').attr('action', action)
                        var modal = $(this)
                        modal.find('.modal-title').text('Vas a eliminar el doctor '+id)
                    });
    };
</script>