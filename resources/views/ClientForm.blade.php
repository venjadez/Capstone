<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <title>Client Form </title>
    </head>

<body>
<form id="dynamic-form" action="/submit" method="POST">
    @csrf
    <table id="form-table">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>
    </table>
    <button type="button" id="add-field">Add Field</button>
    <input type="submit" value="Submit">
</form>
<script>
    $(document).ready(function() {
        $('#add-field').click(function() {
            // Create a new row for the form table
            var row = $('<tr id="row1"></tr>');

            // Create the form fields for the new row
            var labelCol = $('<td><label></label></td>');
            var inputCol = $('<td><input type="text"></td>');
            var deleteCol = $('<td><button id="del" type="button">Delete</button></td>');

            // Add the form fields to the new row
            row.append(labelCol);
            row.append(inputCol);
            row.append(deleteCol);

            // Add the new row to the form table
            $('#form-table').append(row);
        });
    });
</script>

<script>
 $(document).ready(function() {
        $('#form-table').click(function() {
            $('#row1').remove();
            
            
        });
    });
    
</script>

</body>
</html> 