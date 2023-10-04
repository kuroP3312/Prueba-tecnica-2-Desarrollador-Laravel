@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-info" style="margin-top: 50px;">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-right">
                        </div>
                        <span id="card_title">
                           <b>{{ __('Curso') }}</b>
                        </span>

                         <div class="float-right">
                            <a  href="{{ route('create_product') }}"  class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Crear nuevo') }}
                            </a>
                          </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="myTable">
                            <thead class="thead">
                                <tr>
                                    <th>Id Producto</th>
                                    <th>Nombre producto</th>
                                    <th>Precio $</th>
                                    <th>Cantidad</th>
                                    <th>Creado</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                  Acciones
                                                </button>
                                                <ul class="dropdown-menu custom" aria-labelledby="dropdownMenuButton1" role="menu">
                                                  <li><a class=" dropdown-item " href="{{ url('edit_product/'.$product->id) }}" ><i class="fa fa-fw fa-edit"></i> Editar</a></li>
                                                  <li><a class=" dropdown-item " href="{{ url('view_product/'.$product->id) }}" ><i class="fa fa-fw fa-eye"></i> Ver detalles</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
                        <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
                        <script>
                            $(document).ready( function () {
                                $('#myTable').DataTable(
                                    {
                                        language: {
                                            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                                        }}
                                );
                            } );
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
