<?php

namespace App\Http\Controllers;

class FunFactController extends Controller
{
    public function getRandomFunFact() {
        return \App\Models\FunFact::inRandomOrder()->first();
    }
}
