
<?php
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Route;

Route::post('/procesar-pago', [PagoController::class, 'procesar']);
