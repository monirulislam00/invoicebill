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
    /* --------------------- showing information at bottom --------------------- */
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

/* -------------------------------------------------------------------------- */
/*                              amounts gathering                             */
/* -------------------------------------------------------------------------- */

let amount1 = $("#product-1");
let unit1 = $("#unit-1");
let productUnit1 = $("#product-unit-1");
let amount2 = $("#product-2");
let unit2 = $("#unit-2");
let productUnit2 = $("#product-unit-2");
let amount3 = $("#product-3");
let unit3 = $("#unit-3");
let productUnit3 = $("#product-unit-3");
let amount4 = $("#product-4");
let unit4 = $("#unit-4");
let productUnit4 = $("#product-unit-4");
const totalPrice = $("#total_price");
const amountArray = {
    product1: { amount: amount1, unit: unit1 },
    product2: { amount: amount2, unit: unit2 },
    product3: { amount: amount3, unit: unit3 },
    product4: { amount: amount4, unit: unit4 },
};

// $.each(amountArray, function (index, data) {
$(".product").on("keyup", function () {
    productUnit1.val(
        amountArray.product1.amount.val() * amountArray.product1.unit.val()
    );
    productUnit2.val(
        amountArray.product2.amount.val() * amountArray.product2.unit.val()
    );
    productUnit3.val(
        amountArray.product3.amount.val() * amountArray.product3.unit.val()
    );
    productUnit4.val(
        amountArray.product4.amount.val() * amountArray.product4.unit.val()
    );
    totalPrice.text(
        parseInt(productUnit1.val()) +
            parseInt(productUnit2.val()) +
            parseInt(productUnit3.val()) +
            parseInt(productUnit4.val())
    );
    $("#totalPriceInput").val(
        parseInt(productUnit1.val()) +
            parseInt(productUnit2.val()) +
            parseInt(productUnit3.val()) +
            parseInt(productUnit4.val())
    );
});
// });
