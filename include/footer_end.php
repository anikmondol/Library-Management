<!-- footer end -->

<!-- App js -->
<script src="<?= BASE_URL; ?>assets/js/vendor.min.js"></script>
<scrip src="<?= BASE_URL; ?>assets/js/app.js"></script>

<!-- dataTables links -->
<script src="<?php echo BASE_URL ?>assets/js/jquery-3.5.1.js"></script>
<script src="<?php echo BASE_URL ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL ?>assets/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#data-table').DataTable({
            lengthMenu:[
                [8, 20, 30, -1],[8, 20, 30, "All"]
            ],
            pageLength:8,
        });
    });
</script>

</body>



</html>