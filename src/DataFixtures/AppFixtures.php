<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Task;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 25; $i++) {

            $faker = Factory::create('fr_FR');

            $hasDescription = mt_rand(0, 2);


            $task = new Task;
            $task->setName($faker->sentence(3))
                ->setBeginAt($faker->dateTimeInInterval('-3 days', '+4 days'));
            if ($hasDescription != 0) {
                $task->setDescription($faker->sentence(mt_rand(2, 5)));
            }
            $manager->persist($task);
        }

        $manager->flush();
    }
}
