<?php declare(strict_types=1);

namespace App\Application\Sonata\ArticleBundle\Entity;

use Sonata\ArticleBundle\Entity\AbstractFragment;

class Fragment extends AbstractFragment
{

    private $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

//    public function getType(): string
//    {
//        return (string)$this->type;
//    }


}