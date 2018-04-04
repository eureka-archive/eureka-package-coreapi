<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Package\CoreApi\Controller;

use Psr\Http\Message\RequestInterface;

class Error extends AbstractCoreController
{
    /**
     * @param  \Psr\Http\Message\RequestInterface $request
     * @param  \Exception $exception
     * @return \Eureka\Component\Http\Message\Response
     */
    public function page404(RequestInterface $request, \Exception $exception = null)
    {
        return $this->getResponse('Page not found', 404);
    }

    /**
     * @param  \Psr\Http\Message\RequestInterface $request
     * @param  \Exception $exception
     * @return \Eureka\Component\Http\Message\Response
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function page500(RequestInterface $request, \Exception $exception)
    {
        $this->addContext('exception', $exception);

        return $this->getResponse(['message' => $exception->getMessage(), 'trace' => $exception->getTraceAsString()], 500);
    }
}
