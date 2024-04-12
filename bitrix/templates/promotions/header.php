<!-- подключение ядра -->
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!-- языки -->
<?
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<!-- meta, стили -->
	<?$APPLICATION->ShowHead();?>

	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="stylesheet" href="/bitrix/templates/.default/template_style.css"/>
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>
</head>
<body>
	<!-- админ.панель -->
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<!-- лого -->
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/company_name.php"
								)
							);?>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br/>	
							время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
						<!-- форма авторизации -->
						<?$APPLICATION->IncludeComponent(
							"bitrix:system.auth.form", 
							"auth_my1", 
							array(
								"COMPONENT_TEMPLATE" => "auth_my1",
								"FORGOT_PASSWORD_URL" => "/user/",
								"PROFILE_URL" => "/user/profile.php",
								"REGISTER_URL" => "/user/register.php",
								"SHOW_ERRORS" => "N"
							),
							false
						);?>
						</td>
					</tr>
				</table>
				<!-- Главное меню -->
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"horizontal_my_1",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"COMPONENT_TEMPLATE" => "horizontal_multilevel",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => "",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_THEME" => "site",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N"
					)
				);?>
				
			</div>
		</div>
		
		<!--- хлебные крошки --->
		<?$APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"breadcrumbs_my1",
			Array(
				"PATH" => "",
				"SITE_ID" => "s1",
				"START_FROM" => "0"
			)
		);?>

		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title"><?=$APPLICATION->showTitle()?></p>
						</div>