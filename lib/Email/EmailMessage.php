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

abstract class EmailMessage implements IEmailMessage
{
	/**
	 * @var SmartyPage
	 */
	private $email;
	/**
	 * @var string|null
	 */
	private $attachmentContents;
	/**
	 * @var string|null
	 */
	private $attachmentFileName;

	protected function __construct($languageCode = null)
	{
<<<<<<< HEAD
	    $this->email = new SmartyPage($resources);
=======
>>>>>>> old/master
		$resources = Resources::GetInstance();
		if (!empty($languageCode))
		{
			$resources->SetLanguage($languageCode);
<<<<<<< HEAD
			$this->Set('CurrentLanguage', $languageCode);
		}

		$this->Set('ScriptUrl', Configuration::Instance()->GetScriptUrl());
		$this->Set('Charset', $resources->Charset);
        $this->Set('AppTitle', (empty($appTitle) ? 'Booked' : $appTitle));
=======
		}
		$this->email = new SmartyPage($resources);
		$this->Set('ScriptUrl', Configuration::Instance()->GetScriptUrl());
		$this->Set('Charset', $resources->Charset);
>>>>>>> old/master
	}

	protected function Set($var, $value)
	{
		$this->email->assign($var, $value);
	}

<<<<<<< HEAD
	protected function FetchTemplate($templateName, $includeHeaders = true)
	{
		$header = $includeHeaders ? $this->email->fetch('Email/emailheader.tpl') : '';
		$body = $this->email->FetchLocalized($templateName);
		$footer = $includeHeaders ? $this->email->fetch('Email/emailfooter.tpl') : '';
=======
	protected function FetchTemplate($templateName)
	{
		$header = $this->email->fetch('Email/emailheader.tpl');
		$body = $this->email->FetchLocalized($templateName);
		$footer = $this->email->fetch('Email/emailfooter.tpl');
>>>>>>> old/master

		return $header . $body . $footer;
	}

	protected function Translate($key, $args = array())
	{
		if (!is_array($args))
		{
			$args = array($args);
		}
		return $this->email->SmartyTranslate(array('key' => $key, 'args' => implode(',', $args)), $this->email);
	}

	public function ReplyTo()
	{
		return $this->From();
	}

	public function From()
	{
<<<<<<< HEAD
		return new EmailAddress(Configuration::Instance()->GetAdminEmail(), Configuration::Instance()->GetKey(ConfigKeys::ADMIN_EMAIL_NAME));
=======
		return new EmailAddress(Configuration::Instance()->GetKey(ConfigKeys::ADMIN_EMAIL), Configuration::Instance()->GetKey(ConfigKeys::ADMIN_EMAIL_NAME));
>>>>>>> old/master
	}

	public function CC()
	{
		return array();
	}

	public function BCC()
	{
		return array();
	}

	public function Charset()
	{
		return $this->email->getTemplateVars('Charset');
	}

	public function AddStringAttachment($contents, $fileName)
	{
		$this->attachmentContents = $contents;
		$this->attachmentFileName = $fileName;
	}

	public function HasStringAttachment()
	{
		return !empty($this->attachmentContents);
	}

	public function AttachmentContents()
	{
		return $this->attachmentContents;
	}

	public function AttachmentFileName()
	{
		return $this->attachmentFileName;
	}

}

