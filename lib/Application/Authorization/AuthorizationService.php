<?php
/**
<<<<<<< HEAD
 * Copyright 2011-2020 Nick Korbel
 *
 * This file is part of Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
=======
Copyright 2011-2016 Nick Korbel

This file is part of Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
>>>>>>> old/master
 */

interface IRoleService
{
<<<<<<< HEAD
    /**
     * @abstract
     * @param User $user
     * @return bool
     */
    public function IsApplicationAdministrator(User $user);

    /**
     * @abstract
     * @param User $user
     * @return bool
     */
    public function IsResourceAdministrator(User $user);

    /**
     * @abstract
     * @param User $user
     * @return bool
     */
    public function IsGroupAdministrator(User $user);

    /**
     * @abstract
     * @param User $user
     * @return bool
     */
    public function IsScheduleAdministrator(User $user);
=======
	/**
	 * @abstract
	 * @param User $user
	 * @return bool
	 */
	public function IsApplicationAdministrator(User $user);

	/**
	 * @abstract
	 * @param User $user
	 * @return bool
	 */
	public function IsResourceAdministrator(User $user);

	/**
	 * @abstract
	 * @param User $user
	 * @return bool
	 */
	public function IsGroupAdministrator(User $user);

	/**
	 * @abstract
	 * @param User $user
	 * @return bool
	 */
	public function IsScheduleAdministrator(User $user);
>>>>>>> old/master

    /**
     * @param UserSession $userSession
     * @param int $otherUserId
     * @return bool
     */
    public function IsAdminFor(UserSession $userSession, $otherUserId);
}

interface IAuthorizationService extends IRoleService
{
<<<<<<< HEAD
    /**
     * @abstract
     * @param UserSession $reserver user who is requesting access to perform action
     * @return bool
     */
    public function CanReserveForOthers(UserSession $reserver);

    /**
     * @abstract
     * @param UserSession $reserver user who is requesting access to perform action
     * @param int $reserveForId user to reserve for
     * @return bool
     */
    public function CanReserveFor(UserSession $reserver, $reserveForId);

    /**
     * @abstract
     * @param UserSession $approver user who is requesting access to perform action
     * @param int $approveForId user to approve for
     * @return bool
     */
    public function CanApproveFor(UserSession $approver, $approveForId);
=======
	/**
	 * @abstract
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @return bool
	 */
	public function CanReserveForOthers(UserSession $reserver);

	/**
	 * @abstract
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @param int $reserveForId user to reserve for
	 * @return bool
	 */
	public function CanReserveFor(UserSession $reserver, $reserveForId);

	/**
	 * @abstract
	 * @param UserSession $approver user who is requesting access to perform action
	 * @param int $approveForId user to approve for
	 * @return bool
	 */
	public function CanApproveFor(UserSession $approver, $approveForId);
>>>>>>> old/master

    /**
     * @param UserSession $user
     * @param IResource $resource
     * @return bool
     */
    public function CanEditForResource(UserSession $user, IResource $resource);

    /**
     * @param UserSession $user
     * @param IResource $resource
     * @return bool
     */
    public function CanApproveForResource(UserSession $user, IResource $resource);

}

class AuthorizationService implements IAuthorizationService
{
<<<<<<< HEAD
    /**
     * @var IUserRepository
     */
    private $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UserSession $reserver user who is requesting access to perform action
     * @return bool
     */
    public function CanReserveForOthers(UserSession $reserver)
    {
        if ($reserver->IsAdmin) {
            return true;
        }

        $user = $this->userRepository->LoadById($reserver->UserId);

        return $user->IsGroupAdmin();
    }

    /**
     * @param UserSession $reserver user who is requesting access to perform action
     * @param int $reserveForId user to reserve for
     * @return bool
     */
    public function CanReserveFor(UserSession $reserver, $reserveForId)
    {
        if ($reserveForId == $reserver->UserId)
        {
            return true;
        }

        return $this->IsAdminFor($reserver, $reserveForId);
    }

    /**
     * @param UserSession $approver user who is requesting access to perform action
     * @param int $approveForId user to approve for
     * @return bool
     */
    public function CanApproveFor(UserSession $approver, $approveForId)
    {
        return $this->IsAdminFor($approver, $approveForId);
    }
=======
	/**
	 * @var IUserRepository
	 */
	private $userRepository;

