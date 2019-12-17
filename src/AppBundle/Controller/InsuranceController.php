<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Product;
use Pimcore\Model\DataObject\Objectbr;
use Pimcore\Model\DataObject\Person;
use Pimcore\Model\DataObject;
use Pimcore\Model\Asset;
use Pimcore\Model\Document;
use Zend\Paginator\Paginator;
use Pimcore\Model\DataObject\Testdocument;
use Pimcore\Model\DataObject\Tire;
use Pimcore\Model\DataObject\Fieldcollection;
use Pimcore\Model\DataObject\Collectiontest;
// use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Model\DataObject\Fieldcollection\Data\documents;
use AppBundle\Logger\AppLogger;
use Pimcore\Db;


class InsuranceController extends FrontendController
{

    public function listAction(Request $request)
    {
       $list = new Product\Listing();
       $paginator = new \Zend\Paginator\Paginator($list);
       $paginator->setCurrentPageNumber( $request->get('page') );
       $paginator->setItemCountPerPage(3);

       $this->view->products = $paginator;
   }

    /**
     * @Route("/insurancePolicy/{slug}" , name="Blog")
     */
    public function insurancelistingAction(Request $request)
    { 
        $productid = $request->get('slug');
        $list = DataObject\Product::getById($productid);
        $this->view->insurancedetails = $list;

         $list1 = new Person\Listing();//print_r($list);die;
        // $list->setCondition("insuredPerson = ".$productid);
         $objects=$list1->load();
         $this->view->persons = $objects;
     }

     public function customerAction(Request $request)
     {
       $list = new Person\Listing();
       $paginator = new \Zend\Paginator\Paginator($list);
       $paginator->setCurrentPageNumber( $request->get('page') );
       $paginator->setItemCountPerPage(3);

       $this->view->persons = $paginator;
   }


    /**
     * @Route("/fieldcollection" )
     */
    public function fieldcollectionAction(Request $request)
    { 
        $object = new DataObject\Product();
        $object->setKey(uniqid() . rand(10, 99));

        $object->setParentId(71);
        $items = new DataObject\Fieldcollection();

        for ($i = 0; $i < 5; $i++) {
            $item = new DataObject\Fieldcollection\Data\Testdocument();
            $item->setBooks("This is a test " . $i);
            $items->add($item);
        }
        // print_r($items);exit;
        $object->setCollections($items);
        $object->save();
    }

     /**
     * @Route("/objectbricks" )
     */
     public function objectbricksAction(Request $request)
     { 


        $product = new DataObject\Product();
        $product->setKey("testproduct".time());

        $tiretype = $product->setParentId(92);
        //echo '<pre>';print_r($tiretype);die;

        // $product->setName("testproduct");

        $tireBrick = new DataObject\Objectbrick\Data\Tire($product);
        $tireBrick->setTiretype("allyear");
        $tireBrick->setDimension(23);
        
        $parent_data =  $product->getBricks()->setTire($tireBrick);

        $product->save();
        //p_r($tiretype);die;
    }

    /**
     * @Route("/deletebricks" )
     */
    public function deletebricksAction(Request $request)
    { 
        $product = DataObject\Product::getById(93);
        $product->getBricks()->delete($product);
        $product->save();
    }

     /**
     * @Route("/collectionstore" )
     */
     public function collectionstoreAction(Request $request)
     { 
        $object = DataObject\Objectbr::getById(90);
        $classification = new DataObject\ClassDefinition\Data\Classificationstore;
        $GroupConfig = new DataObject\Classificationstore\GroupConfig\Listing();
        $GroupConfig1 = $GroupConfig->load();ECHO "<pre>";
        $StoreConfig = new DataObject\Classificationstore\KeyConfig\Listing();
        $StoreConfig1 = $StoreConfig->load();ECHO "<pre>"; print_r($object->getStores()->getItems());die;
        $relation = new DataObject\Classificationstore\KeyGroupRelation\Listing();
        $relation->setCondition('keyId = 6' );
        $relation1 = $relation->load();
        foreach ($relation1 as $keyGroupRelation) {
            // print_r($keyGroupRelation);
                $childDef = DataObject\Classificationstore\Service::getFieldDefinitionFromKeyConfig($keyGroupRelation); //print_r($keyGroupRelation->getValue());
            }
            die;


        }


