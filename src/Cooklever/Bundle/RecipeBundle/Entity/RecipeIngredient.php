<?php

namespace Cooklever\Bundle\RecipeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeIngredient
 *
 * @ORM\Table(name="cooklever_recipe_ingredient")
 * @ORM\Entity
 */
class RecipeIngredient
{
    /**
     * @var Recipe
     *
     * @ORM\Id
     * @ORM\ManyToOne(
     *     targetEntity="Cooklever\Bundle\AppBundle\Entity\Recipe",
     *     inversedBy="ingredients",
     *     cascade={"persist"}
     * )
     * @ORM\JoinColumn(name="dish_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $dish;

    /**
     * @var Ingredient
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Cooklever\Bundle\AppBundle\Entity\Ingredient", cascade={"persist"})
     * @ORM\JoinColumn(name="ingredient_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $ingredient;

    /**
     * @var IngredientUnit
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Cooklever\Bundle\AppBundle\Entity\IngredientUnit", cascade={"persist"})
     * @ORM\JoinColumn(name="ingredient_unit_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $ingredientUnit;

    /**
     * @return Recipe
     */
    public function getDish()
    {
        return $this->dish;
    }

    /**
     * @param Recipe $dish
     * @return $this
     */
    public function setDish(Recipe $dish)
    {
        $this->dish = $dish;

        return $this;
    }

    /**
     * @return Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param Ingredient $ingredient
     * @return $this
     */
    public function setIngredient(Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * @return IngredientUnit
     */
    public function getIngredientUnit()
    {
        return $this->ingredientUnit;
    }

    /**
     * @param IngredientUnit $ingredientUnit
     * @return $this
     */
    public function setIngredientUnit(IngredientUnit $ingredientUnit)
    {
        $this->ingredientUnit = $ingredientUnit;

        return $this;
    }
}
