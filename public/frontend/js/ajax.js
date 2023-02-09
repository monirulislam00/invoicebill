$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#create-invoice").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "/api/create-invoice",
            method: "POST",
            data: new FormData(this),
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (response, data) {
                console.log(response);
                console.log(data);
                alert("created new user");
            },
            error: function (request, error) {
                console.log(error);
                console.log(request);
            },
        });
    });
});
