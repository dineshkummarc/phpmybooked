<?php
/**
<<<<<<< HEAD
 * Copyright 2011-2020 Nick Korbel
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
Copyright 2011-2016 Nick Korbel

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

require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'lib/Config/namespace.php');
require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Schedule/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/namespace.php');
require_once(ROOT_DIR . 'Presenters/ActionPresenter.php');
require_once(ROOT_DIR . 'Presenters/Calendar/CalendarFilters.php');
require_once(ROOT_DIR . 'Presenters/Calendar/CalendarCommon.php');

<<<<<<< HEAD
class CalendarPresenter extends CommonCalendarPresenter
{
    /**
     * @param UserSession $userSession
     * @param int $selectedScheduleId
     * @param int $selectedResourceId
     */
    protected function BindEvents($userSession, $selectedScheduleId, $selectedResourceId, $selectedUserId, $selectedParticipantId)
    {
        $resources = $this->GetAllResources($userSession);

        $reservations = $this->reservationRepository->GetReservations(
            $this->GetStartDate(),
            $this->GetEndDate()->AddDays(1),
            $selectedUserId,
            null,
            $selectedScheduleId,
            $selectedResourceId,
            false,
            $selectedParticipantId
        );

        $dateRange = new DateRange($this->GetStartDate(), $this->GetEndDate()->AddDays(1));
        $blackouts = $this->reservationRepository->GetBlackoutsWithin(
            $dateRange,
            $selectedScheduleId,
            $selectedResourceId);

        $availableSlots = array();
        if (!empty($selectedResourceId) || !empty($selectedScheduleId)) {

            if (is_array($selectedResourceId) && !empty($selectedResourceId)) {
            	$resources = array();
            	foreach($selectedResourceId as $id) {
					$resources[] = $this->resourceService->GetResource($id);
				}
                $selectedScheduleId = $resources[0]->GetScheduleId();
            }
            elseif(!empty($selectedResourceId)) {
				$resources = array($this->resourceService->GetResource($selectedResourceId));
				$selectedScheduleId = $resources[0]->GetScheduleId();
			}

            $scheduleLayout = $this->scheduleRepository->GetLayout($selectedScheduleId, new ScheduleLayoutFactory());
            if ($scheduleLayout->UsesCustomLayout()) {
                foreach ($dateRange->Dates() as $date) {
                    $slots = $scheduleLayout->GetLayout($date, true);
                    foreach ($slots as $slot) {
                        if (!$slot->EndDate()->LessThanOrEqual(Date::Now()) && !$this->OverlapsAnyReservation($slot, $reservations) && !$this->OverlapsAnyBlackout($slot, $blackouts)) {
                            $availableSlots[] = new ReservableCalendarSlot($slot, $selectedResourceId, $selectedScheduleId);
                        }
                    }
                }
            }
        }

        $this->page->BindEvents(CalendarReservation::FromScheduleReservationList(
            $reservations,
            $blackouts,
            $availableSlots,
            $resources,
            $userSession,
            $this->privacyFilter,
            $this->slotLabelFactory));
    }

    protected function BindSubscriptionDetails($userSession, $selectedResourceId, $selectedScheduleId)
    {
        if (!empty($selectedResourceId)) {
            $subscriptionDetails = $this->subscriptionService->ForResource($selectedResourceId);
        }
        else {
            if (!empty($selectedScheduleId)) {
                $subscriptionDetails = $this->subscriptionService->ForSchedule($selectedScheduleId);
            }
            else {
                $subscriptionDetails = new CalendarSubscriptionDetails(false);
            }
        }
        $this->page->BindSubscription($subscriptionDetails);
    }

    /**
     * @param SchedulePeriod $slot
     * @param ReservationItemView[] $reservations
     * @return bool
     */
    private function OverlapsAnyReservation($slot, $reservations)
    {
        foreach ($reservations as $reservation) {
            if ($reservation->Date->Overlaps(new DateRange($slot->BeginDate(), $slot->EndDate()))) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param SchedulePeriod $slot
     * @param BlackoutItemView[] $blackouts
     * @return bool
     */
    private function OverlapsAnyBlackout($slot, $blackouts)
    {
        foreach ($blackouts as $blackout) {
            if ($blackout->Date->Overlaps(new DateRange($slot->BeginDate(), $slot->EndDate()))) {
                return true;
            }
        }
        return false;
=======
class CalendarPresenter extends ActionPresenter
{
	/**
	 * @var ICalendarPage
	 */
	private $page;

	/**
	 * @var IReservationViewRepository
	 */
	private $reservationRepository;

	/**
	 * @var IScheduleRepository
	 */
	private $scheduleRepository;

	/**
	 * @var IResourceService
	 */
	private $resourceService;

	/**
	 * @var ICalendarSubscriptionService
	 */
	private $subscriptionService;

	/**
	 * @var IPrivacyFilter
	 */
	private $privacyFilter;

    /**
     * @var CalendarCommon
     */
    private $common;

    public function __construct(ICalendarPage $page,
								ICalendarFactory $calendarFactory,
								IReservationViewRepository $reservationRepository,
								IScheduleRepository $scheduleRepository,
								IResourceService $resourceService,
								ICalendarSubscriptionService $subscriptionService,
								IPrivacyFilter $privacyFilter)
	{
        parent::__construct($page);
		$this->page = $page;
		$this->reservationRepository = $reservationRepository;
		$this->scheduleRepository = $scheduleRepository;
		$this->resourceService = $resourceService;
		$this->subscriptionService = $subscriptionService;
		$this->privacyFilter = $privacyFilter;
        $this->common = new CalendarCommon($page, $reservationRepository, $scheduleRepository, $resourceService, $calendarFactory, $privacyFilter);
	}

	public function PageLoad($userSession)
	{
        $resources = $this->common->GetAllResources($userSession);

        $schedules = $this->scheduleRepository->GetAll();
		$selectedSchedule = $this->common->GetSelectedSchedule($schedules);

        $selectedScheduleId = $selectedSchedule->GetId();
		$selectedResourceId = $this->page->GetResourceId();
		$selectedGroupId = $this->page->GetGroupId();

		$resourceGroups = $this->resourceService->GetResourceGroups($selectedScheduleId, $userSession);

		if (!empty($selectedGroupId))
		{
			$tempResources = array();
			$resourceIds = $resourceGroups->GetResourceIds($selectedGroupId);
			$selectedGroup = $resourceGroups->GetGroup($selectedGroupId);
			$this->page->BindSelectedGroup($selectedGroup);

            /** @var ResourceDTO $resource */
            foreach ($resources as $resource)
			{
				if (in_array($resource->GetId(), $resourceIds))
				{
					$tempResources[] = $resource;
				}
			}

			$resources = $tempResources;
		}

        $this->BindSubscriptionDetails($selectedResourceId, $selectedScheduleId);

		$this->page->BindFilters(new CalendarFilters($schedules, $resources, $selectedScheduleId, $selectedResourceId, $resourceGroups));

        $this->page->SetDisplayDate($this->common->GetStartDate());
		$this->page->SetScheduleId($selectedScheduleId);
		$this->page->SetResourceId($selectedResourceId);

		$this->page->SetFirstDay($selectedSchedule->GetWeekdayStart());

        $this->page->BindCalendarType($this->page->GetCalendarType());
	}

    private function BindCalendarEvents()
    {
        $userSession = ServiceLocator::GetServer()->GetUserSession();

        $resources = $this->common->GetAllResources($userSession);
        $selectedResourceId = $this->page->GetResourceId();
		$selectedScheduleId = $this->page->GetScheduleId();

        $reservations = $this->reservationRepository->GetReservations($this->common->GetStartDate(), $this->common->GetEndDate()->AddDays(1),
            null, null, $selectedScheduleId,
            $selectedResourceId);

        $this->page->BindEvents(CalendarReservation::FromScheduleReservationList(
            $reservations,
            $resources,
            $userSession,
            $this->privacyFilter));
    }

    public function ProcessDataRequest($dataRequest)
    {
        if ($dataRequest == 'events') {
            $this->BindCalendarEvents();
        }
        else {
            $this->BindSubscriptionDetails($this->page->GetResourceId(), $this->page->GetScheduleId());
            $this->page->RenderSubscriptionDetails();
        }
    }

    /**
     * @param int $selectedResourceId
     * @param int $selectedScheduleId
     */
    private function BindSubscriptionDetails($selectedResourceId, $selectedScheduleId)
    {
        if (!empty($selectedResourceId)) {
            $subscriptionDetails = $this->subscriptionService->ForResource($selectedResourceId);
        }
        else if (!empty($selectedScheduleId)) {
            $subscriptionDetails = $this->subscriptionService->ForSchedule($selectedScheduleId);
        }
        else {
            $subscriptionDetails = new CalendarSubscriptionDetails(false);
        }
        $this->page->BindSubscription($subscriptionDetails);
>>>>>>> old/master
    }
}

