<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title><?=$data['title']?> - <?=APP_NAME?></title>
		<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css">
	</head>
	<body>
		<!-- header - brand logo, navigation bar, login button -->
		<header id="main-header">
			<table id="logo-nav-login">
				<tbody>
					<tr>
						<td>
							<h1 id="branding"><a href="<?=URL?>home">Get-Gas</a></h1>
						</td>
						<td>
							<nav>
								<ul>
									<?php
										for ($i=0; $i<count($data['menu-items']); $i++) {
											if (check_if_current_page($data['menu-items'][$i]->controller_menu)) : ?>
												<li class="current"><a href="<?=URL?><?=$data['menu-items'][$i]->controller_menu?>"><?=$data['menu-items'][$i]->title_menu?></a></li>
											<?php else :?>
												<li><a href="<?=URL?><?=$data['menu-items'][$i]->controller_menu?>"><?=$data['menu-items'][$i]->title_menu?></a></li>
											<?php endif;?> 
										<?php
										}
									?>
								</ul>
							</nav>
						</td>
						<td>
							<?php if (!empty($_SESSION['user_data'])) : ?>
								<span id="logout"><a class="button" href="<?=URL?>logout">Logout</a></span>
							<?php else :?>
								<span id="login"><a class="button" href="<?=URL?>login">Login</a></span>
							<?php endif ;?>
							
						</td>
					</tr>
				</tbody>
			</table>
		</header>    <!-- here ends the main header -->