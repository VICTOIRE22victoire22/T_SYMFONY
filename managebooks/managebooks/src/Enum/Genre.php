<?php

namespace App\Enum;

enum Genre: string
{
    case Novel = 'roman';
    case Essay = 'essai';
    case Comic = 'bande_dessinee';
    case Biography = 'biographie';
    case Theatre = 'theatre';
    case Poetry = 'poesie';
    case ScienceFiction = 'science_fiction';
    case Police = 'policier';
    case Other = 'autre';

    public function label(): string
    {
        return match($this) {
            self::Novel => 'Roman',
            self::Essay => 'Essai',
            self::Comic => 'Bande dessinée',
            self::Biography => 'Biographie',
            self::Theatre => 'Théâtre',
            self::Poetry => 'Poésie',
            self::ScienceFiction => 'Science fiction',
            self::Police => 'Policier',
            self::Other => 'Autre',
        };
    }
}



