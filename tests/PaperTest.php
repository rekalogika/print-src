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
use Rekalogika\Print\Paper;

class PaperTest extends TestCase
{
    public function testA0(): void
    {
        $paper = Paper::A0();

        $this->assertEquals(0.841, $paper->getWidth());
        $this->assertEquals(1.189, $paper->getHeight());
    }

    public function testA1(): void
    {
        $paper = Paper::A1();

        $this->assertEquals(0.594, $paper->getWidth());
        $this->assertEquals(0.841, $paper->getHeight());
    }

    public function testA2(): void
    {
        $paper = Paper::A2();

        $this->assertEquals(0.42, $paper->getWidth());
        $this->assertEquals(0.594, $paper->getHeight());
    }

    public function testA3(): void
    {
        $paper = Paper::A3();

        $this->assertEquals(0.297, $paper->getWidth());
        $this->assertEquals(0.42, $paper->getHeight());
    }

    public function testA4(): void
    {
        $paper = Paper::A4();

        $this->assertEquals(0.21, $paper->getWidth());
        $this->assertEquals(0.297, $paper->getHeight());
    }

    public function testInMm(): void
    {
        $paper = Paper::inMm(100, 200);

        $this->assertEquals(0.1, $paper->getWidth());
        $this->assertEquals(0.2, $paper->getHeight());
    }

    public function testInInches(): void
    {
        $paper = Paper::inInches(10, 20);

        $this->assertEquals(0.254, $paper->getWidth());
        $this->assertEquals(0.508, $paper->getHeight());
    }
}
