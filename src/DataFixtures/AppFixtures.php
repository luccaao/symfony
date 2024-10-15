<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for( $i = 0; $i < 10; $i++ ) {
            $customer = new Customer();
            $customer->setName("Customer $i");
            $customer->setPhone("1234567890");
            $manager->persist($customer);
        }

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setName("User $i");
            $manager->persist($user);
        }

        $manager->flush();
    }
}
