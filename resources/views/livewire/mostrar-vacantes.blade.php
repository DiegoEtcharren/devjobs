 <div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante )
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between">
                <div class="space-y-3">
                    <a href=" {{ route('vacantes.show', $vacante->id) }}" class="text-xl font-bold">
                        {{ $vacante->titulo }}
                    </a>
                    <p class="text-sm text-gray-400 font-bold"> {{ $vacante->empresa }} </p>
                    <p class="text-sm text-gray-500 font-bold">Último Día: {{ $vacante->ultimo_dia->format('d/m/y') }} </p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch md:items-center text-center gap-3 mt-5 md:mt-0">
                    <a
                    href="{{ route('candidatos.index', $vacante) }}"
                    class="bg-gray-500 py-2 px-4 rounded-lg text-black text-xs font-bold uppercase hover:bg-gray-400"
                    >
                        Candidatos
                    </a>
                    <a
                    href="{{ route('vacantes.edit', $vacante->id) }}"
                    class="bg-blue-500 py-2 px-4 rounded-lg text-black text-xs font-bold uppercase hover:bg-blue-400"
                    >
                        Editar
                    </a>
                    <button
                    wire:click="$dispatch('mostrarAlerta', '{{ $vacante->id  }}' )"
                    class="bg-red-500 py-2 px-4 rounded-lg text-black text-xs font-bold uppercase hover:bg-red-400"
                    >
                        Eliminar
                    </button>
                </div>
            </div>
        @empty
            <p class="text-sm text-white p-3 text-center">No se han agregado vacantes </p>
        @endforelse
    </div>
    <div class="mt-10">
        {{ $vacantes->links() }}
    </div>
 </div>
 @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', vacanteId => {
            Swal.fire({
            title: 'Deseas Eliminar?',
            text: "Una vez eliminado no es posible recuperar la información",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si Eliminar',
            confirmCancelText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {

                Livewire.dispatch('eliminarVacante', vacanteId);

                Swal.fire(
                'Se Elimino Correctamente!',
                'La vacante fue eliminada correctamente',
                'success'
                )
            }
            })
        })
    </script>
@endpush
