<?php

namespace Cooklever\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Dish
 *
 * @ORM\Table(name="cooklever_dish")
 * @ORM\Entity
 */
class Dish
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="`label`", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="method_of_preparation", type="text")
     */
    private $methodOfPreparation;

    /**
     * @var ArrayCollection
     *
     * @ORM\Id
     * @ORM\OneToMany(
     *     targetEntity="Cooklever\Bundle\AppBundle\Entity\DishIngredient",
     *     mappedBy="dish",
     *     cascade={"ALL"},
     *     orphanRemoval=true
     * )
     */
    private $ingredients;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set methodOfPreparation
     *
     * @param string $methodOfPreparation
     * @return $this
     */
    public function setMethodOfPreparation($methodOfPreparation)
    {
        $this->methodOfPreparation = $methodOfPreparation;

        return $this;
    }

    /**
     * Get methodOfPreparation
     *
     * @return string
     */
    public function getMethodOfPreparation()
    {
        return $this->methodOfPreparation;
    }

    /**
     * Add ingredient
     *
     * @param DishIngredient $ingredient
     * @return $this
     */
    public function addIngredient(DishIngredient $ingredient)
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param DishIngredient $ingredient
     * @return $this
     */
    public function removeIngredient(DishIngredient $ingredient)
    {
        $this->ingredients->removeElement($ingredient);

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return ArrayCollection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
