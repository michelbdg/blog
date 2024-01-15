<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); //Chargement de Faker en français
        for($i=0; $i < 50; $i++){       //Boucle pour 50 articles
        $post = new Post();
        $post->setTitle($faker->sentence())
            ->setSlug($faker->slug())
            ->setContent($faker->paragraph(5, true))
            ->setImage('https://vie.placeholder.com/350x150')
            ->setCreatedAt(new DateTimeImmutable('1 month ago'))
            ->setUpdateAt(new DateTimeImmutable('1 week ago'))
            ;


        $manager->persist($post);
        };
        $manager->flush();
    }
}
