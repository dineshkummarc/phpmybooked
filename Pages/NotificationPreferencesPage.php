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
 */
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
*/
>>>>>>> old/master

require_once(ROOT_DIR . 'Pages/SecurePage.php');
require_once(ROOT_DIR . 'Presenters/NotificationPreferencesPresenter.php');

interface INotificationPreferencesPage extends IPage
{
    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @param bool $enabled
     */
    public function SetEmailEnabled($enabled);

    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @param bool $wantsApprovalEmails
     */
    public function SetApproved($wantsApprovalEmails);

    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @param bool $wantsCreationEmails
     */
    public function SetCreated($wantsCreationEmails);

    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @param bool $wantsUpdateEmails
     */
    public function SetUpdated($wantsUpdateEmails);

    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @param bool $wantsDeleteEmails
     */
    public function SetDeleted($wantsDeleteEmails);

    /**
<<<<<<< HEAD
     * @param bool $wantsSeriesEndingEmails
     */
    public function SetSeriesEnding($wantsSeriesEndingEmails);

    /**
     * @param bool $wantsParticipantChangedEmails
     */
    public function SetParticipantChanged($wantsParticipantChangedEmails);

    /**
=======
     * @abstract
>>>>>>> old/master
     * @return bool
     */
    public function GetApproved();

    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @return bool
     */
    public function GetCreated();

    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @return bool
     */
    public function GetUpdated();

    /**
<<<<<<< HEAD
=======
     * @abstract
>>>>>>> old/master
     * @return bool
     */
    public function GetDeleted();

<<<<<<< HEAD
    /**
     * @return bool
     */
    public function GetSeriesEnding();

    /**
     * @return bool
     */
    public function GetParticipantChanged();

    /**
     * @param bool $werePreferencesUpdated
     */
    public function SetPreferencesSaved($werePreferencesUpdated);

    /**
     * @param bool $enabled
     */
    public function SetParticipationEnabled($enabled);
=======
	/**
	 * @abstract
	 * @param bool $werePreferencesUpdated
	 */
	public function SetPreferencesSaved($werePreferencesUpdated);
>>>>>>> old/master
}

class NotificationPreferencesPage extends SecurePage implements INotificationPreferencesPage
{
<<<<<<< HEAD
    /**
     * @var NotificationPreferencesPresenter
     */
    private $presenter;

    public function __construct()
    {
        parent::__construct('NotificationPreferences');
        $this->presenter = new NotificationPreferencesPresenter($this, new UserRepository());
    }

    public function PageLoad()
    {
        $this->presenter->PageLoad();
        $this->Display('MyAccount/notification-preferences.tpl');
    }

=======
	/**
	 * @var NotificationPreferencesPresenter
	 */
	private $presenter;

	public function __construct()
	{
	    parent::__construct('NotificationPreferences');
		$this->presenter = new NotificationPreferencesPresenter($this, new UserRepository());
	}

	public function PageLoad()
	{
		$this->presenter->PageLoad();
		$this->Display('MyAccount/notification-preferences.tpl');
	}

    /**
     * @param bool $wantsApprovalEmails
     */
>>>>>>> old/master
    public function SetApproved($wantsApprovalEmails)
    {
        $this->Set('Approved', $wantsApprovalEmails);
    }

<<<<<<< HEAD
=======
    /**
     * @param bool $wantsCreationEmails
     */
>>>>>>> old/master
    public function SetCreated($wantsCreationEmails)
    {
        $this->Set('Created', $wantsCreationEmails);
    }

<<<<<<< HEAD
    public function SetUpdated($wantsUpdateEmails)
    {
        $this->Set('Updated', $wantsUpdateEmails);
    }

=======
    /**
     * @param $wantsUpdateEmails
     */
    public function SetUpdated($wantsUpdateEmails)
    {
       $this->Set('Updated', $wantsUpdateEmails);
    }

    /**
     * @param bool $wantsDeleteEmails
     */
>>>>>>> old/master
    public function SetDeleted($wantsDeleteEmails)
    {
        $this->Set('Deleted', $wantsDeleteEmails);
    }

<<<<<<< HEAD
    public function SetSeriesEnding($wantsSeriesEndingEmails)
    {
        $this->Set('SeriesEnding', $wantsSeriesEndingEmails);
    }

    public function SetParticipantChanged($wantsParticipantChangedEmails)
    {
        $this->Set('ParticipantChanged', $wantsParticipantChangedEmails);
    }

=======
    /**
     * @return bool
     */
>>>>>>> old/master
    public function GetApproved()
    {
        return (bool)$this->GetForm(ReservationEvent::Approved);
    }

<<<<<<< HEAD
=======
    /**
     * @return bool
     */
>>>>>>> old/master
    public function GetCreated()
    {
        return (bool)$this->GetForm(ReservationEvent::Created);
    }

<<<<<<< HEAD
=======
    /**
     * @return bool
     */
>>>>>>> old/master
    public function GetUpdated()
    {
        return (bool)$this->GetForm(ReservationEvent::Updated);
    }

<<<<<<< HEAD
=======
    /**
     * @return bool
     */
>>>>>>> old/master
    public function GetDeleted()
    {
        return (bool)$this->GetForm(ReservationEvent::Deleted);
    }

<<<<<<< HEAD
    public function GetSeriesEnding()
    {
        return (bool)$this->GetForm(ReservationEvent::SeriesEnding);
    }

    public function GetParticipantChanged()
    {
        return (bool)$this->GetForm(ReservationEvent::ParticipationChanged);
    }

    public function SetPreferencesSaved($werePreferencesUpdated)
    {
        $this->Set('PreferencesUpdated', $werePreferencesUpdated);
    }

=======
	/**
	 * @param bool $werePreferencesUpdated
	 */
	public function SetPreferencesSaved($werePreferencesUpdated)
	{
		$this->Set('PreferencesUpdated', $werePreferencesUpdated);
	}

    /**
     * @param bool $enabled
     */
>>>>>>> old/master
    public function SetEmailEnabled($enabled)
    {
        $this->Set('EmailEnabled', $enabled);
    }

<<<<<<< HEAD
    public function SetParticipationEnabled($enabled)
    {
        $this->Set('ParticipationEnabled', $enabled);
    }
}
=======
}

>>>>>>> old/master
