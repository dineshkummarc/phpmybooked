<?php
/**
<<<<<<< HEAD
Copyright 2011-2020 Nick Korbel
=======
Copyright 2011-2016 Nick Korbel
>>>>>>> old/master

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'Pages/Page.php');
require_once(ROOT_DIR . 'Presenters/Install/InstallPresenter.php');
require_once(ROOT_DIR . 'lib/Application/Admin/namespace.php');

interface IInstallPage
{
<<<<<<< HEAD
	/**
     * @param bool $isMissing
=======

	/**
	 * @abstract
	 * @param bool $isMissing
>>>>>>> old/master
	 */
	public function SetInstallPasswordMissing($isMissing);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return string
	 */
	public function GetInstallPassword();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param bool $showPasswordPrompt
	 */
	public function SetShowPasswordPrompt($showPasswordPrompt);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param bool $showInvalidPassword
	 */
	public function SetShowInvalidPassword($showInvalidPassword);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param bool $showDatabasePrompt
	 */
	public function SetShowDatabasePrompt($showDatabasePrompt);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param string $dbname
	 * @param string $dbuser
	 * @param string $dbhost
	 */
	public function SetDatabaseConfig($dbname, $dbuser, $dbhost);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return bool
	 */
	public function RunningInstall();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return bool
	 */
	public function RunningUpgrade();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return string
	 */
	public function GetInstallUser();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return string
	 */
	public function GetInstallUserPassword();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return bool
	 */
	public function GetShouldCreateDatabase();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return bool
	 */
	public function GetShouldCreateUser();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return bool
	 */
	public function GetShouldCreateSampleData();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param $results array|InstallationResult[]
	 * @return void
	 */
	public function SetInstallResults($results);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param $results array|InstallationResult[]
	 * @param $currentVersion string
	 * @return void
	 */
	public function SetUpgradeResults($results, $currentVersion);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param string $currentVersion
	 */
	public function SetCurrentVersion($currentVersion);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param string $targetVersion
	 */
	public function SetTargetVersion($targetVersion);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param bool $showUpgradeOptions
	 */
	public function ShowUpgradeOptions($showUpgradeOptions);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param bool $showInstallOptions
	 */
	public function ShowInstallOptions($showInstallOptions);

	/**
<<<<<<< HEAD
	 * @param $showUpToDateMessage
	 */
	public function ShowUpToDate($showUpToDateMessage);

    /**
     * @param string $currentScriptUrl
     * @param string $suggestedScriptUrl
     */
    public function ShowScriptUrlWarning($currentScriptUrl, $suggestedScriptUrl);
}

=======
	 * @abstract
	 * @param $showUpToDateMessage
	 */
	public function ShowUpToDate($showUpToDateMessage);
}

/**
 * This class supports auto installation pages
 */
>>>>>>> old/master
class InstallPage extends Page implements IInstallPage
{
	/**
	 * @var \InstallPresenter
	 */
	private $presenter;

	public function __construct()
	{
		parent::__construct('Install', 1);

		$this->presenter = new InstallPresenter($this, new InstallSecurityGuard());
	}

<<<<<<< HEAD
=======
	/**
	 * Load data for page then display
	 */
>>>>>>> old/master
	public function PageLoad()
	{
		$cacheDirectory = new TemplateCacheDirectory();
		$cacheDirectory->Flush();

<<<<<<< HEAD
		$this->Set('SuggestedInstallPassword', BookedStringHelper::Random());
=======
		$this->Set('SuggestedInstallPassword', uniqid());
>>>>>>> old/master
		$this->Set('ConfigSetting', '$conf[\'settings\'][\'install.password\']');
		$this->Set('ConfigPath', '/config/config.php');
		$this->presenter->PageLoad();
		$this->Display('Install/install.tpl');
	}

	public function SetInstallPasswordMissing($isMissing)
	{
		$this->Set('InstallPasswordMissing', $isMissing);
	}

<<<<<<< HEAD
	public function ShowScriptUrlWarning($currentScriptUrl, $suggestedScriptUrl)
    {
        $this->Set('CurrentScriptUrl', $currentScriptUrl);
        $this->Set('SuggestedScriptUrl', $suggestedScriptUrl);
        $this->Set('ShowScriptUrlWarning', true);
    }

=======
>>>>>>> old/master
	public function GetInstallPassword()
	{
		return $this->GetForm(FormKeys::INSTALL_PASSWORD);
	}

