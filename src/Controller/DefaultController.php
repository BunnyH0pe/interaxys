<?php


namespace App\Controller;
use App\Repository\BalisesSiteRepository;
use App\Repository\BanApprocheRepository;
use App\Repository\CitationsRepository;
use App\Repository\ClientsRepository;
use App\Repository\ContactFormRepository;
use App\Repository\ContactRepository;
use App\Repository\LienMenuRepository;
use App\Repository\MotCleApprocheRepository;
use App\Repository\MotClefMenuRepository;
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
     * @Route("/defaultpage", name="accueil")
     */
    public function index(NotreVisionRepository $notreVisionRepository,
                          SliderBanniereRepository $sliderBanniereRepository,
                          NotreApprocheRepository $notreApprocheRepository,
                          NotreOffreRepository $notreOffreRepository,
                          ClientsRepository $clientsRepository,
                          ContactRepository $contactRepository,
                          ContactFormRepository $contactFormRepository,
                          BanApprocheRepository $banApprocheRepository,
                          LienMenuRepository $lienMenuRepository,
                          MotCleApprocheRepository $motCleApprocheRepository,
                          MotClefMenuRepository $motClefMenuRepository,
                          BalisesSiteRepository $balisesSiteRepository,
                          CitationsRepository $citationsRepository): Response
    {
        $slider = $sliderBanniereRepository->findAll();
        $balisessite = $balisesSiteRepository->find(1);
        $vision = $notreVisionRepository->find(1);
        $approche = $notreApprocheRepository->findAll();
        $offre = $notreOffreRepository->findAll();
        $clients = $clientsRepository->findAll();
        $contact = $contactRepository->find(1);
        $contactform = $contactFormRepository->findAll();
        $banapproche = $banApprocheRepository->find(1);
        $lienmenu = $lienMenuRepository->find(1);
        $motcleapproche = $motCleApprocheRepository->find(1);
        $motclemenu = $motClefMenuRepository->find(1);
        $citations = $citationsRepository->findAll();

        return $this->render('defaultpage.html.twig', [
            'balises' => $balisessite,
            'slider' => $slider,
            'vision' => $vision,
            'approche' => $approche,
            'offre' => $offre,
            'clients' => $clients,
            'contact' => $contact,
            'formulaire' => $contactform,
            'banapproche' => $banapproche,
            'lienmenu' => $lienmenu,
            'motcleapproche' => $motcleapproche,
            'motclemenu' => $motclemenu,
            'citations' => $citations,
        ]);
    }

    /**
     * @Route("/mentionslegales",name="mentionslegales")
     */
    public function MentionsLegales( LienMenuRepository $lienMenuRepository,BalisesSiteRepository $balisesSiteRepository,  ContactRepository $contactRepository):Response
    {
        $lienmenu = $lienMenuRepository->find(1);
        $contact = $contactRepository->find(1);
        $balisessite = $balisesSiteRepository->find(1);

        return $this->render('mentionslegales.html.twig',[
            'lienmenu' => $lienmenu,
            'contact' => $contact,
            'balises' => $balisessite
        ]);
    }
}