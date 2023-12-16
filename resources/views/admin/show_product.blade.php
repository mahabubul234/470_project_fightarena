<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include ('admin.css')
    <style type="text/css">
        .center 
        {
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size
         {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        .img_size
        {
             width:150px;
             height:150px;
        }
        .th_color
        {
            background:skyblue;
        }
        .th_deg
        {
            padding:30px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
        @if (session()->has('message'))
           <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
                 {{session()->get ('message')}}
           </div>
        @endif
            <h2 class="font_size">All products</h2>

            <table class="center">
                <tr class="th_color">
                    <th class="th_deg">Product title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Category</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount Price</th>
                    <th class="th_deg">Product Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Edit</th>
                </tr>

                @foreach($product as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->Description }}</td>
                        <td>{{ $product->Quantity }}</td>
                        <td>{{ $product->Category }}</td>
                        <td>{{ $product->Price }}</td>
                        <td>{{ $product->Discount_Price }}</td>
                        <td>
                            <img class="img_size" src="/product/{{ $product->image }}">
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This')" href="{{url('delete_product',$product->id)}}">Delete</a>
                        </td>
                        <td>
                           <a class="btn btn-success" href="{{ url('update_product', $product->id) }}">Edit</a>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
</body>
</html>