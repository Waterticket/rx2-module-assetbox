<?php

namespace Rhymix\Modules\Assetbox\Controllers;

use Rhymix\Modules\Assetbox\Base;

/**
 * 에셋 박스
 * 
 * Copyright (c) Waterticket
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Index extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		$this->setTemplatePath($this->module_path . 'views/');
	}
	
	/**
	 * 메인 화면 예제
	 */
	public function dispAssetboxIndex()
	{
		// 뷰 파일명 지정
		$this->setTemplateFile('index');
	}
}
