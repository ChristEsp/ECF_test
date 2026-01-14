<?php

namespace App\Tests\Entity;

use App\Entity\Book;
use App\Entity\Editor;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testSetAndGetTitle()
    {
        $book = new Book();
        $book->setTitle('Test Title');
        $this->assertEquals('Test Title', $book->getTitle());
    }

    public function testSetAndGetEditor()
    {
        $book = new Book();
        $editor = new Editor();
        $editor->setName('Test Editor');
        $book->setEditor($editor);
        $this->assertSame($editor, $book->getEditor());
    }
}
