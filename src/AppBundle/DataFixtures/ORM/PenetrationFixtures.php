<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Penetration;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PenetrationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $penetrationData = [
            [
                'gun' => 'KwK 36',
                'shell' => 'PzGr. 39',
                'data' => [
                    'at_100' => '162',
                    'at_250' => '158',
                    'at_500' => '151',
                    'at_1000' => '138',
                    'at_2000' => '116',
                ],
            ],
            [
                'gun' => 'KwK 36',
                'shell' => 'PzGr. 40',
                'data' => [
                    'at_100' => '219',
                    'at_250' => '212',
                    'at_500' => '200',
                    'at_1000' => '179',
                    'at_2000' => '143',
                ],
            ],
            [
                'gun' => 'KwK 36',
                'shell' => 'Hl.39',
                'data' => [
                    'at_100' => '110',
                    'at_250' => '110',
                    'at_500' => '110',
                    'at_1000' => '110',
                    'at_2000' => '110',
                ],
            ],
            [
                'gun' => 'KwK 43 L71',
                'shell' => 'PzGr. 39',
                'data' => [
                    'at_100' => '232',
                    'at_250' => '227',
                    'at_500' => '219',
                    'at_1000' => '204',
                    'at_2000' => '176',
                ],
            ],
            [
                'gun' => 'KwK 43 L71',
                'shell' => 'PzGr. 40',
                'data' => [
                    'at_100' => '304',
                    'at_250' => '296',
                    'at_500' => '282',
                    'at_1000' => '257',
                    'at_2000' => '213',
                ],
            ],
            [
                'gun' => 'KwK 43 L71',
                'shell' => 'Hl.39',
                'data' => [
                    'at_100' => '110',
                    'at_250' => '110',
                    'at_500' => '110',
                    'at_1000' => '110',
                    'at_2000' => '110',
                ],
            ],
        ];

        foreach ($penetrationData as $data) {
            $penetrationEntity = new Penetration();

            $penetrationEntity->setGun($this->getReference($data['gun']));
            $penetrationEntity->setShell($this->getReference($data['shell']));
            $penetrationEntity->setAt100($data['data']['at_100']);
            $penetrationEntity->setAt250($data['data']['at_250']);
            $penetrationEntity->setAt500($data['data']['at_500']);
            $penetrationEntity->setAt1000($data['data']['at_1000']);
            $penetrationEntity->setAt2000($data['data']['at_2000']);

            $manager->persist($penetrationEntity);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            GunsFixtures::class,
            ShellFixtures::class,
        ];
    }
}