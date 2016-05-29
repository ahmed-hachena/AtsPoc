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
     * @param string $type
     */
    public function run($resource, $type);

    /**
     * Save Users list
     * 
     * @param array $users
     */
    public function save($users);
}
