<?php
/**
<<<<<<< HEAD
 * Copyright 2013-2020 Nick Korbel
=======
 * Copyright 2013-2016 Nick Korbel
>>>>>>> old/master
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
 */

require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');
require_once(ROOT_DIR . 'lib/Email/Messages/AccountDeletedEmail.php');

interface IManageUsersService
{
	/**
	 * @param $username string
	 * @param $email string
	 * @param $firstName string
	 * @param $lastName string
	 * @param $password string
	 * @param $timezone string
	 * @param $language string
	 * @param $homePageId int
	 * @param $extraAttributes array|string[]
	 * @param $customAttributes array|AttributeValue[]
	 * @return User
	 */
	public function AddUser(
			$username,
			$email,
			$firstName,
			$lastName,
			$password,
			$timezone,
			$language,
			$homePageId,
			$extraAttributes,
			$customAttributes);

	/**
	 * @param $userId int
	 * @param $username string
	 * @param $email string
	 * @param $firstName string
	 * @param $lastName string
	 * @param $timezone string
	 * @param $extraAttributes string[]|array
<<<<<<< HEAD
	 * @param $customAttributes AttributeValue[]
	 * @return User
	 */
	public function UpdateUser($userId, $username, $email, $firstName, $lastName, $timezone, $extraAttributes, $customAttributes);
=======
	 * @return User
	 */
	public function UpdateUser($userId, $username, $email, $firstName, $lastName, $timezone, $extraAttributes);
>>>>>>> old/master

	/**
	 * @param $userId int
	 * @param $attribute AttributeValue
	 */
	public function ChangeAttribute($userId, $attribute);

<<<<<<< HEAD
	/**
=======
    /**
>>>>>>> old/master
	 * @param $userId int
	 * @param $attributes AttributeValue[]
	 */
	public function ChangeAttributes($userId, $attributes);

	/**
	 * @param $userId int
	 */
	public function DeleteUser($userId);

	/**
	 * @param User $user
	 * @param int[] $groupIds
	 */
	public function ChangeGroups($user, $groupIds);
<<<<<<< HEAD

	/**
	 * @param int $userId
	 * @param string $password
	 */
	public function UpdatePassword($userId, $password);

	/**
	 * @param string $email
	 * @return User
	 */
	public function LoadUser($email);
=======
>>>>>>> old/master
}

class ManageUsersService implements IManageUsersService
{
	/**
	 * @var IRegistration
	 */
	private $registration;

	/**
	 * @var IUserRepository
	 */
	private $userRepository;

	/**
	 * @var IGroupRepository
	 */
	private $groupRepository;

	/**
	 * @var IUserViewRepository
	 */
	private $userViewRepository;

<<<<<<< HEAD
	/**
	 * @var PasswordEncryption
	 */
	private $passwordEncryption;

	public function __construct(IRegistration $registration,
								IUserRepository $userRepository,
								IGroupRepository $groupRepository,
								IUserViewRepository $userViewRepository,
								PasswordEncryption $passwordEncryption)
=======
	public function __construct(IRegistration $registration, IUserRepository $userRepository, IGroupRepository $groupRepository,
								IUserViewRepository $userViewRepository)
>>>>>>> old/master
	{
		$this->registration = $registration;
		$this->userRepository = $userRepository;
		$this->groupRepository = $groupRepository;
		$this->userViewRepository = $userViewRepository;
<<<<<<< HEAD
		$this->passwordEncryption = $passwordEncryption;
=======
>>>>>>> old/master
	}

	public function AddUser(
			$username,
			$email,
			$firstName,
			$lastName,
			$password,
			$timezone,
			$language,
			$homePageId,
			$extraAttributes,
			$customAttributes)
	{
		$user = $this->registration->Register($username,
											  $email,
											  $firstName,
											  $lastName,
											  $password,
											  $timezone,
											  $language,
											  $homePageId,
											  $extraAttributes,
											  $customAttributes);

		return $user;
	}

<<<<<<< HEAD
	public function ChangeAttribute($userId, $attributeValue)
	{
		$user = $this->userRepository->LoadById($userId);
		$user->ChangeCustomAttribute($attributeValue);
		$this->userRepository->Update($user);
	}
=======
    public function ChangeAttribute($userId, $attributeValue)
    {
        $user = $this->userRepository->LoadById($userId);
        $user->ChangeCustomAttribute($attributeValue);
        $this->userRepository->Update($user);
    }
>>>>>>> old/master

