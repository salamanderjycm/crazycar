<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    public function create(Service $service)
    {
        return view('reservas.create', compact('service'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'fecha' => 'required|date',
            'hora' => 'required',
        ]);

        Reserva::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'estado' => 'pendiente',
        ]);

        return redirect()->route('reservas.index')->with('success', 'Reserva realizada con éxito.');
    }

    public function index()
    {
        $reservas = Reserva::with('servicio')->where('user_id', Auth::id())->get();
        return view('reservas.index', compact('reservas'));
    }
}
