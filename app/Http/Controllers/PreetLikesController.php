<?php

namespace App\Http\Controllers;

use App\Models\Preet;
use Illuminate\Http\Request;

class PreetLikesController extends Controller
{
    public function store(Preet $preet){
        $preet->like(auth()->user());
        return back();
    }
    public function destroy(Preet $preet){
        $preet->dislike(auth()->user());
        return back();
    }
}
