<?php

namespace App\Controller\Admin;

use App\Entity\Experiencias;
use App\Entity\Comentarios;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
       // return parent::index();
       $routeBuilder = $this->get(AdminUrlGenerator::class);
       $url = $routeBuilder->setController(ExperienciasCrudController::class)->generateUrl();

       return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Peru Tour');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Experiencias', 'fas fa-map-marked-alt', Experiencias::class);
        yield MenuItem::linkToCrud('Comentarios', 'fas fa-comments', Comentarios::class);
    }
}
