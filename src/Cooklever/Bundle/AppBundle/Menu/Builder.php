<?php
/**
 * Created by Oleg Popadko
 * Date: 9/17/15
 * Time: 12:16 PM
 */

namespace Cooklever\Bundle\AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    /**
     * @param FactoryInterface $factory
     * @param array $options
     * @return ItemInterface
     */
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem(
            'CookLEVER',
            [
                'route'  => 'homepage',
                'extras' => ['menu_type' => 'topbar'],
            ]
        );

        if (!$this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $this->buildAnonymous($menu);
        } else {
            $this->buildAuthenticated($menu);
        }

        return $menu;
    }

    /**
     * @param ItemInterface $menu
     */
    private function buildAuthenticated(ItemInterface $menu)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $menu->addChild('@' . $user->getUserName(), ['uri' => '#',]);
        $menu->addChild(
            $this->container->get('translator')->trans('layout.logout', [], 'FOSUserBundle'),
            ['route' => 'fos_user_security_logout']
        );
    }

    /**
     * @param ItemInterface $menu
     */
    private function buildAnonymous(ItemInterface $menu)
    {
        $menu->addChild(
            $this->container->get('translator')->trans('layout.register', [], 'FOSUserBundle'),
            ['route' => 'fos_user_registration_register']
        );
        $menu->addChild(
            $this->container->get('translator')->trans('layout.login', [], 'FOSUserBundle'),
            ['route' => 'fos_user_security_login']
        );
    }
}
