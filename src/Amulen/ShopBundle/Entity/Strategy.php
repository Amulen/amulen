<?php

namespace Amulen\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flowcode\ShopBundle\Entity\Strategy as BaseStrategy;

/**
 * Strategy
 *
 * @ORM\Table(name="shop_strategy")
 * @ORM\Entity(repositoryClass="Amulen\ShopBundle\Repository\StrategyRepository")
 */
class Strategy extends BaseStrategy
{
}
