<?php
/**
<<<<<<< HEAD
Copyright 2011-2020 Nick Korbel
=======
Copyright 2011-2016 Nick Korbel
>>>>>>> old/master

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

interface ISqlCommand
{
	/**
	 * @param Parameters $parameters
	 */
<<<<<<< HEAD
	public function SetParameters(Parameters $parameters);
=======
	public function SetParameters(Parameters &$parameters);
>>>>>>> old/master

	/**
	 * @param Parameter $parameter
	 */
<<<<<<< HEAD
	public function AddParameter(Parameter $parameter);
=======
	public function AddParameter(Parameter &$parameter);
>>>>>>> old/master

	/**
	 * @return string the underlying query to be executed
	 */
	public function GetQuery();

	/**
	 * @return bool
	 */
	public function ContainsGroupConcat();
<<<<<<< HEAD

	/**
     * @return bool
     */
	public function IsMultiQuery();
=======
>>>>>>> old/master
}