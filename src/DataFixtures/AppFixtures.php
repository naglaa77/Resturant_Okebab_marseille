<?php

namespace App\DataFixtures;

use App\Factory\BurgersFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      BurgersFactory::createMany(20);
    }
}
