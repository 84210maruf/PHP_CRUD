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
        @include('admin.body')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
  </body>
</html>