<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Entrées');
        $this->addReference('category_1', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('Plateaux à partager');
        $this->addReference('category_2', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('Sushis');
        $this->addReference('category_3', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('Makis');
        $this->addReference('category_4', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('California Rolls');
        $this->addReference('category_5', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('Brochettes');
        $this->addReference('category_6', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('Boissons');
        $this->addReference('category_7', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('Desserts');
        $this->addReference('category_8', $category);
        $manager->persist($category);

        $manager->flush();
    }
}
