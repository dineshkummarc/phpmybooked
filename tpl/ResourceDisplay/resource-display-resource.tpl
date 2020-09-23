<<<<<<< HEAD
{function name=displayReservation}
    <div class="resource-display-reservation">
        {format_date date=$reservation->StartDate() key=res_popup_time timezone=$Timezone}
        - {format_date date=$reservation->EndDate() key=res_popup_time timezone=$Timezone}
        | {$reservation->GetUserName()}
        <div class="title">{$reservation->GetTitle()|default:$NoTitle}</div>
    </div>
{/function}

<div id="resource-display" class="resource-display">
    <div class="col-xs-7 left-panel">
        <div class="resource-display-name">{$ResourceName}</div>

        <div class="resource-display-current">
            {if $AvailableNow}
                <div class="resource-display-available">{translate key=Available}</div>
            {else}
                <div class="resource-display-unavailable">{translate key=Unavailable}</div>
            {/if}

            {if $CurrentReservation != null}
                {call name=displayReservation reservation=$CurrentReservation}
            {/if}
        </div>

        <div class="left-panel-bottom">
            <div class="resource-display-heading">{translate key=NextReservation}</div>
            {if $NextReservation != null}
                {call name=displayReservation reservation=$NextReservation}
            {else}
                <div class="resource-display-reservation">{translate key=None}</div>
            {/if}

            {if $RequiresCheckin}
                <form role="form" method="post" id="formCheckin" action="{$smarty.server.SCRIPT_NAME}?action=checkin"
                      class="inline-block">
                    <input type="hidden" {formname key=REFERENCE_NUMBER} value="{$CheckinReferenceNumber}"/>
                    <div class="resource-display-action" id="checkin"><i
                                class="fa fa-check"></i> {translate key=CheckIn}</div>
                </form>
            {/if}
            <div class="resource-display-action" id="reservePopup"><i class="fa fa-plus"></i> {translate key=Reserve}
            </div>
        </div>
    </div>
    <div class="col-xs-5 right-panel">
        <div class="time">{formatdate date=$Now key=period_time timezone=$Timezone}</div>
        <div class="date">{formatdate date=$Now key=schedule_daily timezone=$Timezone}</div>
        <div class="upcoming-reservations">
            <div class="resource-display-heading">{translate key=UpcomingReservations}</div>
            {if $UpcomingReservations|count > 0}
                {foreach from=$UpcomingReservations item=r name=upcoming}
                    <div class="resource-display-upcoming">
                        {call name=displayReservation reservation=$r}
                    </div>
                    {if !$smarty.foreach.upcoming.last}
                        <hr class="upcoming-separator"/>
                    {/if}
                {/foreach}
            {else}
                <div class="resource-display-none">{translate key=None}</div>
            {/if}
        </div>
    </div>

    <div id="reservation-box-wrapper">
    </div>
    <div id="reservation-box">
        <form role="form" method="post" id="formReserve" action="{$smarty.server.SCRIPT_NAME}?action=reserve">
            <div class="row margin-top-25">
                <div class="col-xs-12">
                    <div id="validationErrors" class="validationSummary alert alert-danger no-show">
                        <ul>
                        </ul>
                    </div>
                    <div>
                        <table class="reservations">
                            <thead>
                            <tr>
                                {foreach from=$DailyLayout->GetPeriods($Today, true) item=period}
                                    <td class="reslabel" colspan="{$period->Span()}">{$period->Label($Today)}</td>
                                {/foreach}
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                {assign var=slots value=$DailyLayout->GetLayout($Today, $ResourceId)}
                                {foreach from=$slots item=slot}
                                    {assign var="referenceNumber" value=""}
                                    {if $slot->IsReserved()}
                                        {assign var="class" value="reserved"}
                                        {assign var="referenceNumber" value=$slot->Reservation()->ReferenceNumber}
                                    {elseif $slot->IsReservable()}
                                        {assign var="class" value="reservable"}
                                        {if $slot->IsPastDate(Date::Now())}
                                            {assign var="class" value="pasttime"}
                                        {/if}
                                    {else}
                                        {assign var="class" value="unreservable"}
                                    {/if}
                                    {if $slot->HasCustomColor()}
                                        {assign var=color value='style="background-color:'|cat:$slot->Color()|cat:';color:'|cat:$slot->TextColor()|cat:';"'}
                                    {/if}
                                    <td colspan="{$slot->PeriodSpan()}" {$color} data-begin="{$slot->Begin()}"
                                        data-end="{$slot->End()}"
                                        class="slot {$class}"
                                        data-refnum="{$referenceNumber}">{$slot->Label($SlotLabelFactory)|escape|default:'&nbsp;'}</td>
                                {/foreach}
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="email-addon"><span
                                    class="glyphicon glyphicon-envelope"></span></span>
                        <label for="emailAddress" class="hidden">{translate key=Email}</label>
                        <input id="emailAddress" type="email" class="form-control"
                               placeholder="{translate key=Email}"
                               aria-describedby="email-addon" required="required" {formname key=EMAIL} />
                    </div>
                </div>
            </div>
            <div class="row margin-top-25">
                <div class="col-xs-6">
                    <div class="input-group input-group-lg has-feedback">
                            <span class="input-group-addon" id="starttime-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        <select title="Begin" class="form-control" aria-describedby="starttime-addon"
