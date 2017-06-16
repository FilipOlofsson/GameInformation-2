<!DOCTYPE html>
<html>
<head>
	<title>Game Information</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="main-page-container">
		<?php include 'navbar.php'; ?>
		<div class="first-page-box">
			<form class="first-page-search" method="post" action="search.php">
				<input type="text" class="first-page-search-box" placeholder="Search for a game..." />
				<select class="first-page-platform-select" required name="platform">
					<<option value="All">Platform</option>
					<option value="All">All</option>
					<option value="PC">Computer</option>
					<option value="PS4">Playstation 4</option>
					<option value="XBOX1">Xbox One</option>
				</select>
				<input type="submit" class="first-page-submit-button" value="SEARCH" />
			</form>
		</div>
		<div class="triangle">

		</div>
	</div>
	<div class="rest-page-container">
		<div class="popular-games-container">
			<div class="title-text">Popular Games</div>
			<div class="popular-games-grid">
				<div class="row1 rows">
					<div class="game-box">
						<div class="game-box-inner">
							<p class="game-box-name">League of Legends</p>
							<div class="star-container">
								<div class="star">★</div>
								<div class="star">★</div>
								<div class="star">★</div>
								<div class="star">★</div>
								<div class="star">☆</div>
							</div>
						</div>
					</div>
					<div class="game-box">
						<div class="game-box-inner">
							<p class="game-box-name"></p>
							<div class="star-container">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
						</div>
					</div>
					<div class="game-box">
						<div class="game-box-inner">
							<p class="game-box-name"></p>
							<div class="star-container">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row2 rows">
					<div class="game-box">
						<div class="game-box-inner">
							<p class="game-box-name"></p>
							<div class="star-container">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
						</div>
					</div>
					<div class="game-box">
						<div class="game-box-inner">
							<p class="game-box-name"></p>
							<div class="star-container">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
						</div>
					</div>
					<div class="game-box">
						<div class="game-box-inner">
							<p class="game-box-name"></p>
							<div class="star-container">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row3 rows">
					<div class="game-box">
						<div class="game-box-inner">
							<p class="game-box-name"></p>
							<div class="star-container">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
						</div>
					</div>
						<div class="game-box">
							<div class="game-box-inner">
								<p class="game-box-name"></p>
								<div class="star-container">
									<div class="star"></div>
									<div class="star"></div>
									<div class="star"></div>
									<div class="star"></div>
									<div class="star"></div>
								</div>
							</div>
						</div>
						<div class="game-box">
							<div class="game-box-inner">
								<p class="game-box-name"></p>
								<div class="star-container">
									<div class="star"></div>
									<div class="star"></div>
									<div class="star"></div>
									<div class="star"></div>
									<div class="star"></div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
