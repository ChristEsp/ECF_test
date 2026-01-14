<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Editor;

class DatabaseFixturesTest extends WebTestCase
{
    public function testFixturesContainAtLeastOneBookAuthorEditor()
    {
        self::bootKernel();
        $container = static::getContainer();
        /** @var EntityManagerInterface $em */
        $em = $container->get(EntityManagerInterface::class);

        $this->assertGreaterThan(0, $em->getRepository(Book::class)->count([]), 'At least one book in DB');
        $this->assertGreaterThan(0, $em->getRepository(Author::class)->count([]), 'At least one author in DB');
        $this->assertGreaterThan(0, $em->getRepository(Editor::class)->count([]), 'At least one editor in DB');
    }
}
