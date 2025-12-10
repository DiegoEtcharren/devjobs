<div>
    <livewire:filtrar-vacantes/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-white mb-12">Vacantes Disponibles</h3>
            <div class="bg-gray-700 shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1 ">
                            <a
                                class="text-3xl font-extrabold text-white"
                                href="{{ route('vacantes.show', $vacante) }}"
                            >
                                {{ $vacante->titulo }}
                            </a>
                            <p class="text-white mb-3 my-3">{{ $vacante->empresa }}</p>
                            <p class="text-white font-bold text-sm">Ultimo día para Postularse: <span class="font-normal">{{$vacante->ultimo_dia->format('d/m/Y'); }} </span></p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a
                                class="bg-indigo-500 hover:bg-indigo-700 dark:bg-indigo-500 hover:dark:bg-indigo-700 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center"
                                href="{{ route('vacantes.show', $vacante) }}"
                            >
                                Ver Vacante
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm  text-gray-600">No hay vacantes postuladas aun</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
