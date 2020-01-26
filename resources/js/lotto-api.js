$(document).ready(function () {
    $.getJSON('https://lotto.api.rayriffy.com/latest', function (data) {
        $("#first-t").html(data.response.prizes[0].name);
        $("#first-r").html(data.response.prizes[0].reward);
        $("#first-n").html(data.response.prizes[0].number[0]);


        $("#f-prefix-t").html(data.response.runningNumbers[0].name);
        $("#f-prefix-r").html(data.response.runningNumbers[0].reward);
        $("#f-prefix-n").html(data.response.runningNumbers[0].number[0]);

        $("#s-prefix-n").html(data.response.runningNumbers[0].number[1]);


        $("#f-suffix-t").html(data.response.runningNumbers[1].name);
        $("#f-suffix-r").html(data.response.runningNumbers[1].reward);
        $("#f-suffix-n").html(data.response.runningNumbers[1].number[0]);

        $("#s-suffix-n").html(data.response.runningNumbers[1].number[1]);

        $("#t-suffix-t").html(data.response.runningNumbers[2].name);
        $("#t-suffix-r").html(data.response.runningNumbers[2].reward);
        $("#t-suffix-n").html(data.response.runningNumbers[2].number[0]);

    });
});
