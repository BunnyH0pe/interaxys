<?php

namespace App\Controller\Admin;

use App\Entity\NotreOffre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NotreOffreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NotreOffre::class;
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
