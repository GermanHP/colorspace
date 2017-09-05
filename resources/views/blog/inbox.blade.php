@extends('layouts.admin')
@section('contenido')
    <br>
    <div class="container panel panel-body">
    <table class="table table-striped" id="inbox">
        <thead>
        <tr>
            <th>Mensaje</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    <ul class="demo-list-three mdl-list">
                        <li class="mdl-list__item mdl-list__item--three-line">
                            <span class="mdl-list__item-primary-content">
                              <i class="material-icons mdl-list__item-avatar">person</i>
                              <span>Bryan Cranston</span>
                              <span class="mdl-list__item-text-body">
                                Bryan Cranston played the role of Walter in Breaking Bad. He is also known
                                for playing Hal in Malcom in the Middle.
                              </span>
                            </span>
                        </li>
                    </ul>
                </td>
            </tr>

        </tbody>
    </table>
    </div>

    <script>
        $(document).ready(function () {
            $('#inbox').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                responsive: true,
                "scrollX": true,
                "order": [[2, 'desc']],
                "language": {


                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Ãšltimo",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }

                }

            });
        })
    </script>
@stop