<?php

namespace AppBundle\Extractor;

use AppBundle\RequestHandler\Request;

/**
 * Class JSONExtractor
 */
class JSONExtractor extends AbstractExtractor
{
    /**
     * @param string $resource
     * 
     * @return boolean
     */
    public function validate($resource)
    {
        $request = new Request('GET', $resource);
        $response = $this->guzzleRequestHandler->handle($request);

        if (false === strpos($response->getHeader('Content-Type'), 'application/json')) {
            return false;
        }

        $body = $response->getBody();
        $json = json_decode($body, true);

        if (json_last_error()) {
            return false;
        }

        return true;
    }
}
