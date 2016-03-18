<?php

namespace App\Presenters;

use Nette;
use App\Model;


class SitePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->title = $this->action;

		$this->template->h1 = 'Welcome';

		$this->template->anyVariable = 'any value';
	}

}
