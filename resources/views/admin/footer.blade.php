<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/template/dist/js/demo.js"></script>
<!-- Page specific script -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/main_admin.js"></script>

<script>
    function removeRow(id, url)
    {
        if(confirm('Bạn có chắc xóa danh mục này?')){
            $.ajax({
                type: 'DELETE',
                dataType: 'JSON',
                data: { id },
                url: url,
                success: function(result) {
                    if (result.error === false) {
                        alert(result.message);
                        location.reload();
                    } else {
                        alert('Xóa lỗi');
                    }
                }
            });
        }
    }
</script>