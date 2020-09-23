<<<<<<< HEAD
{include file='globalheader.tpl' Select2=true Owl=true Timepicker=true}
=======
{include file='globalheader.tpl' Select2=true}

>>>>>>> old/master

<div class="page-search-availability">

    <form role="form" name="searchForm" id="searchForm" method="post"
          action="{$smarty.server.SCRIPT_NAME}?action=search">
<<<<<<< HEAD
        <div class="form-group col-xs-12 col-sm-2">
=======
        <div class="form-group col-xs-12 col-sm-3">
>>>>>>> old/master
            <div class="checkbox">
                <input type="checkbox" id="anyResource" checked="checked"/>
                <label for="anyResource">{translate key=AnyResource}</label>
            </div>
        </div>
<<<<<<< HEAD
        <div class="form-group col-xs-12 col-sm-10">
=======
        <div class="form-group col-xs-12 col-sm-9">
>>>>>>> old/master
            <label for="resourceGroups" class="no-show">{translate key=Resources}</label>
            <select id="resourceGroups" class="form-control" multiple="multiple" {formname key=RESOURCE_ID multi=true}
                    disabled="disabled">
                {foreach from=$Resources item=resource}
                    <option value="{$resource->GetId()}">{$resource->GetName()}</option>
                {/foreach}
            </select>
        </div>

        <div class="clearfix"></div>

<<<<<<< HEAD
        {*<div class="col-xs-12">*}
        <div class="form-group col-xs-6 col-sm-2">
            <div class="input-group">
                <label for="hours" class="no-show">{translate key=Hours}</label>
                <input type="number" min="0" step="1" value="0" class="form-control hours-minutes"
                       id="hours" {formname key=HOURS}" autofocus="autofocus" />
                <span class="input-group-addon hours-minutes">{translate key=Hours}</span>
            </div>
        </div>
        <div class="form-group col-xs-6 col-sm-2">
            <div class="input-group">
                <label for="minutes" class="no-show">{translate key=Minutes}</label>
                <input type="number" min="0" step="5" value="30" class="form-control hours-minutes"
=======
        <div class="form-group col-xs-12 col-sm-3">
            <div class="input-group margin-bottom-15">
                <input type="number" min="0" step="1" value="0" class="form-control hours-minutes"
                       id="hours" {formname key=HOURS}" />
                <span class="input-group-addon hours-minutes">{translate key=Hours}</span>
            </div>
            <div class="input-group">
                <input type="number" min="0" step="30" value="30" class="form-control hours-minutes"
>>>>>>> old/master
                       id="minutes" {formname key=MINUTES}"/>
                <span class="input-group-addon hours-minutes">{translate key=Minutes}</span>
            </div>
        </div>
<<<<<<< HEAD
        <div class="col-sm-1 hidden-xs">&nbsp;</div>
        <div class="form-group col-xs-12 col-sm-7">
            <input {formname key=BEGIN_TIME} type="text" id="startTime"
                                             class="form-control dateinput inline-block timepicker"
                                             value="{format_date format='h:00 A' date=now}"
                                             title="Start time" disabled="disabled"/>
            -
            <input {formname key=END_TIME} type="text" id="endTime"
                                           class="form-control dateinput inline-block timepicker"
                                           value="{format_date format='h:00 A' date=Date::Now()->AddHours(1)}"
                                           title="End time" disabled="disabled"/>
            <div class="checkbox inline">
                <input type="checkbox" id="specificTime" {formname key=SPECIFIC_TIME} />
                <label for="specificTime">{translate key=SpecificTime}</label>
            </div>
        </div>
        {*</div>*}

        <div class="form-group col-xs-12 col-sm-5">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" id="today" checked="checked"
                           value="today" {formname key=AVAILABILITY_RANGE} />
                    <span class="hidden-xs">{translate key=Today}</span>
=======

        <div class="form-group col-xs-12 col-sm-9">
            <div class="btn-group margin-bottom-15" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" id="today" checked="checked"
                           value="today" {formname key=AVAILABILITY_RANGE} />
                    <span class="hidden-xs">{translate key=Today},</span>
>>>>>>> old/master
                    <span> {format_date date=$Today key=calendar_dates}</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="tomorrow" value="tomorrow" {formname key=AVAILABILITY_RANGE} />
<<<<<<< HEAD
                    <span class="hidden-xs">{translate key=Tomorrow}</span>
=======
                    <span class="hidden-xs">{translate key=Tomorrow},</span>
>>>>>>> old/master
                    <span> {format_date date=$Tomorrow key=calendar_dates}</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="thisweek" value="thisweek" {formname key=AVAILABILITY_RANGE} />
                    <span class="hidden-xs">{translate key=ThisWeek}</span>
                    <span class="visible-xs">{translate key=Week}</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="daterange" value="daterange" {formname key=AVAILABILITY_RANGE} />
                    <i class="fa fa-calendar"></i><span class="hidden-xs"> {translate key=DateRange}</span>
                </label>
            </div>
<<<<<<< HEAD
        </div>
        <div class="form-group col-xs-12 col-sm-7">
            <label for="beginDate" class="no-show">{translate key=BeginDate}</label>
            <input type="text" id="beginDate" class="form-control inline dateinput"
                   placeholder="{translate key=BeginDate}" disabled="disabled"/>
            <input type="hidden" id="formattedBeginDate" {formname key=BEGIN_DATE} />
            -
            <label for="endDate" class="no-show">{translate key=EndDate}</label>
            <input type="text" id="endDate" class="form-control inline dateinput"
                   placeholder="{translate key=EndDate}" disabled="disabled"/>
            <input type="hidden" id="formattedEndDate" {formname key=END_DATE} />
        </div>
        <div class="clearfix"></div>

        <div class="form-group col-xs-12">
            {control type="RecurrenceControl"}
        </div>

        <div class="form-group col-xs-12">
            <a href="#" data-toggle="collapse" data-target="#advancedSearchOptions">{translate key=MoreOptions}</a>
