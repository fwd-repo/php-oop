<?php

class Recipe
{
	private $title;
	public $ingredients = array();
	public $instructions = array();
	public $yield;
	public $tag = array();
	public $source = "Ed T";
  
  public function setTitle($title)
  {
    $this->title = ucwords($title); 
  }
  
  public function getTitle()
  {
    return $this->title; 
  }
  
	public function displayRecipe()
	{
		return $this->title . " by " . $this->source;
	}

}

$recipe1 = new Recipe();
$recipe1->source = "Delia Smith";
$recipe1->setTitle("my first recipe");

$recipe2 = new Recipe();
$recipe2->source = "Jamie Oliver";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();