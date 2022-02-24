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
		<meta
			name="description"
			content="Web site created using create-react-app"
		/>
		<link rel="apple-touch-icon" href="/logo192.png" />
		<!--
    manifest.json provides metadata used when your web app is installed on a
    user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
  -->
		<link rel="manifest" href="/manifest.json" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&amp;display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://unpkg.com/swiper/swiper-bundle.min.css"
		/>
		<!--
    Notice the use of  in the tags above.
    It will be replaced with the URL of the `public` folder during the build.
    Only files inside the `public` folder can be referenced from the HTML.

    Unlike "/favicon.ico" or "favicon.ico", "/favicon.ico" will
    work correctly both with client-side routing and a non-root public URL.
    Learn how to configure a non-root public URL by running `npm run build`.
  -->
		<title>Members</title>

		<!-- global css -->
		<style type="text/css">
			::-webkit-scrollbar {
				display: none;
			}
			@font-face {
				font-family: Inter Var;
				src: url(./fonts/Inter-roman.var.woff2);
			}

			.swiper-slide {
				background: #0000;

				/* Center slide text vertically */
				display: -webkit-box;
				display: -ms-flexbox;
				display: -webkit-flex;
				display: flex;
				-webkit-box-pack: center;
				-ms-flex-pack: center;
				-webkit-justify-content: center;
				justify-content: center;
				-webkit-box-align: center;
				-ms-flex-align: center;
				-webkit-align-items: center;
				align-items: center;
			}

			.swiper-slide img {
				display: block;
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
		</style>

		<!-- tailwindcss implimentation -->
		<link rel="stylesheet" href="./tailwind.css" />
		<script defer="" src="/static/js/bundle.js"></script>
		<script
			type="text/javascript"
			src="chrome-extension://aadgmnobpdmgmigaicncghmmoeflnamj/ng-inspector.js"
		></script>
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
											<div class="absolute" style="background: white; height: 2px; width: 100%; top: 20px"></div>
										</div>
									</a>
									<a href="./notice.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2"
										>
											notice
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
								class="relative h-auto w-full flex items-center z-10 bg-black/40"
							>
								<div class="relative h-auto w-full">
									<div
										class="relative left-0 top-0 h-screen w-screen flex items-center justify-center mb-[100px] text-white uppercase text-7xl font-extrabold"
									>
										<div class="swiper mySwiper h-full w-full">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div
														class="relative h-full w-full flex items-end grayscale pb-32"
														style="
															background: url(https://images.unsplash.com/photo-1598520059393-1fd1b7f85e35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80);
															background-size: cover;
															background-position: center;
														"
													>
														<div
															class="relative h-auto w-auto grid gap-4 xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4"
														>
															<div
																class="relative h-auto w-auto text-5xl text-white font-extrabold"
															>
																Members
															</div>
															<div
																class="relative h-auto w-1/2 text-sm font-light text-gray-300"
															>
																The perfect members of star production from
																Jhapa
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div
														class="relative h-full w-full flex items-end grayscale pb-32"
														style="
															background: url(https://images.unsplash.com/photo-1464666495445-5a33228a808e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80);
															background-size: cover;
															background-position: center;
														"
													>
														<div
															class="relative h-auto w-auto grid gap-4 xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4"
														>
															<div
																class="relative h-auto w-auto text-5xl text-white font-extrabold"
															>
																Stars
															</div>
															<div
																class="relative h-auto w-1/2 text-sm font-light text-gray-300"
															>
																Some rising stars who's gonna be the future of
																mnodeling
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div
														class="relative h-full w-full flex items-end grayscale pb-32"
														style="
															background: url(https://images.unsplash.com/photo-1506869640319-fe1a24fd76dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);
															background-size: cover;
															background-position: center;
														"
													>
														<div
															class="relative h-auto w-auto grid gap-4 xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4"
														>
															<div
																class="relative h-auto w-auto text-5xl text-white font-extrabold"
															>
																Group
															</div>
															<div
																class="relative h-auto w-1/2 text-sm font-light text-gray-300"
															>
																Best poeple best group.
															</div>
														</div>
													</div>
												</div>
											</div>
											<div
												class="swiper-button-next scale-[0.5] text-white"
											></div>
											<div
												class="swiper-button-prev scale-[0.5] text-white"
											></div>
											<div class="swiper-pagination"></div>
										</div>
									</div>
									<div
										class="relative h-auto w-full bg-black text-black"
									>
										<div class="relative text-white text-xl xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4">All members</div>
										<div
											class="relative h-auto w-full px-16 flex justify-center text-black" style="padding-bottom: 100px; padding-top: 25px"
										>
											<div class="relative h-auto w-full flex gap-4 flex-wrap justify-center">
												<div class="relative h-auto w-[200px] border">
													<div
														class="relative h-[200px] w-full"
														style="
															background: url(https://scontent.fbir2-1.fna.fbcdn.net/v/t1.15752-9/273048878_334547278686292_8005188343823464746_n.png?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=fP47ktdKJRAAX9CFZpV&_nc_ht=scontent.fbir2-1.fna&oh=03_AVIBntRsD6BkO0vjazsQGMl_TATcFewUc3knwXlvF9J3VA&oe=6237DA62);
															background-size: cover;
															background-position: center;
															background-repeat: no-repeat;
														"
													></div>
													<div
														class="relative h-auto w-full text-sm font-semibold bg-white px-3 py-3"
													>
														<div class="relative text-sm text-gray-700">
															Ceo & Director
														</div>
														<div class="relative text-xs">Samyog Koirala</div>
													</div>
												</div>
												<div class="relative h-auto w-[200px] border">
													<div
														class="relative h-[200px] w-full"
														style="
															background: url(https://scontent.fbir2-1.fna.fbcdn.net/v/t1.15752-9/273956928_1167613064061914_345439636403042904_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_ohc=HuqCxIjgatgAX_ArCUb&_nc_ht=scontent.fbir2-1.fna&oh=03_AVINdkc3CSt66Cx4r-DXcjokCtM6DyCPLHF6dK5pYc_e1A&oe=6237F5AB);
															background-size: cover;
															background-position: center;
															background-repeat: no-repeat;
														"
													></div>
													<div
														class="relative h-auto w-full text-sm font-semibold bg-white px-3 py-3"
													>
														<div class="relative text-sm text-gray-700">
															Ceo
														</div>
														<div class="relative text-xs">Suman Sharma</div>
													</div>
												</div>
												<div class="relative h-auto w-[200px] border">
													<div
														class="relative h-[200px] w-full"
														style="
															background: url(https://scontent.fbir2-1.fna.fbcdn.net/v/t1.15752-9/272939310_1400344817081173_4610943574437623512_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=as5uyk9n9IkAX9rv0OV&_nc_oc=AQnmjrkjsF7JvECVon9ubXkc-xxdXpKupbFTPGYG6dqcjIdidIms5ItvjjF1RSbXYvY&tn=qs9e22VchhcLqxGh&_nc_ht=scontent.fbir2-1.fna&oh=03_AVL51OumuvyZhnt8GGqsDX0-Nve0lxwWL4JVcX6a8TNIfQ&oe=623AFBC1);
															background-size: cover;
															background-position: center;
															background-repeat: no-repeat;
														"
													></div>
													<div
														class="relative h-auto w-full text-sm font-semibold bg-white px-3 py-3"
													>
														<div class="relative text-sm text-gray-700">
															Event Manager
														</div>
														<div class="relative text-xs">Kushal Giri</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div
								class="relative h-auto w-full py-6 bg-black flex items-center justify-between xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4"
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
	<script src="./logoutBtn.js"></script>
	</body>
</html>
