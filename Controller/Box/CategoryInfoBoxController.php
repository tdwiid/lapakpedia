<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CategoryBundle\Controller\Box;

use Symfony\Component\HttpFoundation\Response;
use WellCommerce\Bundle\CoreBundle\Controller\Box\AbstractBoxController;

/**
 * Class CategoryInfoBoxController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class CategoryInfoBoxController extends AbstractBoxController
{
    public function indexAction() : Response
    {
        return $this->displayTemplate('index', [
            'category' => $this->manager->getCategoryContext()->getCurrentCategory()
        ]);
    }
}
