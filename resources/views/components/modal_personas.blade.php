<div class="modal fade modal-personas px-5" style="" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lista de personas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"  id="content_table_personas" style="">
                <table style="width:100%" class="table datatable  table-hover table-striped" id="table_compras">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td>{{ $persona->id }}</td>
                            <td>{{ $persona->dni }}</td>
                            <td>{{ $persona->nombre_completo() }}</td>
                            <td>{{ $persona->fecha_nacimiento }}</td>
                            <td>{{ $persona->edad() }}</td>
                            <td>{{ $persona->getSexo() }}</td>
                            <td>
                                <a href="#"
                                class="btn btn-primary btn_seleccionar_persona"
                                data-dni="{{ $persona->dni }}"
                                data-id="{{ $persona->id }}"
                                data-nombre_completo="{{ $persona->nombre_completo() }}">
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

