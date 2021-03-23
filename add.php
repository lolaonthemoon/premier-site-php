<?php

require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';
echo "to";

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  
    $title = $_POST['title'];
    $description = $_POST['description'];
    $recipe = ["title"=>$title, "description"=>$description];
 
    saveRecipe($recipe);
    header('Location: /');

    // if (empty($errors)) {
    //     saveRecipe($recipe);
    //     header('Location: /');
    // }
};


// le chemin par de DIR qui est le current directory
require __DIR__ . '/src/views/form.php';