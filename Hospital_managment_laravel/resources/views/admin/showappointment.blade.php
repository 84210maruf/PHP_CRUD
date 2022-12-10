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
            <div align="center" style="padding-top:100px;">
                <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px">Customer Name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Doctor Name</th>
                        <th style="padding:10px">Date</th>
                        <th style="padding:10px">Message</th>
                        <th style="padding:10px">Status</th>
                        <th style="padding:10px">Approve</th>
                        <th style="padding:10px">Cancel</th>
                    </tr>
                    @foreach($data as $apponit)
                    <tr>
                        <td aline="center" style="padding:10px">{{$apponit->name}}</td>
                        <td aline="center"  style="padding:10px">{{$apponit->email}}</td>
                        <td aline="center"  style="padding:10px">{{$apponit->phone}}</td>
                        <td aline="center"  style="padding:10px">{{$apponit->doctor}}</td>
                        <td aline="center"  style="padding:10px">{{$apponit->date}}</td>
                        <td aline="center"  style="padding:10px">{{$apponit->message}}</td>
                        <td aline="center"  style="padding:10px">{{$apponit->status}}</td>
                        <td aline="center" style="padding:10px" ><a href="{{url('approved',$apponit->id)}}" class="btn btn-success" >Approve</a></td>
                        <td aline="center" style="padding:10px"><a href="{{url('canceled',$apponit->id)}}" class="btn btn-danger">Cancel</a></td>
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