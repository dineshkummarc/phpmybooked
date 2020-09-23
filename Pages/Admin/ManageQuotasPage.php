<?php
/**
<<<<<<< HEAD
 * Copyright 2011-2020 Nick Korbel
=======
 * Copyright 2011-2016 Nick Korbel
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

require_once(ROOT_DIR . 'Pages/Admin/AdminPage.php');
require_once(ROOT_DIR . 'Presenters/Admin/ManageQuotasPresenter.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');

interface IManageQuotasPage extends IActionPage
{
	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param array|BookableResource[] $resources
	 * @return void
	 */
	public function BindResources($resources);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param array|GroupItemView[] $groups
	 * @return void
	 */
	public function BindGroups($groups);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param array|Schedule[] $schedules
	 * @return void
	 */
	public function BindSchedules($schedules);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @param array|QuotaItemView[] $quotas
	 * @return void
	 */
	public function BindQuotas($quotas);

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return string
	 */
	public function GetDuration();

	/**
<<<<<<< HEAD
	 * @return float
=======
	 * @abstract
	 * @return decimal
>>>>>>> old/master
	 */
	public function GetLimit();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return int
	 */
	public function GetResourceId();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return int
	 */
	public function GetGroupId();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return string
	 */
	public function GetUnit();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return int
	 */
	public function GetQuotaId();

	/**
<<<<<<< HEAD
=======
	 * @abstract
>>>>>>> old/master
	 * @return int
	 */
	public function GetScheduleId();

	/**
	 * @return bool
	 */
	public function GetEnforcedAllDay();

	/**
	 * @return string
	 */
	public function GetEnforcedStartTime();

	/**
	 * @return string
	 */
	public function GetEnforcedEndTime();

	/**
	 * @return bool
	 */
	public function GetEnforcedEveryDay();

	/**
	 * @return array
	 */
	public function GetEnforcedDays();

	/**
	 * @return string
	 */
	public function GetScope();
}

class ManageQuotasPage extends ActionPage implements IManageQuotasPage
{
	/**
	 * @var \ManageQuotasPresenter
	 */
	private $presenter;

	public function __construct()
	{
		parent::__construct('ManageQuotas', 1);
		$this->presenter = new ManageQuotasPresenter(
				$this,
				new ResourceRepository(),
				new GroupRepository(),
				new ScheduleRepository(),
				new QuotaRepository());
	}

	public function ProcessPageLoad()
	{
		$this->presenter->PageLoad();

		$this->Set('DayNames', array(
				0 => 'DaySundayAbbr',
				1 => 'DayMondayAbbr',
				2 => 'DayTuesdayAbbr',
				3 => 'DayWednesdayAbbr',
				4 => 'DayThursdayAbbr',
				5 => 'DayFridayAbbr',
				6 => 'DaySaturdayAbbr',
		));
<<<<<<< HEAD
		$this->Set('TimeFormat', Resources::GetInstance()->GetDateFormat('timepicker'));
=======
>>>>>>> old/master

		$this->Display('Admin/manage_quotas.tpl');
	}

	public function ProcessAction()
	{
		$this->presenter->ProcessAction();
	}

	public function SetJsonResponse($response)
	{
		parent::SetJson($response);
	}

	/**
	 * @param array|BookableResource[] $resources
	 * @return void
	 */
	public function BindResources($resources)
	{
		$this->Set('Resources', $resources);
	}

	/**
	 * @param array|GroupItemView[] $groups
	 * @return void
	 */
	public function BindGroups($groups)
	{
		$this->Set('Groups', $groups);
	}


	/**
	 * @param array|Schedule[] $schedules
	 * @return void
	 */
	public function BindSchedules($schedules)
	{
		$this->Set('Schedules', $schedules);
	}

	/**
	 * @param array|QuotaItemView[] $quotas
	 * @return void
	 */
	public function BindQuotas($quotas)
	{
		$this->Set('Quotas', $quotas);
	}

	/**
	 * @return string
	 */
	public function GetDuration()
	{
		return $this->GetForm(FormKeys::DURATION);
	}

	/**
	 * @return string
	 */
	public function GetLimit()
	{
		return $this->GetForm(FormKeys::LIMIT);
	}

	/**
	 * @return int
	 */
	public function GetResourceId()
	{
		return $this->GetForm(FormKeys::RESOURCE_ID);
	}

	/**
	 * @return int
	 */
	public function GetGroupId()
	{
		return $this->GetForm(FormKeys::GROUP);
	}

	/**
	 * @return string
	 */
	public function GetUnit()
	{
		return $this->GetForm(FormKeys::UNIT);
	}

	/**
	 * @return int
	 */
	public function GetQuotaId()
	{
		return $this->GetQuerystring(QueryStringKeys::QUOTA_ID);
	}

	/**
	 * @return int
	 */
	public function GetScheduleId()
	{
		return $this->GetForm(FormKeys::SCHEDULE_ID);
	}

	public function ProcessDataRequest($dataRequest)
	{
		// no-op
	}

	/**
	 * @return bool
	 */
	public function GetEnforcedAllDay()
	{
		$allDay = $this->GetForm(FormKeys::ENFORCE_ALL_DAY);

		return !empty($allDay);
	}

	/**
	 * @return string
	 */
	public function GetEnforcedStartTime()
	{
		return $this->GetForm(FormKeys::BEGIN_TIME);
	}

	/**
	 * @return string
	 */
	public function GetEnforcedEndTime()
	{
		return $this->GetForm(FormKeys::END_TIME);
	}

	/**
	 * @return bool
	 */
	public function GetEnforcedEveryDay()
	{
		$everyDay = $this->GetForm(FormKeys::ENFORCE_EVERY_DAY);

		return !empty($everyDay);
	}

	/**
	 * @return array
	 */
	public function GetEnforcedDays()
	{
		$days = $this->GetForm(FormKeys::DAY);

		if (empty($days) || !is_array($days))
		{
			return array();
		}

		return $days;
	}

	/**
	 * @return string
	 */
	public function GetScope()
	{
		return $this->GetForm(FormKeys::QUOTA_SCOPE);
	}

}