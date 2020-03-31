<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/wordplate/acf
 */

declare(strict_types=1);

namespace WordPlate\Acf\Fields\Attributes;

trait Placeholder
{
    public function placeholder(string $placeholder): self
    {
        $this->config->set('placeholder', $placeholder);

        return $this;
    }
}