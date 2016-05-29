<?php

namespace AppBundle\Extractor;

use AppBundle\RequestHandler\GuzzleRequestHandler;
use JMS\Serializer\SerializerInterface;
use AppBundle\RequestHandler\Request;

/**
 * Class AbstractExtractor
 */
abstract class AbstractExtractor
{
    /**
     * @var GuzzleRequestHandler
     */
    protected $guzzleRequestHandler;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @param GuzzleRequestHandler $guzzleRequestHandler
     * @param SerializerInterface $serializer
     */
    public function __construct(GuzzleRequestHandler $guzzleRequestHandler, SerializerInterface $serializer)
    {
        $this->guzzleRequestHandler = $guzzleRequestHandler;
        $this->serializer = $serializer;
    }

    /**
     * @param string $resource
     * 
     * @return boolean
     */
    public abstract function validate($resource);

    /**
     * @param string $resource
     * @param string $type
     * @param string $objectNamespace
     */
    public function extract($resource, $type, $objectNamespace)
    {
        $request = new Request('GET', $resource);
        $response = $this->guzzleRequestHandler->handle($request);

        // HACk to change default root names
        if (false !== strpos($response->getHeader('Content-Type'), 'application/xml')) {
            $apiDefaults = ['<root>', '</root>', '<item>', '</item>'];
            $jmsDefaults = ['<result>', '</result>', '<entry>', '</entry>'];
            $responseBody = str_replace($apiDefaults, $jmsDefaults, $response->getBody());
        } else {
            $responseBody = $response->getBody();
        }

        $users = $this->serializer->deserialize($responseBody, 'array<'.$objectNamespace.'>', $type);

        return $users;
    }
}
