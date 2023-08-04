<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Documento
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3">
                    Ciudad
                </th>
                <th scope="col" class="px-6 py-3">
                    Direccion
                </th>
                <th scope="col" class="px-6 py-3">
                    Celular
                </th>
                <th scope="col" class="px-6 py-3">
                    Copia doc
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $usuario)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $usuario->documento }}
                </th>
                <td class="px-6 py-4">
                    {{ $usuario->nombre }}
                </td>
                <td class="px-6 py-4">
                    {{ $usuario->apellido }}
                </td>
                <td class="px-6 py-4">
                    {{ $usuario->ciudad }}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $usuario->direccion }}
                </th>
                <td class="px-6 py-4">
                    {{ $usuario->celular }}
                </td>
                <td class="px-6 py-4">
                    <a href="">{{ $usuario->correo }}</a>
                </td>
                <td class="px-6 py-4">
                    {{ $usuario->documento }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('destroy', $usuario->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline" title="Eliminar">X</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>