<?php

namespace App\Controllers;

use App\Models\Pokemon;
use App\Utils\AbstractController;

class PokemonController extends AbstractController
{
    public function addPokemon()
    {
        if(isset($_POST["name"])){
            $name = htmlspecialchars($_POST["name"]);
            $type = htmlspecialchars($_POST["type"]);
            $level = htmlspecialchars($_POST["level"]);
            $description = htmlspecialchars($_POST["description"]);

            $this->check('name', $name);
            $this->check('type', $type);
            $this->check('level', $level);
            $this->check('description', $description);

            if(empty($this->arrayError)){

                // Créer un objet Pokemon
                $pokemon = new Pokemon(null, $name, $type, $level, $description);

                // Enregistrer le Pokémon dans la base de données
                if ($pokemon->save()) {
                    // Redirection vers une page de succès ou afficher un message de succès
                    $this->redirectToRoute('/');
                } else {
                    echo "Erreur lors de l'ajout du Pokémon.";
                }
            }


        }
        require_once (__DIR__ . "/../Views/pokemon/createPokemon.view.php");
    }

    public function index()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $pokemons = new Pokemon($id, null, null, null, null);
            $pokemon = $pokemons->getById();
            require_once(__DIR__ . '/../Views/pokemon/detailPokemon.view.php');
        }else{
            echo "Erreur: l'id du pokémon est incorrecte !";
        }
        
    }
}