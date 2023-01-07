<!DOCTYPE html>
<html>

<head>
    <title>DataTables AJAX Pagination with Search and Sort in CodeIgniter 4</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css" />

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>

</head>

<body>

    <!-- CSRF token -->
    <input type="hidden" class="estimasi" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

    <!-- Table -->
    <table id='userTable' class='display dataTable'>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
            </tr>
        </thead>

    </table>

    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#userTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': "<?= site_url('Testing/getUsers') ?>",
                    'data': function(data) {
                        // CSRF Hash
                        var csrfName = $('.estimasi').attr('name'); // CSRF Token name
                        var csrfHash = $('.estimasi').val(); // CSRF hash

                        return {
                            data: data,
                            [csrfName]: csrfHash // CSRF Token
                        };
                    },
                    dataSrc: function(data) {

                        // Update token hash
                        $('.estimasi').val(data.token);

                        // Datatable data
                        return data.aaData;
                    }
                },
                'columns': [{
                        data: 'id_produk_ajp'
                    },
                    {
                        data: 'id_color_produk_ajp'
                    },
                    {
                        data: 'id_material_produk_ajp'
                    },
                    {
                        data: 'id_weight_produk_ajp'
                    },
                ]
            });
        });
    </script>
</body>

</html>