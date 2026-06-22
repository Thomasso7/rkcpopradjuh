<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function kancelaria()
    {
        return view('buttons.kancelaria');
    }

    public function dane()
    {
        return view('buttons.dane');
    }

    public function kontakt()
    {
        return view('buttons.kontakt');
    }

    public function farnost()
    {
        return view('buttons.farnost');
    }

    public function oznamy()
    {
        return view('buttons.oznamy');
    }

    public function krst()
    {
        return view('buttons.krst');
    }

    public function zmierenie()
    {
        return view('buttons.zmierenie');
    }

    public function manzelstvo()
    {
        return view('buttons.manzelstvo');
    }

    public function pohreb()
    {
        return view('buttons.pohreb');
    }

    public function prijimanie()
    {
        return view('buttons.prijimanie');
    }

    public function pomazanie()
    {
        return view('buttons.pomazanie');
    }

    public function sviatosti()
    {
        return view('buttons.sviatosti');
    }

    public function knazi()
    {
        return view('buttons.knazi');
    }

    public function nauky()
    {
        return view('buttons.nauky');
    }

    public function oznamy2()
    {
        return view('buttons.oznamy2');
    }
}
