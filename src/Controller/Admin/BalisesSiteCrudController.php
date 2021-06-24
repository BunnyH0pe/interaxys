<?php

namespace App\Controller\Admin;

use App\Entity\BalisesSite;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BalisesSiteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BalisesSite::class;
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
            ->setEntityLabelInSingular('Configuration')
            ->setEntityLabelInPlural('Configurations');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre','Titre du site'),
            TextEditorField::new('description','Description du site'),
            ImageField::new('favicon','Favicon')
                ->setBasePath('uploads/images/favicon')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setUploadDir('public/uploads/images/favicon'),
        ];
    }

}
