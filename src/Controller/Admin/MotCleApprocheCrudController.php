<?php

namespace App\Controller\Admin;

use App\Entity\MotCleApproche;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MotCleApprocheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MotCleApproche::class;
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
            ->setEntityLabelInSingular('Mot clé')
            ->setEntityLabelInPlural('Mots clés');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('motcle1','Premier mot clé'),
            TextField::new('motcle2','Deuxième mot clé'),
            TextField::new('motcle3','Troisième mot clé'),
            TextField::new('motcle4','Quatrième mot clé'),
        ];
    }
}
