<?php

declare(strict_types=1);

namespace App\Application\Sonata\NewsBundle\Block\Breadcrumb;

use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\NewsBundle\Block\Breadcrumb\BaseNewsBreadcrumbBlockService;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * BlockService for archive breadcrumb.
 *
 * @author Sylvain Deloux <sylvain.deloux@ekino.com>
 */
class NewsArchiveBreadcrumbBlockService extends BaseNewsBreadcrumbBlockService
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sonata.news.block.breadcrumb_archive';
    }

    /**
     * {@inheritdoc}
     */
    public function configureSettings(OptionsResolver $resolver)
    {
        parent::configureSettings($resolver);

        $resolver->setDefaults([
            'collection' => false,
            'tag' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function getMenu(BlockContextInterface $blockContext)
    {
        $menu = $this->getRootMenu($blockContext);

        if ($collection = $blockContext->getBlock()->getSetting('collection')) {
            $menu->addChild($collection->getName(), [
                'route' => 'sonata_news_collection',
                'routeParameters' => [
                    'collection' => $collection->getSlug(),
                ],
                'extras' => [
                    'translation_domain' => false,
                ],
                'class' => 'breadcrumb-item'
            ])->setAttribute('class', 'breadcrumb-item');
        }

        if ($tag = $blockContext->getBlock()->getSetting('tag')) {
            $menu->addChild($tag->getName(), [
//                'route' => 'sonata_news_tag',
//                'routeParameters' => [
//                    'tag' => $tag->getSlug(),
//                ],
                'extras' => [
                    'translation_domain' => false,
                ]
            ])->setAttribute('class', 'breadcrumb-item');;
        }

        $children = $menu->getChildren();

        /** @var \Knp\Menu\MenuItem $item */
        $item = $children['sonata_news_archive_breadcrumb'];
        $item->setAttribute('class', 'breadcrumb-item');

        /** @var \Knp\Menu\MenuItem $item */
        $item = $children['sonata_seo_homepage_breadcrumb'];
        $item->setAttribute('class', 'breadcrumb-item');


        return $menu;
    }
}
