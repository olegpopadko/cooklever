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
     * @ORM\ManyToOne(targetEntity="Cooklever\Bundle\AppBundle\Entity\Dish", cascade={"persist"})
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
     * @var Unit
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Cooklever\Bundle\AppBundle\Entity\Unit", cascade={"persist"})
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $unit;

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
     * @return Unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param Unit $unit
     * @return $this
     */
    public function setUnit(Unit $unit)
    {
        $this->unit = $unit;

        return $this;
    }
}
