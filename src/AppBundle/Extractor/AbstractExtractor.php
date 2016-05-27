<?php

namespace AppBundle\Extractor;

/**
 * Class AbstractExtractor
 */
abstract class AbstractExtractor
{
    public abstract function validate();

    public abstract function extract();
}
