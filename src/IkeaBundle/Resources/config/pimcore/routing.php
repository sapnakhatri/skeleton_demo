<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('ikea_homepage', new Route('/ikea', array(
    '_controller' => 'IkeaBundle:Default:index',
)));

return $collection;
