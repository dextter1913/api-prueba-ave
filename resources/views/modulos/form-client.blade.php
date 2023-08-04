<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registro de Clientes') }}
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col items-center pt-1 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-[1000px] mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" class="w-full" action="{{ route('create') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center items-center gap-4">
                    <div class="w-full">
                        <div class="mt-4">
                            <x-input-label for="documento" :value="__('Documento')" />
                            <x-text-input style="width: 20rem;" id="documento" type="text" name="documento" :value="old('documento')" required autofocus autocomplete="documento" />
                        </div>
                        <!-- Nombre -->
                        <div class="mt-4">
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input style="width: 20rem;" id="nombre" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                        </div>
                        <!-- Apellido -->
                        <div class="mt-4">
                            <x-input-label for="apellido" :value="__('Apellido')" />
                            <x-text-input style="width: 20rem;" id="apellido" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
                        </div>

                        <!-- Ciudad -->
                        <div class="mt-4">
                            <x-input-label for="ciudad" :value="__('Ciudad')" />
                            <x-text-input style="width: 20rem;" id="ciudad" type="text" name="ciudad" :value="old('ciudad')" required autofocus autocomplete="ciudad" />
                        </div>
                    </div>
                    <div class="w-full">
                        <!-- Direccion -->
                        <div class="mt-4">
                            <x-input-label for="direccion" :value="__('Direccion')" />
                            <x-text-input style="width: 20rem;" id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus autocomplete="direccion" />
                        </div>

                        <!-- Celular -->
                        <div class="mt-4">
                            <x-input-label for="celular" :value="__('Celular')" />
                            <x-text-input style="width: 20rem;" id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')" required autofocus autocomplete="celular" />
                        </div>
                        <!-- documento_base64 -->
                        <div class="mt-4">
                            <x-input-label for="documento_base64" :value="__('Documento')" />
                            <x-text-input style="width: 20rem;" id="documento_base64" class="block mt-1 w-full" type="file" name="documento_base64" :value="old('documento_base64')" required autofocus autocomplete="documento_base64" />
                        </div>

                        <!-- Email Cliente -->
                        <div class="mt-4">
                            <x-input-label for="correo" :value="__('Correo')" />
                            <x-text-input style="width: 20rem;" id="correo" class="block mt-1 w-full" type="email" name="correo" :value="old('correo')" required autocomplete="correo" />
                        </div>
                        <!-- cliente_creado_por -->
                        <div>
                            <x-text-input style="width: 20rem;" id="cliente_creado_por" class="block mt-1 w-full" type="hidden" name="cliente_creado_por" :value="Auth::user()->name" required autofocus autocomplete="cliente_creado_por" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        @if(!empty($message))
        <x-alert-success>
            {{ $message }}
        </x-alert-success>
        @endif
    </div>
</x-app-layout>