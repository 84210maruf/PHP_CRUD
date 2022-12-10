<!DOCTYPE html>
<html lang="en">

      @include('admin.css')

      <!-- partial:partials/_sidebar.html -->
      <!--admin/sidebar.blade.php-->
        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!--admin/body.blade.php-->
        @include('admin.navbar')
        <!-- partial -->

       


        <!--admin/navbar.blade.php-->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top: 100px;">

        <!--message-->
        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
            </button>
          {{session()->get('message')}}
          </div>
          @endif
        
        <form action="{{url('upload_doctor')}}" method="POST" enctype=multipart/form-data>

        @csrf

        <div style="padding:15px;">
            <label>Doctor Name</label>
            <input type="text" style="color:black" name="name" placeholder="Write the name" required="">
        </div>
        <div style="padding:15px;">
            <label>Doctor Number</label>
            <input type="text" style="color:black" name="number" placeholder="Write the number" required="">
        </div>
        <div style="padding:15px;">
            <label>Speciality</label>
            <select name="speciality" style="color:black; width:200px;">
                <option>--Select--</option>
                <option value='skin'>skin</option>
                <option value='heart'>heart</option>
                <option value='eye'>eye</option>
                <option value='nose'>nose</option>
            </select>
        </div>
        <div style="padding:15px;">
            <label>Room No</label>
            <input type="text" style="color:black" name="room" placeholder="Write the room no.." required="">
        </div>
        <div style="padding:15px;">
            <label>Doctor Image</label>
            <input type="file" name="file" required="">
        </div>
        <div style="padding:15px;">
            <input type="submit" class="btn btn-success">
        </div>

        </form>

        </div>
        
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
  </body>
</html>