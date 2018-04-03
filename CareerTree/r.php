var x = 'Some value';

$.ajax ({
				type :"POST",
				url  : "/folder/country_dropdown.php",
				contentType : "application/json; charset=utf-8",
				dataType: "json",
				success : function(data) {
					$('#country').empty();
					$('#country').append("<option value='0'>Select---Country</option>");
					$.each(data,function(i, item) {
 						$('#country').append('<option value = "'+data[i].id+'">'+data[i].name+'</option>');
					});
				},
				complete: function(){

			}

		});

if (mysqli_num_rows($sql)) {
		$data = array();
		while($row = mysqli_fetch_array($sql)) {
			$data[] = array(
				'id' => $row['id'], 
				'name' => $row['country_name']);
		}

		header ('Content-type: application/json');
		echo json_encode($data);
	}

    function skill_list(
{

type :"POST",
				url  : "api.php",
				contentType : "application/json; charset=utf-8",
				dataType: "json",
				success : function(data) {
					
					
					window.log(data);
                    document.getElementById("skill").innerHTML = data;
				},
				complete: function(){

			}
});