<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Package\CoreApi\Controller;

use Eureka\Component\Http\Message\Response;
use Eureka\Kernel\Http\Controller\Controller as KernelController;

/**
 * Class CoreController
 *
 * @author Romain Cottard
 */
class AbstractCoreController extends KernelController
{
    /**
     * @param  mixed $content
     * @param  int $status
     * @param  bool $toJson
     * @param  bool $withHeaderJson
     * @return \Eureka\Component\Http\Message\Response
     */
    protected function getResponse($content, $status = 200, $toJson = true, $withHeaderJson = true)
    {
        $response = new Response($status);
        $response->getBody()->write($toJson ? json_encode($content) : $content);

        if ($withHeaderJson) {
            $response = $response->withHeader('Content-Type',  'application/json');
        }

        return $response;
    }
}
