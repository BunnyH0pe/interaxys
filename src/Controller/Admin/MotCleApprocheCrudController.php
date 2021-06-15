<?php

namespace App\Controller\Admin;

use App\Entity\MotCleApproche;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MotCleApprocheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MotCleApproche::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('motcle1'),
            TextField::new('motcle2'),
            TextField::new('motcle3'),
            TextField::new('motcle4'),
        ];
    }
}
