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
                console.log(data, ":", response.responseCode);
                if (response.responseCode == 200) {
                    $.toast({
                        heading: "Success",
                        text: "created new invoice",
                        showHideTransition: "slide",
                        icon: "success",
                    });
                    $("#watch-pdf").attr(
                        "href",
                        `/pdf/view/${response.data.id}`
                    );
                } else if (response.responseCode == 400) {
                    $.each(response.data, function (index, warning) {
                        console.log(warning);
                        $.toast({
                            heading: "Warning",
                            text: warning,
                            icon: "warning",
                        });
                    });
                } else if (response.responseCode === 500) {
                    $.toast({
                        heading: "Error",
                        text: "Internal Server Error",
                        icon: "error",
                    });
                }
            },
            error: function (request, error) {
                console.log(error);
                console.log(request);
            },
        });
    });
});
