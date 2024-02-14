           <!-- Footer -->
           <footer class="sticky-footer mt-auto text-muted text-right">
            <div class="copyright text-center my-auto text-right">
                <span>Copyright &copy;  2022 Tous droits réservés </span>
            </div>
    </footer>

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="//cdn.datatables.net/plug-ins/1.12.1/i18n/fr-FR.json"></script>

<script src="/js/sb-admin-2.min.js"></script>
<!-- Datatable plugin javascript--> 
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.12.1/i18n/fr-FR.json"></script>


<script type="text/javascript">
$(document).ready( function () {
  var table = $('#example').DataTable({
    "language": {
    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json",
},


    dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
      
 
} );
} );
</script>

 
@stack('scripts')



</body>

</html>

