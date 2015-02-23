<?php

namespace Project\StoreBundle\Entity;

use Sylius\Component\Cart\Model\CartItem as BaseCartItem;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Bundle\CartBundle\Model\CartItemInterface;

/**
 * CartItem
 */
class CartItem extends BaseCartItem
{
	/**
     * @ORM\ManyToOne(targetEntity="Movie")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * Get product
     *
     * @return \Project\StoreBundle\Entity\Movie 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set product
     *
     * @param \Project\StoreBundle\Entity\Movie $product
     * @return Movie
     */
    public function setProduct(Movie $product)
    {
        $this->product = $product;
        return $this;
    }

}