<?php
/**
<<<<<<< HEAD
Copyright 2018-2020 Nick Korbel

This file is part of Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
=======

File in Authentication plugin package for ver 2.1.4 Booked Scheduler
to implement Single Sign On Capability.  Based on code from the
Booked Scheduler Authentication Ldap plugin as well as a SAML
Authentication plugin for Moodle 1.9+.
See http://moodle.org/mod/data/view.php?d=13&rid=2574
This plugin uses the SimpleSAMLPHP version 1.8.2 libraries.
http://simplesamlphp.org/


Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
>>>>>>> old/master
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
<<<<<<< HEAD
 */

class SamlUser
{
	private $username;
	private $fname;
	private $lname;
	private $mail;
	private $phone;
	private $institution;
	private $title;
	private $groups = array();

	/**
	 * @param array of SAML user attributes
	 * @param SamlOptions $samlOptions
	 */
	public function __construct($saml_attributes = array(), $samlOptions)
	{
		Log::Debug('Inside construct SamlUser');
		$options = $samlOptions->AdSamlOptions();
		if (count($options) > 0)
		{
			Log::Debug('Inside construct SamlUser and count options is %d', count($options));
			$this->username = $this->GetAttributeValue($saml_attributes, $options, "ssphp_username");
			Log::Debug('Value of username is %s', $this->GetUserName());

			$this->fname = $this->GetAttributeValue($saml_attributes, $options, "ssphp_firstname");
			Log::Debug('Value of fname is %s', $this->GetFirstName());

			$this->lname = $this->GetAttributeValue($saml_attributes, $options, "ssphp_lastname");
			Log::Debug('Value of lname is %s', $this->GetLastName());

			$this->mail = $this->GetAttributeValue($saml_attributes, $options, "ssphp_email");
			Log::Debug('Value of email is %s', $this->GetEmail());

			$this->phone = $this->GetAttributeValue($saml_attributes, $options, "ssphp_phone");
			Log::Debug('Value of phone is %s', $this->GetPhone());

			$this->institution = $this->GetAttributeValue($saml_attributes, $options, "ssphp_organization");
			Log::Debug('Value of institution is %s', $this->GetInstitution());

			$this->title = $this->GetAttributeValue($saml_attributes, $options, "ssphp_position");
			Log::Debug('Value of title is %s', $this->GetTitle());

			$this->groups = array();
			if ($samlOptions->SyncGroups())
			{
				$this->groups = $this->GetAttributeValue($saml_attributes, $options, "ssphp_groups", true);
			}
		}
	}

	public function GetUserName()
	{
		return $this->username;
	}

	public function GetFirstName()
	{
		return $this->fname;
	}

	public function GetLastName()
	{
		return $this->lname;
	}

	public function GetEmail()
	{
		return $this->mail;
	}

	public function GetPhone()
	{
		return $this->phone;
	}

	public function GetInstitution()
	{
		return $this->institution;
	}

	public function GetTitle()
	{
		return $this->title;
	}

    public function GetGroups()
    {
        return $this->groups;
    }

	/**
	 * @param $saml_attributes array
	 * @param $options array
	 * @param $key string
	 * @param $returnArray bool
	 * @return mixed
	 */
	private function GetAttributeValue($saml_attributes, $options, $key, $returnArray = false)
	{
		$attributeKeys = array_map('trim', explode(',', $options[$key]));
		foreach ($attributeKeys as $attributeKey)
		{
			if (array_key_exists($attributeKey, $saml_attributes))
			{
				if ($returnArray) {
					return $saml_attributes[$attributeKey];
				}
				return $saml_attributes[$attributeKey][0];
			}
		}
		if ($returnArray) {
			return array();
		}
		return '';
	}
}
=======
*/

/**
 * Saml user class
 */

class SamlUser {
    private $username;
    private $fname;
    private $lname;
    private $mail;
    private $phone;
    private $institution;
    private $title;

	/**
	 * @param associative array of SAML user attributes
         * @param associated array of configuration options
	 */
    public function __construct($saml_attributes = array(),$options = array()) {
        Log::Debug('Inside construct SamlUser');
        if (count($options)>0){
            Log::Debug('Inside construct SamlUser and count options is %d', count($options));
          if (array_key_exists("ssphp_username",$options)
               && array_key_exists($options["ssphp_username"],$saml_attributes))
            { $this->username =
                    $saml_attributes[$options["ssphp_username"]][0];
             Log::Debug('Value of username is %s', $this->GetUserName());
                    }

          if (array_key_exists("ssphp_firstname",$options)
              && array_key_exists($options["ssphp_firstname"],$saml_attributes))
            { $this->fname =
                    $saml_attributes[$options["ssphp_firstname"]][0];
            Log::Debug('Value of fname is %s', $this->GetFirstName());
                    }

          if (array_key_exists("ssphp_lastname",$options)
             && array_key_exists($options["ssphp_lastname"],$saml_attributes))
            { $this->lname =
                    $saml_attributes[$options["ssphp_lastname"]][0];
            Log::Debug('Value of lname is %s', $this->GetLastName());
                    }

          if (array_key_exists("ssphp_email",$options)
             && array_key_exists($options["ssphp_email"],$saml_attributes))
            { $this->mail =
                    $saml_attributes[$options["ssphp_email"]][0];}

          if (array_key_exists("ssphp_phone",$options)
             && array_key_exists($options["ssphp_phone"],$saml_attributes))
            { $this->phone =
                    $saml_attributes[$options["ssphp_phone"]][0];
            Log::Debug('Value of phone is %s', $this->GetPhone());
                    }

          if (array_key_exists("ssphp_organization",$options)
             && array_key_exists($options["ssphp_organization"],$saml_attributes))
            { $this->institution =
                    $saml_attributes[$options["ssphp_organization"]][0];
            Log::Debug('Value of institution is %s', $this->GetInstitution());
                    }

          if (array_key_exists("ssphp_position",$options)
             && array_key_exists($options["ssphp_position"],$saml_attributes))
            { $this->title =
                    $saml_attributes[$options["ssphp_position"]][0];
             Log::Debug('Value of title is %s', $this->GetTitle());
                    }

        }
    }

    public function GetUserName() {
        return $this->username;
    }
    public function GetFirstName() {
        return $this->fname;
    }

    public function GetLastName() {
        return $this->lname;
    }

    public function GetEmail() {
        return $this->mail;
    }

    public function GetPhone() {
        return $this->phone;
    }

    public function GetInstitution() {
        return $this->institution;
    }

    public function GetTitle() {
        return $this->title;
    }

}

?>
>>>>>>> old/master
