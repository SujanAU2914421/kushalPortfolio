<?php
	session_start();

	if($_SESSION['email']){
		echo "<script>console.log('logged in')</script>";
	} else{
		echo "<script>console.log('not logged in')</script>";
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#000000" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&amp;display=swap"
			rel="stylesheet"
		/>
		<title>Kush intertainment</title>

		<!-- global css -->
		<style type="text/css">
			::-webkit-scrollbar {
				display: none;
			}
			@font-face {
				font-family: Inter Var;
				src: url(./fonts/Inter-roman.var.woff2);
			}

			*,
			*::after,
			*::before {
				font-feature-settings: "cv02", "cv03", "cv04", "cv11";
				-webkit-font-smoothing: antialiased;
				margin: 0;
				padding: 0;
			}
		</style>

		<link rel="stylesheet" href="./tailwind.css" />
		<!-- tailwindcss implimentation -->
	</head>
	<body>
		<noscript>You need to enable JavaScript to run this app.</noscript>
		<div id="root">
			<div class="relative h-screen w-screen bg-black text-white">
				<div class="relative h-full w-full">
					<div class="fixed top-0 h-[70px] w-full z-30 bg-black/50 navBar">
						<div
							class="relative h-full w-full flex items-center justify-between xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4"
						>
							<div class="relative h-auto w-auto">
								<div class="relative h-auto w-auto text-xl font-bold uppercase">
									Kush blog
								</div>
							</div>
							<div
								class="relative h-auto w-auto xl:hidden lg:hidden md:hidden flex items-center justify-center group"
							>
								<div
									class="relative h-[40px] w-[40px] bg-black flex items-center justify-center text-white hover:bg-white hover:text-black duration-200 cursor-pointer"
								>
									<svg
										xmlns="http://www.w3.org/2000/svg"
										width="24"
										height="24"
										viewBox="0 0 24 24"
										fill="none"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
										class="feather feather-menu"
									>
										<line x1="3" y1="12" x2="21" y2="12"></line>
										<line x1="3" y1="6" x2="21" y2="6"></line>
										<line x1="3" y1="18" x2="21" y2="18"></line>
									</svg>
								</div>
								<div
									class="absolute w-[150px] z-30 group-hover:block hidden py-3 px-3 bg-transparent top-[40px] right-0 text-white text-right"
								>
									<a href="./index.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2 py-1"
										>
											Home
										</div>
									</a>
									<a href="./qanda.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2 py-1"
										>
											qanda
										</div>
									</a>
									<a href="./members.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2 py-1"
										>
											members
										</div>
									</a>
									<a href="./notice.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2 py-1"
										>
											notice
										</div>
									</a>
									<a href="./notice.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2 py-1"
										>
											notice
										</div>
									</a>
									<?php
										if(!$_SESSION['email']){
											echo "
											<div class='relative h-auto w-full flex gap-6 items-center' style='margin-left:auto'>
												<a href='./login.php'>
													<div
													class='relative h-[40px] w-[150px] border bg-white text-black justify-center flex items-center gap-3 px-3'
													>
														<div class='relative h-auto w-auto'>login</div>
													</div>
												</a>
											</div>
											";
										} else{
											echo "
											<div class='relative h-auto w-auto flex gap-6 items-center'>
											<a style='position: absolute; display: none; right: 0; top:26px' href='./logout.php' class='logouts'>
											<div
											class='relative h-[40px] w-auto border bg-white text-black flex items-center gap-3 px-3'
											>
											<div class='relative h-auto w-auto'>logout</div>
											</div>
											</a>
											<div class='cursor-pointer logoutbtn'>
												<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-power'><path d='M18.36 6.64a9 9 0 1 1-12.73 0'></path><line x1='12' y1='2' x2='12' y2='12'></line></svg>
											</div>
											</div>
											";
										}
									?>
								</div>
							</div>
							<div
								class="relative h-auto w-auto items-center text-xs font-bold uppercase gap-6 text-gray-400 xl:flex lg:flex md:flex hidden"
							>
								<div
									class="relative h-auto w-auto flex gap-6 items-center pr-3"
								>
									<a href="./index.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2"
										>
											Home
										</div>
									</a>
									<a href="./qanda.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2"
										>
											qanda
										</div>
									</a>
									<a href="./members.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2"
										>
											members
										</div>
									</a>
									<a href="./notice.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2"
										>
											notice
											<div class="absolute" style="background: white; height: 2px; width: 100%; top: 20px"></div>
										</div>
									</a>
									<a href="./contact.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2"
										>
											contact
										</div>
									</a>
								</div>
								<?php
									if(!$_SESSION['email']){
										echo "
										<div class='relative h-auto w-auto flex gap-6 items-center'>
											<a href='./login.php'>
												<div
												class='relative h-[40px] w-auto border bg-white text-black flex items-center gap-3 px-3'
												>
													<div class='relative h-auto w-auto'>login</div>
												</div>
											</a>
										</div>
										";
									} else{
										echo "
										<a href='./logout.php'>
										<div
											class='relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2'
										>
											logout
										</div>
									</a>
										";
									}
								?>
							</div>
						</div>
					</div>
					<div
						class="relative h-screen w-screen overflow-y-auto scrollContainer"
					>
						<div class="relative h-auto w-screen">
							<div class="fixed top-0 left-0 h-screen w-screen">
								<div class="relative h-full w-full bg-black"></div>
								<div
									class="absolute top-0 left-0 h-full w-full bg-gradient-to-l from-black/30 to-black/80"
								></div>
							</div>
							<div
								class="relative h-auto w-full flex items-center z-10 bg-black/40 xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4"
							>
								<div class="relative h-auto w-full">
									<div class="relative h-auto w-full grid gap-16 pt-32">
										<div class="relative w-auto h-auto">
											<div
												class="relative h-auto w-auto xl:text-7xl lg:text-7xl md:text-5xl sm:text-3xl text-xl font-extrabold"
											>
												Notice
											</div>
											<div
												class="relative h-[32px] w-[200px] flex items-center"
											>
												<div class="relative h-[3px] w-full bg-white"></div>
											</div>
										</div>
										<div
											class="relative h-auto w-full bg-white text-black px-20 py-16 grid gap-8"
										>
											<div class="relative w-auto h-auto grid gap-3">
												<div
													class="relative h-auto w-auto text-3xl font-extrabold"
												>
													Notice
												</div>
												<div
													class="relative h-auto w-[200px] flex items-center"
												>
													<div
														class="relative h-[3px] w-full bg-gray-400"
													></div>
												</div>
											</div>
											<div class="relative h-auto w-full grid gap-4">
												<div
													class="relative h-auto w-full px-4 py-3 border noticeContainer"
													style="background: #fff; border: 1px solid lightgray"
												>
													<div
														class="relative h-auto w-auto flex items-center justify-between"
													>
														<div class="relative text-xs font-bold">
															Audition
														</div>
														<div
															class="relative h-auto w-auto iconContainer"
														></div>
													</div>
													<div
														class="relative h-auto w-full text-xs font-light px-4 py-3 noticebox"
														style="display: none"
													>
														<div class="relative h-auto w-auto">
															We are conducting audtion program on 2022 in jhapa
															Birtamode...
														</div>
													</div>
												</div>
												<div
													class="relative h-auto w-full px-4 py-3 border noticeContainer"
													style="background: #fff; border: 1px solid lightgray"
												>
													<div
														class="relative h-auto w-auto flex items-center justify-between"
													>
														<div class="relative text-xs font-bold">
															New members
														</div>
														<div
															class="relative h-auto w-auto iconContainer"
														></div>
													</div>
													<div
														class="relative h-auto w-full text-xs font-light px-4 py-3 noticebox"
														style="display: none"
													>
														<div class="relative h-auto w-auto">
															We appriciate that all our members are like gems.
															We are working hard to make it sucessful company.
														</div>
													</div>
												</div>
												<div
													class="relative h-auto w-full px-4 py-3 border noticeContainer"
													style="background: #fff; border: 1px solid lightgray"
												>
													<div
														class="relative h-auto w-auto flex items-center justify-between"
													>
														<div class="relative text-xs font-bold">
															Who is the director
														</div>
														<div
															class="relative h-auto w-auto iconContainer"
														></div>
													</div>
													<div
														class="relative h-auto w-full text-xs font-light px-4 py-3 noticebox"
														style="display: none"
													>
														<div class="relative h-auto w-auto">
															Our director is an very wise men. He is an young
															rising model . He is Samyog Koirala.
														</div>
													</div>
												</div>
												<div
													class="relative h-auto w-full px-4 py-3 border noticeContainer"
													style="background: #fff; border: 1px solid lightgray"
												>
													<div
														class="relative h-auto w-auto flex items-center justify-between"
													>
														<div class="relative text-xs font-bold">
															What is this website for..
														</div>
														<div
															class="relative h-auto w-auto iconContainer"
														></div>
													</div>
													<div
														class="relative h-auto w-full text-xs font-light px-4 py-3 noticebox"
														style="display: none"
													>
														<div class="relative h-auto w-auto">
															To show the portfolio of the stars entertainment
															company....
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div
								class="relative h-auto w-full py-6 bg-black flex items-center justify-between xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4 mt-16"
							>
								<div class="relative h-auto w-auto grid gap-3">
									<div
										class="relative h-auto w-auto flex items-center divide-x text-xs font-bold"
									>
										<div class="relative pr-4">Privacy Policy</div>
										<div class="relative pl-4">Terms of Use</div>
									</div>
									<div class="relative h-auto want text-[9px] uppercase">
										© 2022 k-Entertainment Nep
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script>
			var swiper = new Swiper(".mySwiper", {
				spaceBetween: 0,
				centeredSlides: true,
				autoplay: {
					delay: 5000,
					disableOnInteraction: false,
				},
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			});
		</script>
		<script src="./index.js"></script>
		<script src="./notice.js"></script>
	<script src="./logoutBtn.js"></script>
	</body>
</html>
