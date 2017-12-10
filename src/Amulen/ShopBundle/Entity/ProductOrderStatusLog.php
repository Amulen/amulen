<?php

namespace Amulen\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flowcode\ShopBundle\Entity\ProductOrderStatusLog as BaseProductOrderStatusLog;

/**
 * ProductOrderStatusLog
 *
 * @ORM\Table("shop_order_status_log")
 * @ORM\Entity(repositoryClass="Amulen\ShopBundle\Repository\ProductOrderStatusLogRepository")
 */
class ProductOrderStatusLog extends BaseProductOrderStatusLog
{
}
