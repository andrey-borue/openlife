<?php

namespace App\Controller;

use App\Application\Sonata\NewsBundle\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(EntityManagerInterface $em)
    {
        $postRepository = $em->getRepository(Post::class);

        // Top posts
        $mainPosts = $postRepository->findPostsByTagSlug('main');
        $mainPost = $mainPosts[0] ?? null;
        $otherTopPosts = [];
        if (isset($mainPosts[1])) {
           $otherTopPosts[] = $mainPosts[1];
        }
        if (isset($mainPosts[2])) {
           $otherTopPosts[] = $mainPosts[2];
        }

        $lastPosts = $postRepository->findLastPosts(10, $mainPost);

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'mainTopPost' => $mainPost,
            'otherTopPosts' => $otherTopPosts,
            'lastPosts' => $lastPosts
        ]);
    }
}
