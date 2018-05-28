<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LuckyController extends Controller
{
    public function  number()
    {
      $input = new Calc();

 $form = $this->createFormBuilder($input)
     ->add('task', TextType::class)
     ->add('dueDate', DateType::class)
     ->add('rz', SubmitType::class, array('label', ChoiceType::class, array('choises' => array('+', '-', '/', '*'),))
     ->getForm();

     return $this->render('test/index.html.twig', array('form' => $form->createView(),));
        }


    }

?>
