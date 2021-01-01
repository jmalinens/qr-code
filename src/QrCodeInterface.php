<?php

declare(strict_types=1);

namespace Endroid\QrCode;

use Endroid\QrCode\Encoding\EncodingInterface;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelInterface;
use Endroid\QrCode\Writer\RoundBlockSizeMode\RoundBlockSizeModeInterface;

interface QrCodeInterface
{
    public function getData(): string;

    public function getEncoding(): EncodingInterface;

    public function getErrorCorrectionLevel(): ErrorCorrectionLevelInterface;

    public function getSize(): int;

    public function getMargin(): int;

    public function getRoundBlockSizeMode(): RoundBlockSizeModeInterface;
}
