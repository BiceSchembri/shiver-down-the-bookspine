<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    public function show()
    {
        $languages = Language::all();
        return view('languages', ["languages" => $languages]);
    }
}
