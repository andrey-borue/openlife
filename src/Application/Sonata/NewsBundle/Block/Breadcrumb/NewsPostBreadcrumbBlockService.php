<?php

declare(strict_types=1);

namespace App\Application\Sonata\NewsBundle\Block\Breadcrumb;

use Knp\Menu\FactoryInterface;
use Knp\Menu\Provider\MenuProviderInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\NewsBundle\Block\Breadcrumb\BaseNewsBreadcrumbBlockService;
use Sonata\NewsBundle\Model\BlogInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * BlockService for post breadcrumb.
 *
 * @author Sylvain Deloux <sylvain.deloux@ekino.com>
 */
class NewsPostBreadcrumbBlockService extends BaseNewsBreadcrumbBlockService
{
    /**
     * @var BlogInterface
     */
    protected $blog;

    /**
     * @param string                $context
     * @param string                $name
     * @param EngineInterface       $templating
     * @param MenuProviderInterface $menuProvider
     * @param FactoryInterface      $factory
     * @param BlogInterface         $blog
     */
    public function __construct($context, $name, EngineInterface $templating, MenuProviderInterface $menuProvider, FactoryInterface $factory, BlogInterface $blog)
    {
        $this->blog = $blog;

        parent::__construct($context, $name, $templating, $menuProvider, $factory);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sonata.news.block.breadcrumb_post';
    }

    /**
     * {@inheritdoc}
     */
    public function configureSettings(OptionsResolver $resolver)
    {
        parent::configureSettings($resolver);

        $resolver->setDefaults([
            'post' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function getMenu(BlockContextInterface $blockContext)
    {
        $menu = $this->getRootMenu($blockContext);


        if ($post = $blockContext->getBlock()->getSetting('post')) {
            $menu->addChild($post->getTitle(), [
//                'route' => 'sonata_news_view',
//                'routeParameters' => [
//                    'permalink' => $this->blog->getPermalinkGenerator()->generate($post),
//                ],
                'extras' => [
                    'translation_domain' => false,
                ],
            ])->setAttribute('class', 'breadcrumb-item active');
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
