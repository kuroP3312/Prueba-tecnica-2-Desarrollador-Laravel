@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-info">
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
                                                <form action="{{ route('delete_product',$product->id) }}" method="POST">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                    Acciones
                                                    </button>
                                                    <ul class="dropdown-menu custom" aria-labelledby="dropdownMenuButton1" role="menu">
                                                    <li><a class=" dropdown-item " href="{{ url('edit_product/'.$product->id) }}" ><i class="fa fa-fw fa-edit"></i> Editar</a></li>
                                                    <li><a class=" dropdown-item details"  data-bs-toggle="modal" data-bs-target="#detailsModal" data-id="{{ $product->id }}"><i class="fa fa-fw fa-eye"></i> Ver detalles</a></li>
                                                    @csrf
                                                    @method('DELETE')
                                                    <li><button type="submit" class=" dropdown-item"><i class="fa fa-fw fa-trash"></i> Eliminar</button></li>
                                                    </ul>
                                                </form>
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
                            $(document).on('click', '.details', function() {
                                var id = $(this).attr("data-id");
                                $('#detailsModal .modal-body').load('{{ url('view_product/') }}/' + id, function(result) {
                                    $('#detailsModal').modal({
                                        show: true
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="detailsModalLabel">Detalles del producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    </div>
    </div>
</div>
</div>
@endsection
