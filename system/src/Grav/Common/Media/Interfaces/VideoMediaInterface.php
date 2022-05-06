<?php

/**
 * @package    Grav\Common\Media
 *
 * @copyright  Copyright (c) 2015 - 2022 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Media\Interfaces;

/**
 * Class implements video media interface.
 */
interface VideoMediaInterface extends MediaObjectInterface, MediaPlayerInterface
{
    /**
     * Allows to set the video's poster image
     *
     * @param string|null $poster
     * @return $this
     * @phpstan-impure
     */
    public function poster(string $poster = null);

    /**
     * Allows to set the playsinline attribute
     *
     * @param bool $status
     * @return $this
     * @phpstan-impure
     */
    public function playsinline(bool $status = false);
}
