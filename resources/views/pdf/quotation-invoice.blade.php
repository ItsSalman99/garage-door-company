<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #333;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #444;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .company {
            font-size: 22px;
            font-weight: bold;
        }

        .invoice-info {
            width: 100%;
            margin-bottom: 20px;
        }

        .invoice-info td {
            padding: 5px;
        }

        table.items {
            width: 100%;
            border-collapse: collapse;
        }

        table.items th,
        table.items td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }

        table.items th {
            background-color: #f2f2f2;
        }

        .total {
            text-align: right;
            margin-top: 20px;
            font-size: 14px;
            font-weight: bold;
        }

        .footer {
            position: fixed;
            bottom: 20px;
            text-align: center;
            font-size: 10px;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="company">{{ $quotation->company->full_name }}</div>
        <div>
            {{ $quotation->product?->name ?? ($quotation->service?->name ?? 'Not Found') }}
        </div>

    </div>

    <table class="invoice-info">
        <tr>
            <td><strong>Invoice No:</strong> inv_{{ $quotation->id }}</td>
            <td align="right"><strong>Date:</strong> {{ $quotation->created_at }}</td>
        </tr>
        <tr>
            <td><strong>Billed To:</strong> {{ $quotation->customer_name }}</td>
        </tr>
    </table>

    <table class="items">
        <thead>
            <tr>
                <th>#</th>
                <th>Product/Service</th>
                <th>Company</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $quotation->id }}</td>
                <td>{{ $quotation->product?->name ?? ($quotation->service?->name ?? 'Not Found') }}</td>
                <td>{{ $quotation->company->full_name }}</td>
                <td>{{ $quotation->quantity }}</td>
                <td>{{ $quotation->price }}</td>
                <td>{{ $quotation->total }}</td>
            </tr>
        </tbody>
    </table>

    <div class="total">
        Grand Total: $ {{ number_format($quotation->total, 2) }}
    </div>

    <div class="footer">
        Thank you for choosing {{ $quotation->company->name }}
    </div>

</body>

</html>
