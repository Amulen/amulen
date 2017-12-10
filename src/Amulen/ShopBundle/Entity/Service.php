<?php

namespace Amulen\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flowcode\ShopBundle\Entity\Service as BaseService;

/**
 * Service
 *
 * @ORM\Table(name="shop_service")
 * @ORM\Entity(repositoryClass="Amulen\ShopBundle\Repository\ServiceRepository")
 */
class Service extends BaseService
{
}
