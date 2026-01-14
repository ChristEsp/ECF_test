<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityAccessTest extends WebTestCase
{
    public function testAdminRouteRedirectsToLoginIfNotAuthenticated()
    {
        $client = static::createClient();
        $client->request('GET', '/admin');
        $this->assertResponseRedirects('/login');
    }

    public function testAdminRouteAccessibleForAdminUser()
    {
        $client = static::createClient();
        // Simule la soumission du formulaire de login
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Sign in')->form();
        $form['_username'] = 'admin@example.com';
        $form['_password'] = 'admin';
        $client->submit($form);
        $client->followRedirect();
        $client->request('GET', '/admin');
        $this->assertResponseStatusCodeSame(200);
    }
}
