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
        yield MenuItem::linktoDashboard('Administration', 'fa fa-home');
        yield MenuItem::linkToCrud('Bannière', 'fas fa-arrows-alt-h', SliderBanniere::class);
        yield MenuItem::linkToCrud('Vision', 'fas fa-eye', NotreVision::class);
        yield MenuItem::linkToCrud('Approche', 'fas fa-map-signs', NotreApproche::class);
        yield MenuItem::linkToCrud('Offre', 'fas fa-gift', NotreOffre::class);
        yield MenuItem::linkToCrud('Clients', 'fas fa-user-friends', Clients::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-address-card', Contact::class);
    }
}
