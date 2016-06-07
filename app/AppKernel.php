<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel {

    public function registerBundles() {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new FTT\AdminBundle\FTTAdminBundle(),
            new FTT\UtilisateurBundle\FTTUtilisateurBundle(),
            new FTT\AdherentBundle\FTTAdherentBundle(),
            new FTT\ArbitreBundle\FTTArbitreBundle(),
            new FTT\MedecinBundle\FTTMedecinBundle(),
            new FTT\ResponsableBundle\FTTResponsableBundle(),
            new blackknight467\StarRatingBundle\StarRatingBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Nomaya\SocialBundle\NomayaSocialBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
            new DCS\RatingBundle\DCSRatingBundle(),
            new Ob\HighchartsBundle\ObHighchartsBundle(),
            new Endroid\Bundle\QrCodeBundle\EndroidQrCodeBundle(),
            new EWZ\Bundle\RecaptchaBundle\EWZRecaptchaBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\CommentBundle\FOSCommentBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new Beelab\PaypalBundle\BeelabPaypalBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

}
