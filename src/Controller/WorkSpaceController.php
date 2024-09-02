<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\WorkSpace;
use App\Form\WorkSpaceType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WorkSpaceController extends AbstractController
{
    #[Route('/work/space', name: 'app_work_space')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        UserRepository $userRepository
    ): Response {
        $workspace = new WorkSpace();
        $form = $this->createForm(WorkSpaceType::class, $workspace);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($workspace);

            $entityManagerInterface->flush();

            // dd($workspace);
        }

        return $this->render('work_space/index.html.twig', [
            'from' => $form,
        ]);
    }
}
