<?php

namespace AgTrader\HeroImage\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Heroimage extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('hero_image', 'entity_id');
    }
}
