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
        $user = $request->user();
        $user->increment('button_clicked');

        return redirect()->route('dashboard');
    }
}