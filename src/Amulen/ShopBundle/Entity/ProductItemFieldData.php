<?php

namespace Amulen\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flowcode\ShopBundle\Entity\ProductItemFieldData as BaseProductItemFieldData;

/**
 * ProductItemFieldData
 *
 * @ORM\Table(name="shop_product_item_field_data")
 * @ORM\Entity(repositoryClass="\Amulen\ShopBundle\Repository\ProductItemFieldDataRepository")
 */
class ProductItemFieldData extends BaseProductItemFieldData
{
}

