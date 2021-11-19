<?php

//login_action.php

include('soes.php');

$object = new soes();
$object->soes();

if(isset($_POST["user_email"]))
{
	sleep(2);
	$error = '';
	$url = '';
	$data = array(
		':user_email'	=>	$_POST["user_email"]
	);

	$object->query = "
		SELECT * FROM user_soes 
		WHERE user_email = :user_email
	";

	$object->execute($data);

	$total_row = $object->row_count();

	if($total_row == 0)
	{
		$error = '<div class="alert alert-danger">Sai địa chỉ email</div>';
	}
	else
	{
		//$result = $statement->fetchAll();

		$result = $object->statement_result();

		foreach($result as $row)
		{
			if($row["user_status"] == 'Enable')
			{
				if($_POST["user_password"] == $row["user_password"])
				{
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_type'] = $row['user_type'];
					if($row['user_type'] == 'Master')
					{
						$url = $object->base_url . 'admin/dashboard.php';
					}
					else
					{
						$url = $object->base_url . 'admin/result.php';
					}
				}
				else
				{
					$error = '<div class="alert alert-danger">Sai mật khẩu</div>';
				}
			}
			else
			{
				$error = '<div class="alert alert-danger">Tài khoản đã bị disable</div>';
			}
		}
	}

	$output = array(
		'error'		=>	$error,
		'url'		=>	$url
	);

	echo json_encode($output);
}

?>