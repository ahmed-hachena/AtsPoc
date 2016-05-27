<?php

namespace AppBundle\Extractor;

/**
 * Class ExtractorFactory
 */
class ExtractorFactory
{
    /**
     * Create staticly the desired Extractor
     * 
     * @param string $format
     * @return JSONExtractor
     * @throws \Exception
     */
    public static function CreateExtractor($format)
    {
        switch ($format) {
            case ExtractorEnum::EXTRACTOR_XML:
                $extrator = new XMLExtractor();
                break;
            case ExtractorEnum::EXTRACTOR_JSON:
                $extrator = new JSONExtractor();
                break;
            default :
                throw new \Exception(
                    sprintf('extractor support only %s|%s formats', ExtractorEnum::EXTRACTOR_XML, ExtractorEnum::EXTRACTOR_JSON)
                );
        }

        return $extrator;
    }
}
