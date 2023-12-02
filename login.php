
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

					<h1 class="h3 mb-3">Log In</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">


									<form action="process_login.php" method="POST" id="add-user-form">
										<div class="mb-3">
											<label for="name">Name</label>
											<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name!">
										</div>
										<div class="mb-3">
											<label for="email">Email</label>
											<input type="text" class="form-control" name="email" id="email" placeholder="Enter your email!">

										</div>
										<div>
											<input type="submit" value="Login" class="btn btn-primary" name="submit">
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