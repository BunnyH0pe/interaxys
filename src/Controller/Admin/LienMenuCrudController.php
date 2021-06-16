<?php

namespace App\Controller\Admin;

use App\Entity\LienMenu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LienMenuCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LienMenu::class;
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
            ->setEntityLabelInSingular('Lien')
            ->setEntityLabelInPlural('Liens');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lien1','Premier lien'),
            TextField::new('lien2','Deuxième lien'),
            TextField::new('lien3','Troisième lien'),
            TextField::new('lien4','Quatrième lien'),
            TextField::new('logoImg','Image du logo'),
        ];
    }

}
