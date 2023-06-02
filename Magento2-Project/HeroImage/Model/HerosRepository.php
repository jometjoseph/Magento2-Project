<?php

namespace AgTrader\HeroImage\Model;

use AgTrader\HeroImage\Api\Data\HerosInterface;
use AgTrader\HeroImage\Api\HerosRepositoryInterface;
use AgTrader\HeroImage\Model\ResourceModel\Heroimage;
use AgTrader\HeroImage\Model\ResourceModel\Heroimage\CollectionFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class HerosRepository implements HerosRepositoryInterface
{

    /**
     * @var HerosInterface
     */
    private $HerosFactory;

    /**
     * @var Heros
     */
    private $HerosResource;

    /**
     * @var CollectionFactory
     */
    private $HerosCollectionFactory;

    /**
     * @param HerosInterface $HerosFactory
     * @param Heros $HerosResource
     * @param CollectionFactory $HerosCollectionFactory
     */
    public function __construct(
        HerosInterface $HerosFactory,
        Heros $HerosResource,
        CollectionFactory $HerosCollectionFactory
    ) {
        $this->HerosFactory = $HerosFactory;
        $this->HerosResource = $HerosResource;
        $this->HerosCollectionFactory = $HerosCollectionFactory;
    }

    /**
     * Get row by id
     *
     * @param int $id
     */
    public function getById($id)
    {
        $Heros = $this->HerosCollectionFactory->create();
        $this->HerosResource->load($Heros, $id);
        if (!$Heros->getId()) {
            throw new NoSuchEntityException(__('Unable to find Heros with ID "%1"', $id));
        }
        return $Heros;
    }

    /**
     * Save Heros values
     */
    public function save(HerosInterface $Heros)
    {
        try {
            $this->HerosResource->save($Heros);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __('Could not save the Heros: %1', $exception->getMessage())
            );
        }
        return $Heros;
    }
}
