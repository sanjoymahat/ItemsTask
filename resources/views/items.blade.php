<!DOCTYPE html>
<html>
<head>
    <title>RSS Feed</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style>
        .my-custom-class img{
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>RSS Feed</h1>
        <table id="rssFeedTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>
                        Description
                        </th>
                    <th>Publication Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated here by JavaScript -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#rssFeedTable').DataTable({
                "processing": true,
                "serverSide": false,
                "ajax": {
                    "url":"/api/rss-feed",
                    "type": "GET",
                    "dataSrc":""
                
                },
                "columns": [
                    { "data": "title" },
                    { "data": "description",
                    "className": "my-custom-class" },
                    { "data": "pubDate" }
                ]
            });
        });
    </script>
</body>
</html>