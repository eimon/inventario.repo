<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="inventario" class="display">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ubicación</th>
                                <th>Área</th>
                                <th>Propietario</th>
                                <th>Mother</th>
                                <th>Cpu</th>
                                <th>Ram</th>
                                <th>Placa de video</th>
                                <th>HDD</th>
                                <th>SSD</th>
                                <th>Monitor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($computadoras as $computadora )
                            <tr>
                                <td>{{ $computadora->id }}</td>
                                <td>{{ $computadora->ubicacion }}</td>
                                <td>{{ $computadora->area }}</td>
                                <td>{{ $computadora->propietario }}</td>
                                <td>{{ $computadora->mother }}</td>
                                <td>{{ $computadora->cpu }}</td>
                                <td>{{ $computadora->ram }}</td>
                                <td>{{ $computadora->vga }}</td>
                                <td>{{ $computadora->hdd }}</td>
                                <td>{{ $computadora->ssd }}</td>
                                <td>{{ $computadora->monitor }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#inventario').DataTable({
                "columnDefs": [{
                        "targets": [10],
                        "visible": true
                    }
                ],
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5'
                ]
            });
        });
    </script>

</x-app-layout>