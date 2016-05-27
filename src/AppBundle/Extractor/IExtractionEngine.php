<?php

namespace AppBundle\Extractor;

/**
 * Interface IExtractionEngine
 */
interface IExtractionEngine
{
    /**
     * Run the extraction process
     * 
     * @param string $resource
     * @param string $format
     */
    public function run($resource, $format);
}
