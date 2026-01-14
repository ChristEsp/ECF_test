<?php

namespace App\DataFixtures;

use App\Factory\AuthorFactory;
use App\Factory\BookFactory;
use App\Factory\EditorFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        EditorFactory::createMany(20);
        AuthorFactory::createMany(50);
        UserFactory::createMany(5);
        BookFactory::createMany(100);

        UserFactory::createOne([
            'email' => 'admin@example.com',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'roles' => ['ROLE_ADMIN'],
            'password' => 'admin',
        ]);
    }
}
