<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'title' => 'Espacio interior',
                'content' => 'Jardín interior',
                'image' => (asset('images/jpg/jardin-interno.jpg')),
            ],
            [
                'title' => 'Espacio exterior',
                'content' => 'Jardín externo',
                'image' => (asset('images/jpg/jardin-externo.jpg')),

            ],
            [
                'title' => 'Vertical',
                'content' => 'Jardín vertical',
                'image' => (asset('images/jpg/jardin-vertical.jpg')),

            ],
            // Agrega más elementos de slide según sea necesario
        ];

        return view('welcome', compact('slides'));
    }
}