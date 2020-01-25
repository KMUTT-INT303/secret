$(document).ready(function () {
        $.getJSON('https://lotto.api.rayriffy.com/latest', function (data) {
            console.log(data);
            $("#firstReward").html(data.response.prizes[0].number[0]);
        });
});
