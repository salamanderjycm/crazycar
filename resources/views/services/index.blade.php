<!-- resources/views/services/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Servicios disponibles</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($services as $service)
            <div class="border rounded p-4 shadow">
                <h2 class="text-xl font-semibold">{{ $service->nombre }}</h2>
                <p class="text-gray-700">{{ $service->descripcion }}</p>
                <p class="font-bold mt-2">S/ {{ $service->precio }}</p>

                @auth
                    <form action="{{ route('cita.reservar') }}" method="POST" class="mt-4">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                            Reservar con Culqi
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-blue-500 mt-4 inline-block">Inicia sesión para reservar</a>
                @endauth
            </div>
        @endforeach
    </div>
@endsection
