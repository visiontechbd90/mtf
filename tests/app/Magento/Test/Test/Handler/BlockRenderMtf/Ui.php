<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Test\Test\Handler\BlockRenderMtf;

use Magento\Test\Test\Handler\BlockRenderMtf\BlockRenderMtfInterface;
use Magento\Mtf\Fixture\FixtureInterface;
use Magento\Mtf\Handler\Ui as AbstractUi;

/**
 * Class Ui
 */
class Ui extends AbstractUi implements BlockRenderMtfInterface
{
   public function persist(FixtureInterface $fixture = null)
    {
        //
    }
}
