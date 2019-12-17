<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\SubscriptionFormType;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Blog;
use Zend\Paginator\Paginator;
use AppBundle\Form\CommentForm;
use Pimcore\Model\DataObject\Comment;

class BlogController extends FrontendController
{	
	
    public function defaultAction(Request $request)
    {
        
    }
    /**
     * @Route("/page")
     */
    public function pageAction(Request $request)
    { 
        // $list = DataObject\Blog::getList([
             $list = new Blog\Listing();
             $paginator = new \Zend\Paginator\Paginator($list);
             $paginator->setCurrentPageNumber( $request->get('page') );
             $paginator->setItemCountPerPage(3);
           
        // ]);
        $this->view->articles = $paginator;
    }

/**
     * @Route("/Blog/{slug}" , name="blog_details")
     */
    public function blogdetailsAction(Request $request)
    { 
        $blogid = $request->get('slug');
        $list = DataObject\Blog::getById($blogid);
        $this->view->blogdetail = $list;

         $list = new Comment\Listing();
        $list->setCondition("blog_id = ".$blogid);
        $objects=$list->load();
         $this->view->comments = $objects;
    }

    /**
     * @Route("/blog/comment")
     */
     public function commentAction(Request $request){

 

        if($request->isMethod('POST')){

            //echo "<pre>"; print_r($request);die;

            // dump((string) $request->getErrors(true, false));die;

            $name = $request->get('name');
            $comment = $request->get('comment');
            $email = $request->get('email');
            $blogid = $request->get('blogid');
            $myObject = DataObject\Blog::getById($blogid);
            
            
            // Create a new object

 

            $commObject = new DataObject\Comment();
            
            // $task = $form->getData();
             $commObject->setKey($name.time());
             $commObject->setName($name);
             $commObject->setBlog_id($blogid);
             $commObject->setComment($comment);
             $commObject->setBlogid($myObject);
             $commObject->setEmail($email);
             $commObject->setParentId($blogid);
              
             $result = $commObject->save();

             // echo "<pre>"; print_r($result);die;
            if($result){
                
                echo json_encode(array("message"=>"data save sucessfully")); 
            }

 

        }

    
    }

     /**
     * @Route("/Blog/{id}" , name="commentlisting")
     */
    public function commentlistingAction(Request $request)
    { 
        $object = DataObject\Blog::getById($request->get('slug'));//print_r($object);exit;
         $list = new Comment\Listing();
         $paginator = new \Zend\Paginator\Paginator($list);
         $paginator->setCurrentPageNumber( $request->get('page') );
         $paginator->setItemCountPerPage(3);
         
         $this->view->articles = $paginator;
         $this->view->object = $object;
    }

     /**
     * @Route("/aboutus")
     */
    public function aboutusAction(Request $request)
    {
       
    }

    /**
     * @Route("/contactus")
     */
    public function contactusAction(Request $request)
    {
       
    }
}
