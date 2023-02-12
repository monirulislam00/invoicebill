<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;



class InvoiceController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "buyer_name" => "required",
            "seller_name" => "required",
            "supplier_name" => "required",
            "factory_name" => "required",
            "date" => "required",
            "delivery_location" => "required",
            "types" => "required",
            "pieces" => "required",
            "totalPrice" => "required",
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    "status" => false,
                    "data" => $validator->messages(),
                    "responseCode" => 400
                ],
                400
            );
        } else {
            $invoice_number = Invoice::max("id") + 1;
            $invoice = new Invoice;
            $invoice->buyer_name = $request->buyer_name;
            $invoice->seller_name = $request->seller_name;
            $invoice->supplier = $request->supplier_name;
            $invoice->factory = $request->factory_name;
            $invoice->trademark = $request->trademark;
            $invoice->date = $request->date;
            $invoice->location = $request->delivery_location;
            $invoice->type = $request->types;
            $invoice->pieces_one = $request->pieces_1;
            $invoice->unit_one = $request->unit_1;
            $invoice->sum_one = $request->product_unit_1;
            $invoice->sum_two = $request->product_unit_2;
            $invoice->sum_three = $request->product_unit_3;
            $invoice->pieces_two = $request->pieces_2;
            $invoice->unit_two = $request->unit_2;
            $invoice->pieces_three = $request->pieces_3;
            $invoice->unit_three = $request->unit_3;
            $invoice->pieces = $request->pieces;
            $invoice->total = $request->totalPrice;
            $invoice->qr_code = "Buyer name:" . $request->buyer_name .
                "Seller_name: " . $request->seller_name .
                "Supplier Name: " . $request->supplier_name .
                "Factory Name: " . $request->factory_name .
                "Trademark: " . $request->trademark .
                "date: " . $request->date .
                "Delivery Location: " . $request->delivery_location .
                "Types" . $request->types .
                "Pieces: " . $request->pieces .
                "total:" . $request->totalPrice;
            $invoice->user_id = session("userId");
            $invoice->invoice_num = str_pad($invoice_number, 3, 0, STR_PAD_LEFT);
            try {
                $invoice->save();
                return response()->json([
                    "status" => "success",
                    "data" => $invoice
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "status" => "fail",
                    "data" => $e
                ], 400);
            }
        }
    }
    public function watchPdf($id)
    {
        $pdf = Pdf::loadView('pdf.invoice')->setPaper('b5', 'landscape');
        return $pdf->stream();
        return view("pdf.invoice");
    }
}
