<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult["ALL_ITEMS"]))
	return;

if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css'))
	$APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css');

CJSCore::Init();

$menuBlockId = "catalog_menu_".$this->randString();
?>

<div class="sb_nav">
	<ul>
		<?foreach($arResult["ALL_ITEMS"] as $arItem):?>
			<? if($arItem['LINK'] == $_SERVER['REQUEST_URI']): ?>
				<li class="close" style='font-weight: 600'>
			<? else: ?>
				<li class="close">
			<? endif ?>
			<a href="<?=$arItem['LINK']?>"><span><?=$arItem['TEXT']?></span></a></li>
		<?endforeach;?>
	</ul>
</div>