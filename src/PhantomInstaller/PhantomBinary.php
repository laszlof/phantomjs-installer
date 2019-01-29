<?php
/*
 * This file is part of the "jakoch/phantomjs-installer" package.
 *
 * Copyright (c) 2013-2017 Jens-André Koch <jakoch@web.de>
 *
 * The content is released under the MIT License. Please view
 * the LICENSE file that was distributed with this source code.
 */

namespace PhantomInstaller;

class PhantomBinary
{
    /** @var string - Path to phantomjs binary */
    const BIN = __DIR__ . '/../../vendor/bin/phantomjs';

    /** @var string - Path to phantomjs directory */
    const DIR = __DIR__ . '/../../vendor/bin';

    /**
     * Get binary path
     * @return string
     */
    public static function getBin() {
      return self::BIN;
    }

    /**
     * Get binary directory
     * @return string
     */
    public static function getDir() {
      return self::DIR;
    }
}
