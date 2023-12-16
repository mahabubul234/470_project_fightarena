<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <base href="/public">
   
     @include ('admin.css')

     <style type="text/css">

        .div_centre{
          text-align: center;
          padding-top: 40px;
        }

        .font_size{

           font-size: 40px;
           padding-bottom: 40px;



        }

        .text_color{
          
          color: black;
          padding-bottom: 20px;
        }

        label{
          display: incline-block;
          width: 200px;
        }

        .div_design{
          padding-bottom:15px;

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
              <div class="div_centre">
                <h1 class="font_size">Change Fighter Information</h1>
                <form action="{{url('/update_fighters_confirm',$fighters->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                    <label>Fighter Name :</label>
                    <input class="text_color" type="text" name="name" placeholder="Write Name" required="" 
                    value="{{$fighters->name}}">
                </div>
                <div class="div_design">
                    <label>Age :</label>
                    <input class="text_color" type="text" name="age" placeholder="Write Age" required=""
                    value="{{$fighters->age}}">
                </div>
                <div class="div_design">
                    <label>Weight Category :</label>
                    <input class="text_color" type="text" name="weight_category" placeholder="Write Weight_Category" required=""
                    value="{{$fighters->weight_category}}">
                </div>
                <div class="div_design">
                    <label>Fight Record :</label>
                    <input class="text_color" type="text" name="fight_record" placeholder="Write Fight Record" required=""
                    value="{{$fighters->fight_record}}">
                </div>
                <div class="div_design">
                    <label>Speciality :</label>
                    <input class="text_color" type="text" name="speciality" placeholder="Write Speciality" required=""
                    value="{{$fighters->speciality}}">
                </div>

                <div class="div_design">
                    <label>Current Image:</label>
                   

                    <img style="margin:auto;" height="100" width="100" src="/fighters/{{$fighters->image}}">
                </div>

                <div class="div_design">
                    <label>Change Image Here :</label>
                    <input class="text_color" type="file" name="image" >
                </div>

                <div class="div_design">
                    
                    <input type="submit" value="Confirm Change" class="btn btn-primary">
                </div>
                </form>
                

              </div>
             </div>
          </div>
     
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
  </body>
</html>