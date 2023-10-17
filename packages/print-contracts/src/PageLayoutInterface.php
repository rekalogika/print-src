<?php

declare(strict_types=1);

/*
 * This file is part of rekalogika/print-src package.
 *
 * (c) Priyadi Iman Nurcahyo <https://rekalogika.dev>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Rekalogika\Contracts\Print;

interface PageLayoutInterface
{
    /**
     * Top margin in meters
     */
    public function getTopMargin(): float;

    /**
     * Right margin in meters
     */
    public function getRightMargin(): float;

    /**
     * Bottom margin in meters
     */
    public function getBottomMargin(): float;

    /**
     * Left margin in meters
     */
    public function getLeftMargin(): float;

    /**
     * Page orientation
     */
    public function getPageOrientation(): PageOrientation;

}
