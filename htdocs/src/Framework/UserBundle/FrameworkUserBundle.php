<?php

namespace Framework\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrameworkUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
