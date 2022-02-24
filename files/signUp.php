<?php
    session_start();
	$err = "";
	$username = "";
	$email = "";
	$conn = mysqli_connect("localhost", "id18500096_root", "sujanL!234567890", "id18500096_users");
	if($conn){
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$username = $_POST['username'];
			if($_POST['password'] == $_POST['confPassword']){$password = $_POST['password'];
				echo "<script>console.log('password matched')</script>";
				$insrt = "INSERT INTO members(username, email, password) VALUES('$username', '$email', '$password')";
				$exec = $conn->query($insrt);
				if($exec){
					$_SESSION["email"] = $email;
					$_SESSION["username"] = $username;
					header("Location: ./index.php");
				} else{
					$err = "User with same email already exists";
				}
			} else{
				$err = "password didn't matched";
			}
		} else{
			$err = "Fill Input and submit";
		}
	} else{
		$err = "db connection failed";
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#000000" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&amp;display=swap"
			rel="stylesheet"
		/>
		<title>Contact</title>

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
		</style>		<link rel="stylesheet" href="./tailwind.css" />

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
									<div class='relative h-auto w-auto flex gap-6 items-center'>
										<a href='./signUp.php'>
											<div
											class='relative h-[40px] w-[150px] justify-center border bg-white text-black flex items-center gap-3 px-3'
											>
												<div class='relative h-auto w-auto'>sign up</div>
											</div>
										</a>
									</div>
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
									<a href="./contact.php">
										<div
											class="relative h-auto w-auto hover:text-white duration-200 cursor-pointer px-2"
										>
											COntact
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
								</div>
								<div class='relative h-auto w-auto flex gap-6 items-center'>
									<a href='./login.php'>
										<div
										class='relative h-[40px] w-auto border bg-white text-black flex items-center gap-3 px-3'
										>
											<div class='relative h-auto w-auto'>login</div>
										</div>
									</a>
								</div>
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
										class="relative h-auto w-full flex items-center justify-center py-[100px] text-white uppercase text-7xl font-extrabold"
									>
										Be a member.
									</div>
									<div
										class="relative h-auto w-full bg-white px-16 py-16 flex justify-center text-black"
									>
										<form
											method="POST"
											action="./signUp.php"
											class="relative w-[400px] h-auto grid gap-3"
										>
											<?php
												if($err != ""){
                                                    if($err == "User with same email already exists"){
                                                        echo "
                                                            <div class='relative text-red-400'>
                                                            <span>".$err
                                                            ."</span>
                                                            <a href='./login.php' style='color: blue'>login!</a>
                                                            </div>
                                                        ";
                                                    }
												} else{
													echo "<script>console.log('no error')</script>";
												}
											?>
											<div
												class="relative h-[40px] w-full border border-gray-300"
											>
												<input
													required
													type="text"
													name="email"
													value="<?php echo $email; ?>"
													class="relative h-full w-full outline-none text-xs px-4 placeholder-gray-500"
													placeholder="email"
												/>
											</div>
											<div
												class="relative h-[40px] w-full border border-gray-300"
											>
												<input
													required
													type="text"
													name="username"
													value="<?php echo $username; ?>"
													class="relative h-full w-full outline-none text-xs px-4 placeholder-gray-500"
													placeholder="username"
												/>
											</div>
											<div
												class="relative h-[40px] w-full border border-gray-300"
											>
												<input
													required
													type="password"
													name="password"
													class="relative h-full w-full outline-none text-xs px-4 placeholder-gray-500"
													placeholder="password"
												/>
											</div>
											<div
												class="relative h-[40px] w-full border border-gray-300"
											>
												<input
													required
													type="password"
													name="confPassword"
													class="relative h-full w-full outline-none text-xs px-4 placeholder-gray-500"
													placeholder="confirm password"
												/>
											</div>
											<div class="relative h-[40px] w-full">
												<input
													required
													type="submit"
													name="submit"
													value="sign up"
													class="relative h-full w-full outline-none text-xs px-4 bg-black/90 text-white"
												/>
											</div>
										</form>
									</div>
									<div
										class="relative h-auto w-auto py-4 flex justify-center"
									>
										<div class="relative text-xs font-semibold">Note :</div>
										<div class="relative text-xs font-light">
											The email will only be used for communication porpose
											and nothing more.
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
	<script src="./logoutBtn.js"></script>
</html>
