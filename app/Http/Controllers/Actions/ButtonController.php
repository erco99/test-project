<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ButtonController extends Controller
{
    public function increment(Request $request)
    {
        $user = Auth::user();
        $user->increment('button_clicked'); // incrementa di 1
        $user->refresh(); // aggiorna i dati del modello


        return response()->json([
            'button_clicked' => $user->button_clicked,
        ]);
    }
}