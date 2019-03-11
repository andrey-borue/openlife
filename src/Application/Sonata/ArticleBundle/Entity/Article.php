<?php declare(strict_types=1);

namespace App\Application\Sonata\ArticleBundle\Entity;

use Sonata\ArticleBundle\Entity\AbstractArticle;

class Article extends AbstractArticle
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
}