$(function() {
    "use strict";

    var today = moment();
    var andTwoHours = moment().add(2, "hours");

    var today_friendly = "/Date(" + today.valueOf() + ")/";
    var next_friendly = "/Date(" + andTwoHours.valueOf() + ")/";

    $(".gantt").gantt({
        source: [{
            name: "Testing",
            desc: " ",
            values: [{
                from: today_friendly,
                to: next_friendly,
                label: "Test",
                customClass: "ganttRed"
            }]
        }],
        scale: "hours",
        minScale: "hours",
        navigate: "scroll"
    });
});
