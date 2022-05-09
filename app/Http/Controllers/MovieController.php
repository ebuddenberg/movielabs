<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\Movie;
use App\Models\Language;
use DB;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        return Movie::get();
    }

    public function create(Request $request){
        $movie = Movie::create($request->all());
        return $movie;
    }

    public function show(Request $request, $id){
        $movie = Movie::find($id);
        return $movie;
    }

    public function update(Request $request, $id){
        $movie = Movie::find($id);
        $movie->update($request->all());
        return $movie;
    }

    public function delete(Request $request, $id){
        return Movie::destroy($id);   
    }

    public function downloadMEC(Request $request, $id){
        $movie = Movie::find($id);
        return response()->view('mec/index', [
            'data' => $movie->mec
        ])->header('Content-Type', 'text/xml');
    }
    public function downloadMMC(Request $request, $id){
        $movie = Movie::find($id);
        return response()->view('mmc/index', [
            'data' => $movie->mmc
        ])->header('Content-Type', 'text/xml');
    }

    public function allLanguages(Request $request){        
        $langs = Language::get();
        return $langs;
    }
}
