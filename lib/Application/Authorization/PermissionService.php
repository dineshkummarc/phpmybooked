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

interface IPermissionService
{
	/**
	 * @param IPermissibleResource $resource
	 * @param UserSession $user
	 * @return bool
	 */
	public function CanAccessResource(IPermissibleResource $resource, UserSession $user);
<<<<<<< HEAD

    /**
     * @param IPermissibleResource $resource
     * @param UserSession $user
     * @return bool
     */
    public function CanBookResource(IPermissibleResource $resource, UserSession $user);

    /**
     * @param IPermissibleResource $resource
     * @param UserSession $user
     * @return bool
     */
    public function CanViewResource(IPermissibleResource $resource, UserSession $user);

=======
>>>>>>> old/master
}

class PermissionService implements IPermissionService
{
	/**
	 * @var IResourcePermissionStore
	 */
	private $_store;

	private $_allowedResourceIds;

<<<<<<< HEAD
    private $_bookableResourceIds;

    private $_viewOnlyResourceIds;


    /**
=======
	/**
>>>>>>> old/master
	 * @param IResourcePermissionStore $store
	 */
	public function __construct(IResourcePermissionStore $store)
	{
		$this->_store = $store;
	}

	/**
	 * @param IPermissibleResource $resource
	 * @param UserSession $user
	 * @return bool
	 */
	public function CanAccessResource(IPermissibleResource $resource, UserSession $user)
	{
		if ($user->IsAdmin)
		{
			return true;
		}

		if ($this->_allowedResourceIds == null)
		{
<<<<<<< HEAD
			$this->_allowedResourceIds = $this->_store->GetAllResources($user->UserId);
		}

        return in_array($resource->GetResourceId(), $this->_allowedResourceIds);
	}

    /**
     * @param IPermissibleResource $resource
     * @param UserSession $user
     * @return bool
     */
    public function CanBookResource(IPermissibleResource $resource, UserSession $user)
    {
        if ($user->IsAdmin)
        {
            return true;
        }

        if ($this->_bookableResourceIds == null)
        {
            $this->_bookableResourceIds = $this->_store->GetBookableResources($user->UserId);
        }

        return in_array($resource->GetResourceId(), $this->_bookableResourceIds);
    }

    /**
     * @param IPermissibleResource $resource
     * @param UserSession $user
     * @return bool
     */
    public function CanViewResource(IPermissibleResource $resource, UserSession $user)
    {
        if ($user->IsAdmin)
        {
            return true;
        }

        if ($this->_viewOnlyResourceIds == null)
        {
            $this->_viewOnlyResourceIds = $this->_store->GetViewOnlyResources($user->UserId);
        }

        return in_array($resource->GetResourceId(), $this->_viewOnlyResourceIds);
    }
=======
			$this->_allowedResourceIds = $this->_store->GetPermittedResources($user->UserId);
		}

		return in_array($resource->GetResourceId(), $this->_allowedResourceIds);
	}
>>>>>>> old/master
}