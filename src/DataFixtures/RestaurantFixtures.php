<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class RestaurantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $restaurant = new Restaurant();
        $restaurant->setAddress('38 avenue des sushis 69006 Lyon');
        $restaurant->setPhone('04 08 78 02 59');
        $restaurant->setHourly('Du mardi au dimanche de 11H30 à 14H puis de 18H30 à 22H');
        $manager->persist($restaurant);
        $manager->flush();
    }
}
