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
 * Class NullResponseQueue.
 *
 * This Queue will ALWAYS be empty.
 *
 * @author Julius Beckmann <github@h4cc.de>
 */
class NullResponseQueue extends AbstractQueue implements ResponseQueueInterface
{
    /**
     * Adds a Request.
     */
    public function add(Response $response)
    {
        // Do not add.
    }
}
