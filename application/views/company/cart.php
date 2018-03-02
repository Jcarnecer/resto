<link rel="stylesheet" type="text/css" href="assets/css/welcome.css">

<div id="selectionModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content login-card rounded-0">
			<div class="modal-body p-3">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="openSubscription(event)">Purchase</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div id="subscriptionModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="card login-card">
			<div class="card-header border-bottom-0">
				<h3 class="text-center mt-3">Select Subscription</h3>
				<span class="d-block text-center">Pay with <img class="img-fluid w-25" src="<?= base_url('assets/images/paypal.png') ?>" alt="PayPal" srcset=""></span>
			</div>
			<div class="card-body">
				<div class="list-group">
					<button class="list-group-item list-group-item-action" onclick="purchase(event)"data-value="trial">
						<div class="d-flex w-100">
							<span class="font-weight-bold w-75">30 Days Trial</span>
							<span class="font-weight-bold">FREE</span>
						</div>
					</button>
					<button class="list-group-item list-group-item-action" onclick="purchase(event)"data-value="personal">
						<div class="d-flex w-100">
							<span class="font-weight-bold w-75">Single User</span>
							<span class="font-weight-bold">$7<small> per month</small></span>
						</div>
					</button>
					<button class="list-group-item list-group-item-action" onclick="purchase(event)"data-value="company">
						<div class="d-flex w-100">
							<span class="font-weight-bold w-75">Company</span>
							<span class="font-weight-bold">$29<small> per month</small></span>
						</div>
					</button>
					<button class="list-group-item list-group-item-action" onclick="purchase(event)"data-value="suite">	
						<div class="d-flex w-100">
							<span class="font-weight-bold w-75">App Suite <small class="text-success font-weight-bold">(Best Value)</small></span>
							<span class="font-weight-bold">$59<small> per month</small></span>
						</div>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid h-100 login-body">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-md-12 my-auto">
				<img src="assets/images/payak-logo-white-60.png" alt="Payak logo" class="pt-2 pb-2 d-block mx-auto">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-5 mx-auto">
				<div class="card login-card">
					<div class="card-header border-bottom-0">
						<h3 class="text-center mt-3">Select Subscription</h3>
					</div>
					<div class="card-body">
						<div class="list-group font-weight-bold h4">
							<button class="list-group-item list-group-item-action" onclick="purchase(event)"data-value="trial">
								<div class="row w-100">
									<div class="col-7">30 Days Trial</div>
									<div class="col-5 text-right">FREE</div>
								</div>
							</button>
							<button class="list-group-item list-group-item-action" onclick="purchase(event)"data-value="personal">
								<div class="row w-100">
									<div class="col-7">Single User</div>
									<div class="col-5 text-right">$ 7<small>/month</small></div>
								</div>
							</button>
							<button class="list-group-item list-group-item-action" onclick="purchase(event)"data-value="suite">	
								<div class="row w-100">
									<div class="col-7">App Suite <small class="text-success font-weight-bold">(Best Value)</small></div>
									<div class="col-5 text-right">$ 29<small>/month</small></div>
								</div>
							</button>
						</div>
					</div>
					<div class="card-footer text-center">
						<a href="#"><small>Already have an account?</small></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="<?= base_url('companies/checkout') ?>" method="post" id="subscriptionForm">
		<input type="hidden" name="type">
	</form>

	<script>
		(function($) {
			$('[data-toggle="tooltip"]').tooltip();
		}(jQuery));

		function purchase(e) {
			e.preventDefault();
			$('form#subscriptionForm input[name="type"]').val($(e.target).attr('data-value'));
			$('form#subscriptionForm').submit();
		}
	</script>
</div>