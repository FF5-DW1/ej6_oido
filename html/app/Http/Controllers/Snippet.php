<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function index()
    {
        $snippets = [
            [
                "snippetId" => "snippetId1",
                "snippetTitle" => "snippetTitle1",
                "snippetText" => "snippetText1",
            ],
            [
                "snippetId" => "snippetId2",
                "snippetTitle" => "snippetTitle2",
                "snippetText" => "snippetText2",
            ],
        ];

        return view('snippet', [
            "snippets" => $snippets,
        ]);
    }

    public function create(){
        return view('snippet.create');
    }
    public function store(Request $request){
        $validated_data = $request->validate([
            'snippetTitle'  => 'required',
            'snippetText'   => 'required',
        ]);
        return redirect("/feed");
    }
}
