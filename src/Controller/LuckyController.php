<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\Calc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LuckyController extends Controller
{
    protected $ergebnis;
    public function number(Request $request)
    {
        $input = new Calc();

        $form = $this->createFormBuilder($input)
           ->add('zahl1', TextType::class)
           ->add('zahl2', TextType::class)
           ->add('rz', ChoiceType::class, array('choices' => array('+' => 'add', '-' => 'subtract', '/' => 'divide', '*' => 'multiply')))
           ->add('save', SubmitType::class, array('label' => 'Create Task'))
           ->getForm();

           $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {
             //var_dump($form->getData());die();
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $input = $form->getData();

                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                // $entityManager = $this->getDoctrine()->getManager();
                // $entityManager->persist($task);
                // $entityManager->flush();
                $this->ergebnis = $input->Erg();

            }

         return $this->render('test/index.html.twig',
          array('form' => $form->createView(),'ergebnis' => $this->ergebnis));
        }


    }

?>
