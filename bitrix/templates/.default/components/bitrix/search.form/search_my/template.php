<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<div style="width:232px">
	<form action="<?=$arResult["FORM_ACTION"]?>">
		<div class="hd_search_form" style="float:right;">
			<input type="text" name="q" value="" placeholder="Поиск"/>
			<input name="s" type="submit" value="" >
		</div>
	</form>
</div>