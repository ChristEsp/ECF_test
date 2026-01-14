<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PublicAccessTest extends WebTestCase
{
    public function testBookListPageIsPubliclyAccessible()
    {
        $client = static::createClient();
        $client->request('GET', '/books');
        $this->assertResponseStatusCodeSame(200);
    }
}