=======
{*
Copyright 2016 Nick Korbel

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

<div class="col-xs-6 resource-display-name">{$ResourceName}</div>
<div class="col-xs-6 resource-display-date">{formatdate date=$Today key=schedule_daily}</div>

{assign var=AvailableNow value=true}
{assign var=NextAvailable value=false}
{assign var=AutoReleaseMinutes value=null}
{assign var=CheckInRequired value=false}
<div class="col-xs-12">
    <table class="reservations">
        <thead>
        <tr>
            {foreach from=$DailyLayout->GetPeriods($Today, true) item=period}
                <td class="reslabel" colspan="{$period->Span()}">{$period->Label($Today)}</td>
            {/foreach}
        </tr>
        </thead>
        <tbody>
        <tr>
            {assign var=slots value=$DailyLayout->GetLayout($Today, $ResourceId)}
            {foreach from=$slots item=slot}
                {assign var="referenceNumber" value=""}
                {if $slot->IsReserved()}
                    {if $slot->CollidesWith($Today)}
                        {assign var=AvailableNow value=false}
                    {/if}
                    {assign var="class" value="reserved"}
                    {assign var="referenceNumber" value=$slot->Reservation()->ReferenceNumber}
                {elseif $slot->IsReservable()}
                    {if $NextAvailable == false && !$slot->IsPastDate($Today)}
                        {assign var=NextAvailable value=$slot->BeginDate()}
                    {/if}
                    {assign var="class" value="reservable"}
                    {if $slot->IsPastDate(Date::Now())}
                        {assign var="class" value="pasttime"}
                    {/if}
                {else}
                    {if $slot->CollidesWith($Today)}
                        {assign var=AvailableNow value=false}
                    {/if}
                    {assign var="class" value="unreservable"}
                {/if}
                {if $slot->HasCustomColor()}
                    {assign var=color value='style="background-color:'|cat:$slot->Color()|cat:';color:'|cat:$slot->TextColor()|cat:';"'}
                {/if}
                {if $slot->AutoReleaseMinutes() != 0}
                    {assign var=AutoReleaseMinutes value=$slot->AutoReleaseMinutesRemaining()}
                {/if}
                {if $slot->RequiresCheckin()}
                    {assign var=CheckInRequired value=true}
                {/if}
                <td colspan="{$slot->PeriodSpan()}" $color
                    class="slot {$class}" data-refnum="{$referenceNumber}"
                    data-checkin="{$CheckInRequired}">{$slot->Label($SlotLabelFactory)|escape|default:'&nbsp;'}</td>
            {/foreach}
        </tr>
        </tbody>
    </table>
</div>

{if $NextAvailable != false}
    <div id="process-reservation">
        <form role="form" method="post" id="formReserve" action="{$smarty.server.SCRIPT_NAME}?action=reserve">
            <div class="col-xs-12 margin-top-25">
                <div class="clearfix"></div>
                <div id="validationErrors" class="validationSummary alert alert-danger no-show">
                    <ul>
                        {validator id="emailformat" key="ValidEmailRequired"}
                    </ul>
                </div>

                <div id="reserveResults" class="no-show">
                </div>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="email-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input id="emailAddress" type="email" class="form-control" placeholder="{translate key=Email}"
                           aria-describedby="email-addon" required="required" {formname key=EMAIL}>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="margin-top-25">
                <div class="col-xs-6">
                    <div class="input-group input-group-lg has-feedback">
				<span class="input-group-addon" id="starttime-addon"><span
                            class="glyphicon glyphicon-time"></span></span>
                        <select class="form-control" aria-describedby="starttime-addon"
>>>>>>> old/master
                                id="beginPeriod" {formname key=BEGIN_PERIOD}>
                            {foreach from=$slots item=slot}
                                {if $slot->IsReservable() && !$slot->IsPastDate($Today)}
                                    <option value="{$slot->Begin()}">{$slot->Begin()->Format($TimeFormat)}</option>
                                {/if}
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="input-group input-group-lg">
<<<<<<< HEAD
				            <span class="input-group-addon" id="endtime-addon"><span
                                        class="glyphicon glyphicon-time"></span></span>
                        <select title="End" class="form-control input-lg" aria-describedby="endtime-addon"
=======
				<span class="input-group-addon" id="endtime-addon"><span
                            class="glyphicon glyphicon-time"></span></span>
                        <select class="form-control input-lg" aria-describedby="endtime-addon"
>>>>>>> old/master
                                id="endPeriod" {formname key=END_PERIOD}>
                            {foreach from=$slots item=slot}
                                {if $slot->IsReservable() && !$slot->IsPastDate($Today)}
                                    <option value="{$slot->End()}">{$slot->End()->Format($TimeFormat)}</option>
                                {/if}
                            {/foreach}
                        </select>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
            {if $Terms != null}
            <div class="row col-xs-12" id="termsAndConditions">
                <div class="checkbox">
                    <input type="checkbox"
                           id="termsAndConditionsAcknowledgement" {formname key=TOS_ACKNOWLEDGEMENT} {if $TermsAccepted}checked="checked"{/if}/>
                    <label for="termsAndConditionsAcknowledgement">{translate key=IAccept}</label>
                    <a href="{$Terms->DisplayUrl()}" style="vertical-align: middle"
                       target="_blank">{translate key=TheTermsOfService}</a>
                </div>
            </div>
            {/if}

            {if $Attributes|count > 0}
            <div class="row margin-top-25">
=======
            {if $Attributes|count > 0}
>>>>>>> old/master
                <div class="customAttributes col-xs-12">
                    {foreach from=$Attributes item=attribute name=attributeEach}
                        {if $smarty.foreach.attributeEach.index % 2 == 0}
                            <div class="row">
                        {/if}
                        <div class="customAttribute col-xs-6">
                            {control type="AttributeControl" attribute=$attribute}
                        </div>
                        {if $smarty.foreach.attributeEach.index % 2 ==1}
                            </div>
                        {/if}
                    {/foreach}
                    {if $Attributes|count % 2 == 1}
                        <div class="col-xs-6">&nbsp;</div>
<<<<<<< HEAD
                    {/if}
                </div>
            </div>
            {/if}

            <div class="row margin-top-25">
                <div class="col-xs-12 text-center">
                    <input type="submit" class="action-reserve col-xs-12" value="Reserve"/>
                    <a href="#" class="action-cancel" id="reserveCancel">{translate key=Cancel}</a>
                </div>
            </div>

=======
                        </div>
                    {/if}
                </div>
            {/if}

>>>>>>> old/master
            <input type="hidden" {formname key=RESOURCE_ID} value="{$ResourceId}"/>
            <input type="hidden" {formname key=SCHEDULE_ID} value="{$ScheduleId}"/>
            <input type="hidden" {formname key=TIMEZONE} value="{$Timezone}"/>
        </form>
    </div>
<<<<<<< HEAD

</div>
=======
{/if}

{if $AvailableNow}
<div class="col-xs-12">
    <div class="resource-display-available reservePrompt"
         data-next-time="{formatdate date=$NextAvailable key=url_full}">
        {translate key=Available} - {translate key=Reserve}
    </div>
</div>
{else}
{if $CheckInRequired}
<div class="col-xs-6">
    {else}
    <div class="col-xs-12">
        {/if}
        {if $NextAvailable != false}
        <div class="resource-display-unavailable reservePrompt"
             data-next-time="{formatdate date=$NextAvailable key=url_full}">
            {else}
            <div class="resource-display-unavailable">
                {/if}
                {translate key=UnavailableNow}{if $NextAvailable != false} - {translate key=ReserveLater}{/if}
            </div>
        </div>

        {if $CheckInRequired}
            <div class="col-xs-6">
                <form role="form" method="post" id="formCheckin"
                      action="ajax/reservation_checkin.php?action={ReservationAction::Checkin}">
                    {csrf_token}
                    <input type="hidden" {formname key=REFERENCE_NUMBER} id="referenceNumber"/>
                    <button type="submit" class="col-xs-12 resource-display-checkin">{translate key=CheckIn}
                        {if !empty($AutoReleaseMinutes)}
                            <span> - {$AutoReleaseMinutes} {translate key=minutes}</span>
                        {/if}
                    </button>
                </form>
            </div>
        {/if}
        {/if}
>>>>>>> old/master
