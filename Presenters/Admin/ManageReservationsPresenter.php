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

require_once(ROOT_DIR . 'Pages/Admin/ManageReservationsPage.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'Presenters/ActionPresenter.php');
require_once(ROOT_DIR . 'lib/Application/Admin/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Attributes/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/namespace.php');
<<<<<<< HEAD
require_once(ROOT_DIR . 'lib/Application/Admin/ReservationImportCsv.php');
require_once(ROOT_DIR . 'lib/Application/Admin/CsvImportResult.php');
require_once(ROOT_DIR . 'lib/FileSystem/namespace.php');
=======
>>>>>>> old/master

class ManageReservationsActions
{
    const UpdateAttribute = 'updateAttribute';
    const ChangeStatus = 'changeStatus';
<<<<<<< HEAD
    const Import = 'Import';
    const DeleteMultiple = 'DeleteMultiple';
    const UpdateTermsOfService = 'termsOfService';
    const DeleteTermsOfService = 'deleteTerms';
=======
>>>>>>> old/master
}

class ManageReservationsPresenter extends ActionPresenter
{
    /**
     * @var IManageReservationsPage
     */
    private $page;

    /**
     * @var IManageReservationsService
     */
    private $manageReservationsService;

    /**
     * @var IScheduleRepository
     */
    private $scheduleRepository;

    /**
     * @var IResourceRepository
     */
    private $resourceRepository;

    /**
     * @var IAttributeService
     */
    private $attributeService;

    /**
     * @var IUserRepository
     */
    private $userRepository;

<<<<<<< HEAD
    /**
     * @var ITermsOfServiceRepository
     */
    private $termsOfServiceRepository;

=======
>>>>>>> old/master
    public function __construct(
        IManageReservationsPage $page,
        IManageReservationsService $manageReservationsService,
        IScheduleRepository $scheduleRepository,
        IResourceRepository $resourceRepository,
        IAttributeService $attributeService,
<<<<<<< HEAD
        IUserRepository $userRepository,
        ITermsOfServiceRepository $termsOfServiceRepository)
=======
        IUserRepository $userRepository)
>>>>>>> old/master
    {
        parent::__construct($page);

        $this->page = $page;
        $this->manageReservationsService = $manageReservationsService;
        $this->scheduleRepository = $scheduleRepository;
        $this->resourceRepository = $resourceRepository;
        $this->attributeService = $attributeService;
        $this->userRepository = $userRepository;
<<<<<<< HEAD
        $this->termsOfServiceRepository = $termsOfServiceRepository;

        $this->AddAction(ManageReservationsActions::UpdateAttribute, 'UpdateAttribute');
        $this->AddAction(ManageReservationsActions::ChangeStatus, 'UpdateResourceStatus');
        $this->AddAction(ManageReservationsActions::Import, 'ImportReservations');
        $this->AddAction(ManageReservationsActions::DeleteMultiple, 'DeleteMultiple');
        $this->AddAction(ManageReservationsActions::UpdateTermsOfService, 'UpdateTermsOfService');
        $this->AddAction(ManageReservationsActions::DeleteTermsOfService, 'DeleteTermsOfService');
=======

        $this->AddAction(ManageReservationsActions::UpdateAttribute, 'UpdateAttribute');
        $this->AddAction(ManageReservationsActions::ChangeStatus, 'UpdateResourceStatus');
>>>>>>> old/master
    }

    public function PageLoad($userTimezone)
    {
        $session = ServiceLocator::GetServer()->GetUserSession();

        $this->page->BindSchedules($this->scheduleRepository->GetAll());
        $this->page->BindResources($this->resourceRepository->GetResourceList());

        $statusReasonList = array();
        foreach ($this->resourceRepository->GetStatusReasons() as $reason) {
            $statusReasonList[$reason->Id()] = $reason;
        }
        $this->page->BindResourceStatuses($statusReasonList);

        $startDateString = $this->page->GetStartDate();
        $endDateString = $this->page->GetEndDate();

        $filterPreferences = new ReservationFilterPreferences($this->userRepository, $session->UserId);
        $filterPreferences->Load();

        $startDate = $this->GetDate($startDateString, $userTimezone, $filterPreferences->GetFilterStartDateDelta());
        $endDate = $this->GetDate($endDateString, $userTimezone, $filterPreferences->GetFilterEndDateDelta());

        $scheduleId = $this->page->GetScheduleId();
        $resourceId = $this->page->GetResourceId();
        $userId = $this->page->GetUserId();
        $userName = $this->page->GetUserName();
        $reservationStatusId = $this->page->GetReservationStatusId();
        $referenceNumber = $this->page->GetReferenceNumber();
        $resourceStatusId = $this->page->GetResourceStatusFilterId();
        $resourceReasonId = $this->page->GetResourceStatusReasonFilterId();
<<<<<<< HEAD
        $title = $this->page->GetResourceFilterTitle();
        $description = $this->page->GetResourceFilterDescription();
        $missedCheckin = $this->page->GetMissedCheckin();
        $missedCheckout = $this->page->GetMissedCheckout();
=======
>>>>>>> old/master

        if (!$this->page->FilterButtonPressed()) {
            // Get filter settings from db
            $referenceNumber = $filterPreferences->GetFilterReferenceNumber();
            $scheduleId = $filterPreferences->GetFilterScheduleId();
            $resourceId = $filterPreferences->GetFilterResourceId();
            $userId = $filterPreferences->GetFilterUserId();
            $userName = $filterPreferences->GetFilterUserName();
            $reservationStatusId = $filterPreferences->GetFilterReservationStatusId();
            $resourceStatusId = $filterPreferences->GetFilterResourceStatusId();
            $resourceReasonId = $filterPreferences->GetFilterResourceReasonId();
<<<<<<< HEAD
            $title = $filterPreferences->GetFilterTitle();
            $description = $filterPreferences->GetFilterDescription();
            $missedCheckin = $filterPreferences->GetMissedCheckin();
            $missedCheckout = $filterPreferences->GetMissedCheckout();
=======
>>>>>>> old/master
            $filters = $filterPreferences->GetFilterCustomAttributes();
        }
        else {
            $startOffset = $this->GetDateOffsetFromToday($startDate, $userTimezone);
            $endOffset = $this->GetDateOffsetFromToday($endDate, $userTimezone);

            $formFilters = $this->page->GetAttributeFilters();
            $filters = array();
            foreach ($formFilters as $filter) {
                $filters[$filter->Id] = $filter->Value;
            }

            $filterPreferences->SetFilterStartDateDelta($startOffset == null ? -14 : $startOffset);
            $filterPreferences->SetFilterEndDateDelta($endOffset == null ? 14 : $endOffset);
            $filterPreferences->SetFilterReferenceNumber($referenceNumber);
            $filterPreferences->SetFilterScheduleId($scheduleId);
            $filterPreferences->SetFilterResourceId($resourceId);
            $filterPreferences->SetFilterUserId($userId);
            $filterPreferences->SetFilterUserName($userName);
            $filterPreferences->SetFilterReservationStatusId($reservationStatusId);
            $filterPreferences->SetFilterResourceStatusId($resourceStatusId);
            $filterPreferences->SetFilterResourceReasonId($resourceReasonId);
<<<<<<< HEAD
            $filterPreferences->SetFilterTitle($title);
            $filterPreferences->SetFilterDescription($description);
            $filterPreferences->SetFilterMissedCheckin($missedCheckin);
            $filterPreferences->SetFilterMissedCheckout($missedCheckout);
=======
>>>>>>> old/master
            $filterPreferences->SetFilterCustomAttributes($filters);

            $filterPreferences->Update();
        }

        $reservationAttributes = $this->attributeService->GetByCategory(CustomAttributeCategory::RESERVATION);

        $attributeFilters = array();
        foreach ($reservationAttributes as $attribute) {
            $attributeValue = null;
            if (is_array($filters) && array_key_exists($attribute->Id(), $filters)) {
                $attributeValue = $filters[$attribute->Id()];
            }
            $attributeFilters[] = new Attribute($attribute, $attributeValue);
        }

        $this->page->SetStartDate($startDate);
        $this->page->SetEndDate($endDate);
        $this->page->SetReferenceNumber($referenceNumber);
        $this->page->SetScheduleId($scheduleId);
        $this->page->SetResourceId($resourceId);
        $this->page->SetUserId($userId);
        $this->page->SetUserName($userName);
        $this->page->SetReservationStatusId($reservationStatusId);
        $this->page->SetResourceStatusFilterId($resourceStatusId);
        $this->page->SetResourceStatusReasonFilterId($resourceReasonId);
        $this->page->SetAttributeFilters($attributeFilters);
        $this->page->SetReservationAttributes($reservationAttributes);
<<<<<<< HEAD
        $this->page->SetReservationTitle($title);
        $this->page->SetReservationDescription($description);
        $this->page->SetMissedCheckin($missedCheckin);
        $this->page->SetMissedCheckout($missedCheckout);

        $filter = new ReservationFilter($startDate, $endDate, $referenceNumber, $scheduleId, $resourceId, $userId,
            $reservationStatusId, $resourceStatusId, $resourceReasonId, $attributeFilters, $title, $description,
            $missedCheckin, $missedCheckout);
=======

        $filter = new ReservationFilter($startDate, $endDate, $referenceNumber, $scheduleId, $resourceId, $userId,
            $reservationStatusId, $resourceStatusId, $resourceReasonId, $attributeFilters);
>>>>>>> old/master

        $reservations = $this->manageReservationsService->LoadFiltered($this->page->GetPageNumber(),
            $this->page->GetPageSize(),
            $this->page->GetSortField(),
            $this->page->GetSortDirection(),
            $filter,
            $session);

        /** @var ReservationItemView[] $reservationList */
        $reservationList = $reservations->Results();
        $this->page->BindReservations($reservationList);
        $this->page->BindPageInfo($reservations->PageInfo());

        $seriesIds = array();
        /** @var $reservationItemView ReservationItemView */
        foreach ($reservationList as $reservationItemView) {
            $seriesIds[] = $reservationItemView->SeriesId;
        }

        if ($this->page->GetFormat() == 'csv') {
            $this->page->ShowCsv();
        }
        else {
            $this->page->ShowPage();
        }
    }

    private function GetDate($dateString, $timezone, $defaultDays)
    {
        $date = null;

        if (empty($defaultDays)) {
            return null;
        }

        if (is_null($dateString)) {
            $date = Date::Now()->AddDays($defaultDays)->ToTimezone($timezone)->GetDate();
        }
        elseif (!empty($dateString)) {
            $date = Date::Parse($dateString, $timezone);
        }

        return $date;
    }

    private function GetDateOffsetFromToday($date, $timezone)
    {
        if (empty($date)) {
            return null;
        }

        $today = Date::Create(Date('Y'), Date('m'), Date('d'), 0, 0, 0, $timezone);
        $diff = DateDiff::BetweenDates($today, $date);
        return $diff->Days();
    }

    public function UpdateResourceStatus()
    {
        if (!$this->page->CanUpdateResourceStatuses()) {
            Log::Debug('User does not have rights to update resource statuses');

            return;
        }

        $session = ServiceLocator::GetServer()->GetUserSession();
        $statusId = $this->page->GetResourceStatus();
        $reasonId = $this->page->GetResourceStatusReason();
        $referenceNumber = $this->page->GetResourceStatusReferenceNumber();
        $resourceId = $this->page->GetUpdateResourceId();
        $updateScope = $this->page->GetUpdateScope();

        Log::Debug('Updating resource status. ResourceId=%s, ReferenceNumber=%s, StatusId=%s, ReasonId=%s, UserId=%s',
            $resourceId,
            $referenceNumber,
            $statusId,
            $reasonId,
            $session->UserId);

        $resourceIds = array();

        if (empty($updateScope)) {
            $resourceIds[] = $resourceId;
        }
        else {
            $reservations = $this->manageReservationsService->LoadFiltered(
                null,
                null,
                $this->page->GetSortField(),
                $this->page->GetSortDirection(),
                new ReservationFilter(null, null,
                    $referenceNumber,
                    null,
                    null,
                    null,
                    null),
                $session);

            /** @var $reservation ReservationItemView */
            foreach ($reservations->Results() as $reservation) {
                $resourceIds[] = $reservation->ResourceId;
            }
        }

        foreach ($resourceIds as $id) {
            $resource = $this->resourceRepository->LoadById($id);
            $resource->ChangeStatus($statusId, $reasonId);
            $this->resourceRepository->Update($resource);
        }
    }

    public function ProcessDataRequest($dataRequest)
    {
        if ($dataRequest == 'load') {
            $referenceNumber = $this->page->GetReferenceNumber();

            $rv = $this->manageReservationsService->LoadByReferenceNumber($referenceNumber,
                ServiceLocator::GetServer()->GetUserSession());
            $this->page->SetReservationJson($rv);
        }
<<<<<<< HEAD
        elseif ($dataRequest == 'template') {
            $attributes = $this->attributeService->GetByCategory(CustomAttributeCategory::RESERVATION);
            $importAttributes = array();
            foreach ($attributes as $attribute) {
                if (!$attribute->HasSecondaryEntities()) {
                    $importAttributes[] = $attribute;
                }
            }
            $this->page->ShowTemplateCSV($importAttributes);
        }
        elseif ($dataRequest == 'tos') {
            $terms = $this->termsOfServiceRepository->Load();

            if ($terms != null) {
                $this->page->BindTerms(
                    array(
                        'text' => $terms->Text(),
                        'url' => $terms->Url(),
                        'filename' => $terms->FileName(),
                        'applicability' => $terms->Applicability()));
            }
            else {
                $this->page->BindTerms(null);
            }
        }

=======
>>>>>>> old/master
    }

    public function UpdateAttribute()
    {
        $userSession = ServiceLocator::GetServer()->GetUserSession();
        $referenceNumber = $this->page->GetReferenceNumber();
        $inlineAttribute = $this->GetInlineAttributeValue();

        $attributeId = $inlineAttribute->AttributeId;
        $attributeValue = $inlineAttribute->Value;
        Log::Debug('Updating reservation attribute. UserId=%s, AttributeId=%s, AttributeValue=%s, ReferenceNumber=%s',
            $userSession->UserId, $attributeId, $attributeValue, $referenceNumber);

        $errors = $this->manageReservationsService->UpdateAttribute($referenceNumber, $attributeId, $attributeValue,
            $userSession);
        if (!empty($errors)) {
            $this->page->BindAttributeUpdateErrors($errors);
        }
    }

    private function GetInlineAttributeValue()
    {
        $value = $this->page->GetValue();
        if (is_array($value)) {
            $value = $value[0];
        }
        $id = str_replace(FormKeys::ATTRIBUTE_PREFIX, '', $this->page->GetName());

        return new AttributeValue($id, $value);
    }

<<<<<<< HEAD
    public function ImportReservations()
    {
        $userSession = ServiceLocator::GetServer()->GetUserSession();
        if (!$userSession->IsAdmin) {
            $this->page->SetImportResult(new CsvImportResult(0, array(), 'User is not an admin'));
            return;
        }

        ini_set('max_execution_time', 600);

        $resources = $this->resourceRepository->GetResourceList();
        /** @var BookableResource[] $resourcesIndexed */
        $resourcesIndexed = array();
        foreach ($resources as $resource) {
            $resourcesIndexed[strtolower($resource->GetName())] = $resource;
        }

        $attributes = $this->attributeService->GetByCategory(CustomAttributeCategory::RESERVATION);
        /** @var CustomAttribute[] $attributesIndexed */
        $attributesIndexed = array();
        /** @var CustomAttribute $attribute */
        foreach ($attributes as $attribute) {
            if (!$attribute->HasSecondaryEntities()) {
                $attributesIndexed[strtolower($attribute->Label())] = $attribute;
            }
        }

        $users = $this->userRepository->GetAll();
        /** @var User[] $usersIndexed */
        $usersIndexed = array();
        foreach ($users as $user) {
            $usersIndexed[strtolower($user->EmailAddress())] = $user;
        }

        $importFile = $this->page->GetImportFile();
        $csv = new ReservationImportCsv($importFile, $attributesIndexed);

        $importCount = 0;
        $messages = array();

        $rows = $csv->GetRows();

        if (count($rows) == 0) {
            $this->page->SetImportResult(new CsvImportResult(0, array(), 'Empty file or missing header row'));
            return;
        }

        for ($i = 0; $i < count($rows); $i++) {
            $rowNum = $i + 1;
            $row = $rows[$i];
            try {
                $resources = array();
                foreach ($row->resourceNames as $name) {
                    $name = strtolower($name);
                    if (array_key_exists($name, $resourcesIndexed)) {
                        $resources[] = $resourcesIndexed[$name];
                    }
                }

                $user = (!empty($row->email) && array_key_exists($row->email, $usersIndexed)) ? $usersIndexed[$row->email] : null;

                $date = DateRange::Create($row->begin, $row->end, $userSession->Timezone);

                if (!empty($resources) && !empty($user)) {
                    $reservation = ReservationSeries::Create($user->Id(), $resources[0], $row->title, $row->description, $date, new RepeatNone(), $userSession);

                    for ($r = 1; $r < count($resources); $r++) {
                        $reservation->AddResource($resources[$r]);
                    }

                    foreach ($row->attributes as $label => $value) {
                        if (!empty($value) && array_key_exists($label, $attributesIndexed)) {
                            $attribute = $attributesIndexed[$label];
                            $reservation->AddAttributeValue(new AttributeValue($attribute->Id(), $value));
                        }

                    }

                    $this->manageReservationsService->UnsafeAdd($reservation);

                    $importCount++;
                }
                else {
                    $messages[] = 'Invalid data in row ' . $rowNum . '. Ensure the user and resource in this row exist.';
                }
            } catch (Exception $ex) {
                $messages[] = 'Invalid data in row ' . $rowNum;
                Log::Error('Error importing reservations. %s', $ex);
            }
        }

        $this->page->SetImportResult(new CsvImportResult($importCount, $csv->GetSkippedRowNumbers(), $messages));
    }

    public function DeleteMultiple()
    {
        $ids = $this->page->GetDeletedReservationIds();
        Log::Debug('Reservation multiple delete. Ids=%s', implode(',', $ids));
        foreach ($ids as $id) {
            $this->manageReservationsService->UnsafeDelete($id, ServiceLocator::GetServer()->GetUserSession());
        }
    }

    public function UpdateTermsOfService()
    {
        Log::Debug('Updating terms of service');

        $source = $this->page->GetTermsSource();

        $filename = null;
        $termsText = null;
        $termsUrl = null;

        if ($source == 'manual') {
            $termsText = $this->page->GetTermsText();
        }
        elseif ($source == 'url') {
            $termsUrl = $this->page->GetTermsUrl();
        }
        else {
            $file = $this->page->GetTermsUpload();

            if ($file != null && $file->Extension() == 'pdf') {
                $filename = 'tos.pdf';
                $fileSystem = new \Booked\FileSystem();
                $fileSystem->Save(Paths::Terms(), $filename, $file->Contents());
            }
        }

        $terms = TermsOfService::Create($termsText, $termsUrl, $filename, $this->page->GetTermsApplicability());
        $this->termsOfServiceRepository->Add($terms);
    }

    public function DeleteTermsOfService()
    {
        Log::Debug('Deleting terms of service');
        $this->termsOfServiceRepository->Delete();
    }

    protected function LoadValidators($action)
    {
        Log::Debug('Loading validators for %s', $action);

        if ($action == ManageReservationsActions::Import) {
            $this->page->RegisterValidator('fileExtensionValidator', new FileExtensionValidator('csv', $this->page->GetImportFile()));
        }
    }
=======
>>>>>>> old/master
}

