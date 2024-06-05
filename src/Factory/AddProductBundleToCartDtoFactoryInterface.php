<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusProductBundlePlugin\Factory;

use BitBag\SyliusProductBundlePlugin\Dto\AddProductBundleToCartDtoInterface;
use BitBag\SyliusProductBundlePlugin\Entity\OrderItemInterface;
use BitBag\SyliusProductBundlePlugin\Entity\ProductInterface;
use Sylius\Component\Order\Model\OrderInterface;

interface AddProductBundleToCartDtoFactoryInterface
{
    public function createNew(
        OrderInterface $order,
        OrderItemInterface $orderItem,
        ProductInterface $product,
    ): AddProductBundleToCartDtoInterface;
}
