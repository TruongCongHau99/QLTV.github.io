<!-- jQuery -->
<script src="{{asset('admin-template')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin-template')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('admin-template')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('admin-template')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('admin-template')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin-template')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('admin-template')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('admin-template')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin-template')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('admin-template')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin-template')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-template')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-template')}}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-template')}}/dist/js/demo.js"></script>

<script>
    $(document).ready(function(){
        $('#summernote').summernote();
    })
</script>

<script>
    function dis1(){
        document.getElementById("dis1").disabled = true;
        document.getElementById("1").disabled = true;
        $('a').dblclick(function(){
          document.getElementById("dis1").disabled = false;
          document.getElementById("1").disabled = false;
        });
    }
</script>
<script>
    function dis2(){
        document.getElementById("dis2").disabled = true;
        document.getElementById("2").disabled = true;
        $('a').dblclick(function(){
          document.getElementById("dis2").disabled = false;
          document.getElementById("2").disabled = false;
        });
    }
</script>
<script>
    function dis3(){
        document.getElementById("dis3").disabled = true;
        document.getElementById("3").disabled = true;
        $('a').dblclick(function(){
          document.getElementById("dis3").disabled = false;
          document.getElementById("3").disabled = false;
        });
    }
</script>
<script>
    function dis4(){
        document.getElementById("dis4").disabled = true;
        document.getElementById("4").disabled = true;
        $('a').dblclick(function(){
          document.getElementById("dis4").disabled = false;
          document.getElementById("4").disabled = false;
        });
    }
</script>
<script>
    function dis5(){
        document.getElementById("dis5").disabled = true;
        document.getElementById("5").disabled = true;
        $('a').dblclick(function(){
          document.getElementById("dis5").disabled = false;
          document.getElementById("5").disabled = false;
        });
    }
</script>
