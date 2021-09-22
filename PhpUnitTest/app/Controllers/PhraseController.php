<?php

namespace App\Controllers;
use App\App;
use App\Models\Order;
use App\Models\Phrase;
use App\View;
use PDO;


class PhraseController
{
    public function index() {

        $phrases = new Phrase();


        return View::make('phrases/index',[
            'phrases'=> $phrases->getAllPhrases(),
            'success'=>false

        ])->render(true);

    }
    public function create() {

        return View::make('phrases/create',[

        ])->render(true);
    }
    public function store() {

            $phrase = $_POST['phraseStore'];
            $phrases = new Phrase();
            $phrases ->store($phrase);

             return View::make('phrases/index',[
            'phrases'=> $phrases->getAllPhrases(),
                 'success'=>true

            ])->render(true);


        }



}