<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/cr-1.5.3/r-2.2.7/datatables.min.js"></script>


<script src="https://kit.fontawesome.com/68457ff3e4.js" crossorigin="anonymous"></script>





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
                                <th>SN Gabinete</th>
                                <th>SN Monitor</th>
                                <th>Inventario Gabinete</th>
                                <th>Inventario Monitor</th>
                                <th></th>
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
                                <td>{{ $computadora->snGabinete }}</td>
                                <td>{{ $computadora->snMonitor }}</td>
                                <td>{{ $computadora->inventarioGabinete }}</td>
                                <td>{{ $computadora->inventarioMonitor }}</td>
                                <td><a href="{{ route('edit', $computadora->id) }}"><i class="fas fa-edit"></i></a></td>
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
                "dom": 'Bfrtip',
                "scrollX": true,
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>

</x-app-layout>