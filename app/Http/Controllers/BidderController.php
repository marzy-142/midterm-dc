<?php
// app/Http/Controllers/BidderController.php
namespace App\Http\Controllers;

use App\Models\Bidder;
use Inertia\Inertia;

class BidderController extends Controller
{
    public function index()
    {
        $bidders = Bidder::all();
        return Inertia::render('Bidders', ['bidders' => $bidders]);
    }
}
