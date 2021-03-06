<?php

/**
 * CreateLocationSignal class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\Core\SignalSlot\Signal\LocationService;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * CreateLocationSignal class.
 */
class CreateLocationSignal extends Signal
{
    /**
     * ContentId.
     *
     * @var mixed
     */
    public $contentId;

    /**
     * Location ID.
     *
     * @var mixed
     */
    public $locationId;
}
