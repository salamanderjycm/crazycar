@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 text-center">
        <h2 class="text-2xl font-bold mb-4">Reservar: {{ $service->nombre }}</h2>
        <p class="mb-2">{{ $service->descripcion }}</p>
        <p class="mb-4 text-lg font-bold text-green-700">Precio: S/ {{ number_format($service->precio, 2) }}</p>

        <button id="culqi-button" class="bg-purple-700 text-white px-6 py-3 rounded">Pagar con Culqi</button>
    </div>

    <!-- CULQI -->
    <script src="https://checkout.culqi.com/js/v4"></script>
    <script>
        Culqi.publicKey = 'pk_test_tu_clave_publica_aqui';

        document.getElementById('culqi-button').addEventListener('click', function () {
            Culqi.options = {
                title: '{{ $service->nombre }}',
                currency: 'PEN',
                description: '{{ $service->descripcion }}',
                amount: {{ intval($service->precio * 100) }}
            };
            Culqi.open();
        });

        function culqi() {
            if (Culqi.token) {
                const token = Culqi.token.id;

                fetch('/api/procesar-pago', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        token: token,
                        service_id: '{{ $service->id }}'
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if(data.success){
                        alert('Pago exitoso');
                        window.location.href = '/gracias';
                    } else {
                        alert('Error: ' + data.message);
                    }
                });
            } else {
                console.log(Culqi.error);
            }
        }
    </script>
@endsection
