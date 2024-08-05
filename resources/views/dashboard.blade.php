<x-app-layout>
    <x-slot name="header">
        <h2 class="font-weight-bold text-xl text-dark">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="bg-white shadow-sm rounded-lg">
                <div class="p-4">
                    <h1 class="mb-4">Bienvenido a tu registro diario de calorías</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Calorías</th>
                                    <th>Carbohidratos</th>
                                    <th>Proteínas</th>
                                    <th>Grasas</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                    <tr>
                                        <td>{{ $record->date }}</td>
                                        <td>{{ $record->total_calories }}</td>
                                        <td>{{ $record->carbs }}</td>
                                        <td>{{ $record->proteins }}</td>
                                        <td>{{ $record->fats }}</td>
                                        <td>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Editar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#addModal">Añadir nuevo registro</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Edita los detalles del registro aquí.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Añadir Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Añade los detalles del nuevo registro aquí.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
