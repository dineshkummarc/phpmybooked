<?php
/**
<<<<<<< HEAD
Copyright 2011-2020 Nick Korbel
=======
Copyright 2011-2016 Nick Korbel
>>>>>>> old/master

This file is part of Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/ReservationEvents.php');
require_once(ROOT_DIR . 'lib/Email/Messages/ReservationCreatedEmail.php');
require_once(ROOT_DIR . 'lib/Email/Messages/ReservationUpdatedEmail.php');
require_once(ROOT_DIR . 'lib/Email/Messages/ReservationDeletedEmail.php');
require_once(ROOT_DIR . 'lib/Email/Messages/ReservationApprovedEmail.php');

abstract class OwnerEmailNotification implements IReservationNotification
{
	/**
	 * @var IUserRepository
	 */
<<<<<<< HEAD
	protected $_userRepo;
=======
	private $_userRepo;
>>>>>>> old/master

	/**
	 * @var IAttributeRepository
	 */
<<<<<<< HEAD
    protected $_attributeRepo;
=======
	private $_attributeRepo;
>>>>>>> old/master

	/**
	 * @param IUserRepository $userRepo
	 * @param IAttributeRepository $attributeRepo
	 */
	public function __construct(IUserRepository $userRepo, IAttributeRepository $attributeRepo)
	{
		$this->_userRepo = $userRepo;
		$this->_attributeRepo = $attributeRepo;
	}

	/**
	 * @param ReservationSeries $reservation
	 * @return void
	 */
	public function Notify($reservation)
	{
		$owner = $this->_userRepo->LoadById($reservation->UserId());
		if ($this->ShouldSend($owner))
		{
<<<<<<< HEAD
			$message = $this->GetMessage($owner, $reservation, $this->_attributeRepo, $this->_userRepo);
=======
			$message = $this->GetMessage($owner, $reservation, $this->_attributeRepo);
>>>>>>> old/master
			ServiceLocator::GetEmailService()->Send($message);
		}
		else
		{
			Log::Debug('Owner does not want these types of email notifications. Email=%s, ReferenceNumber=%s', $owner->EmailAddress(), $reservation->CurrentInstance()->ReferenceNumber());
		}
	}

	/**
	 * @abstract
	 * @param $owner User
	 * @return bool
	 */
	protected abstract function ShouldSend(User $owner);

	/**
	 * @param User $owner
<<<<<<< HEAD
	 * @param ReservationSeries|ExistingReservationSeries $reservation
	 * @param IAttributeRepository $attributeRepo
     * @param IUserRepository $userRepository
	 * @return EmailMessage
	 */
	protected abstract function GetMessage(User $owner, $reservation, IAttributeRepository $attributeRepo, IUserRepository $userRepository);
=======
	 * @param ReservationSeries $reservation
	 * @param IAttributeRepository $attributeRepo
	 * @return EmailMessage
	 */
	protected abstract function GetMessage(User $owner, ReservationSeries $reservation, IAttributeRepository $attributeRepo);
>>>>>>> old/master
}

class OwnerEmailCreatedNotification extends OwnerEmailNotification
{
	protected function ShouldSend(User $owner)
	{
		return $owner->WantsEventEmail(new ReservationCreatedEvent());
	}

<<<<<<< HEAD
	protected function GetMessage(User $owner, $reservation, IAttributeRepository $attributeRepository, IUserRepository $userRepository)
	{
		return new ReservationCreatedEmail($owner, $reservation, null, $attributeRepository, $userRepository);
=======
	protected function GetMessage(User $owner, ReservationSeries $reservation, IAttributeRepository $attributeRepository)
	{
		return new ReservationCreatedEmail($owner, $reservation, null, $attributeRepository);
>>>>>>> old/master
	}
}

class OwnerEmailUpdatedNotification extends OwnerEmailNotification
{
	protected function ShouldSend(User $owner)
	{
		return $owner->WantsEventEmail(new ReservationUpdatedEvent());
	}

<<<<<<< HEAD
	protected function GetMessage(User $owner, $reservation, IAttributeRepository $attributeRepository, IUserRepository $userRepository)
	{
		return new ReservationUpdatedEmail($owner, $reservation, null, $attributeRepository, $userRepository);
=======
	protected function GetMessage(User $owner, ReservationSeries $reservation, IAttributeRepository $attributeRepository)
	{
		return new ReservationUpdatedEmail($owner, $reservation, null, $attributeRepository);
>>>>>>> old/master
	}
}

class OwnerEmailApprovedNotification extends OwnerEmailNotification
{
	/**
	 * @param $owner User
	 * @return bool
	 */
	protected function ShouldSend(User $owner)
	{
		return $owner->WantsEventEmail(new ReservationApprovedEvent());
	}

<<<<<<< HEAD
	protected function GetMessage(User $owner, $reservation, IAttributeRepository $attributeRepository, IUserRepository $userRepository)
	{
		return new ReservationApprovedEmail($owner, $reservation, null, $attributeRepository, $userRepository);
=======
	protected function GetMessage(User $owner, ReservationSeries $reservation, IAttributeRepository $attributeRepository)
	{
		return new ReservationApprovedEmail($owner, $reservation, null, $attributeRepository);
>>>>>>> old/master
	}
}

class OwnerEmailDeletedNotification extends OwnerEmailNotification
{
    /**
     * @param $owner User
     * @return bool
     */
    protected function ShouldSend(User $owner)
    {
        return $owner->WantsEventEmail(new ReservationDeletedEvent());
    }

<<<<<<< HEAD
    protected function GetMessage(User $owner, $reservation, IAttributeRepository $attributeRepository, IUserRepository $userRepository)
    {
        return new ReservationDeletedEmail($owner, $reservation, null, $attributeRepository, $userRepository);
=======
    protected function GetMessage(User $owner, ReservationSeries $reservation, IAttributeRepository $attributeRepository)
    {
        return new ReservationDeletedEmail($owner, $reservation, null, $attributeRepository);
>>>>>>> old/master
    }
}