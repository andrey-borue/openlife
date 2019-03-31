<?php declare(strict_types=1);

namespace App\Admin\Extension;

use Sonata\AdminBundle\Admin\AbstractAdminExtension;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdminExtension extends AbstractAdminExtension
{
    public function configureFormFields(FormMapper $formMapper)
    {
//        $field = $formMapper->get('templateCode');
//        $options = $field->getFormConfig()->getOptions();
//        $fieldType = get_class($field->getType()->getInnerType());
//        $options['attr'] = ['style' => 'width: 270px'];
//        $formMapper->add($field->getName(), $fieldType, $options);
//
//        $field = $formMapper->get('type');
//        $options = $field->getFormConfig()->getOptions();
//        $fieldType = get_class($field->getType()->getInnerType());
//        $options['attr'] = ['style' => 'width: 270px'];
//        $formMapper->add($field->getName(), $fieldType, $options);

    }
}