        public function getClassificationStoreId($name) {
            $classificationStorelist = new DataObject\Classificationstore\StoreConfig\Listing();
            $classificationStorelist->setCondition("name = '$name'");
            $classificationStorelist->setLimit(1);
            $classificationStorelist->load();
            $classificationList = $classificationStorelist->getlist();
            if (!empty($classificationList)) {
                return $classificationList[0]->id;
            }
            return false;
        }

    /**
     * @Route("/saveclassAction" )
     */


    public function saveclassAction(){
        
        $classification = new DataObject\ClassDefinition\Data\Classificationstore();
         $db = Db::get();
        $stmtClsGroup = $db->query("Select * from object_classificationstore_groups_4 WHERE  o_id = 88 AND groupId = 1");
        $clsCollGroupArr = $stmtClsGroup->fetch();

        //$stmtClsGroupData = $db->query("Select * from object_classificationstore_data_4 WHERE  o_id = 88 AND keyId = 1 AND groupId = 1");
            //$clsCollGroupDataArr = $stmtClsGroupData->fetch();

        $sqlGroupData = "INSERT INTO object_classificationstore_data_4 (o_id , collectionId, groupId , keyId, value, value2)
                VALUES (91,1,1,1,'hello4','world4'),(92,1,1,1,'hello5','world5')";
        $db->query($sqlGroupData);

        print_r( $clsCollGroupDataArr);die;

    }

    public function saveClassificationStoreValue($clsAttrValue,$clsAttrType,$attrKeyId,$groupCollDataArr,$itemObjectId,$valueUnit)
    {
        try{  
            $groupId=$groupCollDataArr['groupId'];
            $collId=$groupCollDataArr['colId'];
            $language='default';
            $stmtClsGroup = $this->objPimDb->query("Select * from object_classificationstore_groups_16 WHERE  o_id = '".$itemObjectId."' AND groupId = '".$groupId."'");
            $clsCollGroupArr = $stmtClsGroup->fetch();
            if(empty($clsCollGroupArr)){
                $sqlClsGroup = "INSERT INTO object_classificationstore_groups_16 (o_id , groupId, fieldname) VALUES (" . $itemObjectId . ", " . $groupId . ", 'acaProductsAttributes')";
                $this->objPimDb->query($sqlClsGroup);
            }
            $stmtClsGroupData = $this->objPimDb->query("Select * from object_classificationstore_data_16 WHERE  o_id = '".$itemObjectId."' AND keyId = '".$attrKeyId."' AND groupId = '".$groupId."'");
            $clsCollGroupDataArr = $stmtClsGroupData->fetch();
            if(empty($clsCollGroupDataArr)){
                $sqlGroupData = "INSERT INTO object_classificationstore_data_16 (o_id , collectionId, groupId , keyId, value, value2, language, type,fieldname)
                VALUES (" . $itemObjectId.",".$collId.", ".$groupId.",".$attrKeyId.",'".$clsAttrValue."','".$valueUnit."','".$language."','".$clsAttrType."','acaProductsAttributes')";
                $this->objPimDb->query($sqlGroupData);
            }else{
                $updSqlGroupData = "Update object_classificationstore_data_16 set value='".$clsAttrValue."',value2='".$valueUnit."', type='".$clsAttrType."'
                where o_id = '".$itemObjectId."' AND keyId = '".$attrKeyId."' AND groupId = '".$groupId."'";
                $this->objPimDb->query($updSqlGroupData);
            }

        } catch (\Exception $ex) {
            print_r($ex->getMessage());
            AppLogger::log(self::NON_STANDARD_LOOGER)->error($ex->getMessage());
        }
    }



