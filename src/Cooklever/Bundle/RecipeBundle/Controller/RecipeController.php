<?php

namespace Cooklever\Bundle\RecipeBundle\Controller;

use Cooklever\Bundle\RecipeBundle\Entity\Recipe;
use Cooklever\Bundle\RecipeBundle\Form\Type\RecipeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecipeController extends Controller
{
    /**
     * @Route(path="/recipe", name="cooklever_recipe_index")
     * @Template
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route(path="/recipe/create", name="cooklever_recipe_create")
     * @Template
     */
    public function createAction()
    {
        return [
            'form' => $this->createForm(RecipeType::NAME, new Recipe())->createView()
        ];
    }
}
