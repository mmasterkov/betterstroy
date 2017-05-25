<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Устройство вентфасада в административном здании");
$APPLICATION->SetTitle("Аксиньино - устройство утеплённого мокрого фасада");
?>
<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании</h1>


<?
$arGallery = array(
  "/img/adm_res/1.JPG",
  "/img/adm_res/2.JPG",
  "/img/adm_res/3.JPG",
  "/img/adm_res/4.JPG",
  "/img/adm_res/5.JPG",
  "/img/adm_res/6.JPG",
  "/img/adm_res/7.JPG",
  "/img/adm_res/8.JPG",
  "/img/adm_res/9.JPG",
);

showGallery($arGallery);
?>

<div style="clear:both;"></div> 

<br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
<?//Подключаем единое порфтолио фасадных работ.
		include("../fasadnye-raboty-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />
  </div>
</div></div></div>















<!--   <div class="fancyibox-block">
                    <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/1.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                       <img src="/img/adm_res/1.JPG">
                   </a>
                   <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/2.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                            <img src="/img/adm_res/2.JPG">
                   </a>
                   <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/3.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                            <img src="/img/adm_res/3.JPG">
                   </a>
        
                   <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/5.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                            <img src="/img/adm_res/5.JPG">
                   </a>
                   <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/6.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                            <img src="/img/adm_res/6.JPG">
                   </a>
                   <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/7.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                            <img src="/img/adm_res/7.JPG">
                   </a>
                   <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/8.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                            <img src="/img/adm_res/8.JPG">
                   </a>
                   <a rel="grup1" class="fancyimage fancyimage-otd" href="/img/adm_res/9.JPG" title="Административное здание Сходненской РЭС Клинмежрайгаз - Устройство вентфасада в административном здании">
                            <img src="/img/adm_res/9.JPG">
                   </a>
				   
			
				  
                  </div>	

<br /><br />

</div></div> -->


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>