<?php

namespace App\Controller\Admin;

use App\Entity\BanApproche;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BanApprocheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BanApproche::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            TextEditorField::new('soustitre'),
        ];
    }
}
