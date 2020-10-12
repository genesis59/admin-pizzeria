<?php

namespace App\DataFixtures;

use App\Entity\Dishes;
use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $type1 = new Type();
        $type1->setName('entree');
        $manager->persist($type1);
        $type2 = new Type();
        $type2->setName('plat');
        $manager->persist($type2);
        $type3 = new Type();
        $type3->setName('dessert');
        $manager->persist($type3);
        $type4 = new Type();
        $type4->setName('boisson');
        $manager->persist($type4);


        /* ajout de quelques entrées à la BD */
        $entree1 = new Dishes();
        $entree1
            ->setName("Cal'z chèvre miel")
            ->setPrice(4.50)
            ->setDescription('Mozzarella,chèvre,miel français')
            ->setPicture('calChevreMiel.png')
            ->setTypes($type1)
        ;
        $manager->persist($entree1);

        $entree2 = new Dishes();
        $entree2
            ->setName("Cal'z raclette")
            ->setPrice(4.50)
            ->setDescription('Mozzarella,jambon,raclette française')
            ->setPicture('calRaclette.png')
            ->setTypes($type1)
        ;
        $manager->persist($entree2);

        $entree3 = new Dishes();
        $entree3
            ->setName("Cal'z kebab")
            ->setPrice(4.50)
            ->setDescription('Mozzarella,viande kebab, sauce blanche kebab')
            ->setPicture('calKebab.png')
            ->setTypes($type1)
        ;
        $manager->persist($entree3);

        /* ajout de quelques plats à la BD */

        $mainDish1 = new Dishes();
        $mainDish1
            ->setName('Urban kebab pizzas')
            ->setPrice(10.90)
            ->setDescription('Sauce tomate,mozzarella,viande kebab,merguez,oignons,sauce blanche kebab')
            ->setPicture('pizzaKebab.png')
            ->setTypes($type2)
        ;
        $manager->persist($mainDish1);

        $mainDish2 = new Dishes();
        $mainDish2
            ->setName('Diavola pepperoni pizzas')
            ->setPrice(10.90)
            ->setDescription('Sauce tomate,mozzarella,pepperoni,poivrons mélangés,oignons,piments')
            ->setPicture('pizzaPepperoni.png')
            ->setTypes($type2)
        ;
        $manager->persist($mainDish2);

        $mainDish3 = new Dishes();
        $mainDish3
            ->setName('Bacon groovy pizzas')
            ->setPrice(10.90)
            ->setDescription('Crème fraiche légère française,mozzarella,poulet rôti,oignons,bacon,sauce barbecue')
            ->setPicture('pizzaBaconGroovy.png')
            ->setTypes($type2)
        ;
        $manager->persist($mainDish3);

        /* ajout de quelques desserts à la BD */

        $dessert1 = new Dishes();
        $dessert1
            ->setName('Choco bread')
            ->setPrice(5.5)
            ->setDescription('Bâtonnets de pâte à pizza nappés de sauce goût chocolat-noisette')
            ->setPicture('chocoBread.png')
            ->setTypes($type3)
        ;
        $manager->persist($dessert1);

        $dessert2 = new Dishes();
        $dessert2
            ->setName('Moelleux au chocolat')
            ->setPrice(5.5)
            ->setDescription('Avec son coeur coulant, l\'émotion chocolat est garantie !')
            ->setPicture('moelleuxChoco.png')
            ->setTypes($type3)
        ;
        $manager->persist($dessert2);

        $dessert3 = new Dishes();
        $dessert3
            ->setName('Cal\'z o\'pommes')
            ->setPrice(5.5)
            ->setDescription('Pâte à pizza garnie de délicieuses pommes françaises caramélisées')
            ->setPicture('calPomme.png')
            ->setTypes($type3)
        ;
        $manager->persist($dessert3);

        /* ajout de quelques desserts à la BD */

        $boisson1 = new Dishes();
        $boisson1
            ->setName('Coca-Cola')
            ->setPrice(3.5)
            ->setDescription('Depuis 1886, Coca-Cola, c\'est un mélange unique de caféines,d\'eau pétillante avec un touche de caramel')
            ->setPicture('cocaCola.png')
            ->setTypes($type4)
        ;
        $manager->persist($boisson1);

        $boisson2 = new Dishes();
        $boisson2
            ->setName('Fanta')
            ->setPrice(3.5)
            ->setDescription('Boisson pétillante à l\'orange')
            ->setPicture('fanta.png')
            ->setTypes($type4)
        ;
        $manager->persist($boisson2);

        $boisson3 = new Dishes();
        $boisson3
            ->setName('Fuze tea')
            ->setPrice(3.5)
            ->setDescription('Thé noir glacé à la pêche intense')
            ->setPicture('fuzeTea.png')
            ->setTypes($type4)
        ;
        $manager->persist($boisson3);

        $manager->flush();
    }
}
