<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-white my-3">
            {{ $vacante->titulo }}
        </h3>

        <div class="md:grid md:grid-cols-2 my-10 bg-gray-700  p-4" >
            <p class="font-bold text-sm uppercase text-white my-3">Empresa:
                <span class="normal-case font-normal text-gray-400"> {{ $vacante->empresa }} </span>
            </p>
            <p class="font-bold text-sm uppercase text-white my-3">Ultimo día para postularse:
                <span class="normal-case font-normal text-gray-400"> {{ $vacante->ultimo_dia->toFormattedDateString() }} </span>
            </p>
            <p class="font-bold text-sm uppercase text-white my-3">Categoría:
                <span class="normal-case font-normal text-gray-400"> {{ $vacante->categoria->categoria }} </span>
            </p>
            <p class="font-bold text-sm uppercase text-white my-3">Salario:
                <span class="normal-case font-normal text-gray-400"> {{ $vacante->salario->salario }} </span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="{{'Imagen Vacante ' . $vacante->titulo}}">
        </div>
        <div class="text-white md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción del Puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>
    @guest
        <div class="mt-5 bg-gray-700 border border-dashed p-5 text-center">
            <p class="text-white">
                ¿Deseas aplicar a la vacante?
                <a class="font-bold text-indigo-600 hover:text-indigo-700" href=" {{ route('register') }}">Obten una cuenta y aplica a esta y otras vacantes</a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacante\Vacante::class)
        <livewire:postular-vacante />
    @endcannot

</div>
