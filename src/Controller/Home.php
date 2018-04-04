<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Package\CoreApi\Controller;

use Psr\Http\Message\RequestInterface;

class Home extends AbstractCoreController
{
    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @return \Eureka\Component\Http\Message\Response
     */
    public function index(RequestInterface $request)
    {
        return $this->getResponse(['message' => 'ok']);
    }
}
