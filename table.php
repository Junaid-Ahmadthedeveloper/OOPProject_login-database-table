<?php
// session_start();
// if(!isset($_SESSION['name']))
// {
// header('location:./login.php');
// }
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

					<h1 class="h3 mb-3">Data</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
                                <div class="row">
										<div class="card">
											<div class="card-body">
												<div class="table-responsive">
												
													<table class="table">
														<thead>                                                           
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Email</th>
																<th>Created at</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody id="tbody">
														<?php 
                                                        include('./data.php');

                                                        $data =   $crudobj->show("user_tbl");
                                                        
                                                        foreach($data as $userdata)
                                                        {
                                                       
                                                        
                                                        
                                                        ?>
														<tr>
																<td><?php  echo $userdata['id'] ?></td>
																<td><?php  echo $userdata['name'] ?></td>
																<td><?php  echo $userdata['email'] ?></td>
																<td><?php  echo $userdata['created_at'] ?></td>
																<td>
                                                                    <a href="./delete.php?delid=<?php  echo $userdata['id'] ?>" class="btn btn-danger">Delete</a>
                                                                    <a href="./edit.php?uid=<?php  echo $userdata['id'] ?>" class="btn btn-info">Edit</a>
                                                                   
                                                                </td>
															</tr>
                                                            <?php 
                                                        }
                                                            ?>
														</tbody>
													</table>
												</div>

											</div>
										</div>


									</div>



                                


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