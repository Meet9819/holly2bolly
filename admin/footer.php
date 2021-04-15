<footer class="footer">
      <div class="container">
        <p class="text-center">Copyright © 2018 <a href="#">H2B</a> - All Rights Reserved.</p>
      </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
  
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js" type="text/javascript"></script>
   
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        order: [ [0, 'desc' ]],
        buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    });
</script>

</body>
</html>