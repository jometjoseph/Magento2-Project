<?php

namespace AgTrader\HeroImage\Controller\Adminhtml\HeroImage;

use Magento\Backend\App\Action\Context;

use Magento\Framework\View\Result\PageFactory;

use \Magento\Backend\App\Action;

use Magento\Framework\Controller\ResultFactory;

class Index extends Action {

    public function execute() {

        $resultPage = $this->resultFactory->create( ResultFactory::TYPE_PAGE );

        $title = __( 'Manage Hero Image' );
        $resultPage->getConfig()->getTitle()->prepend( $title );

        return $resultPage;
    }

}