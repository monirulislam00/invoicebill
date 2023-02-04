/* -------------------------------------------------------------------------- */
/*                            invoice bill  from handler                           */
/* -------------------------------------------------------------------------- */

/* ------------------------------- get values from user------------------------------- */
seller_name = $("#seller_name");
buyer_name = $("#buyer_name");
supplier_name = $("#supplier_name");
factory = $("#factory_name");
trademark = $("#trademark");
date = $("#date");
delivery_location = $("#delivery_location");
types = $("#types");
pieces = $("#pieces");

/* ------------------------------- show values(customer recipe) ------------------------------ */
seller_value = $("#seller_name_value");
buyer_value = $("#buyer_name_value");
supplier_value = $("#supplier_value");
factory_value = $("#factory_value");
trademark_value = $("#trademark_value");
date_value = $("#date_value");
delivery_location_value = $("#delivery_location_value");
types_value = $("#types_value");
pieces_value = $("#pieces_value");

dataArray = {
    seller: {
        input: seller_name,
        output: seller_value,
    },
    buyer: {
        input: buyer_name,
        output: buyer_value,
    },
    supplier: {
        input: supplier_name,
        output: supplier_value,
    },
    factory: {
        input: factory,
        output: factory_value,
    },
    trademark: {
        input: trademark,
        output: trademark_value,
    },

    delivery: {
        input: delivery_location,
        output: delivery_location_value,
    },
    types: {
        input: types,
        output: types_value,
    },
    pieces: {
        input: pieces,
        output: pieces_value,
    },
    date: {
        input: date,
        output: date_value,
    },
};

$.each(dataArray, function (index, data) {
    if (data.input.val() != null) {
        data.output.text(data.input.val());
    }
    $(data.input).on("keyup", function () {
        data.output.text(data.input.val());
    });
});

if (dataArray.date.input.val() != null) {
    dataArray.date.output.text(dataArray.date.input.val());
}
$(dataArray.date.input).on("change", function () {
    dataArray.date.output.text(dataArray.date.input.val());
});
