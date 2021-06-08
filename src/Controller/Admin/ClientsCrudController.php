<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ClientsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clients::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom_client', 'Nom du client'),
            TextField::new('image','Image du client'),
            TextField::new('attr_alt', 'Description de l\'image'),
        ];
    }

}
