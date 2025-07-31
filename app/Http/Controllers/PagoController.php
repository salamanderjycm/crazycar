<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Service;

class PagoController extends Controller
{
    public function procesar(Request $request)
    {
        $token = $request->token;
        $service = Service::findOrFail($request->service_id);

        $response = Http::withToken('sk_test_tu_clave_secreta_aqui')
            ->post('https://api.culqi.com/v2/charges', [
                "amount" => intval($service->precio * 100),
                "currency_code" => "PEN",
                "email" => "cliente@ejemplo.com",
                "source_id" => $token,
                "metadata" => [
                    "service_id" => $service->id,
                    "service_name" => $service->nombre,
                ]
            ]);

        if ($response->successful()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json([
                'success' => false,
                'message' => $response->json()['merchant_message'] ?? 'Error en el pago'
            ]);
        }
    }
}
