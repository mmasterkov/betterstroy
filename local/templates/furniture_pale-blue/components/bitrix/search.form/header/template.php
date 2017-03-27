<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<form action="<?=$arResult["FORM_ACTION"]?>">
		<input type="text" name="q" maxlength="50" placeholder="ПОИСК ПО САЙТУ"/> <input type="submit" name="s" onfocus="this.blur();" value="найти" id="search-submit-button">
	</form>