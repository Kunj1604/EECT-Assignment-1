<!-- <?php
// Assume you have retrieved order details from your database and stored them in $orderDetails array
$orderDetails = [
    'order_id' => 123,
    'customer_name' => 'John Doe',
    'email' => 'john@example.com',
    'address' => '123 Main St, Anytown, USA',
    'total_amount' => 100.00,
    // Add more relevant order details as needed
];

// Function to generate and output invoice HTML
function generateInvoice($orderDetails) {
    $html = '
    <style>
        /* Define your CSS styles for the invoice here */
        body {
            font-family: Arial, sans-serif;
        }
        .invoice {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        /* Add more styles as needed */
    </style>
    <div class="invoice">
        <h2>Invoice</h2>
        <p><strong>Order ID:</strong> ' . $orderDetails['Order_id'] . '</p>
        <p><strong>Customer Name:</strong> ' . $orderDetails['Menu_id'] . '</p>
        <p><strong>Email:</strong> ' . $orderDetails['Title'] . '</p>
        <p><strong>Address:</strong> ' . $orderDetails['Price'] . '</p>
        <p><strong>Address:</strong> ' . $orderDetails['user_id'] . '</p>
        <p><strong>Address:</strong> ' . $orderDetails['description'] . '</p>
        <p><strong>Address:</strong> ' . $orderDetails['order_date'] . '</p>
        <p><strong>Address:</strong> ' . $orderDetails['quantity'] . '</p>
        <p><strong>Address:</strong> ' . $orderDetails['totalprice'] . '</p>

        <table border="1">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>1</td>
                <td>$50.00</td>
                <td>$50.00</td>
            </tr>
            <!-- Repeat rows for each product in the order -->
        </table>
        <p><strong>Total Amount:</strong> $' . $orderDetails['total_amount'] . '</p>
    </div>';

    echo $html;
}

// Generate and output the invoice
generateInvoice($orderDetails);
?> -->