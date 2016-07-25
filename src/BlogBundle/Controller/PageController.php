<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Enquiry;
use BlogBundle\Form\EnquiryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('BlogBundle:Page:about.html.twig');
    }
    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {


                    $message = \Swift_Message::newInstance()
                        ->setSubject('Contact enquiry from symblog')
                        ->setFrom('khaledbouguerra92@gmail.com')
                        ->setTo('khaledbouguerra92@gmail.com')
                        ->setBody($this->renderView('BlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                    $this->get('mailer')->send($message);

                    $this->get('session')->getFlashBag()->set('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');




                return $this->redirect($this->generateUrl('BlogBundle_contact'));
            }
        }

        return $this->render('BlogBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
