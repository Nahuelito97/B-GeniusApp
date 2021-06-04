@extends('layouts.app')

@section('body-class', 'landing-page')

@section('content')

    @php
    // SDK de Mercado Pago
    require base_path('vendor/autoload.php');
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    foreach ($prestamos as $prestamo) {
        $item = new MercadoPago\Item();
        $item->title =  $prestamo->libro->titulo;
        $item->quantity = $prestamo->libro->cantidad;
        $item->unit_price = $prestamo->libro->price;

        $prestammos[] = $item;
    }

    $preference->items = $prestammos;
    $preference->save();
    @endphp


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Sistema bibliotecario</h1>
                        <br>
                        <h1 class="all-tittles text-dark"> <small></small></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Préstamos</li>
                            <li class="breadcrumb-item"><a href="{{ route('prestamos.crear') }}">Crear.</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <img src="{{ asset('front-end/assets/img/calendar_book.png') }}" alt="calendar"
                        class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <br>
                <div class="col-xs-8 col-sm-8 col-md-6 text-justify lead">
                    <h4>
                        Bienvenido a esta sección, aquí se muestran todos los préstamos de libros realizados hasta la fecha
                        y que ya se entregaron satisfactoriamente.
                    </h4>
                    <br>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4 class="card-title">Listado de Préstamos.</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="clientes" class="table table-hover">
                                    <thead>
                                        <th>#</th>
                                        <th>Nombre de Libro</th>
                                        <th>Nombre del Cliente</th>
                                        <th class="min-tablet">Fecha Solicitud</th>
                                        <th class="min-tablet">Fecha Entrega</th>
                                        <th class="min-desktop">Estado</th>
                                        <th class="min-desktop">Cambiar Estado</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($prestamos as $prestamo)
                                            <tr>
                                                <td>
                                                    {{ $prestamo->id }}
                                                </td>

                                                <td>
                                                    {{ $prestamo->cliente->nombre }}
                                                </td>
                                                <td>
                                                    {{ $prestamo->libro->titulo }}
                                                </td>
                                                <td>
                                                    {{ $prestamo->fecha_entrega }}
                                                </td>
                                                <td>
                                                    {{ $prestamo->fecha_devolucion }}
                                                </td>
                                                <td>
                                                    @switch($prestamo->condicion)
                                                        @case(0)
                                                            <span class="badge badge-warning">En Espera</span>
                                                        @break
                                                        @case(1)
                                                            <span class="badge badge-success">Devuelto</span>
                                                        @break
                                                        @case(2)
                                                            <span class="badge badge-danger">No Devuelto</span>
                                                        @break
                                                    @endswitch
                                                </td>
                                                <td class="text-right">
                                                    <form class="d-inline" method="POST"
                                                        action="{{ route('prestamos.actualizar', $prestamo) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('PUT') }}
                                                        <button type="submit" class="btn btn-outline-success"
                                                            onclick="return confirm('¿Seguro que desea cambiar el estado del prestamo?')"
                                                            title="Cambiar estado">
                                                            Cambiar Estado
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> B-Genius.
                                        <small class="float-right">Fecha: {{ $prestamo->fecha_entrega }}</small>
                                    </h4>
                                    <div class="card-header">
                                        <h4 class="card-title">Resumen.</h4>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>


                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="clientes" class="table table-hover">
                                        <thead>
                                            <th>#</th>
                                            <th>Nombre de Libro</th>
                                            <th>Nombre del Cliente</th>
                                            <th class="min-tablet">Fecha Venta</th>
                                            <th class="min-desktop">Precio</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($prestamos as $prestamo)
                                                <tr>
                                                    <td>
                                                        {{ $prestamo->id }}
                                                    </td>

                                                    <td>
                                                        {{ $prestamo->cliente->nombre }}
                                                    </td>
                                                    <td>
                                                        {{ $prestamo->libro->titulo }}
                                                    </td>
                                                    <td>
                                                        {{ $prestamo->fecha_entrega }}
                                                    </td>
                                                    <td>
                                                        {{ $prestamo->libro->price }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                    <p class="lead">Metodos de Pago:</p>

                                    <img src=" {{ asset('adminlt/dist/img/credit/visa.png') }}" alt="Visa">
                                    <img src="{{ asset('adminlt/dist/img/credit/mastercard.png') }}" alt="Mastercard">
                                    <img src="{{ asset('adminlt/dist/img/credit/american-express.png') }}"
                                        alt="American Express">
                                    <img src="{{ asset('adminlt/dist/img/credit/paypal2.png') }}" alt="Paypal">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya
                                        handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <p class="lead">Amount Due {{ $prestamo->fecha_entrega }}</p>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <th style="width:50%">Subtotal:</th>
                                                <th>Total:</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($prestamos as $prestamo)
                                                    <tr>
                                                        <td>
                                                            {{ $prestamo->libro->price }}
                                                        </td>
                                                        <td>
                                                            {{ $prestamo->libro->price }}
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="cho-container">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>

                        </div>
                        <!-- /.invoice -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    // SDK MercadoPago.js V2
    <script src="https://sdk.mercadopago.com/js/v2"></script>


    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
            locale: 'es-AR'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: '{{ $preference->id }}'
            },
            render: {
                container: '.cho-container', // Indica dónde se mostrará el botón de pago
                label: 'Pagar', // Cambia el texto del botón de pago (opcional)
            }
        });

    </script>


@endsection
