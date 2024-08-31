<!-- resources/views/dashboard/index.blade.php -->

@include('sidebar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@section('content')

    <div class="row ">
        <div class="col-md-2">

        </div>
        <div class="col-md-10 pe-2">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            Productos
                        </div>
                        <div class="card-body">
                            <p class="card-text">Administra tus productos desde aquí.</p>
                            <a href="#" class="btn btn-primary">Ver Productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            Pedidos
                        </div>
                        <div class="card-body">
                            <p class="card-text">Gestiona los pedidos de tus clientes.</p>
                            <a href="#" class="btn btn-primary">Ver Pedidos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            Clientes
                        </div>
                        <div class="card-body">
                            <p class="card-text">Administra tu base de clientes.</p>
                            <a href="#" class="btn btn-primary">Ver Clientes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
