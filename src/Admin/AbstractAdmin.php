<?php declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as BaseAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;

class AbstractAdmin extends BaseAdmin
{
    protected function addListFieldsEditAction(ListMapper $listMapper): void
    {
        $listMapper->add('_action', 'actions', ['actions' => ['edit' => []]]);
    }

    protected function addListFieldsViewAction(ListMapper $listMapper): void
    {
        $listMapper->add('_action', 'actions', ['actions' => ['view' => []]]);
    }

}