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
<<<<<<< HEAD

=======
>>>>>>> old/master
class CustomAttributeValidationRule implements IReservationValidationRule
{
	/**
	 * @var IAttributeService
	 */
	private $attributeService;

	/**
	 * @var IUserRepository
	 */
	private $userRepository;

	public function __construct(IAttributeService $attributeService, IUserRepository $userRepository)
	{
		$this->attributeService = $attributeService;
		$this->userRepository = $userRepository;
	}

	public function Validate($reservationSeries, $retryParameters)
	{
		$resources = Resources::GetInstance();
		$errorMessage = new StringBuilder();

		$user = $this->userRepository->LoadById($reservationSeries->UserId());
		$bookedBy = $this->userRepository->LoadById($reservationSeries->BookedBy()->UserId);
		$isResourceAdmin = $bookedBy->IsResourceAdminForOneOf($reservationSeries->AllResources());
		$isAdminUser = $bookedBy->IsAdminFor($user) || $isResourceAdmin;

<<<<<<< HEAD
		$result = $this->attributeService->Validate(CustomAttributeCategory::RESERVATION, $reservationSeries->AttributeValues(), array(), false, $isAdminUser);
=======
		$result = $this->attributeService->Validate(CustomAttributeCategory::RESERVATION, $reservationSeries->AttributeValues(), null, false, $isAdminUser);
>>>>>>> old/master

		$isValid = $result->IsValid();

		if (!$isValid)
		{
			// make sure the failures are for attributes that apply to this reservation
			foreach ($result->InvalidAttributes() as $invalidAttribute)
			{
				$secondaryCategory = $invalidAttribute->Attribute->SecondaryCategory();
<<<<<<< HEAD
				$secondaryEntityIds = $invalidAttribute->Attribute->SecondaryEntityIds();

				if ($secondaryCategory == CustomAttributeCategory::USER && !in_array($reservationSeries->UserId(), $secondaryEntityIds))
=======
				$secondaryEntityId = $invalidAttribute->Attribute->SecondaryEntityIds();

				if ($secondaryCategory == CustomAttributeCategory::USER && $secondaryEntityId != $reservationSeries->UserId())
>>>>>>> old/master
				{
					// the attribute applies to a different user
					continue;
				}
<<<<<<< HEAD
				if ($secondaryCategory == CustomAttributeCategory::RESOURCE && count(array_intersect($secondaryEntityIds, $reservationSeries->AllResourceIds())) == 0)
=======
				if ($secondaryCategory == CustomAttributeCategory::RESOURCE && !in_array($secondaryEntityId, $reservationSeries->AllResourceIds()))
>>>>>>> old/master
				{
					// the attribute is not for a resource that is being booked
					continue;
				}
				if ($secondaryCategory == CustomAttributeCategory::RESOURCE_TYPE)
				{
					$appliesToResourceType = false;
					foreach ($reservationSeries->AllResources() as $resource)
					{
						if ($appliesToResourceType)
						{
							// don't keep checking if we already know it applies to this resource type
							break;
						}
<<<<<<< HEAD
						if (in_array($resource->GetResourceTypeId(),$secondaryEntityIds))
=======
						if ($resource->GetResourceTypeId() == $secondaryEntityId)
>>>>>>> old/master
						{
							$appliesToResourceType = true;
						}
					}

					if (!$appliesToResourceType)
					{
						// the attribute is for a resource type that is not being booked
						continue;
					}
				}

				$errorMessage->Append($invalidAttribute->Error);
			}
		}

		if ($errorMessage->Count() > 0)
		{
			$errorMessage->PrependLine($resources->GetString('CustomAttributeErrors'));
		}

		return new ReservationRuleResult($errorMessage->Count() == 0, $errorMessage->ToString());
	}
}