<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace MolliePrefix\PhpCsFixer\Tests\Test;

use MolliePrefix\Symfony\Component\Finder\SplFileInfo;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
interface IntegrationCaseFactoryInterface
{
    /**
     * @return IntegrationCase
     */
    public function create(\MolliePrefix\Symfony\Component\Finder\SplFileInfo $file);
}