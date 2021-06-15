<?php

namespace App\Controller\Admin;

use App\Entity\LienMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LienMenuCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LienMenu::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lien1'),
            TextField::new('lien2'),
            TextField::new('lien3'),
            TextField::new('lien4'),
            TextField::new('logoImg'),
        ];
    }

}
