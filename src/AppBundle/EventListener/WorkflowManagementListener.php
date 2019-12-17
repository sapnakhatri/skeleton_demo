<?php

namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Pimcore\Event\Model\ElementEventInterface;
use Symfony\Component\Workflow\Registry;
use Symfony\Component\Workflow\Event\CompletedEvent;
//use NetsuiteBundle\Util\CommonUtility;
use Pimcore\Model\User\Role;
use \Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Db;
use Pimcore\Logger;
use Psr\Log\LoggerInterface;
use \Throwable;
use Symfony\Component\Workflow\Event\Event;


class WorkflowManagementListener implements EventSubscriberInterface
{
    private $workflowRegistry;
    public $this;

        protected const ROLE_REVIEWER     = "Reviewer";
        protected const ROLE_WRITER      = "Writer";
        protected const ROLE_PUBLISHER = "Publisher";

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


     public static function sendMailNotification($email)
    {
        try {   

                $email='sapna@mailinator.com';
                $mail = new \Pimcore\Mail();
                $mail->addTo($email);
                $mail->setBody('hello ');
                $mail->setParams(["params" => $params]);
                if($mail->send()){
                echo "mail send successfully";        
                }else{
                    echo "error";
                }
            
        } catch (\Exception $err) {
            throw new \Exception($err->getMessage());
        }
    }

    public static function getSubscribedEvents()
    {
        return array(
            'workflow.blog_lifecycle.leave.new' => 'onLeave',
        );
    }

    public function onLeave(Event $event)
    {   
        $dataObject = $event->getSubject();
        $classname  = $dataObject->getClassName();
        if ($classname == 'blog') {
            $id = $dataObject->getId();
            $sql = "select * from element_workflow_state where cid = $id";
            $db = \Pimcore\Db::get();
            $row = $db->fetchRow($sql);
            $email = array_filter(getUserEmailsByRole(self::ROLE_REVIEWER));
            $email = 'rakhi@mailinator.com';
            self::sendMailNotification($email);
            
        }
    }


    public function getUserEmailsByRole(){

    }

   

}





