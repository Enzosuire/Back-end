<?php

function getRecipe(){


try {
    $username = "root";
    $password = "";
    $dsn = "mysql:host=localhost; dbname=bdd_blog_culinaire; port=3306; charset=utf8";
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlrecipe = $db->query('SELECT * FROM t_recipe ORDER BY RAND() LIMIT 1');
    $recipe = $sqlrecipe->fetch();
    return $recipe;
    $db = null;
   
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

};

function getThreeLastRecipes(){


try {
    $username = "root";
    $password = "";
    $dsn = "mysql:host=localhost; dbname=bdd_blog_culinaire; port=3306; charset=utf8";
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlrecipes = $db->query('SELECT * FROM t_recipe ORDER BY rec_id DESC LIMIT 3');
    $recipes = $sqlrecipes->fetchAll();
    return $recipes;
    $db = null;
   
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

};

function getThreeLastReviews(){


try {
    $username = "root";
    $password = "";
    $dsn = "mysql:host=localhost; dbname=bdd_blog_culinaire; port=3306; charset=utf8";
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlComs = $db->query('SELECT * FROM t_comment AS C INNER JOIN t_recipe AS R ON C.id_rec = R.rec_id ORDER BY com_id ASC LIMIT 3');
    $tuple = $sqlComs->fetchAll();
    return $tuple;
    $db = null;
   
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

};
