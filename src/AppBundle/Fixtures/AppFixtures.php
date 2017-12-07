<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 05/12/2017
 * Time: 10:00
 */

namespace AppBundle\Fixtures;

use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1000; $i>0; $i--) {
            $user = new User();
            $faker = \Faker\Factory::Create();
            $user->setName($faker->name);
            $user->setAddress($faker->address);
            $user->setText($faker->text);

            $manager->persist($user);

        }

        $manager->flush();
    }
}