	public function SetShowPasswordPrompt($showPrompt)
	{
		$this->Set('ShowPasswordPrompt', $showPrompt);
	}

	public function SetShowInvalidPassword($showInvalidPassword)
	{
		$this->Set('ShowInvalidPassword', $showInvalidPassword);
	}

	public function SetShowDatabasePrompt($showDatabasePrompt)
	{
		$this->Set('ShowDatabasePrompt', $showDatabasePrompt);
	}

	/**
	 * Set values for displayed template - install.tpl
	 * @param string $dbname database name
	 * @param string $dbuser mysql user for your database e.g Booked Scheduler
	 * @param string $dbhost server address/name where mySql lives
	 */
	public function SetDatabaseConfig($dbname, $dbuser, $dbhost)
	{
		$this->Set('dbname', $dbname);
		$this->Set('dbuser', $dbuser);
		$this->Set('dbhost', $dbhost);
	}

	public function RunningInstall()
	{
		$run_install = $this->GetForm('run_install');
		return !empty($run_install);
	}

	/**
	 * @return bool
	 */
	public function RunningUpgrade()
	{
		$run_upgrade = $this->GetForm('run_upgrade');
		return !empty($run_upgrade);
	}

	public function GetInstallUser()
	{
		return $this->GetForm(FormKeys::INSTALL_DB_USER);
	}

	public function GetInstallUserPassword()
	{
		return $this->GetRawForm(FormKeys::INSTALL_DB_PASSWORD);
	}

	public function GetShouldCreateDatabase()
	{
		$x = $this->GetForm('create_database');
		return isset($x) && $x == true;
	}

	public function GetShouldCreateUser()
	{
		$x = $this->GetForm('create_user');
		return isset($x) && $x == true;
	}

	public function GetShouldCreateSampleData()
	{
		$x = $this->GetForm('create_sample_data');
		return isset($x) && $x == true;
	}

	/**
	 * @param $results array|InstallationResult[]
	 * @return void
	 */
	public function SetInstallResults($results)
	{
		$failure = false;
		foreach ($results as $result)
		{
			if (!$result->WasSuccessful())
			{
				$failure = true;
			}
		}
		// Set installation status
		$this->Set('InstallCompletedSuccessfully', !$failure);
		$this->Set('InstallFailed', $failure);
		$this->Set('installresults', $results);
	}

	/**
	 * @param $results array|InstallationResult[]
	 * @param $currentVersion string
	 * @return void
	 */
	public function SetUpgradeResults($results, $currentVersion)
	{
		$failure = false;
		foreach ($results as $result)
		{
			if (!$result->WasSuccessful())
			{
				$failure = true;
			}
		}
		// Set installation status
		$this->Set('UpgradeCompletedSuccessfully', !$failure);
		$this->Set('TargetVersion', $currentVersion);
		$this->Set('InstallFailed', $failure);
		$this->Set('installresults', $results);
	}

	/**
	 * @param string $currentVersion
	 */
	public function SetCurrentVersion($currentVersion)
	{
		$this->Set('CurrentVersion', $currentVersion);
	}

	/**
	 * @param string $targetVersion
	 */
	public function SetTargetVersion($targetVersion)
	{
		$this->Set('TargetVersion', $targetVersion);
	}

	/**
	 * @param bool $showUpgradeOptions
	 */
	public function ShowUpgradeOptions($showUpgradeOptions)
	{
		$this->Set('ShowUpgradeOptions', $showUpgradeOptions);
	}

	/**
	 * @param bool $showInstallOptions
	 */
	public function ShowInstallOptions($showInstallOptions)
	{
		$this->Set('ShowInstallOptions', $showInstallOptions);
	}

	/**
	 * @param $showUpToDateMessage
	 */
	public function ShowUpToDate($showUpToDateMessage)
	{
		$this->Set('ShowUpToDateMessage', $showUpToDateMessage);
	}
}

