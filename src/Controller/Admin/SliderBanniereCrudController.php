<?php

namespace App\Controller\Admin;

use App\Entity\SliderBanniere;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SliderBanniereCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SliderBanniere::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the labels used to refer to this entity in titles, buttons, etc.
            ->setEntityLabelInSingular('Slide')
            ->setEntityLabelInPlural('Slides Header');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre','Titre'),
            TextEditorField::new('soustitre', 'Sous-titre'),
            TextField::new('image', 'Image'),
        ];
    }
}
