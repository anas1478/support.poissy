<?php

namespace MA\PlatformBundle\Controller;
use MA\PlatformBundle\Entity\Advert;
use MA\PlatformBundle\Entity\Image;
use MA\PlatformBundle\Entity\Application;
use MA\PlatformBundle\Entity\AdvertSkill;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
        // // $content0 = $this->get('templating')->render('MAPlatformBundle:Advert:index.html.twig', array('prenom' => 'DocMan'));
        // $content = $this->get('templating')->render('MAPlatformBundle:Advert:index.html.twig', array('num' => '5'));
        // // return new Response($content);
        
        // // $user = $this->get('router')->generate('ma_platform_view', array('num' => '5'), UrlGeneratorInterface::ABSOLUTE_URL);
        // // return new Response("URL de l'annonce numero 5 est : " . $user);
        if(!$page) $page = 1;

        if($page < 1)
            throw new NotFoundHttpException("Page : " . $page . " inexistante.");
        
            $listAdverts = array(
                array(
                  'title'   => 'Recherche développpeur Symfony',
                  'id'      => 1,
                  'author'  => 'Alexandre',
                  'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon.',
                  'date'    => new \Datetime()),
                array(
                  'title'   => 'Mission de webmaster',
                  'id'      => 2,
                  'author'  => 'Hugo',
                  'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet.',
                  'date'    => new \Datetime()),
                array(
                  'title'   => 'Offre de stage webdesigner',
                  'id'      => 3,
                  'author'  => 'Mathieu',
                  'content' => 'Nous proposons un poste pour webdesigner.',
                  'date'    => new \Datetime())
           );
        return $this->render('MAPlatformBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts));

        // return new Response("Affichage de ma page numero " . $page);
    }
    public function viewAction($id, Request $req)
    {
        // $advert = array(
        // 'title'   => 'Recherche développpeur Symfony2',
        // 'id'      => $id,
        // 'author'  => 'Alexandre',
        // 'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        // 'date'    => new \Datetime()
        // );

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("MAPlatformBundle:Advert");
        $repo2 = $em->getRepository("MAPlatformBundle:Application");

        $advert = $repo->find($id);

        if($advert === null) {
            throw new NotFoundHttpException("L'annonce d'id $id n'existe pas dans la base de donnees.");
        }

        $listApps = $repo2->findBy(array('advert'=>$advert));

        $listAdvertSkills = $em->getRepository('MAPlatformBundle:AdvertSkill')->findBy(array('advert'=>$advert));

        return $this->render('MAPlatformBundle:Advert:view.html.twig', array(
        'advert' => $advert,
        'listApps' => $listApps,
        'listAdvertSkills' => $listAdvertSkills
        ));

        // $tag = $req->query->get('password');
        // // $type = $req->headers->get("content-type");
        // if($req->isMethod('POST')) {
        //     return new Response("c'est une method de type post");
        // }
        // if($req->isMethod('GET')) {
        //     return new Response("c'est une method de type GET");
        // }
        // if($req->isXmlHttpRequest()) {
        //     return new Response("c'est une requet ajax");
        // }
        // return new Response("Affichage de mon annonce numero " . $id . " avec le tag: " . $tag . ", Content type: " . Response::HTTP_OK);
        // $response = new Response();

        // $response->setContent("il s'agit ici dune page erruer 404");
    
        // $response->setStatusCode(Response::HTTP_OK); 

        // if($id == 1) {
        //     $url = $this->get('router')->generate('ma_platform_home');
        //     return new RedirectResponse($url);
        // }

        // if($id == 2) {
        //     $url = $this->get('router')->generate('ma_platform_home');
        //     return $this->redirect($url);
        // }

        // if($id == 3) {
        //     return $this->redirectToRoute('ma_platform_home');
        // }

        // if($id > 30) {
            // $tag = $req->query->get('tag');
            // C:\xampp\htdocs\Symfony\src\MA\PlatformBundle
            
            return $this->render('MAPlatformBundle:Advert:view.html.twig', array(
                'id'=>$id
            ));
        // }

        // if($id == 12) {
        //     $response = new Response(json_encode(array(
        //             'id' => $id
        //     )));

        //     $response->headers->set('Content-Type', 'application/json');

        //     return $response;
        // }

        // if($id == 13) return new JsonResponse(array('id'=>$id));

        // if($id == 14){
            $session = $req->getSession();
            $userId = $session->get('user_id');
            $session->set('user_id', 101);
            return new Response("<body>Coucou je sui une page  de test je nai rien a dire</body>");
        // }

    }
   
    public function viewSlugAction($year,$slug,$_format) 
    {
        return new Response("On peut afficher l'annonce correspondant au slug $slug, creer en $year et au format $_format");
    }
    public function addAction(Request $req) {
        // return new Response("Ajout de mon annonce numero " . $id);
        // RECUPERATION DE MON SERVICE EN L'INSTANCIANT
        
        // 
        // TOUT CE QU'IL Y A EN DESSOUS CONCERNE LES MSG NON SPAM
        $em = $this->getDoctrine()->getManager();

        // Creer l'entite aKa annonce
        $advert = new Advert();
        $advert->setTitle('Mission Symfony');
        $advert->setAuthor('Google');
        $advert->setContent('Developpement application complexe');
        $advert->setPublished(true);
        // Pas besoin de definir la date et la publication car il sont definis automatiquement dans le constructor

        $image = new Image();

        $image->setUrl('https://11m5ki43y82budjol1gjvv5s-wpengine.netdna-ssl.com/wp-content/uploads/2018/10/angular-virtual-scroll-drag-drop-main.jpg');
        $image->setAlt("Representation de alt d'image");

        $advert->setImage($image);
        // Recuperation de l'entity manager


        // Creation Application / Candidature 1
        $app1 = new Application();
        $app1->setAuthor('Marguerite Dupont');
        $app1->setContent('Developpeur senieur avec 3 ans d\'experience dans les frameworks front Vues.js, React, Angluar');
        $app1->setAdvert($advert);

        $app2 = new Application();
        $app2->setAuthor('Aarous Mohamed');
        $app2->setContent('Developpeur senieur avec 18 ans d\'experience en informatique');
        $app2->setAdvert($advert);

        $listSkills = $em->getRepository('MAPlatformBundle:Skill')->findAll();

        foreach($listSkills as $skill){
            $advertSkill = new AdvertSkill();
            $advertSkill->setAdvert($advert);
            $advertSkill->setSkill($skill);
            $advertSkill->setLevel('Expert');

            $em->persist($advertSkill);

        }

        // Persister l'entite <=> la sauvegarder dans la base
        $em->persist($advert); // preparation - tmp - faire tout les persist avant de flusher les donnees
        $em->persist($app1);
        $em->persist($app2);
        $em->flush(); // save

        if($req->isMethod("POST")){
            $session = $req->getSession();
            // on ajoute une certaine annonce et on la publie
            $session->getflashBag()->add('info', 'Votre annonce a ete ajoute');

            return $this->redirectToRoute('ma_platform_view', array('id'=>$advert->getId()));
        }

        // if not method post

        return $this->render('MAPlatformBundle:Advert:add.html.twig', array('advert'=>$advert));

        // if($req->isMethod("POST")){
        //     $session = $req->getSession();
        //     // on ajoute une certaine annonce et on la publie
        //     $session->getflashBag()->add('info', 'Annonce a ete ajoute');
        //     // j'inscris ce quil se passe dans la memoire flash
        //     $session->getflashBag()->add('info', 'Je repete l\'Annonce a ete ajoute');

        //     return $this->redirectToRoute('ma_platform_view', array('id' => 25));
        // }

        // $antispam = $this->container->get('ma_platform.antispam');

        // $text = "...";

        // if($antispam->isSpam($text)){
        //     throw new Exception("Votre message a ete detecter comme un spam!!");
        // }

    }
    public function editAction($id, Request $req) {

        $em = $this->getDoctrine()->getManager();
        $advert = $em->getRepository('MAPlatformBundle:Advert')->find($id);

        if($advert === null) {
            throw new NotFoundHttpException("L'annonce d'id $id n'existe pas dans la base de donnees.");
        }

        $listCategories = $em->getRepository('MAPlatformBundle:Category')->findAll();

        foreach($listCategories as $category) {
            $advert->addCategory($category);
        }

        $em->flush();

        // if($req->isMethod('POST')) {
        //     $req->getSession()->getFlashBag()->add('notice', 'Modification effective');
        //     return $this->redirectToRoute('ma_platform_edit', array('id'=>23));
        // } 

        // $advert = array(
        //     'title'   => 'Recherche développpeur Symfony2',
        //     'id'      => $id,
        //     'author'  => 'Alexandre',
        //     'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        //     'date'    => new \Datetime()
        //     );
        
        return $this->render('MAPlatformBundle:Advert:edit.html.twig', array('advert'=>$advert));
    }
    public function deleteAction($id, Request $req) {

        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository('MAPlatformBundle:Advert')->find($id);

        if($advert === null) {
            throw new NotFoundHttpException("L'annonce d'id $id n'existe pas dans la base de donnees.");
        }

        foreach($advert->getCategories() as $category) {
            $advert->removeCategory($category);
        }

        $em->flush();
        // if($req->isMethod('POST')) {
        //     $req->getSession()->getFlashBag()->add('notice', 'Modification effective');
        //     return $this->redirectToRoute('ma_platform_delete', array('id'=>23));
        // } 
        return $this->render('MAPlatformBundle:Advert:delete.html.twig');
    }

    public function menuAction(Request $req) {
        $listAdverts = array(
            array('id'=>101, 'title'=>'Recherche developpeur Symfony'),
            array('id'=>102, 'title'=>'Mission Symfony'),
            array('id'=>103, 'title'=>'Stage developpement C#'),
            array('id'=>104, 'title'=>'Developpeur nodeJs'),
            array('id'=>105, 'title'=>'developpeur front-end')
        );

        return $this->render('MAPlatformBundle:Advert:menu.html.twig', array('listAdverts' => $listAdverts));
    }

    public function catAdvertAction($name) {
        $a_name = array($name);
        $listCat = $this->getDoctrine()->getManager()->getRepository('MAPlatformBundle:Advert')->getAdvertWithCat($a_name);
        return $this->render('MAPlatformBundle:Advert:catadvert.html.twig', array('listCat'=>$listCat));
    }

    public function editImageAction($advertId) {
        $em = $this->getDoctrine()->getManager();
        // premierement recuperer la bonne annonce;
        $advert = $em->getRepository('MAPlatformBundle:Advert')->find($advertId);
        $advert->getImage()->setUrl('https://www.peakup.org/wp-content/uploads/2018/09/angular6_cover-1200x675.png');
        $advert->getImage()->setAlt('Nouvelle image qui ecrase la premiere');
        $em->flush();

        return new Response("Photo mis a jour");
    }
}
