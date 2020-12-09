<div class="modal fade modal-ubigeos px-5" style="" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lista de Ubigeos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="content_table_ubigeo" style="">
                <table style="width:100%" class="table datatable  table-hover table-striped" id="table_ubigeos">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Distrito</th>
                            <th>Provincia</th>
                            <th>Departamento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ubigeos as $ubigeo)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td>{{ $ubigeo->id }}</td>
                            <td>{{ $ubigeo->cod_ubigeo }}</td>
                            <td>{{ $ubigeo->distrito ?? '' }}</td>
                            <td>{{ $ubigeo->provincia ?? '' }}</td>
                            <td>{{ $ubigeo->departamento ?? '' }}</td>
                            <td>
                                <a href="#"
                                class="btn btn-primary btn_seleccionar_ubigeo"
                                data-id="{{ $ubigeo->id }}"
                                data-ubigeo="{{ $ubigeo->ubigeo_completo() }}">
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