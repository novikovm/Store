<?php

namespace Project\StoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Project\StoreBundle\Entity\User;
class ProjectStoreBundle extends Bundle
{
	public function getParent(){
		return 'FOSUserBundle';
	}
}
