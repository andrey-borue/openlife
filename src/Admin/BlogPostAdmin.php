<?php declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\FormatterBundle\Form\Type\SimpleFormatterType;

final class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', TextType::class)
            ->add('url', TextType::class)
            ->add('body', SimpleFormatterType::class, [
                'format' => 'richhtml',
                'ckeditor_toolbar_icons' => [[
                    'Bold', 'Italic', 'Underline', 'Format',
                    '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord',
                    '-', 'Undo', 'Redo',
                    '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent',
                    '-', 'Blockquote',
                    '-', 'Image', 'Link', 'Unlink', 'Table', ],
                    ['Maximize', 'Source'],
                ],
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $this->addListFieldsEditAction($listMapper);
        $listMapper
            ->add('id')
            ->add('title')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('title')
            ->add('url')
            ->add('body')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('delete');
    }
}
