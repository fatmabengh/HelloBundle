<?php
/**
 * Created by PhpStorm.
 * User: bghanem
 * Date: 13/02/2019
 * Time: 12:16
 */

namespace Bg\HelloBundle;


use Bg\HelloBundle\DependencyInjection\BgHelloExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BgHelloBundle extends Bundle
{

    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new BgHelloExtension();
        }
        return $this->extension;
    }
}