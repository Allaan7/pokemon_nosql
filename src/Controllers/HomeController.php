<?php

namespace App\Controllers;

use App\Models\Pokemon;
use App\Utils\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $pokemons = new Pokemon(null, null, null, null, null);
        $allpokemons = $pokemons->getAll();
        require_once(__DIR__ . '/../Views/home.view.php');
    }
}
