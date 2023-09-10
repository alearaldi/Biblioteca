<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container py-3">
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="{{asset('img')}}/libro.webp" alt="Book" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Libros</h2>
                    <p>Administrar libros</p>
                    <div class="card-actions justify-end">
                        <a href="{{route('libros.index')}}"><button class="btn btn-primary">Ingresar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
