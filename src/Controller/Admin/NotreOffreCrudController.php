<?php

namespace App\Controller\Admin;

use App\Entity\NotreOffre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NotreOffreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NotreOffre::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            TextField::new('image_titre', 'Image du titre'),
            TextEditorField::new('description'),
        ];
    }
}
