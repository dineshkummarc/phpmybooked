<?php
/**
<<<<<<< HEAD
 * Copyright 2012-2020 Nick Korbel
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
=======
Copyright 2012-2016 Nick Korbel

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
>>>>>>> old/master
 */

require_once(ROOT_DIR . 'Pages/SecurePage.php');
require_once(ROOT_DIR . 'Pages/Reports/IDisplayableReportPage.php');
require_once(ROOT_DIR . 'Pages/Ajax/AutoCompletePage.php');
require_once(ROOT_DIR . 'Presenters/Reports/GenerateReportPresenter.php');
<<<<<<< HEAD
require_once(ROOT_DIR . 'Presenters/Reports/ReportCsvColumnView.php');
=======
>>>>>>> old/master

interface IGenerateReportPage extends IDisplayableReportPage, IActionPage
{
	/**
	 * @return string|Report_Usage
	 */
	public function GetUsage();

	/**
	 * @return string|Report_ResultSelection
	 */
	public function GetResultSelection();

	/**
	 * @return string|Report_GroupBy
	 */
	public function GetGroupBy();

	/**
	 * @return string|Report_Range
	 */
	public function GetRange();

	/**
	 * @return string
	 */
	public function GetStart();

	/**
	 * @return string
	 */
	public function GetEnd();

	/**
<<<<<<< HEAD
	 * @return int[]
	 */
	public function GetResourceIds();

	/**
	 * @return int[]
	 */
	public function GetResourceTypeIds();

	/**
	 * @return int[]
	 */
	public function GetAccessoryIds();

	/**
	 * @return int[]
	 */
	public function GetScheduleIds();
=======
	 * @return int
	 */
	public function GetResourceId();

	/**
	 * @return int
	 */
	public function GetAccessoryId();

	/**
	 * @return int
	 */
	public function GetScheduleId();
>>>>>>> old/master

	/**
	 * @return int
	 */
	public function GetUserId();

	/**
	 * @return int
	 */
	public function GetParticipantId();

	/**
<<<<<<< HEAD
	 * @return int[]
	 */
	public function GetGroupIds();
=======
	 * @return int
	 */
	public function GetGroupId();
>>>>>>> old/master

	/**
	 * @return string
	 */
	public function GetReportName();

	/**
	 * @param array|BookableResource[] $resources
	 */
	public function BindResources($resources);

	/**
	 * @param array|AccessoryDto[] $accessories
	 */
	public function BindAccessories($accessories);

	/**
	 * @param array|Schedule[] $schedules
	 */
	public function BindSchedules($schedules);

	/**
	 * @param array|GroupItemView[] $groups
	 */
	public function BindGroups($groups);

	/**
	 * @return bool
	 */
	public function GetIncludeDeleted();
<<<<<<< HEAD

	/**
	 * @param ResourceType[] $resourceTypes
	 */
	public function BindResourceTypes($resourceTypes);

	/**
	 * @return string
	 */
	public function GetSelectedColumns();
=======
>>>>>>> old/master
}

class GenerateReportPage extends ActionPage implements IGenerateReportPage
{
	/**
	 * @var GenerateReportPresenter
	 */
	private $presenter;

	public function __construct()
	{
		parent::__construct('Reports', 1);
		$this->presenter = new GenerateReportPresenter(
<<<<<<< HEAD
				$this,
				ServiceLocator::GetServer()->GetUserSession(),
				new ReportingService(new ReportingRepository()),
				new ResourceRepository(),
				new ScheduleRepository(),
				new GroupRepository(),
				new UserRepository());
	}

=======
			$this,
			ServiceLocator::GetServer()->GetUserSession(),
			new ReportingService(new ReportingRepository()),
			new ResourceRepository(),
			new ScheduleRepository(),
			new GroupRepository());
	}

	/**
	 * @return void
	 */
>>>>>>> old/master
	public function ProcessAction()
	{
		$this->presenter->ProcessAction();
	}

<<<<<<< HEAD
=======
	/**
	 * @param $dataRequest string
	 * @return void
	 */
>>>>>>> old/master
	public function ProcessDataRequest($dataRequest)
	{
		// no-op
	}

<<<<<<< HEAD
	public function ProcessPageLoad()
	{
		$this->presenter->PageLoad();
		$this->Set('DateAxisFormat', Resources::GetInstance()->GetDateFormat('report_date'));
		$this->Display('Reports/generate-report.tpl');
	}

=======
	/**
	 * @return void
	 */
	public function ProcessPageLoad()
	{
		$this->presenter->PageLoad();
		$this->Display('Reports/generate-report.tpl');
	}

	/**
	 * @return string|Report_Usage
	 */
>>>>>>> old/master
	public function GetUsage()
	{
		return $this->GetValue(FormKeys::REPORT_USAGE);
	}

<<<<<<< HEAD
=======
	/**
	 * @return string|Report_ResultSelection
	 */
>>>>>>> old/master
	public function GetResultSelection()
	{
		return $this->GetValue(FormKeys::REPORT_RESULTS);
	}

<<<<<<< HEAD
=======
	/**
	 * @return string|Report_GroupBy
	 */
>>>>>>> old/master
	public function GetGroupBy()
	{
		return $this->GetValue(FormKeys::REPORT_GROUPBY);
	}

