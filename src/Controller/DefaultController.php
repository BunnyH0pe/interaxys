<?php


namespace App\Controller;
use App\Repository\ClientsRepository;
use App\Repository\ContactFormRepository;
use App\Repository\ContactRepository;
use App\Repository\NotreApprocheRepository;
use App\Repository\NotreOffreRepository;
use App\Repository\SliderBanniereRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\NotreVisionRepository;

class DefaultController extends AbstractController
{
    /**
     * @Route("/defaultpage")
     */
    public function index(NotreVisionRepository $notreVisionRepository,
                          SliderBanniereRepository $sliderBanniereRepository,
                          NotreApprocheRepository $notreApprocheRepository,
                          NotreOffreRepository $notreOffreRepository,
                          ClientsRepository $clientsRepository,
                          ContactRepository $contactRepository,
                          ContactFormRepository $contactFormRepository): Response
    {
        $slider = $sliderBanniereRepository->findAll();
        $vision = $notreVisionRepository->find(1);
        $approche = $notreApprocheRepository->findAll();
        $offre = $notreOffreRepository->findAll();
        $clients = $clientsRepository->findAll();
        $contact = $contactRepository->find(1);
        $contactform = $contactFormRepository->findAll();

        return $this->render('defaultpage.html.twig', [
            'slider' => $slider,
            'vision' => $vision,
            'approche' => $approche,
            'offre' => $offre,
            'clients' => $clients,
            'contact' => $contact,
            'formulaire' => $contactform,
        ]);

       /* return $this->render('user/index.html.twig', [
            'user' => $this->getUser(),
            'playedgames' => $gameofuser
        ]); */
    }
}