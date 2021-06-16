<?php

namespace App\Controller\Admin;

use App\Entity\Citations;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CitationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Citations::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the labels used to refer to this entity in titles, buttons, etc.
            ->setEntityLabelInSingular('Citation')
            ->setEntityLabelInPlural('Citations');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('auteur'),
            TextEditorField::new('citation'),
        ];
    }
}