     /**
     * @Route("/assetshelper" )
     */
     public function assetshelperAction(Request $request){
        // $list = new \Pimcore\Model\Asset\Listing();
        // $list->load();

        $newAsset = new Asset();
        $newAsset->setFilename("test.jpg");
        $newAsset->setData(file_get_contents("/Ikea/logo.jpg"));
        $newAsset->setParent(Pimcore\Model\Asset::getByPath("/"));
        $newAsset->save();

        // $asset1 = Pimcore\Model\Asset::getById(3456);
        // $asset2 = Pimcore\Model\Asset::getByPath("/my-assets/sample.png");
    }

    /**
     * @Route("/createinsurance" )
     */
    public function createinsuranceAction()
    {
        $product = new DataObject\Product();
        $tiretype = $product->setParentId(71);
        $product->setKey("product-".time());
        
        /********attributes*********/

        $product->setPolicyType("AI");
        $product->setPolicyName("Health");
        $product->setPolicyTerm("Terms Testing");
        $product->setPremium("12");
        

        /****** object brick************/

        $Brick = new DataObject\Objectbrick\Data\Health($product);
        
        $Brick->setInsuredAmount("52222");
        $Brick->setDiseasesCovered("health issue");
        $Brick->setExclusions("522220");
        $Brick->setExistingDiseases("reer");
        $product->getSpecificAttribute()->setHealth($Brick);

        
        $tireBrick = new DataObject\Objectbrick\Data\Tire($product);
        $tireBrick->setTiretype("allyear");
        $tireBrick->setDimension(23);
        $product->getBricks()->setTire($tireBrick);

        /************relation attribute ******/
        $product->setInsuredPerson([

            DataObject\Person::getById(74)
        ]);

        /*********collection Attribute*************/


        $items = new DataObject\Fieldcollection();
        $item = new DataObject\Fieldcollection\Data\Documents();
        $item->setName("This is a test Document");
        $item->setDocumentType("This is a test Document");
        $item->setDocumentFile(Document::getById(55));
        $items->add($item);
        $product->setDocuments($items);


        $product->save();
    } 

    /**
     * @Route("/updateinsurance" )
     */
    public function updateinsuranceAction()
    {
        $product = DataObject\Product::getById(103);
        $tiretype = $product->setParentId(71);
        $product->setKey("product-".time());
        
        /********attributes*********/

        $product->setPolicyType("AI");
        $product->setPolicyName("Health11");
        $product->setPolicyTerm("Terms Testing11");
        $product->setPremium("1223");
        

        /****** object brick************/

        $Brick = new DataObject\Objectbrick\Data\Health($product);
        
        $Brick->setInsuredAmount("52222");
        $Brick->setDiseasesCovered("health issue11");
        $Brick->setExclusions("52222011");
        $Brick->setExistingDiseases("reer11");
        $product->getSpecificAttribute()->setHealth($Brick);

        
        $tireBrick = new DataObject\Objectbrick\Data\Tire($product);
        $tireBrick->setTiretype("allyear11");
        $tireBrick->setDimension(2322);
        $product->getBricks()->setTire($tireBrick);

        /************relation attribute ******/
        $product->setInsuredPerson([

            DataObject\Person::getById(74)
        ]);

        /*********collection Attribute*************/


        $items = new DataObject\Fieldcollection();
        $item = new DataObject\Fieldcollection\Data\Documents();
        $item->setName("This is a test Document");
        $item->setDocumentType("This is a test Document");
        $item->setDocumentFile(Asset::getById(55));
        
        $items->add($item);
        $product->setDocuments($items);//product class's attribute name


        $product->save();
    } 

    /**
     * @Route("/deleteinsurance" )
     */
    public function deleteinsuranceAction()
    {   
        $product = DataObject\Product::getById(82);
        // delete($product);
        $product->delete();


    }

}
