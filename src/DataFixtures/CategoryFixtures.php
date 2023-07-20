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
        $category->setName('entrées');
        $this->addReference('category_1', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('plateaux à partager');
        $this->addReference('category_2', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('sushis');
        $this->addReference('category_3', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('makis');
        $this->addReference('category_4', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('california rolls');
        $this->addReference('category_5', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('brochettes');
        $this->addReference('category_6', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('boissons');
        $this->addReference('category_7', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('desserts');
        $this->addReference('category_8', $category);
        $manager->persist($category);

        $manager->flush();
    }
}