	public function ChangeAttributes($userId, $attributes)
	{
		$user = $this->userRepository->LoadById($userId);
<<<<<<< HEAD
		foreach ($attributes as $attribute)
		{
			$user->ChangeCustomAttribute($attribute);
		}
		$this->userRepository->Update($user);
	}

	public function DeleteUser($userId, $notify = true)
	{
		$currentUser = ServiceLocator::GetServer()->GetUserSession();
		if ($currentUser->UserId == $userId)
		{
			// don't delete own account
			return;
		}

		$user = $this->userRepository->LoadById($userId);
		$this->userRepository->DeleteById($userId);

		if ($notify && Configuration::Instance()->GetKey(ConfigKeys::REGISTRATION_NOTIFY, new BooleanConverter()))
		{

=======
		foreach($attributes as $attribute) {
            $user->ChangeCustomAttribute($attribute);
        }
        $this->userRepository->Update($user);
	}

	public function DeleteUser($userId)
	{
		$user = $this->userRepository->LoadById($userId);
		$this->userRepository->DeleteById($userId);

		if (Configuration::Instance()->GetKey(ConfigKeys::REGISTRATION_NOTIFY, new BooleanConverter()))
		{
			$currentUser = ServiceLocator::GetServer()->GetUserSession();
>>>>>>> old/master
			$applicationAdmins = $this->userViewRepository->GetApplicationAdmins();
			$groupAdmins = $this->userViewRepository->GetGroupAdmins($userId);

			foreach ($applicationAdmins as $applicationAdmin)
			{
				ServiceLocator::GetEmailService()->Send(new AccountDeletedEmail($user, $applicationAdmin, $currentUser));
			}

			foreach ($groupAdmins as $groupAdmin)
			{
				ServiceLocator::GetEmailService()->Send(new AccountDeletedEmail($user, $groupAdmin, $currentUser));
			}
		}
	}

<<<<<<< HEAD
	public function UpdateUser($userId, $username, $email, $firstName, $lastName, $timezone, $extraAttributes, $customAttributes)
=======
	public function UpdateUser($userId, $username, $email, $firstName, $lastName, $timezone, $extraAttributes)
>>>>>>> old/master
	{
		$attributes = new UserAttribute($extraAttributes);
		$user = $this->userRepository->LoadById($userId);
		$user->ChangeName($firstName, $lastName);
		$user->ChangeEmailAddress($email);
		$user->ChangeUsername($username);
		$user->ChangeTimezone($timezone);
		$user->ChangeAttributes($attributes->Get(UserAttribute::Phone),
								$attributes->Get(UserAttribute::Organization),
								$attributes->Get(UserAttribute::Position));

<<<<<<< HEAD
		foreach ($customAttributes as $attribute)
		{
			$user->ChangeCustomAttribute($attribute);
		}
=======
>>>>>>> old/master
		$this->userRepository->Update($user);

		return $user;
	}

	public function ChangeGroups($user, $groupIds)
	{
		if (is_null($groupIds))
		{
			return;
		}

		$existingGroupIds = array();
		foreach ($user->Groups() as $group)
		{
			$existingGroupIds[] = $group->GroupId;
		}

		foreach ($groupIds as $targetGroupId)
		{
			if (!in_array($targetGroupId, $existingGroupIds))
			{
				// add group
				$group = $this->groupRepository->LoadById($targetGroupId);
				$group->AddUser($user->Id());
				$this->groupRepository->Update($group);
			}
		}

		foreach ($existingGroupIds as $existingId)
		{
			if (!in_array($existingId, $groupIds))
			{
				// remove user
				$group = $this->groupRepository->LoadById($existingId);
				$group->RemoveUser($user->Id());
				$this->groupRepository->Update($group);
			}
		}
	}
<<<<<<< HEAD

	public function UpdatePassword($userId, $password)
	{
		$user = $this->userRepository->LoadById($userId);

		$encrypted = $this->passwordEncryption->EncryptPassword($password);

		$user->ChangePassword($encrypted->EncryptedPassword(), $encrypted->Salt());

		$this->userRepository->Update($user);
	}

	public function LoadUser($email)
	{
		return $this->userRepository->LoadByUsername($email);
	}
=======
>>>>>>> old/master
}