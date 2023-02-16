<div class="table-responsive ">
    <form action="/api/create-invoice" method="post" id="create-invoice">
        @csrf
        <table class="border-collapse lg:table-fixed md:table-auto border border-slate-400 w-full border-1">
            <thead>
                <tr class="border border-slate-300 text-center">
                    <th colspan="11" class="border border-slate-300">
                        <h1 class="font-bold heading" style="font-size: 30px"><span class="text-red-500 ">SIM</span>RAK
                            ENTERPRISE
                        </h1>
                        <h2 class="heading" style="font-size: 20px">SUPPLING QUALITY PRODUCTS</h2>
                        <h4 class="heading" style="font-size: 18px">CONTACT: 01866-519376</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <th class="border border-slate-300" colspan="2">BUYER NAME</th>
                    <td colspan="6" class="text-center p-0 b-0 border border-slate-300">
                        <input type="text" class="  w-full border-1" name="buyer_name" id="buyer_name">
                    </td>
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"></td>
                </tr>
                <tr>
                    <th class="border border-slate-300" colspan="2" class="border border-slate-300">SELLER NAME</th>
                    <td colspan="6" class="text-center p-0 b-0 border border-slate-300">
                        <input type="text" class="w-full border-1" name="seller_name" id="seller_name">
                    </td>
                    <td class="border border-slate-300" colspan=""></td>
                    <td class="border border-slate-300" colspan=""></td>
                    <td class="border border-slate-300" colspan=""></td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border border-slate-300" colspan="2">SUPPLIER</th>
                    <td colspan="6" class="text-center p-0 b-0 border border-slate-300">
                        <input type="text" class="w-full border-1" name="supplier_name" id="supplier_name">
                    </td>
                    <td class="border border-slate-300" colspan="3" rowspan="6" style="min-width: 115px">
                        <div id="qrcode1" class="flex justify-center qrcode">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=please generate qr code:"
                                class="img-responsive">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border border-slate-300" colspan="2">FACTORY</th>
                    <td colspan="6" class="text-center p-0 b-0 border border-slate-300">
                        <input type="text" class="w-full border-1" name="factory_name" id="factory_name">
                    </td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border border-slate-300" colspan="2">TRADEMARK</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="w-full border-1" name="trademark" id="trademark">
                    </td>
                </tr>
                <tr>
                    <th class="border border-slate-300" colspan="2">DATE</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="date" class="w-full border-1" name="date" id="date">
                    </td>
                </tr>
                <tr>
                    <th class="border border-slate-300" colspan="2">LOCATION</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="w-full border-1" name="delivery_location" id="delivery_location">
                    </td>
                </tr>
                <tr>
                    <th class="border border-slate-300" colspan="2">TYPE</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="w-full border-1" name="types" id="types">
                    </td>
                </tr>
                <tr>
                    <th class="border border-slate-300" colspan="2">PIECES</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="w-full border-1" name="pieces" id="pieces">
                    </td>
                    <td class="text-green-400 font-bolder p-0 b-0" colspan="3">
                        <input type="text" class="w-full border-1 invoice-number-input" name="invoiceNumber">
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom: 2px solid red" colspan="11"></td>
                </tr>
            <tbody class="border-red" style="border-top: dashed red">
                <tr>
                    <td class="border border-slate-300"></td>
                    <th class="border border-slate-300 text-center" colspan="8">PRICING</th>
                    <td class="border border-slate-300" colspan="2"></td>
                </tr>
                <tr class="text-center">
                    <td class="border border-slate-300"></td>
                    <th class="border border-slate-300">NO</th>
                    <th class="border border-slate-300 text-center" colspan="2">PIECES</th>
                    <th class="border border-slate-300 text-center" colspan="2">UNIT PRICE</th>
                    <th class="border border-slate-300 text-center" colspan="2">TOTAL PRICE</th>
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"></td>
                </tr>

                <tr class="text-center">
                    <td class="border border-slate-300"></td>
                    <th class="border border-slate-300">1</th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="product-1" name="pieces_1">
                    </th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="unit-1" name="unit_1">
                    </th>
                    <th class="border border-slate-300 text-center p-0 b-0" colspan="2">
                        <input type="text" class="w-full border-1 product bg-light" id="product-unit-1"
                            name="product_unit_1" readonly>
                    </th>
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"></td>
                </tr>
                <tr class="text-center">
                    <td class="border border-slate-300"></td>
                    <th class="border border-slate-300">2</th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="product-2" name="pieces_2">
                    </th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="unit-2" name="unit_2">
                    </th>
                    <th class="border border-slate-300 text-center p-0 b-0" colspan="2">
                        <input type="text" class="w-full border-1 product bg-light" id="product-unit-2" readonly
                            name="product_unit_2">
                    </th>
                    <td class="border border-slate-300 text-center" colspan="3" rowspan="2" id="total_price">
                    </td>
                    <input type="hidden" name="totalPrice" id="totalPriceInput">
                </tr>
                <tr class="text-center">
                    <td class="border border-slate-300"></td>
                    <th class="border border-slate-300">3</th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="product-3" name="pieces_3">
                    </th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="unit-3" name="unit_3">
                    </th>
                    <th class="border border-slate-300 text-center p-0 b-0" colspan="2">
                        <input type="text" class="w-full border-1 product bg-light" id="product-unit-3" readonly
                            name="product_unit_3">
                    </th>
                </tr>
                <tr class="text-center">
                    <td class="border border-slate-300"></td>
                    <th class="border border-slate-300">4</th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="product-4" name="pieces_4">
                    </th>
                    <th class="border border-slate-300 text-center p-0" colspan="2">
                        <input type="text" class="w-full border-1 product" id="unit-4" name="unit_4">
                    </th>
                    <th class="border border-slate-300 text-center p-0 b-0" colspan="2">
                        <input type="text" class="w-full border-1 product bg-light" id="product-unit-4" readonly
                            name="product_unit_4">
                    </th>
                    <td class="border border-slate-300"></td>
                    <td class="border border-slate-300"></td>
                </tr>
            </tbody>
            <tr>
                <td class="border border-slate-300" colspan="11"></td>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">BUYER NAME</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="buyer_name_value">
                </th>
                <td colspan=""></td>
                <td colspan=""></td>
                <td colspan=""></td>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">SELLER NAME</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="seller_name_value">
                </th>
                <td colspan=""></td>
                <td colspan=""></td>
                <td colspan=""></td>
            </tr>

            <tr>
                <th class="border border-slate-300" colspan="2">SUPPLIER</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="supplier_value">0
                </th>
                <td class="border border-slate-300" colspan="3" rowspan="6" style="min-width: 115px">
                    <div id="qrcode2" class="flex justify-center qrcode">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=please generate qr code:"
                            class="img-responsive">
                    </div>
                </td>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">FACTORY</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="factory_value"></th>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">TRADEMARK</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="trademark_value">
                </th>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">DATE</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="date_value"></th>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">LOCATION</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="delivery_location_value">
                </th>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">TYPE</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="types_value"></th>
            </tr>
            <tr>
                <th class="border border-slate-300" colspan="2">PIECES</th>
                <th class="border border-slate-300" colspan="6" class="text-center" id="pieces_value"></th>
                <td class="text-green-400 font-bold invoice-number" colspan="3">0</td>
            </tr>
            {{-- last one  --}}
            <tr>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
                <td class="border border-slate-300"></td>
            </tr>
            <tr style="height: 140px">
                <td colspan="11"></td>
            </tr>
            </tbody>
        </table>
        <div class="float-right my-3">
            <a class=" hidden py-2 px-3 bg-green-500 rounded text-white font-medium cursor-pointer"
                id="watch-pdf">watch pdf</a>
            <button id="save-invoice"
                class="py-2 px-3 rounded text-red-500 font-medium cursor-pointer b-4 font-bold  bg-black hidden">Save
                Data</button>
            <button onclick="generate()" type="button"
                class="bg-sky-500  py-2 px-3 rounded text-white font-medium">Generate
                QR</button>

            <button type="button"
                class=" btn-secondary font-bold py-2 px-3 rounded text-white font-medium bg-slate-800"
                id="reload-form">Refresh
                Table</button>
        </div>
    </form>
