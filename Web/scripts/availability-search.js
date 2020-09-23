function AvailabilitySearch(options) {
    var elements = {
        searchForm: $('#searchForm'),
        availabilityResults: $('#availability-results'),
        anyResource: $('#anyResource'),
        resourceGroups: $('#resourceGroups'),
        // today: $('#today'),
        // tomorrow: $('#tomorrow'),
        // thisweek: $('#thisweek'),
        daterange: $('input[name="AVAILABILITY_RANGE"]'),
        beginDate: $('#beginDate'),
<<<<<<< HEAD
        endDate: $('#endDate'),
        specificTime: $('#specificTime'),
        hours: $('#hours'),
        minutes: $('#minutes'),
        beginTime: $('#startTime'),
        endTime: $('#endTime'),
=======
        endDate: $('#endDate')
>>>>>>> old/master
    };

    var init = function () {
        ConfigureAsyncForm(elements.searchForm, function () {
<<<<<<< HEAD
            elements.availabilityResults.empty();
=======
            elements.availabilityResults.empty()
>>>>>>> old/master
        }, showSearchResults);

        elements.availabilityResults.on('click', '.opening', function (e) {
            var opening = $(this);
            window.location = options.reservationUrlTemplate
                .replace('[rid]', encodeURIComponent(opening.data('resourceid')))
                .replace('[sd]', encodeURIComponent(opening.data('startdate')))
                .replace('[ed]', encodeURIComponent(opening.data('enddate')));
        });

        elements.anyResource.click(function (e) {
            if (elements.anyResource.is(':checked')) {
                elements.resourceGroups.val('').change();
                elements.resourceGroups.attr('disabled', 'disabled');
            }
            else {
                elements.resourceGroups.removeAttr('disabled');
            }
        });

<<<<<<< HEAD
        elements.daterange.change(function (e) {
=======
        elements.daterange.change(function(e){
>>>>>>> old/master
            if ($(e.target).val() == 'daterange') {
                elements.beginDate.removeAttr('disabled');
                elements.endDate.removeAttr('disabled');
            }
            else {
                elements.beginDate.val('').attr('disabled', 'disabled');
                elements.endDate.val('').attr('disabled', 'disabled');
<<<<<<< HEAD
            }
        });

        elements.specificTime.on('click', function(e) {
            if (elements.specificTime.is(':checked'))
            {
                elements.beginTime.removeAttr('disabled');
                elements.endTime.removeAttr('disabled');
                elements.hours.attr('disabled', 'disabled');
                elements.minutes.attr('disabled', 'disabled');
            }
            else {
                elements.hours.removeAttr('disabled');
                elements.minutes.removeAttr('disabled');
                elements.beginTime.attr('disabled', 'disabled');
                elements.endTime.attr('disabled', 'disabled');
            }
        });
=======
        }
        })
>>>>>>> old/master
    };

    var showSearchResults = function (data) {
        elements.availabilityResults.empty().html(data);
        elements.availabilityResults.find('.resourceName').each(function () {
            var resourceId = $(this).attr("data-resourceId");
            $(this).bindResourceDetails(resourceId, {position: 'left top'});
        });
    };

    return {init: init};
}