<<<<<<< HEAD
=======
	/**
	 * @return string|Report_Range
	 */
>>>>>>> old/master
	public function GetRange()
	{
		return $this->GetValue(FormKeys::REPORT_RANGE);
	}

<<<<<<< HEAD
=======
	/**
	 * @return string
	 */
>>>>>>> old/master
	public function GetStart()
	{
		return $this->GetValue(FormKeys::REPORT_START);
	}

<<<<<<< HEAD
=======
	/**
	 * @return string
	 */
>>>>>>> old/master
	public function GetEnd()
	{
		return $this->GetValue(FormKeys::REPORT_END);
	}

<<<<<<< HEAD
	public function GetResourceIds()
	{
        return $this->GetMultiFormValue(FormKeys::RESOURCE_ID);
	}

	public function GetResourceTypeIds()
	{
        return $this->GetMultiFormValue(FormKeys::RESOURCE_TYPE_ID);
	}

	public function GetScheduleIds()
	{
        return $this->GetMultiFormValue(FormKeys::SCHEDULE_ID);
	}

=======
	/**
	 * @return int
	 */
	public function GetResourceId()
	{
		return $this->GetValue(FormKeys::RESOURCE_ID);
	}

	/**
	 * @return int
	 */
	public function GetScheduleId()
	{
		return $this->GetValue(FormKeys::SCHEDULE_ID);
	}

	/**
	 * @return int
	 */
>>>>>>> old/master
	public function GetUserId()
	{
		return $this->GetValue(FormKeys::USER_ID);
	}

<<<<<<< HEAD
=======
	/**
	 * @return int
	 */
>>>>>>> old/master
	public function GetParticipantId()
	{
		return $this->GetValue(FormKeys::PARTICIPANT_ID);
	}

<<<<<<< HEAD
	public function GetGroupIds()
	{
        return $this->GetMultiFormValue(FormKeys::GROUP_ID);
	}

	private function GetMultiFormValue($key)
    {
        $id = $this->GetValue($key);
        if (!is_array($id) && !empty($id))
        {
            return array($id);
        }
        return $id;
    }

	public function BindReport(IReport $report, IReportDefinition $definition, $selectedColumns)
	{
		$this->Set('Definition', $definition);
		$this->Set('Report', $report);
		$this->Set('SelectedColumns', $selectedColumns);
	}

=======
	/**
	 * @return int
	 */
	public function GetGroupId()
	{
		return $this->GetValue(FormKeys::GROUP_ID);
	}

	public function BindReport(IReport $report, IReportDefinition $definition)
	{
		$this->Set('Definition', $definition);
		$this->Set('Report', $report);
	}

	/**
	 * @param array|BookableResource[] $resources
	 */
>>>>>>> old/master
	public function BindResources($resources)
	{
		$this->Set('Resources', $resources);
	}

<<<<<<< HEAD
	public function BindResourceTypes($resourceTypes)
	{
		$this->Set('ResourceTypes', $resourceTypes);
	}

=======
	/**
	 * @param array|AccessoryDto[] $accessories
	 */
>>>>>>> old/master
	public function BindAccessories($accessories)
	{
		$this->Set('Accessories', $accessories);
	}

<<<<<<< HEAD
=======
	/**
	 * @param array|Schedule[] $schedules
	 */
>>>>>>> old/master
	public function BindSchedules($schedules)
	{
		$this->Set('Schedules', $schedules);
	}

<<<<<<< HEAD
	public function GetAccessoryIds()
=======
	/**
	 * @return int
	 */
	public function GetAccessoryId()
>>>>>>> old/master
	{
		return $this->GetValue(FormKeys::ACCESSORY_ID);
	}

<<<<<<< HEAD
=======

>>>>>>> old/master
	public function GetReportName()
	{
		return $this->GetForm(FormKeys::REPORT_NAME);
	}

	private function GetValue($key)
	{
		$postValue = $this->GetForm($key);

		if (empty($postValue))
		{
			return $this->GetQuerystring($key);
		}

		return $postValue;
	}

	public function ShowCsv()
	{
<<<<<<< HEAD
		$this->Set('ReportCsvColumnView', new ReportCsvColumnView($this->GetVar('SelectedColumns')));
=======
>>>>>>> old/master
		$this->DisplayCsv('Reports/custom-csv.tpl', 'report.csv');
	}

	public function DisplayError()
	{
		$this->Display('Reports/error.tpl');
	}

	public function ShowResults()
	{
		$this->Display('Reports/results-custom.tpl');
	}

	public function PrintReport()
	{
<<<<<<< HEAD
        $this->Set('ReportCsvColumnView', new ReportCsvColumnView($this->GetVar('SelectedColumns')));
        $this->Display('Reports/print-custom-report.tpl');
	}

=======
		$this->Display('Reports/print-custom-report.tpl');
	}

	/**
	 * @param array|GroupItemView[] $groups
	 */
>>>>>>> old/master
	public function BindGroups($groups)
	{
		$this->Set('Groups', $groups);
	}

	public function GetIncludeDeleted()
	{
		$include = $this->GetValue(FormKeys::INCLUDE_DELETED);
		return isset($include);
	}
<<<<<<< HEAD

	public function GetSelectedColumns()
	{
		return $this->GetForm(FormKeys::SELECTED_COLUMNS);
	}
=======
>>>>>>> old/master
}

