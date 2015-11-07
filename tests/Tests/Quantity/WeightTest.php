<?php

/*
 * This file is part of the Phospr Quantity package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phospr\Tests\Quantity;

use Phospr\Weight,
    Phospr\Uom;

/**
 * WeightTest
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  0.3.0
 */
class WeightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test __callStatic
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.3.0
     */
    public function testCallStatic()
    {
        $weight = Weight::LB(10, 20);

        $this->assertSame('LB', $weight->getUom()->getName());
        $this->assertSame('1/2', (string) $weight->getAmount());

        $newWeight = $weight->to(Uom::OZ());

        $this->assertSame('8', (string) $newWeight->getAmount());
    }

    /**
     * Test __toString()
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.6.0
     */
    public function testToString()
    {
        $weight = Weight::LB(1, 3);

        $this->assertSame('1/3 LB', (string) $weight);
    }
}