<?php
/**
 * Created by PhpStorm.
 * User: khaled_bo
 * Date: 26/07/2016
 * Time: 03:38
 */
namespace BlogBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use BlogBundle\Entity\Blogg;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blogg();
        $blog1->setTitle('Create an Exceptional Customer Journey With Your Website');
        $blog1->setBlog('Each and every day we take journeys. We embark on customer journeys in both the physical and digital worlds. Years ago our journeys were limited to store fronts and physical goods. Today we live in a multimedia world of websites, social media, chat sessions, newsletters, email, and call centers. These digital journeys have changed the way we interact with companies and products. Last week I decided I was going to try shopping at a new grocery store');
        $blog1->setImage('beach.jpg');
        $blog1->setAuthor('Khaled');
        $blog1->setTags('symfony2, php, paradise, web, Customer');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blogg();
        $blog2->setTitle('Buying a Website is Like Buying a Car, But Worse');
        $blog2->setBlog('You walk into a car dealership with high hopes of purchasing a new vehicle. The dealership you picked is an amazing store that comes highly recommended and sells everything from economical Ford and GM cars, trucks, and minivans to luxury brands like Jaguar, Infiniti, and Ferrari. Everything under one roof! What could be better? As you walk through the door, you approach the salesperson and ask him or her to provide you a quick quote on a new vehicle. It’s a realistic request right?');
        $blog2->setImage('pool_leak.jpg');
        $blog2->setAuthor('Zero Cool');
        $blog2->setTags(' Website, lovin2code, Buying');
        $blog2->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blogg();
        $blog3->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog3->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog3->setImage('misdirection.jpg');
        $blog3->setAuthor('Gabriel');
        $blog3->setTags('misdirection, magic, movie, hacking, symblog');
        $blog3->setCreated(new \DateTime("2011-07-16 16:14:06"));
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blogg();
        $blog4->setTitle('Can a Website RFP Improve Your Project Success Rate?');
        $blog4->setBlog('Have you ever issued a website RFP and received limited responses? Did you wonder what went wrong and why design agencies failed to reply with earnest? You’re not alone. The breakdown in the RFP process can be attributed to both the RFP issuer and the RFP responders. And it is an issue that has been growing for years. On the client side, a lot of companies fail to publish a solid RFP, which makes it difficult for agencies to respond or even take them serious. On the agency side, ');
        $blog4->setImage('the_grid.jpg');
        $blog4->setAuthor('Kevin Flynn');
        $blog4->setTags('web, lovin2code');
        $blog4->setCreated(new \DateTime("2011-06-02 18:54:12"));
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

        $blog5 = new Blogg();
        $blog5->setTitle('Say Goodbye to the Fold and Say Hello to a Positive User Experience');
        $blog5->setBlog('About a decade ago I had the pleasure of working on my first website project with a professional graphic designer. At the time I was employed by an enterprise software company and my role was the head of marketing. As we progressed through the graphic design process, my boss (the company president) was absolutely adamant about the entire home page showing “above the fold” on this laptop. At the time he was spot on and this was considered a best practice for web design. All of our design ...');
        $blog5->setImage('one_or_zero.jpg');
        $blog5->setAuthor('Gary Winston');
        $blog5->setTags('binary, one, zero, alive, lovin2code');
        $blog5->setCreated(new \DateTime("2011-04-25 15:34:18"));
        $blog5->setUpdated($blog5->getCreated());
        $manager->persist($blog5);

        $manager->flush();
    }

}