class ReservationFilterPreferences
{
    private $FilterStartDateDelta = 0;
    private $FilterEndDateDelta = 0;
    private $FilterUserId = 0;
    private $FilterUserName = '';
    private $FilterScheduleId = 0;
    private $FilterResourceId = 0;
    private $FilterReservationStatusId = 0;
    private $FilterReferenceNumber = '';
    private $FilterResourceStatusId = '';
    private $FilterResourceReasonId = '';
    private $FilterCustomAttributes = '';
<<<<<<< HEAD
    private $FilterTitle = '';
    private $FilterDescription = '';
    private $FilterMissedCheckin = 0;
    private $FilterMissedCheckout = 0;
=======
>>>>>>> old/master

    /**
     * @var User
     */
    private $user;
    /**
     * @var IUserRepository
     */
    private $userRepository;

    public function __construct(IUserRepository $userRepository, $userId)
    {
        $this->userRepository = $userRepository;
        $this->user = $userRepository->LoadById($userId);
    }

    public function GetFilterStartDateDelta()
    {
        return empty($this->FilterStartDateDelta) ? -14 : $this->FilterStartDateDelta;
    }

    public function GetFilterEndDateDelta()
    {
        return empty($this->FilterEndDateDelta) ? 14 : $this->FilterEndDateDelta;
    }

