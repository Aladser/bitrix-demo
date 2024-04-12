<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<span class="main_date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>

<div class="news-detail">
	<div class="ps_content">
		<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" align="left" alt=""> 
		<p><?=$arResult['DETAIL_TEXT']?></p>
	</div>
</div>