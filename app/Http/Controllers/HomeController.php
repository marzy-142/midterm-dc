<?php
namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'name' => 'Mariella',
            'course' => 'BSIT',
            'year' => '3',
        ]);
    }
}
