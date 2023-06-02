<?php
namespace AgTrader\HeroImage\Model\SampleForm;

use AgTrader\HeroImage\Model\ResourceModel\Heroimage\CollectionFactory;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
class DataProvider extends AbstractDataProvider
{

     /**

      * @var $loadedData

      */

     protected $loadedData;

     /**

      * @var $dataPersistor

      */

     protected $dataPersistor;

     /**

      * @var $collection

      */

     protected $collection;




     /**

      * Constructor

      *

      * @param string $name

      * @param string $primaryFieldName

      * @param string $requestFieldName

      * @param CollectionFactory $collectionFactory

      * @param DataPersistorInterface $dataPersistor

      * @param array $meta

      * @param array $data

      */

     public function __construct(

          $name,

          $primaryFieldName,

          $requestFieldName,

          CollectionFactory $collection,

          array $meta = [],

          array $data = []

     ) {

          $this->collection = $collection->create();

          parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);

     }






     /**

      * Get data

      *

      * @return array

      */

     public function getData()
     {

          if (isset($this->loadedData)) {

               return $this->loadedData;

          }

          $items = $this->collection->getItems();

          foreach ($items as $model) {

               $this->loadedData[$model->getId()] = $model->getData();

          }

          return $this->loadedData;

     }

}