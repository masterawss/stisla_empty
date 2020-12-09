<div class="modal fade modal-sectores px-5" style="" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lista de sectores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="content_table_sector" style="">
                <table style="width:100%" class="table datatable  table-hover table-striped" id="table_compras">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sector</th>
                            <th>Distrito</th>
                            <th>Provincia</th>
                            <th>Departamento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sectores as $sector)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td>{{ $sector->id }}</td>
                            <td>{{ $sector->descripcion }}</td>
                            <td>{{ optional(optional($sector)->ubigeo)->distrito ?? '' }}</td>
                            <td>{{ optional(optional($sector)->ubigeo)->provincia ?? '' }}</td>
                            <td>{{ optional(optional($sector)->ubigeo)->departamento ?? '' }}</td>
                            <td>
                                <a href="#"
                                class="btn btn-primary btn_seleccionar_sector"
                                data-id="{{ $sector->id }}"
                                data-sector="{{ $sector->ubigeo_completo() }}">
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