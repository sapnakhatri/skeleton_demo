<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\Document;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\Comment;
use Pimcore\Model\Staticroute;
use Pimcore\Model\DataObject;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use AppBundle\Form\CommentForm;


class DefaultController extends FrontendController
{
    /**
     * @Route("/app")
     */
    public function indexAction(Request $request)
    {
        
    }

	/**
     * @Route("/app/{slug}", name="myfirst_dipa")
     */
    public function homeAction(Request $request)
    {
        $this->view->foo = 'bar';
        //return new Response('Hello world from myfirst by Sapna????????????????????');
    }

    
    /**
     * @Route("/Blog/comment")
     */
     public function commentAction(Request $request){

 

        if($request->isMethod('POST')){

 

            // dump((string) $request->getErrors(true, false));die;

 

            $name = $request->get('name');
            $comment = $request->get('comment');
            $email = $request->get('email');

            
            // Create a new object

 

            $commObject = new DataObject\Comment();
            
            // $task = $form->getData();
            $commObject->setKey($task['name'].time());
             $commObject->setName($task['name']);
             $commObject->setComment($task['comment']);
             $commObject->setEmail($task['email']);
             $commObject->setParentId(20);
             $result = $commObject->save();
            if($result){
                
                echo json_encode(array("message"=>"data save sucessfully")); die;
            }

 

        }

    
}
}
