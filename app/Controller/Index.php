<?php
// +----------------------------------------------------------------------
// | Created by Laotian on 2021-07-30.
// | Copyright 2021 HaoMVC. All rights reserved.
// +----------------------------------------------------------------------

namespace app\Controller;

use HaoMVC\Base\Base;

/**
 * 
 */
class Index extends Base {
	
	public function Index()
	{
		return $this->view->fetch();
	}
}

