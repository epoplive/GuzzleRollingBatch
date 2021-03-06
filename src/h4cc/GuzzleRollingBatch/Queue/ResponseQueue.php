<?php

/*
 * This file is part of the h4cc/GuzzleRollingBatch package.
 *
 * (c) Julius Beckmann <github@h4cc.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace h4cc\GuzzleRollingBatch\Queue;

use Guzzle\Http\Message\Response;

/**
 * Class ResponseQueue
 *
 * @author Julius Beckmann <github@h4cc.de>
 */
class ResponseQueue extends AbstractQueue implements ResponseQueueInterface
{
    /**
     * Adds a Request.
     */
    public function add(Response $response)
    {
        $this->queue->enqueue($response);
    }
}
