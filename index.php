<?php
// session_start();
// if(isset($_SESSION['name']))
// {
// header('location:./login.php');
// }
include('./data.php');

$emailerror = "";
$nameerror = "";


if (isset($_POST['submit-add'])) 
{
	$name = $_POST['name-add'];
	$email = $_POST['email-add'];

	if (empty($name)) {
		$nameerror = "please Enter your Name..";
	} elseif (empty($email)) {
		$emailerror = "please Enter your Email..";
	} else {

		$data = [
			'name' => $name,
			'email' => $email,			
		];
		$res =    $crudobj->create("user_tbl", $data);
		
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

					<h1 class="h3 mb-3">Sign Up</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">


									<form action="login.php" method="POST" id="add-user-form">
										<div class="mb-3">
											<label for="name-add">Name</label>
											<input type="text" class="form-control" name="name-add" id="name-add" placeholder="Enter your name!">
											<p class="text-danger"> <?php echo $nameerror  ?></p>
										</div>
										<div class="mb-3">
											<label for="email-add">Email</label>
											<input type="text" class="form-control" name="email-add" id="email-add" placeholder="Enter your email!">
											<p class="text-danger"> <?php echo $emailerror  ?></p>

										</div>
										<div>
											<input type="submit" value="Add User" class="btn btn-primary" name="submit-add">
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