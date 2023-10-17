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

interface PaperInterface
{
    /**
     * Paper width in meters. The width must be the short edge of the paper.
     */
    public function getWidth(): float;

    /**
     * Paper height in meters. The height must be the long edge of the paper.
     */
    public function getHeight(): float;
}
