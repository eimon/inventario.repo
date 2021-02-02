<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar puesto de trabajo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="p-5 card" action="/store" metho="post">
                    @csrf
                    <div class="form-group row">
                        <label for="ubicacion" class="col-4 col-form-label">Ubicación</label>
                        <div class="col-8">
                            <input id="ubicacion" name="ubicacion" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="area" class="col-4 col-form-label">Área</label>
                        <div class="col-8">
                            <input id="area" name="area" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mother" class="col-4 col-form-label">Placa Madre</label>
                        <div class="col-8">
                            <input id="mother" name="mother" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpu" class="col-4 col-form-label">Procesador</label>
                        <div class="col-8">
                            <input id="cpu" name="cpu" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ram" class="col-4 col-form-label">Memoria RAM</label>
                        <div class="col-8">
                            <input id="ram" name="ram" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="vga" class="col-4 col-form-label">Placa de video</label>
                        <div class="col-8">
                            <input id="vga" name="vga" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hdd" class="col-4 col-form-label">Disco Rígido</label>
                        <div class="col-8">
                            <input id="hdd" name="hdd" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ssd" class="col-4 col-form-label">Disco Sólido</label>
                        <div class="col-8">
                            <input id="ssd" name="ssd" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="monitor" class="col-4 col-form-label">Monitor</label>
                        <div class="col-8">
                            <input id="monitor" name="monitor" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="propietario" class="col-4 col-form-label">Usuario</label>
                        <div class="col-8">
                            <input id="propietario" name="propietario" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sn-gabinete" class="col-4 col-form-label">Número de serie Gabinete</label>
                        <div class="col-8">
                            <input id="snGabinete" name="snGabinete" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="snMonitor" class="col-4 col-form-label">Número de serie Monitor</label>
                        <div class="col-8">
                            <input id="snMonitor" name="snMonitor" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inventarioGabinete" class="col-4 col-form-label">Inventario gabinete</label>
                        <div class="col-8">
                            <input id="inventarioGabinete" name="inventarioGabinete" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inventarioMonitor" class="col-4 col-form-label">Inventario monitor</label>
                        <div class="col-8">
                            <input id="inventarioMonitor" name="inventarioMonitor" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>