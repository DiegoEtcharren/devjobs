<form class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Vacante')" />
        <x-text-input
            id="titulo"
            class="block mt-1 w-full"
            type="text"
            name="titulo"
            :value="old('titulo')"
            required
            autofocus
            placeholder="Titulo Vacante"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario')" />
            <select
                id="salario"
                name="salario"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                    <option value="">-- Selecciona un Rango -- </option>
                    @foreach ($salarios as $salario)
                        <option value="{{ $salario->id}}">{{ $salario->salario}}</option>
                    @endforeach
            </select>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
            <select
                id="categoria"
                name="categoria"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                    <option value="">-- Selecciona una Categoria -- </option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id}}">{{ $categoria->categoria}}</option>
                    @endforeach
            </select>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
            id="empresa"
            class="block mt-1 w-full"
            type="text"
            name="empresa"
            :value="old('empresa')"
            required
            autofocus
            placeholder="Nombre de la Empresa"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para Postularse')" />
        <x-text-input
            id="ultimo_dia"
            class="block mt-1 w-full"
            type="date"
            name="ultimo_dia"
            :value="old('ultimo_dia')"
            required
            autofocus
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Descripción Puesto')" />
        <textarea
            name="descripcion"
            placeholder="Descripción del general del puesto y experiencia"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full h-72"
        ></textarea>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
            id="imagen"
            class="block mt-1 w-full"
            type="file"
            name="imagen"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <x-primary-button class="w-full justify-center mt-4">
        {{ __('Registrar Cuenta') }}
    </x-primary-button>
</form>
