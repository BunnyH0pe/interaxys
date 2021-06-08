<?php

namespace App\Controller\Admin;

use App\Entity\NotreVision;
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

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre','Titre (ne pas modifier)'),
            TextEditorField::new('paragraphe1', 'Premier paragraphe'),
            TextEditorField::new('paragraphe2', 'Second paragraphe'),
            TextField::new('lienvideo', 'Lien vidéo'),
        ];
    }
}
