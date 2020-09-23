{*
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*}

<<<<<<< HEAD

Administrátorom boli zmazané tieto rezervácie:
<br/>
<br/>

Nadpis: {$Title}<br/>
Popis: {$Description|nl2br}<br/><br/>
{$DeleteReason|nl2br}<br/>

Začiatok: {formatdate date=$StartDate key=reservation_email}<br/>
Koniec: {formatdate date=$EndDate key=reservation_email}<br/>
{if $ResourceNames|count > 1}
    Ihriská:
    <br/>
    {foreach from=$ResourceNames item=resourceName}
        {$resourceName}
        <br/>
    {/foreach}
{else}
    Ihrisko: {$ResourceName}
    <br/>
{/if}

{if count($RepeatDates) gt 0}
    <br/>
    Došlo k zmazaniu všetkých týchto rezervovaných termínov:
    <br/>
{/if}

{foreach from=$RepeatDates item=date name=dates}
    {formatdate date=$date}
    <br/>
{/foreach}

{if $Accessories|count > 0}
    <br/>
    Príslušenstvo:
    <br/>
    {foreach from=$Accessories item=accessory}
        ({$accessory->QuantityReserved}) {$accessory->Name}
        <br/>
    {/foreach}
{/if}
<a href="{$ScriptUrl}">Prihlásiť sa do rezervačného systému</a>
=======
	
	Administrátorom boli zmazané tieto rezervácie:
	<br/>
	<br/>
	
	Nadpis: {$Title}<br/>
	Popis: {$Description|nl2br}<br/><br/>
	Začiatok: {formatdate date=$StartDate key=reservation_email}<br/>
	Koniec: {formatdate date=$EndDate key=reservation_email}<br/>
	{if $ResourceNames|count > 1}
	Ihriská:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
    Ihrisko: {$ResourceName}<br/>
	{/if}
	
	{if count($RepeatDates) gt 0}
		<br/>
		Došlo k zmazaniu všetkých týchto rezervovaných termínov:
		<br/>
	{/if}
	
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	{if $Accessories|count > 0}
		<br/>Príslušenstvo:<br/>
		{foreach from=$Accessories item=accessory}
			({$accessory->QuantityReserved}) {$accessory->Name}<br/>
		{/foreach}
	{/if}
	<a href="{$ScriptUrl}">Prihlásiť sa do rezervačného systému</a>
>>>>>>> old/master
	
