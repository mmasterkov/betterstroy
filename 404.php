<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CHTTP::SetStatus('404 Not Found');
@define('ERROR_404','Y');
$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetPageProperty("title", "Данная страница не существует!");
?>
<!--content-->
<div class="content"> 
   

    <div class="thumb-box1">
        <a  name="services"><div class="container"></a>
           
            <div class="container">
<div ><p style="color:black;">
	<h1>Данная страница не существует!</h1><br />
	Вы можете <a href="/">перейти на главную страницу сайта</a>
</p></div>

</div>
        </div>
    </div>

    

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>