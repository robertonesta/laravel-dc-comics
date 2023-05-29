<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){
        $comics = Comic::all();
        $db = config('db');
        return view('comics', compact('comics', 'db'));

    }

}