    public function GetFilterUserId()
    {
        return $this->FilterUserId;
    }

    public function GetFilterUserName()
    {
        return $this->FilterUserName;
    }

    public function GetFilterScheduleId()
    {
        return $this->FilterScheduleId;
    }

    public function GetFilterResourceId()
    {
        return $this->FilterResourceId;
    }

    public function GetFilterReservationStatusId()
    {
        return $this->FilterReservationStatusId;
    }

    public function GetFilterReferenceNumber()
    {
        return $this->FilterReferenceNumber;
    }

    public function GetFilterResourceStatusId()
    {
        return $this->FilterResourceStatusId;
    }

    public function GetFilterResourceReasonId()
    {
        return $this->FilterResourceReasonId;
    }

<<<<<<< HEAD
    public function GetFilterTitle()
    {
        return $this->FilterTitle;
    }

    public function GetFilterDescription()
    {
        return $this->FilterDescription;
    }

    public function GetMissedCheckin()
    {
        return $this->FilterMissedCheckin;
    }

    public function GetMissedCheckout()
    {
        return $this->FilterMissedCheckout;
    }

=======
>>>>>>> old/master
    public function SetFilterStartDateDelta($FilterStartDateDelta)
    {
        $this->FilterStartDateDelta = $FilterStartDateDelta;
    }

