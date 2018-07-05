<?php

namespace BordisWunderland\Containers;

use Plenty\Plugin\Templates\Twig;

class BordisWunderlandItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BordisWunderland::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}