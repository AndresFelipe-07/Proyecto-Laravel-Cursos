@extends ('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="http://localhost/auxilitos/resources/views/clientes_blade.php" method="POST">

        {{ csrf_field() }}<!--Agregar codigo de seguridad -->

        <!-- Task Name -->
        <div class="form-group">
            <label for="name" class="control-label">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="ruc" class="control-label">R.U.C</label>
            <input type="text" name="ruc" class="form-control">
        </div>

        <div class="form-group">
            <label for="address" class="control-label">Dirección</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone" class="control-label">Telefono</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="control-label">Correo</label>
            <input type="text" name="email" class="form-control">
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>Registrar Cliente
                </button>
            </div>
        </div>

        </form>


    </div>

<div class="col-md-12">
    <!-- Tabla -->
    @if (count($clientes) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Listado de clientes
            </div>

            <div class="panel-body">
                <table class="table table-striped table">
                <thead>
                    <th>Clientes</th>
                    <th>R.U.C</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                @foreach($clientes as $client)
                    <tr>
                        <td class="table-text"><div>{{ $cliente->name }}</div></td>
                        <td class="table-text"><div>{{ $cliente->ruc }}</div></td>
                        <td class="table-text"><div>{{ $cliente->address }}</div></td>
                        <td class="table-text"><div>{{ $cliente->phone }}</div></td>
                        <td class="table-text"><div>{{ $cliente->email }}</div></td>

                        <td>
                            <form action="{{ url('cliente') }}/{{ $cliente->name }}" method="POST">
                                {{ csrf_field }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>Delete
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
                <tbody>
                </table>
            </div>
        </div>
        @endif
</div>