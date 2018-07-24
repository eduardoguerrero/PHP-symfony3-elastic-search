<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller {

    /**
     * @Route("/", name="search")
     */
    public function searchAction() 
    {

        $finder = $this->container->get('fos_elastica.finder.app.user_details');
        
        //Option 1. Returns all users who have bell96 in any of their mapped fields
        $users = $finder->find('bell96');
        
        foreach ($users as $user)
        {            
            $single_user['user_id'] =  $user->getId();
            
            $single_user['user_name'] = $user->getUsername();   
            
            $single_user['user_first_name'] = $user->getFirstName();
            
            $single_user['user_last_name'] = $user->getLastName();
            
            $single_user['user_gender'] = $user->getGender();
            
            $single_user['user_status'] = $user->getStatus();
           
            $user_details[] = $single_user;     
        }
  
        return new JsonResponse($user_details, 200, array('Content-Type' => 'application/json'));
    }

}
