<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aktualita;
use App\Models\Oznamy;
use App\Models\Oznamypdf;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ButtonController extends Controller
{
    public function welcome()
    {
        $images = DB::table("aktualitas")->orderByDesc("id")->paginate(10);
        return view('welcome', compact('images'));
    }
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
        $oznamy = Oznamy::all();
        return view('buttons.oznamy', compact('oznamy'));
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

    public function oznamy2()
    {
        $oznamy = DB::table('oznamypdfs')->orderByDesc("id")->paginate(15);
        return view('buttons.oznamy2', compact('oznamy'));
    }
}
