<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class=" text-3xl text-green-800">Bienvenido a tu registro diario de calorías</h1>
                    
                    @foreach (Auth::user()->records as $record)
                        <div>
                            <h3 class="text-2xl"> Fecha: {{ $record->date}} </h2>
                            <h2> Calorías: {{ $record->total_calories}} </h2>
                            <h2> Carbohidratos: {{ $record->carbs}} </h2>
                            <h2> Proteínas: {{ $record->proteins}} </h2>
                            <h2> Grasas: {{ $record->fats}} </h2>
                        </div>
                    @endforeach


                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- date = '2024-08-04';
        $record->total_calories = 2500;
        $record->carbs = 400;
        $record->proteins = 120;
        $record->fats = 50; -->