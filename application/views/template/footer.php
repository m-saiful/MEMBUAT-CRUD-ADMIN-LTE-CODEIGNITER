<footer class="footer text-center">
                All Rights Reserved by Xtreme Admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/')?>libs/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript">
        function loadMenu(url) {
            $.ajax(url, {
                type: 'GET',
                success: function (data, status, xhr) {
                    var objData = JSON.parse(data);

                    $('#kontenTemplate').html(objData.konten);
                    $('title').html(objData.titel);
                    $('.page-breadcrumb .page-title').html(objData.titel);
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg)
                }
            })
        } 

    </script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/')?>libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/')?>dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/')?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/')?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/')?>dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?= base_url('assets/')?>libs/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url('assets/')?>dist/js/pages/dashboards/dashboard1.js"></script>

</body>

</html>