<?php

namespace AgTrader\HeroImage\Model\ResourceModel\Heroimage;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     *
     * @var string
     */
    protected $_idFieldName = 'entity_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \AgTrader\HeroImage\Model\Heros::class,
            \AgTrader\HeroImage\Model\ResourceModel\Heroimage::class
        );
    }
}
