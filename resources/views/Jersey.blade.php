<!DOCTYPE html>
<html lang="en">
    <head>
    <title>| Jersey Page |</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
	<body><br>
		<div class="container">
		<form method="post" id="submit_form">
			<div class="card">
				<div class="card-header"><h2>Enter Jersey Details</h2></div>
				<div class="card-body"><div class="input-group mb-3">
      <span class="input-group-text">DATE DUE:</span>
      <input type="date" class="form-control" name="DateDue">
    </div><div class="input-group mb-3">
      <span class="input-group-text">TEAM:</span>
      <input type="Text" placeholder="ex. Los Angeles Lakers"class="form-control" name="TEAM">
    </div><div class="input-group mb-3">
      <span class="input-group-text">MANAGER:</span>
      <input type="Text" class="form-control" name="MANAGER"></div>
      <div class="input-group mb-3">
      <span class="input-group-text">CONTACT PERSON:</span>
      <input type="text" class="form-control" name="CONTACTPERSON"></div>
      <div class="input-group mb-3">
      <span class="input-group-text">CONTACT NUMBER</span>
      <input type="tel" class="form-control" name="CONTACTNUMBER" placeholder="ex. 09XXXXXXXXX"></div>

						<div class="table-repsonsive">
							<span id="error"></span>
							<table class="table table-bordered" id="item_table">
								<tr>
								<th>NO.</th>
        <th>NAME</th>
        <th>JERSEY NO.</th>
        <th>JERSEY SIZE</th>
        <th>SHORT SIZE</th>
        <th><button type="button" class="btn btn-success btn-sm add">Add Field</button></th>
								</tr>
							</table>
							<div align="center">
								<input type="submit" name="submit" id="submit_button" class="btn btn-primary" value="Submit" />
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</body>
</html>
<script>

$(document).ready(function(){

	var count = 0;
	var no = 1;
	function add_input_field(count)
	{

		var html = '';

		 html += '<tr>';
      html += '<td>'+no+'</td>';
      html += '<td><input type="text" class="form-control jersey_name" name="jersey_name[]"></td>';
      html += '<td><input type="number" class="form-control jersey_number" name="jersey_number[]"></td>';
      html += '<td><select class="form-control selectpicker" name="jersey_top_sizes[]"><option value="">Select size</option><option value ="XS">Extra Small</option><option value ="S">Small</option><option value ="Medium">Medium</option><option value ="L">Large</option><option value = "XL">Extra Large</option><option value ="2XL">2XLarge</option><option value ="3XL">3XLarge</option><option value ="4XL">4XLarge</option><option value ="5XL">5XLarge</option></select></td>';
      html += '<td><select class="form-control selectpicker" name="jersey_short_sizes[]"><option value="">Select size</option><option value ="XS">Extra Small</option><option value ="S">Small</option><option value ="Medium">Medium</option><option value ="L">Large</option><option value = "XL">Extra Large</option><option value ="2XL">2XLarge</option><option value ="3XL">3XLarge</option><option value ="4XL">4XLarge</option><option value ="5XL">5XLarge</option></select></td>';

		var remove_button = '';
		no++;
		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove">Remove Field</button>';
		}

		html += '<td>'+remove_button+'</td></tr>';

		return html;

	}

	$('#item_table').append(add_input_field(0));

	$('.selectpicker').selectpicker('refresh');

	$(document).on('click', '.add', function(){

		count++;

		$('#item_table').append(add_input_field(count));

		$('.selectpicker').selectpicker('refresh');

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();
		alert('The Data inserted will be deleted');
		no--;

	});

	
	});
	 
</script>