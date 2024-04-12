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




<script type="text/javascript" >
	$(document).ready(function(){
	
		$("#foo").carouFredSel({
			items:2,
			prev:'#rwprev',
			next:'#rwnext',
			scroll:{
				items:1,
				duration:2000
			}
		});	
	});	
</script>
<div class="rw_reviewed">
	<div class="rw_slider">
		<h4>Отзывы</h4>
		<ul id="foo">
			<?php foreach ($arResult['ITEMS'] as $arItem) { ?>
				<li>
				<div class="rw_message">
					<img src="<?php echo $arItem['PREVIEW_PICTURE']['SRC']; ?>" class="rw_avatar" alt=""/>
					<span class="rw_name"><?php echo $arItem['NAME']; ?></span>
					<span class="rw_job"><?php echo $arItem['PROPERTIES']['PROFESSION']['VALUE'].', '.$arItem['PROPERTIES']['LOCATION']['VALUE']; ?></span>
					<p>“<?php echo $arItem['PREVIEW_TEXT']; ?>”</p>
					<div class="clearboth"></div>
					<div class="rw_arrow"></div>
				</div>
				</li>	
			<?php }?>
		</ul>
		<div id="rwprev"></div>
		<div id="rwnext"></div>
		<a href="<?=$arResult['CODE']?>" class="rw_allreviewed">Все отзывы</a>
	</div>
</div>