<?php

namespace App\Controller\Admin;

use App\Entity\NotreVision;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NotreVisionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NotreVision::class;
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
            ->setEntityLabelInSingular('Vision')
            ->setEntityLabelInPlural('Visions');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre','Titre (n\'apparait pas)'),
            TextEditorField::new('paragraphe1', 'Premier paragraphe'),
        ];
    }
}
