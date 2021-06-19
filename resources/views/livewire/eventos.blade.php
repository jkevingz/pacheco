<div>
        <button type="button" class="btn btn-primary" wire:click="abrirModal">
          Crear Evento
        </button>
            <br><br><hr><br>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Evento
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Estatus
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Fecha de Evento
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                        <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Demostración de Robots</div>
                        <div class="text-sm text-gray-500">Optimization</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Activo
                        </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        30-Junio-2021
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                        <button class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                        </button>
                        
                        <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                        
                        </td>
                    </tr>
                    <!-- More people... -->
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>



        <!-- Modal -->
        <x-modal wire:model="abierto">
            <x-slot name="title">
                <strong><h5 class="modal-title" id="exampleModalLabel">Nuevo Evento</h5></strong>
                <button type="button" class="close" wire:click="cerrarModal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </x-slot>
            <x-slot name="content">
                <form wire:submit.prevent="submit" class="form-group" method="POST">
                    <div class="form-group">
                    <label for="titulo">Titulo del Evento</label>
                    <input wire:model="tituloEvento" class="form-control" id="titulo_evento">
                    </div>
                    <div class="form-group">
                    <label for="descripcion">Descripción del Evento</label>
                    <textarea wire:model="descripcion" class="form-control" id="descripcion_evento" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="fecha">Fecha del Evento</label>
                    <input wire:model="fechaEvento" type="datetime-local" class="form-control" id="fecha_evento">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-outline-danger" wire:click="cerrarModal">Cancelar</button>
                </form>
            </x-slot>
        </x-modal>
</div>
