<?php

namespace App\Tests\Entity;

use App\Entity\Author;
use PHPUnit\Framework\TestCase;

class AuthorTest extends TestCase
{
    public function testSetAndGetName()
    {
        $author = new Author();
        $author->setName('Chris');
        $this->assertEquals('Chris', $author->getName());
    }

    public function testSetAndGetDateOfBirth()
    {
        $author = new Author();
        $date = new \DateTimeImmutable('1997-10-11');
        $author->setDateOfBirth($date);
        $this->assertEquals($date, $author->getDateOfBirth());
    }
}
