<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   
     @include ('admin.css')

     <style type="text/css">
        .centre{
            margin:auto;
            width:50%;
            border:2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size{
            
            text-align:center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size
        {
            width: 250px;
            height: 250px;
        }

        .th_color
        {
            background: magenta;
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
                <h2 class="font_size">Fight Arena Team</h2>

                <table class="centre">
                    <tr class="th_color">
                        <th class="th_deg">Name</th>
                        <th class="th_deg">Age</th>
                        <th class="th_deg">Weight Category</th>
                        <th class="th_deg">Fight Record</th>
                        <th class="th_deg">Speciality</th>
                        <th class="th_deg">Fighter Image</th>
                        <th class="th_deg">Remove</th>
                        <th class="th_deg">Edit</th>
                    </tr>

                    @foreach($fighters as $fighters)

                    <tr>
                        <td>{{$fighters->name}}</td>
                        <td>{{$fighters->age}}</td>
                        <td>{{$fighters->weight_category}}</td>
                        <td>{{$fighters->fight_record}}</td>
                        <td>{{$fighters->speciality}}</td>
                        <td>
                            <img class="img_size" src="/fighters/{{$fighters->image}}">
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Confirm Deletion')" href="{{url('delete_fighers',$fighters->id)}}">Remove</a> 
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_fighters',$fighters->id)}}">Edit</a>
                        </td>

                    </tr>

                    @endforeach
                </table>

             </div>
          </div>
      
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>