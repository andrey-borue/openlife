<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Symfony\Bundle\WebServerBundle\WebServerBundle::class => ['dev' => true],
    Sonata\DatagridBundle\SonataDatagridBundle::class => ['all' => true],
    Sonata\CoreBundle\SonataCoreBundle::class => ['all' => true],
    Sonata\BlockBundle\SonataBlockBundle::class => ['all' => true],
    Knp\Bundle\MenuBundle\KnpMenuBundle::class => ['all' => true],
    Sonata\AdminBundle\SonataAdminBundle::class => ['all' => true],
    Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle::class => ['all' => true],
    Knp\Bundle\MarkdownBundle\KnpMarkdownBundle::class => ['all' => true],
    FOS\CKEditorBundle\FOSCKEditorBundle::class => ['all' => true],
    Sonata\FormatterBundle\SonataFormatterBundle::class => ['all' => true],
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],
    SimpleThings\EntityAudit\SimpleThingsEntityAuditBundle::class => ['all' => true],
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
    Sonata\EasyExtendsBundle\SonataEasyExtendsBundle::class => ['all' => true],
    JMS\SerializerBundle\JMSSerializerBundle::class => ['all' => true],
    // Media
    Sonata\MediaBundle\SonataMediaBundle::class => ['all' => true],
    App\Application\Sonata\MediaBundle\ApplicationSonataMediaBundle::class => ['all' => true],
    // Classification
    Sonata\ClassificationBundle\SonataClassificationBundle::class => ['all' => true],
    App\Application\Sonata\ClassificationBundle\ApplicationSonataClassificationBundle::class => ['all' => true],
    // User
    FOS\UserBundle\FOSUserBundle::class => ['all' => true],
    Sonata\UserBundle\SonataUserBundle::class => ['all' => true],
    App\Application\Sonata\UserBundle\ApplicationSonataUserBundle::class => ['all' => true],
    // Intl
    Sonata\IntlBundle\SonataIntlBundle::class => ['all' => true],
    // News
    Sonata\NewsBundle\SonataNewsBundle::class => ['all' => true],
    App\Application\Sonata\NewsBundle\ApplicationSonataNewsBundle::class => ['all' => true],


];
