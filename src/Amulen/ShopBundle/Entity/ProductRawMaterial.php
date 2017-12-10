<?php

namespace Amulen\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flowcode\ShopBundle\Entity\ProductRawMaterial as BaseProductRawMaterial;

/**
 * ProductOrder
 *
 * @ORM\Table(name="shop_product_raw_material")
 * @ORM\Entity(repositoryClass="\Amulen\ShopBundle\Repository\ProductRawMaterialRepository")
 */
class ProductRawMaterial extends BaseProductRawMaterial
{
}
