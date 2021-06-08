<?php

namespace App\Controller\Admin;

use App\Entity\NotreApproche;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NotreApprocheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NotreApproche::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('texte_bouton'),
            TextField::new('titre'),
            TextEditorField::new('description'),
            TextField::new('mot_clef'),
            TextField::new('horizon'),
            TextField::new('objet'),
            TextField::new('finalite'),
            TextField::new('resultat'),
        ];
    }
}
