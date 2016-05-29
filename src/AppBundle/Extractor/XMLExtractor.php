<?php

namespace AppBundle\Extractor;

use AppBundle\RequestHandler\Request;

/**
 * Class XMLExtractor
 */
class XMLExtractor extends AbstractExtractor
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

        if (false === strpos($response->getHeader('Content-Type'), 'application/xml')) {
            return false;
        }

        return true;
    }
}
