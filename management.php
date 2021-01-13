1<?php
	session_start();
	if (isset($_SESSION["boothList"]) && is_array($_SESSION["boothList"])) {
		$boothList = $_SESSION["boothList"];
	}

	if (isset($_SESSION["boothManagementList"]) && is_array($_SESSION["boothManagementList"])) {
		$boothManagementList = $_SESSION["boothManagementList"];
	}

	?>

<!doctype html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="">
	<title>配置管理</title>
	<link rel="stylesheet" type="text/css" media="all" href="css/management.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>

<body>
	<div class="header">
		<div class="icon-back"><i class="far fa-hand-point-left"></i></div> <img src="images/pc/下層_Header_photo@2x.png" alt="">
		<div class="header-2"><img class="out-im" src="images/pc/下層_button_ログアウト@2x.png" alt=""></div>
	</div>
	<div class="header-content">
		<div class="header-logo">
			<div class="header-title">配置管理</div><span class="header-subtitle">Configuration management.</span>
		</div>
		<a href="" class="btn btn-border">ステータス詳細はこちら</a>
		<div class="care">
			<span class="care-title">※配置確定後必ず前後日の業務サイトメモ欄の確認をお願いします。</span>
			<span class="care-title">※全ブースノベルティ・風船手渡しNGです！</span>
		</div>
		<ul class="icon">
			<li class="icon-item">

				<img class="icon-items" id="open-btn" src="images/pc/下層_icon_配置アイコン@2x.png" alt="">
				<div id="overlay" class="close">
					<div class="flex">
						<div class="overlay-inner">
							<div class="title-fl">
								<p class="staff">
									当日空いているスタッフ担当者情報
								</p>

							</div>
							<p class="staff-can">以下のスタッフ担当者と入れ替わる事が出来ます。</p>
							<div class="booth-detail">
								<p class="booth-detail-c">ブース詳細</p>
								<div class="b-d-c">
									<p class="b-d-c1" style="text-align: start;">イオンモール品川</p>
									<p class="b-d-c2">東京都</p>
								</div>
							</div>
							<div class="wrapper-staff">
								<div class="wrap1" ondragover="f_dragover(event)" ondrop="f_drop(event)">
									<p>現場スタッフチーム</p>
									<div class="staff-cheam-1" ondragover="f_dragover(event)" ondrop="f_drop(event)">
										<div class="staff1" draggable="true" ondragstart="f_dragstart(event)" id="name1"><i class="fas fa-burn man fa-fw"></i>本山健太</div>
										<div class="staff1" draggable="true" ondragstart="f_dragstart(event)" id="name2"><i class="fas fa-burn woman fa-fw"></i>本山健太</div>
									</div>
								</div>

								<div class="wrap2">
									<p>現場スタッフチーム</p>
									<div class="staff-cheam-2">
										<div class="staff2"><i class="fas fa-burn man fa-fw"></i>本山健太</div>
										<div class="staff2"><i class="fas fa-burn woman fa-fw"></i>本山健太</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<button id="close-btn" class="close">Back</button>
							</div>
						</div>
					</div>
				</div>

				<span class="icon-title">ss</span>
			</li>
			<li class="icon-item">
				<img class="icon-items" src="images/pc/下層_icon_希望アイコン@2x.png" alt="">
				<span class="icon-title">ss</span>
			</li>
			<li class="icon-item">
				<img class="icon-items" src="images/pc/下層_icon_実績アイコン@2x.png" alt="">
				<span class="icon-title">ss</span>
			</li>
		</ul>

	</div>

	<div class="x_data_area">

		<div class="lock_box">
			<table class="width300 data">
				<div class="wrapper">
					<div class="booth">ブース名</div>
					<div class="prefectures">都道府県</div>
					<div class="status">ステータス</div>
					<div class="place">場所代<br>平日<span class="holidays" style="color: white;">土日</span></div>
				</div>
			</table>

			<?php
			$i = 1;
			$boothID = "";
			$date = "";
			foreach ($boothManagementList as $value) {

				if ($boothID != $value[0]) {
			?>

					<div class="wrapper-2">
						<div class="gen wm" style="width: 8%;">富士</div>
						<div class="booth-menu wm" style="width: 40%;"><?php echo $boothList[$value[0][0]][0]; ?></div>
						<div class="prefectures-menu wm" style="width: 13%;"><?php echo $boothList[$value[0][0]][3]; ?></div>
						<div class="status-menu wm" style="width: 13%;">未確定</div>
						<div class="place-menu wm" style="width: 13%;"><?php echo $boothList[$value[0][0]][1]; ?></div>
						<div class="place-menu wm" style="width: 13%; border-right: none;"><?php echo $boothList[$value[0][0]][2]; ?></div>

					</div>

				<?php
				}
				?>
			<?php
				$boothID = $value[0];
				$date = $value[1];
				$i++;
			}
			?>

		</div>
		<!-- ここから右画面-->
		<div class="x_scroll_box">
			<?php
			for ($j = 0; $j < 7; $j++) {
			?>
				<div class="width2500 data">


					<div class="dates" style="color: white;">2021/1/12</div>

					<div class="date-menu" style="width: 100%;">
						<div class="menu-item menu-1">
							人数
						</div>
						<div class="menu-item menu-2">
							予算
						</div>
						<div class="menu-item menu-3">
							総予算
						</div>
						<div class="menu-item menu-4">
							210
						</div>
						<div class="menu-item menu-5">
							予算AVE
						</div>
						<div class="menu-item menu-6">
							4.67
						</div>
					</div>



					<div class="scroll-wrap">
						<div class="scroll-menu" style="width: 7%;">
							<p class="yellow"></p>
						</div>
						<div class="scroll-menu" style="width: 7%;">
							<p class="yellow"></p>
						</div>
						<div class="scroll-menu" style="width: 13%;">
							<p class="blue">本山</p>
							<div class="close overlay">
								<div class="overlay-inner">
									<div class="wrap-mol2">
										<div class="header-mol">
											<a href="" class="btn2 btn-border">①スタッフ別獲得ランキング</a>
											<a href="" class="btn2 btn-border" style="margin-left: 1em;">②組み合わせ別獲得ランキング</a>
										</div>
										<div class="rank-title">
											組み合わせ別獲得ランキング情報
										</div>
										<p class="p">ブース名</p>
										<div class="booth-name">
											<div style="font-size: 2em; margin-right: auto; font-weight: bold; color: gray;">イオンモール日の出</div>
											<div class="period"><?php echo date('Y年m月1日〜t日'); ?></div>
											<div class="back">
												<</div> <div class="next">>
											</div>


										</div>
										<div class="staff-rank">
											<div class="staff-rank-title">
												<p>No</p>
												<p>スタッフ名</p>
												<p>獲得件数</p>
											</div>
											<div class="staff-rank-d">
												<div class="staff-rank-d1">1</div>
												<div class="staff-rank-d2">fdbgng</div>
												<div class="staff-rank-d3">w</div>
											</div>

										</div>
										<div class="panel">
											<button id="close-btn" class="close">Back</button>
										</div>
									</div>
								</div>
							</div>


						</div>
						<div class="scroll-menu" style="width: 13%;">
							<p class="blue">もとやま</p>
						</div>
						<div class="scroll-menu">
							<p class="pink">eee</p>
						</div>
						<div class="scroll-menu">
							<p class="pink">fff</p>
						</div>
						<div class="scroll-menu">
							<p class="pink">ggg</p>
						</div>
						<div class="scroll-menu">
							<p>hhh</p>
						</div>
						<div class="scroll-menu">
							<p>iii</p>
						</div>
						<div class="scroll-menu" style="border-right: none;">
							<p>jjj</p>
						</div>
					</div>


				</div>
			<?php
			}
			?>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/popover.js"></script>
</body>

</html>
