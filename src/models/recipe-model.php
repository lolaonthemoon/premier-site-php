
<?php
// all functions ensuring connexion with the database 
// constants are defined once in config.php


// applying constants in order to connect with mysql database 
function createConnection(): PDO
{
    return new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
}


// retreive all recipes in ths DB
// store the result in array $recipes
function getAllRecipes(): array
{
    $connection = createConnection();

    $statement = $connection->query('SELECT id, title  FROM recipe');
    $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $recipes;
}

// retreive the recipe corresponding to id
// store the result in an associative array $recipe
function getRecipeById(int $id): array
{
    $connection = createConnection();

    $query = 'SELECT title, description FROM recipe WHERE id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $recipe = $statement->fetch(PDO::FETCH_ASSOC);

    return $recipe;
}

 // launch an SQL request to save the recipes of the array recipe
function saveRecipe(array $recipe): void
{   
    $connection = createConnection();
    
    $title = $recipe['title'];
    $description= $recipe['description'];
   
    $query = 'INSERT INTO recipe (title, description)
    VALUES (:title, :description)';

    $statement = $connection->prepare($query);
    $statement->bindValue(':title', $title, PDO::PARAM_STR);
    $statement->bindValue(':description', $description, PDO::PARAM_STR);
    $statement->execute();

   
}
