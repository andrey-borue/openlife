<?php

namespace App\Application\Sonata\NewsBundle\Entity;

use Sonata\NewsBundle\Entity\BasePostRepository;

/**
 * This file has been generated by the SonataEasyExtendsBundle.
 *
 * @link https://sonata-project.org/easy-extends
 *
 * References:
 * @link http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en#querying:custom-repositories
 * @link http://www.doctrine-project.org/projects/orm/2.0/docs/reference/query-builder/en
 * @link http://www.doctrine-project.org/projects/orm/2.0/docs/reference/dql-doctrine-query-language/en
 */
class PostRepository extends BasePostRepository
{
    /**
     * @param string $slug
     * @param int $limit
     * @return Post[]
     */
    public function findPostsByCollectionSlug(string $slug, int $limit = 10): array
    {
        $qb = $this->createQueryBuilder('post');

        $qb
            ->join('post.collection', 'collection')
            ->andWhere('collection.slug = :slug')
            ->setParameter('slug', $slug)
            ->andWhere('p.enabled = true')
            ->orderBy('post.publicationDateStart', 'DESC')
            ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

    public function findPostByCollectionSlug(string $slug): ?Post
    {
        $posts = $this->findPostsByCollectionSlug($slug, 1);

        return $posts ? current($posts) : null;
    }

    /**
     * @param string $slug
     * @param int $limit
     * @return Post[]
     */
    public function findPostsByTagSlug(string $slug, int $limit = 10): array
    {
        $qb = $this->createQueryBuilder('post');

        $qb
            ->join('post.tags', 'tags')
            ->andWhere('tags.slug = :slug')
            ->andWhere('post.enabled = true')
            ->orderBy('post.publicationDateStart', 'DESC')
            ->setParameter('slug', $slug)
            ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

    /**
     * @param string $slug
     * @return Post|null
     */
    public function findPostByTagSlug(string $slug): ?Post
    {
        $posts = $this->findPostsByTagSlug($slug, 1);

        return $posts ? current($posts) : null;
    }

    /**
     * @param int $limit
     * @param Post ...$excludePosts
     * @return Post[]
     */
    public function findLastPosts(int $limit, ?Post ...$excludePosts): array
    {
        $qb = $this->createQueryBuilder('post');

        $qb
            ->andWhere('post.enabled = true')
            ->orderBy('post.publicationDateStart', 'DESC')
            ->setMaxResults($limit);

        foreach ($excludePosts as $i => $post) {
            if (!$post) {
                continue;
            }
            $qb
                ->andWhere('post != :post_' . $i)
                ->setParameter('post_' . $i, $post);
        }

        return $qb->getQuery()->getResult();
    }
}
