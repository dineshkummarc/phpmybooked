<?php

/**
<<<<<<< HEAD
 * Copyright 2017-2020 Nick Korbel
=======
 * Copyright 2016 Nick Korbel
>>>>>>> old/master
 *
 * This file is part of Booked Scheduler.
 *
 * Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Booked Scheduler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'Pages/Page.php');
require_once(ROOT_DIR . 'Pages/Authentication/ILoginBasePage.php');
require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');

class ExternalAuthLoginPage extends Page implements ILoginBasePage
{
	public $presenter;

	public function __construct()
	{
		$this->presenter = new ExternalAuthLoginPresenter($this, new WebAuthentication(PluginManager::Instance()->LoadAuthentication()), new Registration());
<<<<<<< HEAD
		parent::__construct('Login');
=======
		parent::__construct();
>>>>>>> old/master
	}

	public function PageLoad()
	{
		$this->presenter->PageLoad();
	}

	/**
	 * @return string
	 */
	public function GetResumeUrl()
	{
<<<<<<< HEAD
        return $this->GetQuerystring(QueryStringKeys::REDIRECT);
=======
		return null;
>>>>>>> old/master
	}

	/**
	 * @return null|string
	 */
	public function GetType()
	{
		return $this->GetQuerystring(QueryStringKeys::TYPE);
	}
<<<<<<< HEAD

	public function ShowError($messages)
	{
		$this->Set('Errors', $messages);
		$this->Display('ExternalAuth/external-login-error.tpl');
	}
=======
>>>>>>> old/master
}
