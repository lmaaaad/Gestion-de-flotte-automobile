<?php

namespace App\Http\Controllers;

use App\Models\Searchbar;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autocomplete(Request $req)
    {
    $data=Searchbar::select ('name')->where("name","LIKE","%($req->input('query')}%")->get();
    return response()->json($data);
    }
}
