<?php

namespace Amulen\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flowcode\ShopBundle\Entity\ProductItemField as BaseProductItemField;

/**
 * ProductItemField
 *
 * @ORM\Table(name="shop_product_item_field")
 * @ORM\Entity(repositoryClass="\Amulen\ShopBundle\Repository\ProductItemFieldRepository")
 */
class ProductItemField extends BaseProductItemField
{
}

