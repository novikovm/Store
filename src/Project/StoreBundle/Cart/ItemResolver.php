<?php

namespace Project\StoreBundle\Cart;

use Sylius\Component\Addressing\Checker\RestrictedZoneCheckerInterface;
use Sylius\Component\Cart\Model\CartItemInterface;
use Sylius\Component\Cart\Provider\CartProviderInterface;
use Sylius\Component\Cart\Resolver\ItemResolverInterface;
use Sylius\Component\Cart\Resolver\ItemResolvingException;
use Sylius\Component\Inventory\Checker\AvailabilityCheckerInterface;
use Sylius\Component\Pricing\Calculator\DelegatingCalculatorInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class ItemResolver implements ItemResolverInterface
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function resolve(CartItemInterface $item, $request)
    {
    	$productId = $request->query->get('productId');

        // If no product id given, or product not found, we throw exception with nice message.
        if (!$productId || !$product = $this->getProductRepository()->find($productId)) {
            throw new ItemResolvingException('Requested movie was not found');
        }

     //    $product = $this->getProductRepository()->find($productId);
     //    // Assign the product to the item and define the unit price.
     //    $item->setVariant($product);
     //    $item->setUnitPrice($product->getPrice());



        
        // If our product has no variants, we simply set the master variant of it.
        $item->setVariant($product->getMasterVariant());
        
        
        $variant = $item->getVariant();
        // If all is ok with form, quantity and other stuff, simply return the item.
        if (!$form->isValid() || null === $variant) {
            throw new ItemResolvingException('Submitted form is invalid.');
        }
        $cart = $this->cartProvider->getCart();
        $quantity = $item->getQuantity();
        $context = array('quantity' => $quantity);
        
        $item->setUnitPrice($this->priceCalculator->calculate($variant, $context));
        foreach ($cart->getItems() as $cartItem) {
            if ($cartItem->equals($item)) {
                $quantity += $cartItem->getQuantity();
                break;
            }
        }

        // Everything went fine, return the item.
        return $item;
    }

    private function getProductRepository()
    {
        return $this->entityManager->getRepository('ProjectStoreBundle:Movie');
    }
}