    public function SetFilterEndDateDelta($FilterEndDateDelta)
    {
        $this->FilterEndDateDelta = $FilterEndDateDelta;
    }

    public function SetFilterUserId($FilterUserId)
    {
        $this->FilterUserId = $FilterUserId;
    }

    public function SetFilterUserName($FilterUserName)
    {
        $this->FilterUserName = $FilterUserName;
    }

    public function SetFilterScheduleId($FilterScheduleId)
    {
        if (empty($FilterScheduleId)) {
            $FilterScheduleId = '0';
        }

        $this->FilterScheduleId = $FilterScheduleId;
    }

    public function SetFilterResourceId($FilterResourceId)
    {
        if (empty($FilterResourceId)) {
            $FilterResourceId = '0';
        }

        $this->FilterResourceId = $FilterResourceId;
    }

    public function SetFilterReservationStatusId($FilterReservationStatusId)
    {
        if (empty($FilterReservationStatusId)) {
            $FilterReservationStatusId = '0';
        }

        $this->FilterReservationStatusId = $FilterReservationStatusId;
    }

    public function SetFilterReferenceNumber($FilterReferenceNumber)
    {
        $this->FilterReferenceNumber = $FilterReferenceNumber;
    }

    public function SetFilterResourceStatusId($statusId)
    {
        $this->FilterResourceStatusId = $statusId;
    }

