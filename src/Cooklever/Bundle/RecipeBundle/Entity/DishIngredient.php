<?php

namespace Cooklever\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DishIngredient
 *
 * @ORM\Table(name="cooklever_dish_ingredient")
 * @ORM\Entity
 */
class DishIngredient
{
    /**
     * @var Dish
     *
     * @ORM\Id
     * @ORM\ManyToOne(
     *     targetEntity="Cooklever\Bundle\AppBundle\Entity\Dish",
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
     * @return Dish
     */
    public function getDish()
    {
        return $this->dish;
    }

    /**
     * @param Dish $dish
     * @return $this
     */
    public function setDish(Dish $dish)
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
