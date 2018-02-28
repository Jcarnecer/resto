<div class="container-fluid mt-3 mb-3">
	<div class="row justify-content-center">
		<div class="col">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?= base_url("/") ?>">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?= base_url("users") ?>">Users</a>
				</li>
				<li class="breadcrumb-item active">
					Create user
				</li>
			</ol>
			<div class="card">
				<div class="card-header">Create User</div>
				<div class="card-body">
					<form id="createUser" method="POST">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label text-right">Name</label>
							<div class="col-sm-4">
								<input class="form-control" type="text" name="first_name" placeholder="First Name" value="<?= set_value("first_name") ?>" />
								<?= form_error("first_name", '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?= set_value("last_name") ?>" />
								<?= form_error("last_name", '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label text-right">E-mail Address</label>
							<div class="col-sm-8">
								<input class="form-control" type="text" name="email_address" placeholder="E-mail Address" value="<?= set_value("email_address") ?>" />
								<?= form_error("email_address", '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label text-right">Password</label>
							<div class="col-sm-8">
								<input class="form-control" type="password" name="password" placeholder="Password" />
								<?= form_error("password", '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label text-right">Role</label>
							<div class="col-sm-4">
								<select class="form-control" name="role">
									<option value="" selected disabled>Role</option>
									<?php foreach ($roles as $role): ?>
									<option value="<?= $role["id"] ?>" <?= set_value("role") == $role["id"] ? "selected" : "" ?>><?= $role["name"] ?></option>
									<?php endforeach; ?>
								</select>
								<?= form_error("role", '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="col-sm-4 col-form-label">
								<a href="<?= base_url("roles/create") ?>">Create role</a>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<button class="btn btn-primary" type="submit">Create</button>
								<a class="btn btn-secondary" href="<?= base_url("users") ?>">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>