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
     * @param $savestring
     * @View()
     */

    public function getServerAction($savestring){
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $user->setUsername($savestring);
        $em->persist($user);
        $em->flush();
        $id = $user->getId();
        return array('id' => $id);
    }
}