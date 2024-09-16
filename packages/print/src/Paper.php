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

use Rekalogika\Contracts\Print\PaperInterface;

class Paper implements PaperInterface
{
    public static function inMm(float $width, float $height): self
    {
        return new self(
            $width / 1000,
            $height / 1000,
        );
    }

    public static function inInches(float $width, float $height): self
    {
        return new self(
            $width * 0.0254,
            $height * 0.0254,
        );
    }

    public static function A0(): self
    {
        return self::inMm(841, 1189);
    }

    public static function A1(): self
    {
        return self::inMm(594, 841);
    }

    public static function A2(): self
    {
        return self::inMm(420, 594);
    }

    public static function A3(): self
    {
        return self::inMm(297, 420);
    }

    public static function A4(): self
    {
        return self::inMm(210, 297);
    }

    public static function A5(): self
    {
        return self::inMm(148, 210);
    }

    public static function A6(): self
    {
        return self::inMm(105, 148);
    }

    public static function B0(): self
    {
        return self::inMm(1000, 1414);
    }

    public static function B1(): self
    {
        return self::inMm(707, 1000);
    }

    public static function B2(): self
    {
        return self::inMm(500, 707);
    }

    public static function B3(): self
    {
        return self::inMm(353, 500);
    }

    public static function B4(): self
    {
        return self::inMm(250, 353);
    }

    public static function B5(): self
    {
        return self::inMm(176, 250);
    }

    public static function B6(): self
    {
        return self::inMm(125, 176);
    }

    public static function C0(): self
    {
        return self::inMm(917, 1297);
    }

    public static function C1(): self
    {
        return self::inMm(648, 917);
    }

    public static function C2(): self
    {
        return self::inMm(458, 648);
    }

    public static function C3(): self
    {
        return self::inMm(324, 458);
    }

    public static function C4(): self
    {
        return self::inMm(229, 324);
    }

    public static function C5(): self
    {
        return self::inMm(162, 229);
    }

    public static function C6(): self
    {
        return self::inMm(114, 162);
    }

    public static function C(): self
    {
        return self::inInches(17, 22);
    }

    public static function designatedLong(): self
    {
        return self::inMM(110, 220);
    }

    public static function executive(): self
    {
        return self::inInches(7.25, 10.5);
    }

    public static function japanesePostcard(): self
    {
        return self::inMM(100, 148);
    }

    public static function jisB4(): self
    {
        return self::inMM(257, 364);
    }

    public static function jisB5(): self
    {
        return self::inMM(182, 257);
    }

    public static function jisB6(): self
    {
        return self::inMM(128, 182);
    }

    public static function legal(): self
    {
        return self::inInches(8.5, 14);
    }

    public static function monarchEnvelope(): self
    {
        return self::inInches(3.875, 7.5);
    }

    public static function na8x10(): self
    {
        return self::inInches(8, 10);
    }

    public static function letter(): self
    {
        return self::inInches(8.5, 11);
    }

    public static function naNumber10Envelope(): self
    {
        return self::inInches(4.125, 9.5);
    }

    public static function tabloid(): self
    {
        return self::inInches(11, 17);
    }

    private function __construct(
        private readonly float $width,
        private readonly float $height,
    ) {}

    #[\Override]
    public function getWidth(): float
    {
        return $this->width;
    }

    #[\Override]
    public function getHeight(): float
    {
        return $this->height;
    }
}
