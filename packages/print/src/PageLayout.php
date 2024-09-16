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

namespace Rekalogika\Print;

use Rekalogika\Contracts\Print\PageLayoutInterface;
use Rekalogika\Contracts\Print\PageOrientation;

class PageLayout implements PageLayoutInterface
{
    public static function inMm(
        PageOrientation $pageOrientation,
        float $a,
        ?float $b = null,
        ?float $c = null,
        ?float $d = null,
    ): self {
        if ($b === null) {
            return new self(
                $a / 1000,
                $a / 1000,
                $a / 1000,
                $a / 1000,
                $pageOrientation,
            );
        } elseif ($c === null) {
            return new self(
                $a / 1000,
                $b / 1000,
                $a / 1000,
                $b / 1000,
                $pageOrientation,
            );
        } elseif ($d === null) {
            return new self(
                $a / 1000,
                $b / 1000,
                $c / 1000,
                $b / 1000,
                $pageOrientation,
            );
        }
        return new self(
            $a / 1000,
            $b / 1000,
            $c / 1000,
            $d / 1000,
            $pageOrientation,
        );

    }

    public static function inInches(
        PageOrientation $pageOrientation,
        float $a,
        ?float $b = null,
        ?float $c = null,
        ?float $d = null,
    ): self {
        return self::inMM(
            $pageOrientation,
            $a * 25.4,
            $b !== null ? $b * 25.4 : null,
            $c !== null ? $c * 25.4 : null,
            $d !== null ? $d * 25.4 : null,
        );
    }

    private function __construct(
        private float $topMargin,
        private float $rightMargin,
        private float $bottomMargin,
        private float $leftMargin,
        private PageOrientation $pageOrientation,
    ) {}

    public function getTopMargin(): float
    {
        return $this->topMargin;
    }

    public function getRightMargin(): float
    {
        return $this->rightMargin;
    }

    public function getBottomMargin(): float
    {
        return $this->bottomMargin;
    }

    public function getLeftMargin(): float
    {
        return $this->leftMargin;
    }

    public function getPageOrientation(): PageOrientation
    {
        return $this->pageOrientation;
    }
}
