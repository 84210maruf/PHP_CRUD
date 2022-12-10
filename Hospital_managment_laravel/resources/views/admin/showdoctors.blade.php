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
            
            <div align="center" style="padding:100px;">
                <table>
                    <tr style="background-color:black;">
                          <th style="padding:10px">Doctor  Name</th>
                          <th style="padding:10px">Phone</th>
                          <th style="padding:10px"> Speciality</th>
                          <th style="padding:10px">Room No.</th>
                          <th style="padding:10px">Image</th>
                          <th style="padding:10px">Delete</th>
                        <th style="padding:10px">Update</th>
                    </tr>
                    @foreach($data as $doctor)
                    <tr align="center" style="background-color:skyblue;">
                      <td>{{$doctor->name}}</td>
                      <td>{{$doctor->phone}}</td>
                      <td>{{$doctor->speciality}}</td>
                      <td>{{$doctor->room}}</td>
                      <td><img height="100px" width="200" src="doctorimage/{{$doctor->image}}" alt=""></td>
                      <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete this')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                      <td><a class="btn btn-success" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
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