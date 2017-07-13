<?php

namespace AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'login');
    }

    public function testLogin_check()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login_check');
    }

}
