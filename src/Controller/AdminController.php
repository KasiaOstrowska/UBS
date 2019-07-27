<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function updateEntity($entiy)
	{
		if(method_exists($entity, 'setUpdateAt')){
		$entity->setUpdateAt(new \DateTime());
		}
		
		parent::updateEntity($entity);
	}
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