	public function __construct(IUserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	/**
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @return bool
	 */
	public function CanReserveForOthers(UserSession $reserver)
	{
		if ($reserver->IsAdmin)
		{
			return true;
		}

		$user = $this->userRepository->LoadById($reserver->UserId);

		return $user->IsGroupAdmin();
	}

	/**
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @param int $reserveForId user to reserve for
	 * @return bool
	 */
	public function CanReserveFor(UserSession $reserver, $reserveForId)
	{
		return $this->IsAdminFor($reserver, $reserveForId);
	}

	/**
	 * @param UserSession $approver user who is requesting access to perform action
	 * @param int $approveForId user to approve for
	 * @return bool
	 */
	public function CanApproveFor(UserSession $approver, $approveForId)
	{
		return $this->IsAdminFor($approver, $approveForId);
	}
>>>>>>> old/master

    /**
     * @param User $user
     * @return bool
     */
    public function IsApplicationAdministrator(User $user)
    {
<<<<<<< HEAD
        if (Configuration::Instance()->IsAdminEmail($user->EmailAddress())) {
=======
        if (strtolower($user->EmailAddress()) == strtolower(Configuration::Instance()->GetKey(ConfigKeys::ADMIN_EMAIL)))
        {
>>>>>>> old/master
            return true;
        }

        return $user->IsInRole(RoleLevel::APPLICATION_ADMIN);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function IsResourceAdministrator(User $user)
    {
        return $user->IsInRole(RoleLevel::RESOURCE_ADMIN);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function IsGroupAdministrator(User $user)
    {
        return $user->IsInRole(RoleLevel::GROUP_ADMIN);
    }

<<<<<<< HEAD
    /**
=======
	/**
>>>>>>> old/master
     * @param User $user
     * @return bool
     */
    public function IsScheduleAdministrator(User $user)
    {
        return $user->IsInRole(RoleLevel::SCHEDULE_ADMIN);
    }

<<<<<<< HEAD
    /**
     * @param UserSession $userSession
     * @param int $otherUserId
     * @return bool
     */
    public function IsAdminFor(UserSession $userSession, $otherUserId)
    {
        if ($userSession->IsAdmin) {
            return true;
        }

        if (!$userSession->IsGroupAdmin) {
=======
	/**
	 * @param UserSession $userSession
	 * @param int $otherUserId
	 * @return bool
	 */
	public function IsAdminFor(UserSession $userSession, $otherUserId)
	{
		if ($userSession->IsAdmin)
		{
			return true;
		}

        if (!$userSession->IsGroupAdmin)
        {
>>>>>>> old/master
            // dont even bother checking if the user isnt a group admin
            return false;
        }

<<<<<<< HEAD
        $user1 = $this->userRepository->LoadById($userSession->UserId);
        $user2 = $this->userRepository->LoadById($otherUserId);

        return $user1->IsAdminFor($user2);
    }
=======
		$user1 = $this->userRepository->LoadById($userSession->UserId);
		$user2 = $this->userRepository->LoadById($otherUserId);

		return $user1->IsAdminFor($user2);
	}
>>>>>>> old/master

    /**
     * @param UserSession $userSession
     * @param IResource $resource
     * @return bool
     */
    public function CanEditForResource(UserSession $userSession, IResource $resource)
    {
<<<<<<< HEAD
        if ($userSession->IsAdmin) {
            return true;
        }

        if (!$userSession->IsResourceAdmin && !$userSession->IsScheduleAdmin) {
=======
        if ($userSession->IsAdmin)
        {
            return true;
        }

        if (!$userSession->IsResourceAdmin && !$userSession->IsScheduleAdmin)
        {
>>>>>>> old/master
            return false;
        }

        $user = $this->userRepository->LoadById($userSession->UserId);

        return $user->IsResourceAdminFor($resource);
    }

    /**
     * @param UserSession $userSession
     * @param IResource $resource
     * @return bool
     */
    public function CanApproveForResource(UserSession $userSession, IResource $resource)
    {
<<<<<<< HEAD
        if ($userSession->IsAdmin) {
            return true;
        }

        if (!$userSession->IsResourceAdmin) {
=======
        if ($userSession->IsAdmin)
        {
            return true;
        }

        if (!$userSession->IsResourceAdmin)
        {
>>>>>>> old/master
            return false;
        }

        $user = $this->userRepository->LoadById($userSession->UserId);

        return $user->IsResourceAdminFor($resource);
    }
<<<<<<< HEAD
}

class GuestAuthorizationService implements IAuthorizationService
{

    public function IsApplicationAdministrator(User $user)
    {
        return false;
    }

    public function IsResourceAdministrator(User $user)
    {
        return false;
    }

    public function IsGroupAdministrator(User $user)
    {
        return false;
    }

    public function IsScheduleAdministrator(User $user)
    {
        return false;
    }

    public function IsAdminFor(UserSession $userSession, $otherUserId)
    {
        return false;
    }

    public function CanReserveForOthers(UserSession $reserver)
    {
        return false;
    }

    public function CanReserveFor(UserSession $reserver, $reserveForId)
    {
        return false;
    }

    public function CanApproveFor(UserSession $approver, $approveForId)
    {
        return false;
    }

    public function CanEditForResource(UserSession $user, IResource $resource)
    {
        return false;
    }

    public function CanApproveForResource(UserSession $user, IResource $resource)
    {
        return false;
    }
=======
>>>>>>> old/master
}