<?php

namespace MA\PlatformBundle\Email;

use MA\PlatformBundle\Entity\Application;

class ApplicationMailer 
{
    /**
    * @var \Swift_Mailer
    */
    private $mailer;

    public function __construct(\Swift_Mailer $mailer) {
        $this->mailer = $mailer;
    }

    public function sendNewNotification(Application $application){
        // $message = new \Swift_Mailer('Nouvelle candidature','Bonjour, \nVous avez recu une nouvelle candidature. Felicitations ! Vous etes bien chanceux !!');
        // // $message->addTo($application->getAdvert()->getAuthor())->addForm('admin@street4fit.com');
        // $message->addTo('arosmed3@gmail.com')->addForm('admin@street4fit.com');
        // // on suppose que getAuthor contient l'email de la personne qui a cree l'application ! j'envoi le message a cette adresse mail (TO) et j'indique l'adresse de mon administrateur (FROM) pour indiquer l'emetteur du mail.
    }
}