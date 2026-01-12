<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use App\Models\QuotationOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;


class QuotationOrderController extends Controller
{
    public function index()
    {

        $authUser = auth()->user();
        $quotations = [];
        if ($authUser->hasRole('admin')) {

            $quotations = QuotationOrder::all();
        } elseif ($authUser->hasRole('company')) {
            $quotations = QuotationOrder::where('company_id', $authUser->id)->get();

        } elseif ($authUser->hasRole('technician')) {
            $quotations = QuotationOrder::where('technician_id', $authUser->id)->get();

        }

        return view('portal.quotations.index', get_defined_vars());

    }

    public function storeProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string',
            'note' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        try {

            $quotation = QuotationOrder::create([
                'technician_id' => auth()->user()->id,
                'company_id' => $request->company_id,
                'product_id' => $request->product_id,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'total' => $request->quantity * $request->price,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'note' => $request->note,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Quotation created successfully',
                'data' => $quotation,
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ]);
        }

    }

    public function storeService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string',
            'note' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        try {

            $quotation = QuotationOrder::create([
                'technician_id' => auth()->user()->id,
                'company_id' => $request->company_id,
                'service_id' => $request->service_id,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'total' => $request->quantity * $request->price,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'note' => $request->note,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Quotation created successfully',
                'data' => $quotation,
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ]);
        }

    }

    public function show($id)
    {
        $quotation = QuotationOrder::where('id', $id)->first();

        return view('portal.quotations.show', get_defined_vars());

    }

    public function generateBill($id)
    {
        $quotation = QuotationOrder::where('id', $id)->first();

        $pdf = Pdf::loadView('pdf.quotation-invoice', ['quotation' => $quotation]);

        return $pdf->stream('invoice.pdf');

    }

}
