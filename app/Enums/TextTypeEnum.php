<?php

namespace App\Enums;

enum TextTypeEnum: int
{
    case Category = 1;
    case WhyText = 2;
    case Sectors = 3;
    case WhoWeAre = 4;

    case Projects = 5;

    case Clients = 6;

    case Partners = 7;

    case Goals = 8;

    case History = 9;

    case About = 10;
}
