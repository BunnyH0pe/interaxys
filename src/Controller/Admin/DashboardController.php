<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use App\Entity\Contact;
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

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Accueil Admin', 'fa fa-home');
        yield MenuItem::linkToCrud('Slider principal', 'fas fa-arrows-alt-h', SliderBanniere::class);
        yield MenuItem::linkToCrud('Notre Vision', 'fas fa-eye', NotreVision::class);
        yield MenuItem::linkToCrud('Notre Approche', 'fas fa-map-signs', NotreApproche::class);
        yield MenuItem::linkToCrud('Notre Offre', 'fas fa-gift', NotreOffre::class);
        yield MenuItem::linkToCrud('Nos Clients', 'fas fa-user-friends', Clients::class);
        yield MenuItem::linkToCrud('Nous Contacter', 'fas fa-address-card', Contact::class);
    }
}
