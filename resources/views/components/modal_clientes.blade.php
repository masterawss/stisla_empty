<div class="modal fade modal-clientes px-5" style="" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lista de clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"  id="content_table_clientes" style="">
                <table style="width:100%" class="table datatable  table-hover table-striped" id="table_clientes">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>N° Doc</th>
                            <th>Razon Social</th>
                            <th>Telefono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->ruc_dni }}</td>
                            <td>{{ $cliente->razon_social }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>
                                <a href="#"
                                class="btn btn-primary btn_seleccionar_cliente"
                                data-razon_social="{{ $cliente->razon_social }}"
                                data-direccion="{{ $cliente->direccion }}"
                                data-id="{{ $cliente->id }}"
                                data-ruc_dni="{{ $cliente->ruc_dni }}">
                                    <i class="fa fa-check"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

