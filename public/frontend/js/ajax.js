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
                console.log(data, ":", response);
                $(".invoice-number").text(response.data.invoice_num);
                $(".invoice-number-input").val(response.data.invoice_num);
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
    $("#reload-form").on("click", function () {
        $("#create-invoice")[0].reset();
        $("#qrcode1").html(
            `"<img src="${"https://chart.googleapis.com/chart?choe=ISO-8859-1&&chld=L|0&cht=qr&chs=150x150&chl=cleared"}" class="img-responsive">"`
        );
        $("#qrcode2").html(
            `"<img src="${"https://chart.googleapis.com/chart?choe=ISO-8859-1&&chld=L|0&cht=qr&chs=150x150&chl=cleared"}" class="img-responsive">"`
        );
        console.log("cleared");
    });
});
