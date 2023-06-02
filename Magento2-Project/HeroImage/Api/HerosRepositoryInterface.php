<?php
namespace AgTrader\HeroImage\Api;

use AgTrader\HeroImage\Api\Data\HerosInterface;

interface HerosRepositoryInterface
{
    /**
     * Get value by id
     *
     * @param int $id
     * @return HerosInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);
    
    /**
     * Save Heros details
     *
     * @param HerosInterface $Heros
     * @return HerosInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(HerosInterface $Heros);
}
