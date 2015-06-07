<?php
/**
 * Created by PhpStorm.
 * User: michail
 * Date: 7.6.15
 * Time: 12.29
 */

namespace Screenfony\DemoBundle\Controller;

use Screenfony\DemoBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class UsersController extends Controller{

    /**
     * @return array
     * @View()
     */
    public function getUsersAction(){

        $users = $this->getDoctrine()->getRepository('ScreenfonyDemoBundle:User')
            ->findAll();

        return array('users' => $users);
    }

    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="ScreenfonyDemoBundle:User")
     */
    public function getUserAction(User $user){

        return array('user' => $user);
    }
}