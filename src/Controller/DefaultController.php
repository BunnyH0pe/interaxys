<?php


namespace App\Controller;
use App\Entity\Clients;
use App\Entity\Contact;
use App\Entity\NotreApproche;
use App\Entity\NotreOffre;
use App\Entity\SliderBanniere;
use App\Repository\ClientsRepository;
use App\Repository\ContactRepository;
use App\Repository\NotreApprocheRepository;
use App\Repository\NotreOffreRepository;
use App\Repository\SliderBanniereRepository;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\NotreVision;
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
                          ContactRepository $contactRepository ): Response
    {
        $slider = $sliderBanniereRepository->findAll();
        $vision = $notreVisionRepository->findAll();
        $approche = $notreApprocheRepository->findAll();
        $offre = $notreOffreRepository->findAll();
        $clients = $clientsRepository->findAll();
        $contact = $contactRepository->findAll();

        return $this->render('defaultpage.html.twig', [
            'slider' => $slider,
            'vision' => $vision,
            'approche' => $approche,
            'offre' => $offre,
            'clients' => $clients,
            'contact' => $contact
        ]);

       /* return $this->render('user/index.html.twig', [
            'user' => $this->getUser(),
            'playedgames' => $gameofuser
        ]); */
    }
}