    public function SetFilterResourceReasonId($reasonId)
    {
        $this->FilterResourceReasonId = $reasonId;
    }

<<<<<<< HEAD
    public function SetFilterTitle($title)
    {
        $this->FilterTitle = $title;
    }

    public function SetFilterDescription($description)
    {
        $this->FilterDescription = $description;
    }

    public function SetFilterMissedCheckin($missed)
    {
        $this->FilterMissedCheckin = intval($missed);
    }

    public function SetFilterMissedCheckout($missed)
    {
        $this->FilterMissedCheckout = intval($missed);
    }

=======
>>>>>>> old/master
    /**
     * @return array
     */
    public function GetFilterCustomAttributes()
    {
        if (isset($this->FilterCustomAttributes) && !empty($this->FilterCustomAttributes)) {
            return unserialize($this->FilterCustomAttributes);
        }

        return array();
    }

    /**
     * @param array $filters
     */
    public function SetFilterCustomAttributes($filters)
    {
        $this->FilterCustomAttributes = serialize($filters);
    }

    static $filterKeys = array('FilterStartDateDelta' => -7,
        'FilterEndDateDelta' => +7,
        'FilterUserId' => '',
        'FilterUserName' => '',
        'FilterScheduleId' => '',
        'FilterResourceId' => '',
        'FilterReservationStatusId' => 0,
        'FilterReferenceNumber' => '',
        'FilterResourceStatusId' => '',
        'FilterResourceReasonId' => '',
        'FilterCustomAttributes' => '',
<<<<<<< HEAD
        'FilterTitle' => '',
        'FilterDescription' => '',
        'FilterMissedCheckin' => 0,
        'FilterMissedCheckout' => 0,
=======
>>>>>>> old/master
    );


    public function Load()
    {
        foreach (self::$filterKeys as $filterName => $defaultValue) {
            $this->$filterName = $defaultValue;
        }

        $prefs = $this->user->GetPreferences()->All();

        foreach ($prefs as $key => $val) {
            if (array_key_exists($key, self::$filterKeys)) {
                $this->$key = $val;
            }
        }
    }

    public function Update()
    {
        foreach (self::$filterKeys as $filterName => $defaultValue) {
            $this->user->ChangePreference($filterName, $this->$filterName);
        }

        $this->userRepository->Update($this->user);
    }
}