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

use Psr\Http\Message\StreamInterface;

interface PdfGeneratorInterface
{
    public function generatePdfFromHtml(
        string $htmlContent,
        PaperInterface $paper,
        PageLayoutInterface $pageLayout,
        ?string $header = null,
        ?string $footer = null,
    ): StreamInterface;
}
