<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Soupe miso');
        $product->setDescription('Soupe traditionnelle japonaise avec pâte de miso et dashi');
        $product->setPrice(3);
        $product->setCategory($this->getReference('category_1'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Salade de choux');
        $product->setDescription('Mélange de chou finement émincé, assaisonné');
        $product->setPrice(3);
        $product->setCategory($this->getReference('category_1'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Salade hiyashi');
        $product->setDescription('Nouilles froides, légumes frais, vinaigrette, saveurs délicates');
        $product->setPrice(7);
        $product->setCategory($this->getReference('category_1'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Carpaccio de thon');
        $product->setDescription('Fines tranches de thon cru marinées, délicatesse exquise');
        $product->setPrice(10);
        $product->setCategory($this->getReference('category_1'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Edaname');
        $product->setDescription('Fèves de soja vertes, croquantes, légèrement salées');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_1'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Cebolla dream');
        $product->setDescription('8 crispy onion saumon avocat et 8 crispy onion poulet avocat');
        $product->setPrice(15);
        $product->setCategory($this->getReference('category_2'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Plateau A');
        $product->setDescription('30 pièces : 4 Sushi saumon, 2 Sushi thon, 6 California saumon avocat, 
        6 Maki avocat cheese, 6 California thon cuit avocat, 3 Sashimi saumon, 3 Sashimi thon');
        $product->setPrice(33);
        $product->setCategory($this->getReference('category_2'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Plateau B');
        $product->setDescription('46 pièces : 4 Sushi saumon, 2 Sushi thon, 6 California saumon avocat, 
        6 Maki avocat cheese, 6 California thon cuit avocat, 3 Sashimi saumon, 3 Sashimi thon');
        $product->setPrice(53);
        $product->setCategory($this->getReference('category_2'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Plateau deluxe');
        $product->setDescription('70 pièces : 4 Sushi saumon, 2 Sushi thon, 6 California saumon avocat, 
        6 Maki avocat cheese, 6 California thon cuit avocat, 3 Sashimi saumon, 3 Sashimi thon');
        $product->setPrice(79);
        $product->setCategory($this->getReference('category_2'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Sushi saumon');
        $product->setDescription('2 pièces');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_3'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Sushi crevette');
        $product->setDescription('2 pièces');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_3'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Sushi thon rouge');
        $product->setDescription('2 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_3'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Sushi saumon cheese');
        $product->setDescription('2 pièces');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_3'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki concombre');
        $product->setDescription('6 pièces');
        $product->setPrice(3);
        $product->setCategory($this->getReference('category_4'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki concombre cheese');
        $product->setDescription('6 pièces');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_4'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki saumon');
        $product->setDescription('6 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_4'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki avocat');
        $product->setDescription('6 pièces');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_4'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki saumon avocat');
        $product->setDescription('6 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_4'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki avocat cheese');
        $product->setDescription('6 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_5'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki thon cuit avocat');
        $product->setDescription('6 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_5'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki saumon cheese');
        $product->setDescription('6 pièces');
        $product->setPrice(6);
        $product->setCategory($this->getReference('category_5'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Maki poulet tempura');
        $product->setDescription('6 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_5'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Chicken ball');
        $product->setDescription('Brochettes Yakitoris, 2 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_6'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Chicken Barbecue');
        $product->setDescription('Brochettes Yakitoris, 2 pièces');
        $product->setPrice(5);
        $product->setCategory($this->getReference('category_6'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Boeuf fromage');
        $product->setDescription('Brochettes Yakitoris, 2 pièces');
        $product->setPrice(6);
        $product->setCategory($this->getReference('category_6'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('San Pellegrino');
        $product->setDescription('50cl');
        $product->setPrice(2);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Evian');
        $product->setDescription('50cl');
        $product->setPrice(2);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Mogu Mogu');
        $product->setDescription('Saveur litchi 33cl');
        $product->setPrice(3);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Coca Cola');
        $product->setDescription('33cl');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Ice Tea');
        $product->setDescription('33cl');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Singha');
        $product->setDescription('Bière Blonde thailandaise 33cl');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Kirin');
        $product->setDescription('Bière Blonde japonaise 33cl');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Tsingtao');
        $product->setDescription('Bière Blonde chinoise 33cl');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Cuvée Golf de St Tropez');
        $product->setDescription('Rosé 75cl');
        $product->setPrice(20);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('M de Minuty');
        $product->setDescription('Rosé 75cl');
        $product->setPrice(20);
        $product->setCategory($this->getReference('category_7'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Boules coco');
        $product->setDescription('2 pièces');
        $product->setPrice(3);
        $product->setCategory($this->getReference('category_8'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Glace Häagen-Dazs');
        $product->setDescription('Macadamia Nut Brittle');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_8'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Mochis glacés');
        $product->setDescription('2 pièces');
        $product->setPrice(4);
        $product->setCategory($this->getReference('category_8'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Fondant au chocolat');
        $product->setDescription('1 pièce');
        $product->setPrice(3);
        $product->setCategory($this->getReference('category_8'));
        $manager->persist($product);

        $manager->flush();
    }
}
