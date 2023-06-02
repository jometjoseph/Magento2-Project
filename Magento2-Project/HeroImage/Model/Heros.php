<?php

namespace AgTrader\HeroImage\Model;

use Magento\Framework\Model\AbstractModel;
class Heros extends AbstractModel
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(ResourceModel\Heroimage::class);
    }

}
