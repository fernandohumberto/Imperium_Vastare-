<?php

namespace Imperium\Controller;

use Imperium\Model\Gasto;

class GastoController extends Controller
{
    public function __construct()
    {
        parent::__construct(Gasto::class);
    }

    
}