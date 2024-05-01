<table id="contacts" class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Company</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function() {
        $('#contacts').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= site_url('user_contacts') ?>",
                "type": "POST",
                "dataSrc": ""
            },
            "columns": [{
                    "data": "name"
                },
                {
                    "data": "company"
                },
                {
                    "data": "phone_number"
                },
                {
                    "data": "email"
                },
                {
                    "data": "action"
                },
            ]
        });
    });
</script>