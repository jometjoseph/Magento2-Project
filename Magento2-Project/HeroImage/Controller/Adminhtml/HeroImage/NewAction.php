<?php

namespace AgTrader\HeroImage\Controller\Adminhtml\HeroImage;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
/** @var \Magento\Framework\View\Result\PageFactory  */
protected $resultPageFactory;
public function __construct(
     \Magento\Framework\App\Action\Context $context,
     \Magento\Framework\View\Result\PageFactory $resultPageFactory
) {
     $this->resultPageFactory = $resultPageFactory;
     parent::__construct($context);
}
/**
* Load the page defined in view/adminhtml/layout/samplenewpage_sampleform_index.xml
*
* @return \Magento\Framework\View\Result\Page
*/
public function execute()
{
    //  return $this->resultPageFactory->create();
    // return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setUrl('adminhtml/route/controller/action');
    // return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setUrl('adminhtml/layout/samplenewpage_sampleform_index.xml');
    $resultPage = $this->resultFactory->create( ResultFactory::TYPE_PAGE );

        $title = __( 'Add New Hero Details' );
        $resultPage->getConfig()->getTitle()->prepend( $title );

        return $resultPage;
}
}
