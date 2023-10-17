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

namespace Rekalogika\Print\Tests;

use PHPUnit\Framework\TestCase;
use Rekalogika\Contracts\Print\PageOrientation;
use Rekalogika\Print\PageLayout;

class PageLayoutTest extends TestCase
{
    public function testOneMargin(): void
    {
        $pageLayout = PageLayout::inMm(
            PageOrientation::Portrait,
            10
        );

        $this->assertEquals(0.01, $pageLayout->getTopMargin());
        $this->assertEquals(0.01, $pageLayout->getRightMargin());
        $this->assertEquals(0.01, $pageLayout->getBottomMargin());
        $this->assertEquals(0.01, $pageLayout->getLeftMargin());
    }

    public function testTwoMargins(): void
    {
        $pageLayout = PageLayout::inMm(
            PageOrientation::Portrait,
            10,
            20
        );

        $this->assertEquals(0.01, $pageLayout->getTopMargin());
        $this->assertEquals(0.02, $pageLayout->getRightMargin());
        $this->assertEquals(0.01, $pageLayout->getBottomMargin());
        $this->assertEquals(0.02, $pageLayout->getLeftMargin());
    }

    public function testThreeMargins(): void
    {
        $pageLayout = PageLayout::inMm(
            PageOrientation::Portrait,
            10,
            20,
            30
        );

        $this->assertEquals(0.01, $pageLayout->getTopMargin());
        $this->assertEquals(0.02, $pageLayout->getRightMargin());
        $this->assertEquals(0.03, $pageLayout->getBottomMargin());
        $this->assertEquals(0.02, $pageLayout->getLeftMargin());
    }

    public function testFourMargins(): void
    {
        $pageLayout = PageLayout::inMm(
            PageOrientation::Portrait,
            10,
            20,
            30,
            40
        );

        $this->assertEquals(0.01, $pageLayout->getTopMargin());
        $this->assertEquals(0.02, $pageLayout->getRightMargin());
        $this->assertEquals(0.03, $pageLayout->getBottomMargin());
        $this->assertEquals(0.04, $pageLayout->getLeftMargin());
    }
}
