<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Entering Data</title>
</head>
<h1>Nouvelle recette </h1>



    <form action="../../add.php"  method="POST">

        <div>
            <label for="title">Titre :</label>
            <input id="title" name="title" type="text" size="255" required>
        </div> <br>
        <div>
            <label for="description">description:</label>
            <input id="description" name="description" type="text" size="255" required>
        </div> <br>

        <div class="button">
            <button type="submit">Validation</button>
        </div>
    </form>


</html>