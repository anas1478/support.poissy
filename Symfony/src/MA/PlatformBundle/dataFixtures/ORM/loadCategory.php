<?php

namespace MA\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MA\PlatformBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
    public function load(ObjectManager $manager) {
        $names = array(
            'Developpement web',
            'Developpement mobile',
            'Developpeur C#',
            'Developpeur Java',
            'Developpeur Front Angular',
            'Developpement Back Symfony'
        );

        foreach($names as $name) {
            $category = new Category();
            $category->setName($name);

            $manager->persist($category);
        }

        $manager->flush();
    }
}