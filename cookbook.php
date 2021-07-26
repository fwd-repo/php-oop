<?php
include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe();
$recipe1->setSource = "Delia Smith";
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour",2,"cup");

$recipe2 = new Recipe();
$recipe2->setSource = "Jamie Oliver";

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYield("6 servings");

echo $recipe1;
echo new Render();
//echo Render::displayRecipe($recipe1);