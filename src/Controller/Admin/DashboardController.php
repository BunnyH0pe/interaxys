<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use App\Entity\Contact;
use App\Entity\ContactForm;
use App\Entity\NotreApproche;
use App\Entity\NotreOffre;
use App\Entity\NotreVision;
use App\Entity\SliderBanniere;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // the name visible to end users
            ->setTitle('<img src="/interaxys/public/img/interaxys.png" style="width: 80px"> Interaxys')

            // the path defined in this method is passed to the Twig asset() function
            ->setFaviconPath('img/interaxys.png');
            ;
    }

    public function configureMenuItems(): iterable
    {
        return[
            MenuItem::linktoDashboard('Administration', 'fa fa-home'),
            MenuItem::section('Bannière principale'),
            MenuItem::linkToCrud('Slider', 'fas fa-arrows-alt-h', SliderBanniere::class),
            MenuItem::section('Section Vision'),
            MenuItem::linkToCrud('Contenu texte et vidéo', 'fas fa-eye', NotreVision::class),
            MenuItem::section('Section Approche'),
            MenuItem::linkToCrud('Menu d\'approche', 'fas fa-map-signs', NotreApproche::class),
            MenuItem::section('Section Offre'),
            MenuItem::linkToCrud('Slider Offre', 'fas fa-gift', NotreOffre::class),
            MenuItem::linkToCrud('Pré-Remplissage Formulaire', 'fas fa-address-card', ContactForm::class),
            MenuItem::section('Section Client'),
            MenuItem::linkToCrud('Clients', 'fas fa-user-friends', Clients::class),
            MenuItem::section('Bas de page'),
            MenuItem::linkToCrud('Informations de contact', 'fas fa-address-card', Contact::class),
        ];
    }
}
