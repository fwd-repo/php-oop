<?php

class Recipe
{
	public $title;
	public $ingredients = array();
	public $instructions = array();
	public $yield;
	public $tag = array();
	public $source = "Ed T";

	public function displayRecipe()
	{
		return $this->title . " by " . $this->source;
	}

}

$recipe1 = new Recipe();
$recipe1->source = "Delia Smith";
$recipe1->title = "My First Recipe";

$recipe2 = new Recipe();
$recipe2->source = "Jamie Oliver";
$recipe2->title = "My Second Recipe";

echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();