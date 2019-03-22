<?php

namespace MA\PlatformBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use MA\PlatformBundle\Email\ApplicationMailer;
use MA\PlatformBundle\Entity\Application;

class ApplicationCreationListener 
{
    /**
    * @var ApplicationMailer
    */
    private $applicationMailer;

    public function __construct(ApplicationMailer $applicationMailer){ 
        $this->applicationMailer = $applicationMailer;
    }

    public function postPersist(LifecycleEventArgs $args){
        $entity = $args->getObject();

        if(!$entity instanceof Application) {
            return;
        }

        $this->applicationMailer->sendNewNotification($entity);
    }
}