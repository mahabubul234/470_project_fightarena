<style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    td {
        background-color: #f2f2f2;
    }

    img {
        max-width: 100px;
        max-height: 100px;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount Price</th>
            <!-- Add more headers as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td><img src="{{ asset('product/' . $product->image) }}" alt="{{ $product->title }}"></td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->quantity }}</td>
                <td>${{ $product->price }}</td>
                <td>${{ $product->discount_price }}</td>
                <!-- Add more product details as needed -->
            </tr>
        @endforeach
    </tbody>
</table>
