<?php

namespace BordisWunderland\Containers;

use Plenty\Plugin\Templates\Twig;

class BordisWunderlandContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('BordisWunderland::Stylesheet');
    }
}