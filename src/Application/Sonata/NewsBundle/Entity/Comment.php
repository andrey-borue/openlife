<?php

namespace App\Application\Sonata\NewsBundle\Entity;

use Sonata\NewsBundle\Entity\BaseComment as BaseComment;

/**
 * This file has been generated by the SonataEasyExtendsBundle.
 *
 * @link https://sonata-project.org/easy-extends
 *
 * References:
 * @link http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 */
class Comment extends BaseComment
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var int
     */
    protected $version;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
