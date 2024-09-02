<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    // #[Route('/work/space', name: 'app_work_space')]
    // public function index (Request $request, EntityManagerInterface $entityManagerInterface, SessionInterface $sessionInterface): Response
    // {
    //     $wokspace = new WorkSpace();
    //     $form = $this->createForm(WorkSpaceType::class, $wokspace);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $user = $this->getUser();

    //         $wokspace->setUser($user);

    //         $entityManagerInterface->persist($wokspace);
    //         $entityManagerInterface->flush();

    //         $this->addFlash('success', "Nous avons bien recueillit votre em ploi du temps");
    //         return $this->redirectToRoute('app_home');
    //     }

    //     return $this->render('work_space/index.html.twig', [
    //         'form' => $form
    //     ]);
    // }
}
