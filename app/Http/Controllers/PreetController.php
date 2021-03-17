<?php

namespace App\Http\Controllers;

use App\Models\Preet;
use Illuminate\Http\Request;

class PreetController extends Controller
{
    public function store()
    {
        $assignments = request()->validate(['body' => 'required|max:255']);
        $preet = new Preet();
        $preet->user_id = auth()->user()->id;
        $preet->body = $assignments['body'];
        $preet->save();
        return redirect('/preets');
    }

    public function index(){
        return view('preets.index', [
            'preets' => auth()->user()->timeline()
        ]);
    }

    public function showLiked(){
        return view('preets.liked');
    }
}
