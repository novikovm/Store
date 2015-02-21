<?php

namespace Project\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
     /**
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="array")
     */
    private $orders;

    /**
     * Set orders
     *
     * @param array $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }

    /**
     * Get orders
     *
     * @return array 
     */
    public function getOrders()
    {
        return $this->orders;
    }
	
	public function __construct()
    {
        parent::__construct();
        // your own logic
    }
   
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
