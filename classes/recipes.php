<?php

class Recipe
{
	public $title;
	public $ingredients = array();
	public $instructions = array();
	public $yield;
	public $tag = array();
	public $source = "Ed T";

}

$recipe1 = new Recipe();
echo $recipe1->source;
$recipe1->source = "Delia Smith";
echo $recipe1->source;

$recipe2 = new Recipe();
$recipe2->source = "Jamie Oliver";
echo $recipe1->source;
echo $recipe2->source;