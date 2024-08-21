<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="headerTop">
	<div class="dropMenuWrap flexBetween">
		<div class="pageNameWrap">
			<h3 class="secTitle">Operate</h3>
		</div>
		<div class="rightWrap">
			<div class="location-info flex flex-col justify-center items-end mr-10px">
				<p class="leading-tight" id="Hales-AC-Service">Hales AC Service</p>
				<p class="leading-tight">4700 95Th St N</p>
				<p class="leading-tight">Saint Petersburg, FL US 33708-3728</p>
			</div>
		</div>
	</div>
</div>

<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
	<div class="headline bg-white p-20px border-b border-gray-200">
		<h1 class="text-2xl">Manage Your Account</h1>
	</div>
	<div class="flex flex-grow justify-start">
		<div class="w-1/4 max-w-200px flex flex-shrink-0 justify-start items-start flex-col">
			<h2 class="text-xl p-15px pt-30px">Company Settings</h2>
			<div class="p-15px">
				<div class="links flex flex-col border-l border-gray-400">
					<!-- <a href="/settings/general/connect-social-media" class="border-blue-500 text-blue-500 border-l-2 p-15px">
						<svg class="svg-inline--fa fa-chart-line mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path
								class=""
								fill="currentColor"
								d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"
							></path>
						</svg>
						General
					</a> -->
					<a href="<?= base_url('/settings/dispatch/campaigns') ?>" class="p-15px" tabindex="0">
						<svg
							class="svg-inline--fa fa-arrow-right-arrow-left mr-5px"
							aria-hidden="true"
							focusable="false"
							data-prefix="fas"
							data-icon="arrow-right-arrow-left"
							role="img"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 448 512"
						>
							<path
								class=""
								fill="currentColor"
								d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z"
							></path>
						</svg>
						Dispatch
					</a>
					<!---->
					<a href="<?= base_url('/settings/contact-card/contact-information') ?>" class="p-15px">
						<svg class="svg-inline--fa fa-address-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path
								class=""
								fill="currentColor"
								d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
							></path>
						</svg>
						Contact Card
					</a>
					<!---->
					<!-- <a href="/settings/billing/billing_subscription" class="p-15px">
						<svg class="svg-inline--fa fa-credit-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path
								class=""
								fill="currentColor"
								d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"
							></path>
						</svg>
						Billing
					</a> -->
				</div>
			</div>
		</div>
		<div class="flex flex-col">
			<div class="sub-menu-bar pl-25px">
				<div class="flex justify-start items-center border-b border-gray-300">
					<a href="<?= base_url('/settings/contact-card/contact-information') ?>" class="p-15px">Contact Information</a>
					<a aria-current="page" href="<?= base_url('/settings/contact-card/templates') ?>" class="border-b-2  router-link-exact-active p-15px">Templates</a>
				</div>
			</div>
				<div class="container">
					<p style="font-size:20px; color:black; margin-left:10px;">Here is our company contact-card feel free to contact us.</p>
					<ul class="cards" style="border:2px solid black;width:600px;margin:15px">
						<li><img src="<?= base_url('/image/campaign/1721044880_6b3f9e64dbee8f537125.jpg') ?>" width="25%">
							<div class="details" style="margin:10px; font-size:17px; line-height:2; color:black">
								<div class="name">RigthAwayGroups</div>
								<div class="title"><?= esc($contactcard['notes']) ?></div>
								<div class="phone"><?= esc($contactcard['primary_number']) ?></div>
								<div class="phone"><?= esc($contactcard['sms_number']) ?></div>
								<div class="email"><?= esc($contactcard['email']) ?></div>
							</div>
						</li> 
					</ul>
				</div>
		</div>
	</div>
</div>
<?= $this->endsection('content') ?>			
