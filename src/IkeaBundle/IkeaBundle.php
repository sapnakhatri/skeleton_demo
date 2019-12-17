<?php

namespace IkeaBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class IkeaBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
            '/bundles/ikea/js/pimcore/startup.js'
        ];
    }
}