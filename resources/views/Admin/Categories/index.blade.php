@extends('adminlte::page')
@section('title', 'Admin - Categorias')
@section('css')
    <link rel="stylesheet" href="">
@stop

@section('content_header')
    <h1>
        Categorías
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
            Crear
        </button>
    </h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de categorías</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="categories" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Categoria</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 0)
                            @foreach($categories as $category)
                                @php($i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-category-{{ $category->id }}">
                                            Editar
                                        </button>
                                        <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- modal Update Category-->
                                @include('Admin.Categories.modal-update-category')
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Categoria</th>
                                <th>Acciones</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <!-- modal -->
    <div class="modal fade" id="modal-create-category">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('admin.categories.store') }}" METHOD="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Categoria</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $('#categories').DataTable({
                "order": [[3, "desc"]]
            });
        });
    </script>
@stop
