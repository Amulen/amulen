<?php
namespace Amulen\DashboardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Amulen\PageBundle\Entity\Page;
use Amulen\PageBundle\Entity\Menu;
use Amulen\PageBundle\Entity\MenuItem;

/**
 * Description of LoadUserData
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /* Create Homepage */
        $homepage = new Page();
        $homepage->setName("Homepage");
        $homepage->setDescription("Default Homepage.");
        $homepage->setTemplate("FlowcodePageBundle:Page:default.html.twig");
        $homepage->setEnabled(true);
        $manager->persist($homepage);
        $this->addReference("page_homepage", $homepage);

        /* Create Products */
        $page_products = new Page();
        $page_products->setName("Example");
        $page_products->setDescription("Example default page");
        $page_products->setTemplate("FlowcodePageBundle:Page:default.html.twig");
        $page_products->setEnabled(true);
        $manager->persist($page_products);
        $this->addReference("page_products", $page_products);

        /* Create Products */
        $menuMain = new Menu();
        $menuMain->setName("Main Menu");
        $menuMain->setEnabled(true);
        $manager->persist($menuMain);
        $this->addReference("menu_main", $menuMain);

        /* set root item */
        $rootItem = new MenuItem();
        $rootItem->setName($menuMain->getName()." Root Item");
        $rootItem->setIsRoot(true);
        $rootItem->setMenu($menuMain);
        $manager->persist($rootItem);

        $exampl1Item = new MenuItem();
        $exampl1Item->setName("Example Page");
        $exampl1Item->setMenu($menuMain);
        $exampl1Item->setPage($page_products);
        $exampl1Item->setParent($rootItem);
        $manager->persist($exampl1Item);


        $manager->flush();
    }
    public function getOrder()
    {
        return 3;
    }
}
