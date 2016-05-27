<?php

namespace AppBundle\Extractor;

/**
 * Class ExtractionEngine
 */
class ExtractionEngine implements IExtractionEngine
{
    /**
     * @var ExtractorFactory
     */
    protected $extractorFactory;

    /**
     * @param ExtractorFactory $extractorFactory
     */
    public function __construct(ExtractorFactory $extractorFactory)
    {
        $this->extractorFactory = $extractorFactory;
    }

    /**
     * Run the extraction process
     * 
     * @param string $resource
     * @param string $format
     */
    public function run($resource, $format)
    {
        $extractor = $this->extractorFactory->CreateExtractor($format);
        $extractor->extract();
    }
}
