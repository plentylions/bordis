<?php

namespace BordisWunderland\Containers;

use Plenty\Plugin\Templates\Twig;

class BordisWunderlandItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('BordisWunderland::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}