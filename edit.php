<?php 
include('./data.php');
if(isset($_GET["uid"]))
{
$id = $_GET['uid'];


$data = $crudobj->showsingle("user_tbl",$id);

$uid = $data["id"];
$name = $data['name'];
$email = $data['email'];    
}

$emailerror = "";
$nameerror = "";
$res = "";



if (isset($_POST['submit-edit'])) {

	$name = $_POST['name-edit'];
	$email = $_POST['email-edit'];

	if (empty($name)) {
		$nameerror = "please Enter your Name..";
	} elseif (empty($email)) {
		$emailerror = "please Enter your Email..";
	} else {

		$data = [
			'name' => $name,
			'email' => $email,			
		];
		$res =    $crudobj->update("user_tbl", $data,$id);
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once './includes/head.php'; ?>

<body>
	<div class="wrapper">

		<?php require_once './includes/sidebar.php'; ?>

		<div class="main">

			<?php require_once './includes/navbar.php'; ?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Blank Page</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">


									<form action="#" method="POST" id="add-user-form">
										<div class="mb-3">
                                            <input type="hidden" value="<?php echo $uid  ?>" name="id">
											<label for="name-add">Name</label>
											<input type="text" class="form-control" name="name-edit" id="name-add" placeholder="Enter your name!" value="<?php echo $name  ?>">
											<p class="text-danger"> <?php echo $nameerror  ?></p>
										</div>
										<div class="mb-3">
											<label for="email-add">Email</label>
											<input type="text" class="form-control" name="email-edit" id="email-add" placeholder="Enter your email!" value="<?php echo $email  ?>">
											<p class="text-danger"> <?php echo $emailerror  ?></p>
											<p class="text-info"> <?php echo $res  ?></p>

										</div>
										<div>
											<input type="submit" value="Edit User" class="btn btn-primary" name="submit-edit">
										</div>
									</form>




								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<?php require_once './includes/footer.php'; ?>

		</div>
	</div>

	<?php require_once './includes/script.php'; ?>

</body>

</html>