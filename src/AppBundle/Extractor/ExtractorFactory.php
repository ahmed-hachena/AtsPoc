<?php

namespace AppBundle\Extractor;

use AppBundle\RequestHandler\GuzzleRequestHandler;
use JMS\Serializer\SerializerInterface;

/**
 * Class ExtractorFactory
 */
class ExtractorFactory
{
    /**
     * Create staticly the desired Extractor
     * 
     * @param string $type
     * @param GuzzleRequestHandler $guzzleRequestHandler
     * @param SerializerInterface $serializer
     * @return XMLExtractor|JSONExtractor
     * @throws \Exception
     */
    public static function CreateExtractor($type, GuzzleRequestHandler $guzzleRequestHandler, SerializerInterface $serializer)
    {
        switch ($type) {
            case ExtractorEnum::EXTRACTOR_XML:
                $extrator = new XMLExtractor($guzzleRequestHandler, $serializer);
                break;
            case ExtractorEnum::EXTRACTOR_JSON:
                $extrator = new JSONExtractor($guzzleRequestHandler, $serializer);
                break;
            default :
                throw new \Exception(
                    sprintf('extractor support only %s|%s formats', ExtractorEnum::EXTRACTOR_XML, ExtractorEnum::EXTRACTOR_JSON)
                );
        }

        return $extrator;
    }
}
