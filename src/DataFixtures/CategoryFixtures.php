<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class CategoryFixtures extends Fixture
{
    public function __construct(private ParameterBagInterface $parameterBag)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $uploadCategoryDir = $this->parameterBag->get('upload_category_dir');
        if (!is_dir(__DIR__ . '/../../public/' . $uploadCategoryDir)) {
            mkdir(__DIR__ . '/../../public/' . $uploadCategoryDir, recursive: true);
        }

        $category = new Category();
        $category->setName('entrées');
        $category->setPicture('entree.jpg');
        copy(__DIR__ . '/data/category/entree.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/entree.jpg');
        $this->addReference('category_1', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('plateaux à partager');
        $category->setPicture('plateau.jpg');
        copy(__DIR__ . '/data/category/plateau.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/plateau.jpg');
        $this->addReference('category_2', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('sushis');
        $category->setPicture('sushi.jpg');
        copy(__DIR__ . '/data/category/sushi.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/sushi.jpg');
        $this->addReference('category_3', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('makis');
        $category->setPicture('maki.jpg');
        copy(__DIR__ . '/data/category/maki.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/maki.jpg');
        $this->addReference('category_4', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('california rolls');
        $category->setPicture('california-rolls.jpg');
        copy(__DIR__ . '/data/category/california-rolls.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/california-rolls.jpg');
        $this->addReference('category_5', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('brochettes');
        $category->setPicture('brochette.jpg');
        copy(__DIR__ . '/data/category/brochette.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/brochette.jpg');
        $this->addReference('category_6', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('boissons');
        $category->setPicture('boisson.jpg');
        copy(__DIR__ . '/data/category/boisson.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/boisson.jpg');
        $this->addReference('category_7', $category);
        $manager->persist($category);

        $category = new Category();
        $category->setName('desserts');
        $category->setPicture('dessert.jpg');
        copy(__DIR__ . '/data/category/dessert.jpg',
        __DIR__ . '/../../public/' . $uploadCategoryDir . '/dessert.jpg');
        $this->addReference('category_8', $category);
        $manager->persist($category);

        $manager->flush();
    }
}
