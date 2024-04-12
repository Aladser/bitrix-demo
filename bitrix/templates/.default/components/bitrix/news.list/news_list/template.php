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

<div class="cn_hp_lastnews">
	<h3><a href="/news">Новости</a></h3>
	<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<li>
				<h4><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['DISPLAY_ACTIVE_FROM']?></a></h4>
				<p><?=$arItem['NAME']?></p>
			</li>
		<? endforeach ?>
	</ul>
	<br>
	<a href="/news" class="cn_hp_lastnews_more">Все новости →</a>	
</div>