<?php
/**
 * Created by PhpStorm.
 * User: michail
 * Date: 7.6.15
 * Time: 12.46
 */

namespace Screenfony\DemoBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Screenfony\DemoBundle\Entity\User;

class LoadUserData implements FixtureInterface{

    public function load(ObjectManager $manager){

        $alice = new User();
        $alice->setUsername('alice');
        $alice->setEmail('alice@yandex.ru');
        $alice->setPassword('ali@password');

        $bob = new User();
        $bob->setUsername('bob');
        $bob->setEmail('bob@gmail.com');
        $bob->setPassword('bob@sword');

        $manager->persist($alice);
        $manager->persist($bob);
        $manager->flush();
    }
}