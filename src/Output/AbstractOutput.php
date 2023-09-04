<?php

declare(strict_types=1);

namespace Tomaj\NetteApi\Output;

abstract class AbstractOutput implements OutputInterface
{
    protected $code;

    protected $description;

    /** @var string */
    protected $contentType;

    public function __construct(int $code, string $description = '', string $contentType = '')
    {
        $this->code = $code;
        $this->description = $description;
        $this->contentType = $contentType;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getSchema(): string
    {
        return '{}';
    }
}
