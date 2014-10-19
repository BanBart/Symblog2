<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Form\CommentType;

/**
 * Description of CommentController
 *
 * @author SakyHank
 */
class CommentController extends Controller{
    
    public function newAction($blog_id){
        $blog= $this->getBlog($blog_id);
        
        $comment = new Comment();
        $comment->setBlog($blog);
        $form =$this->createForm(new CommentType(), $comment);
        
        return $this->render('BoggerBlogBundle:Comment:form.html.twig', array(
            'comment'=>$comment,
            'from'=>$form->createView()
        ));
    }
    
    public function createAction(Request $request, $blog_id){
        $blog = $this->getBlog($blog_id);
        $comment = new Comment();
        $comment->setBlog($blog);
        $form = $this->createForm(new CommentType(),$comment);
        
        if($form->isValid()){
            $form->handleRequest($request);
            
            return $this->redirect($this->generateUrl('BloggerBlogBundle_blog_show',
                    array('id'=>$comment->getBlog()->getId(),
                            '#comment-' . $comment->getId()
                        )));
        }
        
        return $this->render('BloggerBlogBundle:Comment:create.html.twig',
                array(
                    'comment'=>$comment,
                    'form'=>$form->createView()
                ));
        
        
    }
    
    protected function getBlog($blog_id){
        $em= $this->getDoctrine()->getManager();
        
        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($blog_id);
        
        if(!$blog_id){
            throw $this->createNotFoundException('Unable to find Blog post');
        }
        
        return $blog;
    }
}
