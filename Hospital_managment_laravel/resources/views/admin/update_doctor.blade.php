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
        
        
        <div class="container">
             <!--message-->
        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
            </button>
          {{session()->get('message')}}
          </div>
          @endif
          
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data"  style="padding:100px;">

            @csrf
                <div style="padding:15px;">
                    <lebel style="display:inline-block; width: 200px;">Doctor Name</lebel>
                    <input style="color:black;" type="text" name="name" value="{{$data->name}}">
                </div>
                <div style="padding:15px;">
                    <lebel style="display:inline-block; width: 200px;">Phone</lebel>
                    <input style="color:black;" type="text" name="phone" value="{{$data->phone}}">
                </div>
                <div style="padding:15px;">
                    <lebel style="display:inline-block; width: 200px;">speciality</lebel>
                    <input style="color:black;" type="text" name="speciality" value="{{$data->speciality}}">
                </div>
                <div style="padding:15px;">
                    <lebel style="display:inline-block; width: 200px;">room</lebel>
                    <input type="text" style="color:black;" name="room" value="{{$data->room}}">
                </div>
                <div style="padding:15px;">
                    <lebel style="display:inline-block; width: 200px;">Old image</lebel>
                   <img hight="150" width="150" src="doctorimage/{{$data->image}}" alt="">
                </div>
                <div style="padding:15px;">
                    <lebel style="display:inline-block; width: 200px;">Change image</lebel>
                  <input type="file" name="file">
                </div>
                <div style="padding:15px;">
                  <input type="submit" name="submit" class="btn btn-success">
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