<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Enquiry;
use Symfony\Component\HttpFoundation\Request;


/**
 * Description of PageController
 *
 * @author SakyHank
 */
class PageController extends Controller {
    
    public function indexAction(){
        
        $em= $this->getDoctrine()->getManager();
        $blog= $em->getRepository('BloggerBlogBundle:Blog')->getLatestBlogs();
                
        
        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'blogs'=>$blog
        ));
    }
    
    public function aboutAction(){
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
    
    public function contactAction(Request $request){
        $enquiry = new Enquiry();
        
        $form= $this->createForm('enquiry', $enquiry);
        
        
        if($request->isMethod('POST')){
            $form->submit($request->request->get($form->getName()));
            //$form->handleRequest($request);
            if($form->isValid()){
                
                $message = \Swift_Message::newInstance()
                        ->setSubject('Contact enquiry from symblog')
                        ->setFrom('enquires@symblog.co.uk')
                        ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                        ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig',
                                array('enquiry'=> $enquiry)));
                $this->get('mailer')->send($message);
                
                $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contatct enquiry'
                        . ' was successfully sent. Thank you');
            
                return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
            }
        }
        
        return $this->render('BloggerBlogBundle:Page:contact.html.twig',array(
            'form'=>$form->createView()
        ));
        
    }
}
