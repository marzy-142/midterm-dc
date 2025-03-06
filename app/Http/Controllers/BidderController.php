<?php

namespace App\Http\Controllers;

use App\Models\Bidder;
use Inertia\Inertia;

class BiddersController extends Controller
{
    public function index()
    {
        $bidders = Bidder::all();
        return Inertia::render('Bidder', compact('bidders'));
    }
}
