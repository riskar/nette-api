<?php

namespace Tomaj\NetteApi\Output;

class XmlOutput extends TextOutput
{
    public function __construct(int $code, string $description = '', string $contentType = 'text/xml; charset=utf-8')
    {
        parent::__construct($code, $description, $contentType);
    }
}
