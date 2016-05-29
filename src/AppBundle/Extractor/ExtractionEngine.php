<?php

namespace AppBundle\Extractor;

use AppBundle\RequestHandler\GuzzleRequestHandler;
use JMS\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;

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
     * @var GuzzleRequestHandler
     */
    protected $guzzleRequestHandler;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     *
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @param ExtractorFactory $extractorFactory
     * @param GuzzleRequestHandler $guzzleRequestHandler
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        ExtractorFactory $extractorFactory,
        GuzzleRequestHandler $guzzleRequestHandler,
        SerializerInterface $serializer,
        EntityManagerInterface $entityManager
    ) {
        $this->extractorFactory = $extractorFactory;
        $this->guzzleRequestHandler = $guzzleRequestHandler;
        $this->serializer = $serializer;
        $this->entityManager = $entityManager;
    }

    /**
     * Run the extraction process
     * 
     * @param string $resource
     * @param string $type
     */
    public function run($resource, $type)
    {
        $extractor = $this->extractorFactory->CreateExtractor(
            $type,
            $this->guzzleRequestHandler,
            $this->serializer
        );
        if ($extractor->validate($resource)) {
            $users = $extractor->extract($resource, $type, 'AppBundle\Entity\User');
            if (!empty($users)) {
                $this->save($users);
            }
        }
    }

    /**
     * Save Users list
     * 
     * @param array $users
     */
    public function save($users)
    {
        foreach ($users as $user) {
            $this->entityManager->persist($user);
        }
        $this->entityManager->flush();
    }
}
