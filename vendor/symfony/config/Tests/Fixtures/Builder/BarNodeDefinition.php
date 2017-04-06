<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Tests\Definition\Builder;

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
<<<<<<< HEAD
=======
use Symfony\Component\Config\Tests\Fixtures\BarNode;
>>>>>>> bdd

class BarNodeDefinition extends NodeDefinition
{
    protected function createNode()
    {
<<<<<<< HEAD
=======
        return new BarNode($this->name);
>>>>>>> bdd
    }
}
