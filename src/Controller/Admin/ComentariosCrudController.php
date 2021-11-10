<?php

namespace App\Controller\Admin;

use App\Entity\Comentarios;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ComentariosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comentarios::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