=======
            <div class="">
                <input type="text" id="beginDate" class="form-control inline dateinput"
                       placeholder="{translate key=BeginDate}" disabled="disabled"/>
                <input type="hidden" id="formattedBeginDate" {formname key=BEGIN_DATE} />
                -
                <input type="text" id="endDate" class="form-control inline dateinput"
                       placeholder="{translate key=EndDate}" disabled="disabled"/>
                <input type="hidden" id="formattedEndDate" {formname key=END_DATE} />
                <a href="#" data-toggle="collapse" data-target="#advancedSearchOptions">{translate key=MoreOptions}</a>
            </div>
            <div class="clearfix"></div>

>>>>>>> old/master
        </div>

        <div class="clearfix"></div>

        <div class="collapse" id="advancedSearchOptions">
            <div class="form-group col-xs-6">
                <label for="maxCapacity" class="hidden">{translate key=MinimumCapacity}</label>
                <input type='number' id='maxCapacity' min='0' size='5' maxlength='5'
                       class="form-control input-sm" {formname key=MAX_PARTICIPANTS}
                       value="{$MaxParticipantsFilter}" placeholder="{translate key=MinimumCapacity}"/>

            </div>
            <div class="form-group col-xs-6">
                <label for="resourceType" class="hidden">{translate key=ResourceType}</label>
                <select id="resourceType" {formname key=RESOURCE_TYPE_ID} {formname key=RESOURCE_TYPE_ID}
                        class="form-control input-sm">
                    <option value="">- {translate key=ResourceType} -</option>
                    {object_html_options options=$ResourceTypes label='Name' key='Id' selected=$ResourceTypeIdFilter}
                </select>
            </div>

            <div>
                {foreach from=$ResourceAttributes item=attribute}
                    {control type="AttributeControl" attribute=$attribute align='vertical' searchmode=true namePrefix='r' class="col-sm-6 col-xs-12" inputClass="input-sm"}
                {/foreach}
                {if $ResourceAttributes|count%2 != 0}
                    <div class="col-sm-6 hidden-xs">&nbsp;</div>
                {/if}
            </div>

            <div>
                {foreach from=$ResourceTypeAttributes item=attribute}
                    {control type="AttributeControl" attribute=$attribute align='vertical' searchmode=true namePrefix='rt' class="col-sm-6 col-xs-12" inputClass="input-sm"}
                {/foreach}
                {if $ResourceTypeAttributes|count%2 != 0}
                    <div class="col-sm-6 hidden-xs">&nbsp;</div>
                {/if}
            </div>
        </div>

        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-success col-xs-12"
                    value="submit" {formname key=SUBMIT}>{translate key=FindATime}</button>
            {indicator}
        </div>
    </form>

    <div class="clearfix"></div>
    <div id="availability-results"></div>


    {csrf_token}

<<<<<<< HEAD
    {include file="javascript-includes.tpl" Select2=true Owl=true Timepicker=true}
=======

>>>>>>> old/master
    {jsfile src="js/tree.jquery.js"}
    {jsfile src="js/jquery.cookie.js"}
    {jsfile src="ajax-helpers.js"}
    {jsfile src="availability-search.js"}
    {jsfile src="resourcePopup.js"}
<<<<<<< HEAD
    {jsfile src="date-helper.js"}
    {jsfile src="recurrence.js"}

    {control type="DatePickerSetupControl" ControlId="beginDate" AltId="formattedBeginDate" DefaultDate=$StartDate}
    {control type="DatePickerSetupControl" ControlId="endDate" AltId="formattedEndDate" DefaultDate=$StartDate}
    {control type="DatePickerSetupControl" ControlId="EndRepeat" AltId="formattedEndRepeat" DefaultDate=$StartDate}
    {control type="DatePickerSetupControl" ControlId="RepeatDate" AltId="formattedRepeatDate"}
=======

    {control type="DatePickerSetupControl" ControlId="beginDate" AltId="formattedBeginDate" DefaultDate=$StartDate}
    {control type="DatePickerSetupControl" ControlId="endDate" AltId="formattedEndDate" DefaultDate=$StartDate}
>>>>>>> old/master

    <script type="text/javascript">

        $(document).ready(function () {
<<<<<<< HEAD

            var recurOpts = {
                repeatType: '',
                repeatInterval: '',
                repeatMonthlyType: '',
                repeatWeekdays: []
            };

            var recurrence = new Recurrence(recurOpts);
            recurrence.init();

=======
>>>>>>> old/master
            var opts = {
                reservationUrlTemplate: "{$Path}{Pages::RESERVATION}?{QueryStringKeys::RESOURCE_ID}=[rid]&{QueryStringKeys::START_DATE}=[sd]&{QueryStringKeys::END_DATE}=[ed]"
            };
            var search = new AvailabilitySearch(opts);
            search.init();

            $('#resourceGroups').select2({
                placeholder: '{translate key=Resources}'
            });
<<<<<<< HEAD

            $('.timepicker').timepicker({
                timeFormat: '{$TimeFormat}'
            });
=======
>>>>>>> old/master
        });


    </script>

</div>

{include file='globalfooter.tpl'}
