<?php

namespace PRS\PicksBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PRSPicksBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
