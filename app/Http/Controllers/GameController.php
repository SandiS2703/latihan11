<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\kategori;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class GameController extends Controller
{
    //
    public function index()
    {
        $data['game'] = Game::join('kategori', 'games.id_kategori', '=', 'kategori.id_kategori')
        ->select('games.*', 'kategori.deskripsi')->get();
        return view('content.dashboard-game', $data);
    }

    public function create()
    {
        $data['kategori'] = kategori::all();
        return view('content.dashboard-tambah-game', $data);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Game::create($input);
        return redirect('dashboard-game');
    }

    public function print(){
        $data['game'] = Game::join('kategori', 'games.id_kategori', '=', 'kategori.id_kategori')
        ->select('games.*', 'kategori.deskripsi')->get();
        
        $pdf = PDF::loadView('content.print-game', $data);
        return $pdf->stream();
    }
}
