<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <h1>Bienvenido a tu registro diario de calorías</h1>
                        <div>
                            <table>
                                <thead>
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
                                            <td><button style="border: 1px solid black; margin-top: 20px; padding: 10px;">+</button></td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            <button style="border: 1px solid black; margin-top: 20px; padding: 10px;">Añadir nuevo registro</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

