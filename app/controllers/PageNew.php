<?php

class PageNew {


	public function indexAction()
	{
		echo 'PageNew::index';
	}
	
	public function testAction()
	{
		echo 'PageNew::test';
	}
	
	public function testPageAction()
	{
		echo 'PageNew::testPage';
	}
	
	public function before()
	{
		echo 'PageNew::before';
	}

}