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

class ReservationListing implements IMutableReservationListing
{
<<<<<<< HEAD
    /**
	 * @param string $targetTimezone
     * @param DateRange|null $acceptableDateRange
	 */
	public function __construct($targetTimezone, $acceptableDateRange = null)
	{
		$this->timezone = $targetTimezone;
		$this->min = Date::Min();
		$this->max = Date::Max();
        if ($acceptableDateRange != null)
        {
            $this->min = $acceptableDateRange->GetBegin();
            $this->max = $acceptableDateRange->GetEnd()->AddDays(1);
        }
=======
	/**
	 * @param string $targetTimezone
	 */
	public function __construct($targetTimezone)
	{
		$this->timezone = $targetTimezone;
>>>>>>> old/master
	}

	/**
	 * @var string
	 */
	protected $timezone;

<<<<<<< HEAD
    /**
     * @var Date
     */
	protected $min;

    /**
     * @var Date
     */
	protected $max;

=======
>>>>>>> old/master
	/**
	 * @var array|ReservationItemView[]
	 */
	protected $_reservations = array();

	/**
	 * @var array|ReservationItemView[]
	 */
	protected $_reservationByResource = array();

	/**
	 * @var array|ReservationItemView[]
	 */
	protected $_reservationsByDate = array();

	/**
	 * @var array|ReservationItemView[]
	 */
	protected $_reservationsByDateAndResource = array();

<<<<<<< HEAD
    public function Add($reservation)
=======
	public function Add($reservation)
>>>>>>> old/master
	{
		$this->AddItem(new ReservationListItem($reservation));
	}

	public function AddBlackout($blackout)
	{
		$this->AddItem(new BlackoutListItem($blackout));
	}

	protected function AddItem(ReservationListItem $item)
	{
<<<<<<< HEAD
		$currentDate = $item->BufferedStartDate()->ToTimezone($this->timezone);
		$lastDate = $item->BufferedEndDate()->ToTimezone($this->timezone);
=======
		$currentDate = $item->StartDate()->ToTimezone($this->timezone);
		$lastDate = $item->EndDate()->ToTimezone($this->timezone);
>>>>>>> old/master

		if ($currentDate->GreaterThan($lastDate))
		{
			Log::Error("Reservation dates corrupted. ReferenceNumber=%s, Start=%s, End=%s", $item->ReferenceNumber(), $item->StartDate(), $item->EndDate());
			return;
		}

		if ($currentDate->DateEquals($lastDate))
		{
			$this->AddOnDate($item, $currentDate);
		}
		else
		{
<<<<<<< HEAD
			while ($currentDate->LessThan($lastDate) && !$currentDate->DateEquals($lastDate) && $currentDate->LessThan($this->max))
=======
			while ($currentDate->LessThan($lastDate) && !$currentDate->DateEquals($lastDate))
>>>>>>> old/master
			{
				$this->AddOnDate($item, $currentDate);
				$currentDate = $currentDate->AddDays(1);
			}
			if (!$lastDate->IsMidnight())
			{
				$this->AddOnDate($item, $lastDate);
			}
		}

		$this->_reservations[] = $item;
		$this->_reservationByResource[$item->ResourceId()][] = $item;
	}

	protected function AddOnDate(ReservationListItem $item, Date $date)
	{
<<<<<<< HEAD
        if ($item->BufferedStartDate()->GreaterThan($this->max) || $item->BufferedEndDate()->LessThan($this->min))
        {
            return;
        }

=======
>>>>>>> old/master
//		Log::Debug('Adding id %s on %s', $item->Id(), $date);
		$this->_reservationsByDate[$date->Format('Ymd')][] = $item;
		$this->_reservationsByDateAndResource[$date->Format('Ymd') . '|' . $item->ResourceId()][] = $item;
	}

	public function Count()
	{
		return count($this->_reservations);
	}

	public function Reservations()
	{
		return $this->_reservations;
	}

	/**
	 * @param array|ReservationListItem[] $reservations
<<<<<<< HEAD
     * @param DateRange|null $acceptableDateRange
	 * @return ReservationListing
	 */
	private function Create($reservations, $acceptableDateRange = null)
	{
		$reservationListing = new ReservationListing($this->timezone, $acceptableDateRange);
=======
	 * @return ReservationListing
	 */
	private function Create($reservations)
	{
		$reservationListing = new ReservationListing($this->timezone);
>>>>>>> old/master

		if ($reservations != null)
		{
			foreach($reservations as $reservation)
			{
				$reservationListing->AddItem($reservation);
			}
		}

		return $reservationListing;
	}

	/**
	 * @param Date $date
	 * @return ReservationListing
	 */
	public function OnDate($date)
	{
//		Log::Debug('Found %s reservations on %s', count($this->_reservationsByDate[$date->Format('Ymd')]), $date);

        $key = $date->Format('Ymd');
        $reservations = array();
        if (array_key_exists($key, $this->_reservationsByDate))
        {
            $reservations = $this->_reservationsByDate[$key];
        }
<<<<<<< HEAD
        return $this->Create($reservations, new DateRange($this->min, $this->max));
=======
        return $this->Create($reservations);
>>>>>>> old/master
	}

	public function ForResource($resourceId)
	{
		if (array_key_exists($resourceId, $this->_reservationByResource))
		{
<<<<<<< HEAD
			return $this->Create($this->_reservationByResource[$resourceId], new DateRange($this->min, $this->max));
		}

		return new ReservationListing($this->timezone, new DateRange($this->min, $this->max));
=======
			return $this->Create($this->_reservationByResource[$resourceId]);
		}

		return new ReservationListing($this->timezone);
>>>>>>> old/master
	}

	public function OnDateForResource(Date $date, $resourceId)
	{
        $key = $date->Format('Ymd') . '|' . $resourceId;

		if (!array_key_exists($key,  $this->_reservationsByDateAndResource))
		{
			return array();
		}

		return $this->_reservationsByDateAndResource[$key];
	}
}