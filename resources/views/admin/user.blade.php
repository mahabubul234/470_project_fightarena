<!DOCTYPE html>
<html lang="en">
<head>
<head> 
    <!-- Required meta tags -->
   
     @include ('admin.css')

     <style type="text/css">
        .div_center
        {
              text-align: center;
              padding-top:40px;
        }
        .h2_font
        {
              font-size: 40px;
              padding-bottom:40px;
        }
        .input_color
        {
            color: black;
        }

        .centre 
        {
            margin: auto;
            width: 50%;
            text-align: centre;
            margin-top: 30px;
            border: 3px solid green;

        }
     </style>
  </head>
</head>
<body>
<div class="container-scroller">
@include('admin.sidebar')
 <!-- partial --> 
@include('admin.header')
<div class="main-panel">
  <div class="div_center">
     <table border="1px" class="centre">
                <tr>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>

                @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            <a onClick="return confirm('Confirm Delete')" class="btn btn-danger" href="{{url('delete_user',$data->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
     </table>
  </div>
</div>
</div>
@include('admin.script')
</body>
</html> 




<