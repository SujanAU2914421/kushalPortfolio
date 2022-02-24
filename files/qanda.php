<?php
	session_start();

	if($_SESSION['email']){
		echo "<script>console.log('logged in')</script>";
	} else{
		echo "<script>console.log('not logged in')</script>";
	}
	if(isset($_POST['submit'])){
		$to_email = 'deecoodeer@gmail.com';
		$subject = "Question to the star production!";
		$question = $_POST['question'];
		$headers = 'From: '.$_SESSION['email'];
		$secure_check = sanitize_my_email($to_email);
		if ($secure_check == false) {
			echo "<script>console.log('failed')</script>";
		} else { //send email 
			mail($to_email, $subject, $question, $headers);
			echo "<script>console.log('msg sent')</script>";
		}
	}
	function sanitize_my_email($field) {
		$field = filter_var($field, FILTER_SANITIZE_EMAIL);
		if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
			return true;
		} else {
			return false;
		}
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

		<!-- tailwindcss implimentation -->		<link rel="stylesheet" href="./tailwind.css" />
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
									Star entertainment
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
											<div class="absolute" style="background: white; height: 2px; width: 100%; top: 20px"></div>
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
						<div class="relative h-screen w-screen">
							<div class="fixed top-0 left-0 h-screen w-screen">
								<div class="relative h-full w-full bg-black"></div>
								<div
									class="absolute top-0 left-0 h-full w-full bg-gradient-to-l from-black/30 to-black/80"
								></div>
							</div>
							<div
								class="relative h-full w-full flex items-center z-10 bg-black/40 xl:px-40 lg:px-40 md:px-16 sm:px-8 px-4"
							>
								<div class="relative h-auto w-full">
									<div
										class="relative h-auto w-full flex items-center justify-center py-[100px] text-white uppercase xl:text-7xl lg:text-7xl md:text-5xl sm:text-3xl text-xl font-extrabold"
									>
										Ask a Question
									</div>
									<div
										class="relative h-auto w-full bg-white text-black px-16 py-16"
									>
										<div class="relative h-auto w-full flex justify-center">
											<form
												method="POST"
												action="./qanda.php"
												class="relative w-[400px] h-auto grid gap-3"
											>
												<div
													class=" h-[40px] w-full border border-gray-300" style="display: <?php if($_SESSION['email']){echo "none";} else{echo "block";} ?>"
												>
													<input
														type="email"
														name="email"
														value="<?php if($_SESSION['email']){echo $_SESSION['email'];} ?>"
														class="relative h-full w-full outline-none text-xs px-4 placeholder-gray-500"
														placeholder="Email"
													/>
												</div>
												<div
													class="relative h-[40px] w-full border border-gray-300"
												>
													<input
														type="text"
														name="question"
														class="relative h-full w-full outline-none text-xs px-4 placeholder-gray-500"
														placeholder="Question"
													/>
												</div>
												<div class="relative h-[40px] w-full">
													<input
														type="submit"
														name="submit"
														class="relative h-full w-full outline-none text-xs px-4 bg-black/90 text-white"
														value="Submit Question"
													/>
												</div>
												<div
													class="relative h-auto w-auto py-4 flex justify-center divide-x"
												>
													<div class="relative text-xs font-semibold">
														Note :
													</div>
													<div class="relative text-xs font-light">
														The email will be uesd as our communication
														connection
													</div>
												</div>
											</form>
										</div>
										<div
											class="relative h-auto w-full flex items-center justify-center gap-4 pt-8"
										>
											<div class="relative h-auto w-[400px] flex gap-4 flex-wrap">
												<a href="#" target="_blank">
													<div
														class="relative h-[60px] w-[60px] flex items-center justify-center border"
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
															class="feather feather-facebook"
														>
															<path
																d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
															></path>
														</svg>
													</div>
												</a>
												<a href="#" target="_blank">
													<div
														class="relative h-[60px] w-[60px] flex items-center justify-center border"
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
															class="feather feather-message-circle"
														>
															<path
																d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
															></path>
														</svg>
													</div>
												</a>
												<a href="#" target="_blank">
													<div
														class="relative h-[60px] w-[60px] flex items-center justify-center border"
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
															class="feather feather-twitter"
														>
															<path
																d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
															></path>
														</svg>
													</div>
												</a>
												<a href="#" target="_blank">
													<div
														class="relative h-[60px] w-[60px] flex items-center justify-center border"
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
															class="feather feather-mail"
														>
															<path
																d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
															></path>
															<polyline points="22,6 12,13 2,6"></polyline>
														</svg>
												</a>
												</div>
												<a href="#" target="_blank">
													<div
														class="relative h-[60px] w-[60px] flex items-center justify-center border"
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
															class="feather feather-instagram"
														>
															<rect
																x="2"
																y="2"
																width="20"
																height="20
												</a>"
															rx="5"
															ry="5"
														></rect>
														<path
															d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
														></path>
														<line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
													</svg>
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
		<!--
    This HTML file is a template.
    If you open it directly in the browser, you will see an empty page.

    You can add webfonts, meta tags, or analytics to this file.
    The build step will place the bundled scripts into the <body> tag.

    To begin the development, run `npm start` or `yarn start`.
    To create a production bundle, use `npm run build` or `yarn build`.
  --></body>
	<script src="./index.js"></script>
	<script src="./notice.js"></script>
	<script src="./logoutBtn.js"></script>
</html>
