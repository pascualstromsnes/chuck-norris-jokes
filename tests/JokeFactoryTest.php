<?php

namespace Pascualstromsnes\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Pascualstromsnes\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 476, "joke": "Chuck Norris doesn\'t need a debugger, he just stares down the bug until the code confesses.", "categories": ["nerdy"] } }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris doesn\'t need a debugger, he just stares down the bug until the code confesses.', $joke);
    }
}
