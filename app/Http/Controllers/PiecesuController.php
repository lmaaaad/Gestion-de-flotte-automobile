<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use App\Models\Piece;
use Illuminate\Http\Request;




class PiecesuController extends Controller
{
    public function index()
    {
        
        return view('pieces.pieces.show', ['pieces' => Piece::paginate(1000)]);
    }
    
}
