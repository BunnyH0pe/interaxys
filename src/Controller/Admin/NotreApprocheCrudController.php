<?php

namespace App\Controller\Admin;

use App\Entity\NotreApproche;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NotreApprocheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NotreApproche::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
