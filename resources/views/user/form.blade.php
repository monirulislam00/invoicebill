<div class="table-responsive">
    <form action="/api/create-invoice" method="post" id="create-invoice">
        @csrf
        <table class="table table-bordered common-border">
            <thead class="text-center">
                <td colspan="11">
                    <h1 class="fw-bold heading" style="font-size: 30px"><span class="text-danger z">SIM</span>RAK
                        ENTERPRISE
                    </h1>
                    <h2 class="heading" style="font-size: 20px">SUPPLING QUALITY PRODUCTS</h2>
                    <h4 class="heading" style="font-size: 18px">CONTACT: 01866-519376</h4>
                </td>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">BUYER NAME</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="buyer_name" id="buyer_name">
                        </th>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""></td>
                </tr>
                <tr>
                    <th colspan="2">SELLER NAME</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="seller_name" id="seller_name">
                    </td>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""></td>
                </tr>
                <tr>
                    <th colspan="2">SUPPLIER</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="supplier_name" id="supplier_name">
                    </td>
                    <td colspan="2" rowspan="6" style="min-width: 115px">
                        <div id="qrcode1" class="d-flex justify-content-center qrcode">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=please generate qr code:"
                                class="img-responsive">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">FACTORY</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="factory_name" id="factory_name">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">TRADEMARK</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="trademark" id="trademark">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">DATE</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="date" class="form-control" name="date" id="date">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">LOCATION</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="delivery_location" id="delivery_location">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">TYPE</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="types" id="types">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">PIECES</th>
                    <td colspan="6" class="text-center p-0 b-0">
                        <input type="text" class="form-control" name="pieces" id="pieces">
                    </td>
                    <td class="text-success fw-bolder" colspan="3">
                        <p class="invoice-number">0</p>
                        <input type="hidden">
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom: 2px solid red" colspan="11"></td>
                </tr>
            <tbody class="border-red" style="border-top: dashed red">
                <tr>
                    <td></td>
                    <th class="text-center" colspan="9">PRICING</th>
                    <td></td>
                </tr>

                <tr class="text-center">
                    <td></td>
                    <th>NO</th>
                    <th class="text-center" colspan="2">PRICING</th>
                    <th class="text-center" colspan="2">UNIT PRICE</th>
                    <th class="text-center" colspan="2">TOTAL PRICE</th>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="text-center">
                    <td></td>
                    <th>1</th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="product-1">
                    </th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="unit-1">
                    </th>
                    <th class="text-center" colspan="2" id="product-unit-1">

                    </th>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="text-center">
                    <td></td>
                    <th>2</th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="product-2">
                    </th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="unit-2">
                    </th>
                    <th class="text-center" colspan="2" id="product-unit-2"></th>
                    <td colspan="3" rowspan="2" id="total-price"></td>
                    <input type="hidden" name="totalPrice" id="totalPriceInput">
                </tr>
                <tr class="text-center">
                    <td></td>
                    <th>3</th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="product-3">
                    </th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="unit-3">
                    </th>
                    <th class="text-center" colspan="2" id="product-unit-3"></th>
                </tr>
                <tr class="text-center">
                    <td></td>
                    <th>4</th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="product-4">
                    </th>
                    <th class="text-center p-0" colspan="2">
                        <input type="text" class="form-control product" id="unit-4">
                    </th>
                    <th class="text-center" colspan="2" id="product-unit-4"></th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tr>
                <td colspan="11"></td>
            </tr>
            <tr>
                <th colspan="2">BUYER NAME</th>
                <th colspan="6" class="text-center" id="buyer_name_value"></th>
                <td colspan=""></td>
                <td colspan=""></td>
                <td colspan=""></td>
            </tr>
            <tr>
                <th colspan="2">SELLER NAME</th>
                <th colspan="6" class="text-center" id="seller_name_value">
                </th>
                <td colspan=""></td>
                <td colspan=""></td>
                <td colspan=""></td>
            </tr>

            <tr>
                <th colspan="2">SUPPLIER</th>
                <th colspan="6" class="text-center" id="supplier_value">0</th>
                <td colspan="2" rowspan="6" style="min-width: 115px">
                    <div id="qrcode2" class="d-flex justify-content-center qrcode">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=please generate qr code:"
                            class="img-responsive">
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="2">FACTORY</th>
                <th colspan="6" class="text-center" id="factory_value"></th>
            </tr>
            <tr>
                <th colspan="2">TRANDEMARK</th>
                <th colspan="6" class="text-center" id="trademark_value"></th>
            </tr>
            <tr>
                <th colspan="2">DATE</th>
                <th colspan="6" class="text-center" id="date_value"></th>
            </tr>
            <tr>
                <th colspan="2">LOCATION</th>
                <th colspan="6" class="text-center" id="delivery_location_value"></th>
            </tr>
            <tr>
                <th colspan="2">TYPE</th>
                <th colspan="6" class="text-center" id="types_value"></th>
            </tr>
            <tr>
                <th colspan="2">PIECES</th>
                <th colspan="6" class="text-center" id="pieces_value"></th>
                <td class="text-success fw-bold" colspan="3">0</td>
            </tr>
            {{-- last one  --}}
            <tr class="">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 140px">
                <td colspan="11"></td>
            </tr>
            </tbody>
        </table>
        <div class="float-end">
            <button id="save-invoice" class="btn btn-warning text-danger b-4 fw-bold m-3 bg-black d-none">Save
                Data</button>
            <button onclick="generate()" type="button" class="btn btn-primary bg-primary">generate qr</button>

            <button class="btn btn-secondary fw-bold">Refresh Table</button>
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
        
        var url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Buyer_name: " + buyer_name +
            "Seller_name: " + seller_name + "Supplier_name: " + supplier_name + "Factory_name: " + factory_name +
            "Trademark: " + trademark + "date: " + date + "delivery_location: " + delivery_location + " Types" + types +
            "Pieces: " + pieces;


        var ifr = `<img src="${url}" class="img-responsive">`;

        document.getElementById("qrcode1").innerHTML = ifr;
        document.getElementById("qrcode2").innerHTML = ifr;
        $("#save-invoice").removeClass("d-none");

    };
</script>

