<?php

namespace AppBundle\RequestHandler;

use GuzzleHttp\ClientInterface;

class GuzzleRequestHandler
{
    /**
     * @var ClientInterface 
     */
    private $client;

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Handle a request with guzzle
     * 
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request)
    {
        $guzzleRequest = $this->client->createRequest($request->getVerb(), $request->getUri(), [
            'headers' => $request->getHeaders(),
            'body' => $request->getBody(),
        ]);
        $guzzleResponse = $this->client->send($guzzleRequest);
        $response = new Response($guzzleResponse->getStatusCode());
        $response->setHeaders($guzzleResponse->getHeaders());
        $response->setBody($guzzleResponse->getBody()->__toString());

        return $response;
    }
}
