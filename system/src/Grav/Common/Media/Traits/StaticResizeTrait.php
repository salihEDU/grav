<?php

/**
 * @package    Grav\Common\Media
 *
 * @copyright  Copyright (c) 2015 - 2022 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Media\Traits;

/**
 * Trait StaticResizeTrait
 * @package Grav\Common\Media\Traits
 */
trait StaticResizeTrait
{
    /**
     * Resize media by setting attributes
     *
     * @param  int|null $width
     * @param  int|null $height
     * @return $this
     */
    public function resize(int $width = null, int $height = null)
    {
        $currentWidth = $this->styleAttributes['width'] ?? null;
        $currentHeight = $this->styleAttributes['height'] ?? null;
        if ($currentWidth === $width && $currentHeight === $height) {
            return $this;
        }

        if ($currentWidth !== $width) {
            if ($width) {
                $this->styleAttributes['width'] = $width . 'px';
            } else {
                unset($this->styleAttributes['width']);
            }
        }
        if ($currentHeight !== $height) {
            if ($height) {
                $this->styleAttributes['height'] = $height . 'px';
            } else {
                unset($this->styleAttributes['height']);
            }
        }

        return $this;
    }
}