</div>
<script>
    function generate(e) {
        // e.preventDefault();

        var buyer_name = document.getElementById("buyer_name").value;
        var seller_name = document.getElementById("seller_name").value;
        var supplier_name = document.getElementById("supplier_name").value;
        var factory_name = document.getElementById("factory_name").value;
        var trademark = document.getElementById("trademark").value;
        var date = document.getElementById("date").value;
        var delivery_location = document.getElementById("delivery_location").value;
        var types = document.getElementById("types").value;
        var pieces = document.getElementById("pieces").value;

        var url = "https://chart.googleapis.com/chart?choe=ISO-8859-1&&chld=L|0&cht=qr&chs=150x150&chl=Buyer_name: " +
            buyer_name +
            "Seller_name: " + seller_name + "Supplier_name: " + supplier_name + "Factory_name: " + factory_name +
            "Trademark: " + trademark + "date: " + date + "delivery_location: " + delivery_location + " Types" + types +
            "Pieces: " + pieces + " Total Price: " + total_price;


        var ifr = `<img src="${url}" class="img-responsive">`;

        document.getElementById("qrcode1").innerHTML = ifr;
        document.getElementById("qrcode2").innerHTML = ifr;
        $("#save-invoice").removeClass("hidden");
        $("#save-invoice").on('click', function() {
            $("#watch-pdf").removeClass("hidden");
        })
    };
</script>
