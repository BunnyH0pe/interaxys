<?php

namespace App\Controller\Admin;

use App\Entity\NotreApproche;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NotreApprocheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NotreApproche::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE);
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the labels used to refer to this entity in titles, buttons, etc.
            ->setEntityLabelInSingular('Menu Approche')
            ->setEntityLabelInPlural('Menus Approche');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('texte_bouton','Texte du bouton'),
            TextField::new('titre','Titre'),
            TextEditorField::new('description','Description'),
            TextField::new('mot_clef','Mot clé principal'),
            TextField::new('motcle1','Mot clé n°1'),
            TextField::new('motcle2','Mot clé n°2'),
            TextField::new('motcle3','Mot clé n°3'),
            TextField::new('motcle4','Mot clé n°4'),
        ];
    }
}
