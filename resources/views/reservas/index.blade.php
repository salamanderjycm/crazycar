@extends('layouts.app')

@section('content')
    <h1 class="text-center text-3xl mb-4">Nuestros Servicios</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($services as $service)
            <div class="border p-4 rounded shadow">
                <h2 class="text-xl font-bold">{{ $service->nombre }}</h2>
                <p>{{ $service->descripcion }}</p>
                <p class="text-green-600 font-bold">S/ {{ number_format($service->precio, 2) }}</p>

                <form action="{{ route('cita.reservar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button class="mt-2 bg-purple-700 text-white px-4 py-2 rounded" type="submit">
                        Reservar y Pagar
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
