<?php

namespace App\Tests\Entity;

use App\Entity\Editor;
use PHPUnit\Framework\TestCase;

class EditorTest extends TestCase
{
    public function testSetAndGetName()
    {
        $editor = new Editor();
        $editor->setName('Dupond');
        $this->assertEquals('Dupond', $editor->getName());
    }
}
