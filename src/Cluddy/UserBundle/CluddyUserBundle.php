<?php

namespace Cluddy\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CluddyUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}