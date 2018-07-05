<?php

namespace BordisWunderland\Containers;

use Plenty\Plugin\Templates\Twig;

class BordisWunderlandItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BordisWunderland::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}