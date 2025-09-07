<?php

namespace App\Entity;

enum Category: string
{
    case BD = 'BD';
    case Revue = 'Revue';
    case Roman = 'Roman';
    case Fantastique = "Fantastic";
}