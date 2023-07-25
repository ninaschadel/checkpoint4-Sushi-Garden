<?php

namespace App\DataFixtures;

use App\Entity\Worker;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class WorkerFixtures extends Fixture
{
    public function __construct(private ParameterBagInterface $parameterBag)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $uploadWorkerDir = $this->parameterBag->get('uploads_worker_dir');
        if (!is_dir(__DIR__ . '/../../public/' . $uploadWorkerDir)) {
            mkdir(__DIR__ . '/../../public/' . $uploadWorkerDir, recursive: true);
        }

        $worker = new Worker();
        $worker->setName('Youri et Jing');
        $worker->setDescription("Youri et Jing sont des membres précieux de 
        l'équipe du restaurant, fournissant un service de qualité et contribuant à garantir 
        une expérience agréable pour chaque client. Ils sont dédiés à rendre chaque visite 
        au restaurant mémorable et plaisante.");
        $worker->setPicture('serveurs.jpg');
        copy(
            __DIR__ . '/data/worker/serveurs.jpg',
            __DIR__ . '/../../public/' . $uploadWorkerDir . '/serveurs.jpg'
        );
        $manager->persist($worker);

        $worker = new Worker();
        $worker->setName('Yaka');
        $worker->setDescription("Yaka est la responsable dynamique du restaurant, dirigé 
        avec compétence. Grâce à ses excellentes compétences en communication et en gestion,
         elle coordonne efficacement l'équipe de serveurs, résolvant les problèmes avec
        empathie pour assurer une expérience client exceptionnelle.");
        $worker->setPicture('responsable.jpg');
        copy(
            __DIR__ . '/data/worker/responsable.jpg',
            __DIR__ . '/../../public/' . $uploadWorkerDir . '/responsable.jpg'
        );
        $manager->persist($worker);

        $worker = new Worker();
        $worker->setName('Gan');
        $worker->setDescription("Gan est un cuisinier passionné et talentueux. 
        Avec créativité et expertise, il prépare des plats délicieux et savoureux qui 
        ravissent les papilles des clients, faisant du restaurant une destination gastronomique prisée.");
        $worker->setPicture('cuisinier.jpg');
        copy(
            __DIR__ . '/data/worker/cuisinier.jpg',
            __DIR__ . '/../../public/' . $uploadWorkerDir . '/cuisinier.jpg'
        );

        $manager->persist($worker);

        $worker = new Worker();
        $worker->setName('Si Ying');
        $worker->setDescription("Si Ying est notre maître sushi hautement qualifié et 
        respecté. Avec une maîtrise de l'art du sushi, il crée des chefs-d'œuvre culinaires 
        avec des ingrédients frais et délicats. Ses créations exquises enchantent les clients 
        et donnent une touche authentique à l'expérience culinaire du restaurant.");
        $worker->setPicture('maitre-sushi.jpg');
        copy(
            __DIR__ . '/data/worker/maitre-sushi.jpg',
            __DIR__ . '/../../public/' . $uploadWorkerDir . '/maitre-sushi.jpg'
        );
        $manager->persist($worker);

        $worker = new Worker();
        $worker->setName('Ryo');
        $worker->setDescription("Avec une vision claire et des compétences de gestion 
        exceptionnelles, Ryo assure le bon fonctionnement de l'établissement. Sous sa 
        direction éclairée, l'équipe offre un service de qualité et une cuisine exceptionnelle, 
        faisant du restaurant une référence incontournable dans la région.");
        $worker->setPicture('directeur.jpg');
        copy(
            __DIR__ . '/data/worker/directeur.jpg',
            __DIR__ . '/../../public/' . $uploadWorkerDir . '/directeur.jpg'
        );
        $manager->persist($worker);

        $manager->flush();
    }
}
