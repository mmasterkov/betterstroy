
//browser-update.org notification script, <browser-update.org>
//Copyright (c) 2007-2015, MIT Style License <browser-update.org/LICENSE.txt>
//It is RECOMMEDED to directly link to this file and not to use a local copy
//because we update and maintain the detection code
var $buo = function(op,test) {
var jsv=18;
var n = window.navigator,b;
this.op=op||{};
//options DerGer4etZ4elt!
this.op.l = op.l||(n.languages ? n.languages[0] : null) || n.language || n.browserLanguage || n.userLanguage||document.documentElement.getAttribute("lang")||"en";
var ll=this.op.l.substr(0,2);
this.op.vsakt = {i:12,f:39,o:30,s:8,n:20,c:43};
this.op.vsdefault = {i:9,f:37,o:12.1,s:6.1,n:12,c:41};
this.op.vsmin={i:8,f:5,o:12,s:5.1,n:12};
var myvs=op.vs||{};
this.op.vs =op.vs||this.op.vsdefault;
for (b in this.op.vsakt) {
    if (this.op.vs[b]>=this.op.vsakt[b])
        this.op.vs[b]=this.op.vsakt[b]-0.2;
    if (!this.op.vs[b])
        this.op.vs[b]=this.op.vsdefault[b];
    if (this.op.vs[b]<this.op.vsmin[b])
        this.op.vs[b]=this.op.vsmin[b];      
}
if (op.reminder<0.1 || op.reminder===0)
    this.op.reminder=0;
else
    this.op.reminder=op.reminder||24;
this.op.reminderClosed=op.reminderClosed||(24*7);
this.op.onshow = op.onshow||function(o){};
this.op.onclick = op.onclick||function(o){};
this.op.onclose = op.onclose||function(o){};
this.op.url= op.url||"//browser-update.org/update-browser.html#"+jsv+":"+(location.hostname||"x");
if (op.l)
	this.op.url= op.url||"//browser-update.org/"+ll+"/update-browser.html#"+jsv+":"+(location.hostname||"x");
this.op.pageurl = op.pageurl || window.location.hostname || "unknown";
this.op.newwindow=(op.newwindow!==false);

this.op.test=test||op.test||false;
if (window.location.hash=="#test-bu")
    this.op.test=true;
/*
if (op.exp && !this.op.test  && Math.round(Math.random()*5000)<1) {
    var ix = new Image();
    ix.src="//browser-update.org/uas.php";
}
*/

function getBrowser(ua_str) {
    var n,v,t,ua=ua_str||navigator.userAgent;
    var names={i:'Internet Explorer',f:'Firefox',o:'Opera',s:'Apple Safari',n:'Netscape Navigator', c:"Chrome", x:"Other"};
    if (/bot|googlebot|facebook|slurp|wii|silk|blackberry|maxthon|maxton|mediapartners|dolfin|dolphin|adsbot|silk|android|phone|bingbot|google web preview|like firefox|chromeframe|seamonkey|opera mini|min|meego|netfront|moblin|maemo|arora|camino|flot|k-meleon|fennec|kazehakase|galeon|android|mobile|iphone|ipod|ipad|epiphany|konqueror|rekonq|symbian|webos|coolnovo|blackberry|bb10|RIM|PlayBook|PaleMoon|QupZilla|YaBrowser|Otter/i.test(ua)) n="x";
    else if (/Trident.*rv:(\d+\.\d+)/i.test(ua)) n="i";
    else if (/Trident.(\d+\.\d+)/i.test(ua)) n="io";
    else if (/MSIE.(\d+\.\d+)/i.test(ua)) n="i";
    else if (/Edge.(\d+\.\d+)/i.test(ua)) n="i";
    else if (/OPR.(\d+\.\d+)/i.test(ua)) n="o";
    else if (/Chrome.(\d+\.\d+)/i.test(ua)) n="c";
    else if (/Firefox.(\d+\.\d+)/i.test(ua)) n="f";
    else if (/Version.(\d+.\d+).{0,10}Safari/i.test(ua))	n="s";
    else if (/Safari.(\d+)/i.test(ua)) n="so";
    else if (/Opera.*Version.(\d+\.\d+)/i.test(ua)) n="o";
    else if (/Opera.(\d+\.?\d+)/i.test(ua)) n="o";
    else if (/Netscape.(\d+)/i.test(ua)) n="n";
    else return {n:"x",v:0,t:names[n]};
    
    var v= parseFloat(RegExp.$1);
    var donotnotify=false;
    //do not notify ver old systems since their is no up-to-date browser available
    if (/windows.nt.5.0|windows.nt.4.0|windows.98|os x 10.4|os x 10.5|os x 10.3|os x 10.2/.test(ua)) donotnotify="oldOS";
    
    //do not notify firefox ESR
    if (n=="f" && (Math.round(v)==24 || Math.round(v)==31))
        donotnotify="ESR";
    //do not notify opera 12 on linux since it is the latest version
    if (/linux|x11|unix|bsd/.test(ua) && n=="o" && v>12) 
        donotnotify="Opera12Linux";
    
    if (n=="x") return {n:"x",v:v||0,t:names[n],donotnotify:donotnotify};
    

    if (n=="so") {
        v=((v<100) && 1.0) || ((v<130) && 1.2) || ((v<320) && 1.3) || ((v<520) && 2.0) || ((v<524) && 3.0) || ((v<526) && 3.2) ||4.0;
        n="s";
    }
    if (n=="i" && v==7 && window.XDomainRequest) {
        v=8;
    }
    if (n=="io") {
        n="i";
        if (v>6) v=11;
        else if (v>5) v=10;
        else if (v>4) v=9;
        else if (v>3.1) v=8;
        else if (v>3) v=7;
        else v=9;
    }	
    return {n:n,v:v,t:names[n]+" "+v,donotnotify:donotnotify};
}

this.op.browser=getBrowser();
if (!this.op.test && (!this.op.browser || !this.op.browser.n || this.op.browser.n=="x" || this.op.browser.donotnotify!==false || (document.cookie.indexOf("browserupdateorg=pause")>-1 && this.op.reminder>0) || this.op.browser.v>this.op.vs[this.op.browser.n]))
    return;


if (!this.op.test  && Math.round(Math.random()*5000)<1) {
    var i = new Image();
    i.src="//browser-update.org/viewcount.php?n="+this.op.browser.n+"&v="+this.op.browser.v + "&p="+ escape(this.op.pageurl) + "&jsv="+jsv+ "&inv="+this.op.v+"&vs="+myvs.i+","+myvs.f+","+myvs.o+","+myvs.s;
}

function setCookie(hours) {
    var d = new Date(new Date().getTime() +1000*3600*hours);
    document.cookie = 'browserupdateorg=pause; expires='+d.toGMTString()+'; path=/';
}
if (this.op.reminder>0) {
    setCookie(this.op.reminder);
}

var languages = "xx,jp,sl,id,uk,rm,da,ca,sv,hu,fa,gl";
if (languages.indexOf(ll)>0)
    this.op.url="//browser-update.org/update.html#"+jsv+"@"+(location.hostname||"x");
var tar="";
if (this.op.newwindow)
    tar=' target="_blank"';

function busprintf() {
    var args=arguments;
    var data = args[ 0 ];
    for( var k=1; k<args.length; ++k ) {
        data = data.replace( /%s/, args[ k ] );
    }
    return data;
}

var t = 'This website would like to remind you: Your browser (%s) is <span style="font-weight:bold;">out of date</span>.\
         <a%s>Update your browser</a> for more security, comfort and the best experience on this site.';
if (ll=="de")
    t = 'Sie verwenden einen <span style="font-weight:bold;">veralteten Browser</span> (%s) mit <span style="font-weight:bold;">Sicherheitsschwachstellen</span> und <span style="font-weight:bold;">k&ouml;nnen nicht alle Funktionen dieser Webseite nutzen</span>. \
        <a%s>Hier erfahren Sie, wie einfach Sie Ihren Browser aktualisieren k&ouml;nnen</a>.';
else if (ll=="it")
    t = 'Il tuo browser (%s) <span style="font-weight:bold;">non è aggiornato</span>. Ha delle <span style="font-weight:bold;">falle di sicurezza</span> e potrebbe <span style="font-weight:bold;">non visualizzare correttamente</span> le \
        pagine di questo e altri siti. \
        <a%s>Aggiorna il tuo browser</a>!';
else if (ll=="pl")
    t = 'Przeglądarka (%s), której używasz, jest przestarzała. Posiada ona udokumentowane <span style="font-weight:bold;">luki bezpieczeństwa, inne wady</span> oraz <span style="font-weight:bold;">ograniczoną funkcjonalność</span>. Tracisz możliwość skorzystania z pełni możliwości oferowanych przez niektóre strony internetowe. <a%s>Dowiedz się jak zaktualizować swoją przeglądarkę</a>.';
else if (ll=="es")
    t = 'Su navegador (%s) <span style="font-weight:bold;">no está actualizado</span>. Tiene <span style="font-weight:bold;">fallos de seguridad</span> conocidos y podría <span style="font-weight:bold;">no mostrar todas las características</span> de este y otros sitios web. <a%s>Averigüe cómo actualizar su navegador.</a>';
else if (ll=="nl")
    t = 'Uw browser (%s) is <span style="font-weight:bold;">oud</span>. Het heeft bekende <span style="font-weight:bold;">veiligheidsissues</span> en kan <span style="font-weight:bold;">niet alle mogelijkheden</span> weergeven van deze of andere websites. <a%s>Lees meer over hoe uw browser te upgraden</a>';
else if (ll=="pt")
    t = 'Seu navegador (%s) está <span style="font-weight:bold;">desatualizado</span>. Ele possui <span style="font-weight:bold;">falhas de segurança</span> e pode <span style="font-weight:bold;">apresentar problemas</span> para exibir este e outros websites. <a%s>Veja como atualizar o seu navegador</a>';
else if (ll=="sl")
    t = 'Vaš brskalnik (%s) je <span style="font-weight:bold;">zastarel</span>. Ima več <span style="font-weight:bold;">varnostnih pomankljivosti</span> in morda <span style="font-weight:bold;">ne bo pravilno prikazal</span> te ali drugih strani. \
        <a%s>Poglejte kako lahko posodobite svoj brskalnik</a>';
else if (ll=="ru")
    t = 'Ваш браузер (%s) <span style="font-weight:bold;">устарел</span>. Он имеет <span style="font-weight:bold;">уязвимости в безопасности</span> и может <span style="font-weight:bold;">не показывать все возможности</span> на этом и других сайтах. <a%s>Узнайте, как обновить Ваш браузер</a>';
else if (ll=="id")
    t = 'Browser Anda (%s) sudah <span style="font-weight:bold;">kedaluarsa</span>. Browser yang Anda pakai memiliki <span style="font-weight:bold;">kelemahan keamanan</span> dan mungkin <span style="font-weight:bold;">tidak dapat menampilkan semua fitur</span> dari situs Web ini dan lainnya. <a%s> Pelajari cara memperbarui browser Anda</a>';
else if (ll=="uk")
    t = 'Ваш браузер (%s) <span style="font-weight:bold;">застарів</span>. Він <span style="font-weight:bold;">уразливий</span> й може <span style="font-weight:bold;">не відображати всі можливості</span> на цьому й інших сайтах. <a%s>Дізнайтесь, як оновити Ваш браузер</a>';
else if (ll=="ko")
    t = '지금 사용하고 계신 브라우저(%s)는 <span style="font-weight:bold;">오래되었습니다.</span> 알려진 <span style="font-weight:bold;">보안 취약점</span>이 존재하며, 새로운 웹 사이트가 <span style="font-weight:bold;">깨져 보일 수도</span> 있습니다. <a%s>브라우저를 어떻게 업데이트하나요?</a>';
else if (ll=="rm")
    t = 'Tes navigatur (%s) è <span style="font-weight:bold;">antiquà</span>. El cuntegna <span style="font-weight:bold;">problems da segirezza</span> enconuschents e mussa eventualmain <span style="font-weight:bold;">betg tut las funcziuns</span> da questa ed autras websites. <a%s>Emprenda sco actualisar tes navigatur</a>.';
else if (ll=="ja")	
	t = 'お使いのブラウザ「%s」は、<span style="font-weight:bold;">時代遅れ</span>のバージョンです。既知の<span style="font-weight:bold;">脆弱性</span>が存在するばかりか、<span style="font-weight:bold;">機能不足</span>によって、サイトが正常に表示できない可能性があります。 \
         <a%s>ブラウザを更新する方法を確認する</a>';
else if (ll=="fr")
	t = 'Votre navigateur (%s) est <span style="font-weight:bold;">périmé</span>. Il contient des <span style="font-weight:bold;">failles de sécurité</span> et pourrait <span style="font-weight:bold;">ne pas afficher certaines fonctionnalités</span> des sites internet récents. <a%s>Découvrez comment mettre votre navigateur à jour</a>';
else if (ll=="da")
        t = 'Din browser (%s) er <span style="font-weight:bold;">for&aelig;ldet</span>. Den har kendte <span style="font-weight:bold;">sikkerhedshuller</span> og kan m&aring;ske <span style="font-weight:bold;">ikke vise alle funktioner</span> p&aring; dette og andre websteder. <a%s>Se hvordan du opdaterer din browser</a>';
else if (ll=="sq")
        t = 'Shfletuesi juaj (%s) është <span style="font-weight:bold;">ca i vjetër</span>. Ai ka <span style="font-weight:bold;">të meta sigurie</span> të njohura dhe mundet të <span style="font-weight:bold;">mos i shfaqë të gjitha karakteristikat</span> e kësaj dhe shumë faqeve web të tjera. <a%s>Mësoni se si të përditësoni shfletuesin tuaj</a>';
else if (ll=="ca")
        t = 'El teu navegador (%s) està <span style="font-weight:bold;">desactualitzat</span>. Té <span style="font-weight:bold;">vulnerabilitats</span> conegudes i pot <span style="font-weight:bold;">no mostrar totes les característiques</span> d\'aquest i altres llocs web. <a%s>Aprèn a actualitzar el navegador</a>';
else if (ll=="tr")
    t = 'Tarayıcınız (%s) <span style="font-weight:bold;">güncel değildir.</span>. Eski versiyon olduğu için <span style="font-weight:bold;">güvenlik açıkları</span> vardır ve görmek istediğiniz bu web sitesinin ve diğer web sitelerinin <span style="font-weight:bold;">tüm özelliklerini hatasız bir şekilde</span> gösteremeyecektir. \
         <a%s>Tarayıcınızı nasıl güncelleyeceğinizi öğrenin!</a>';
else if (ll=="fa")
    t = 'مرورگر شما (%s) <span style="font-weight:bold;">از رده خارج شده</span> می باشد. این مرورگر دارای <span style="font-weight:bold;">مشکلات امنیتی شناخته شده</span> می باشد و <span style="font-weight:bold;">نمی تواند تمامی ویژگی های این</span> وب سایت و دیگر وب سایت ها را به خوبی نمایش دهد. \
         <a%s>در خصوص گرفتن راهنمایی درخصوص نحوه ی به روز رسانی مرورگر خود اینجا کلیک کنید.</a>';
else if (ll=="sv")
    t = 'Din webbläsare (%s) är <span style="font-weight:bold;">föråldrad</span>. Den har kända <span style="font-weight:bold;">säkerhetshål</span> och <span style="font-weight:bold;">kan inte visa alla funktioner korrekt</span> på denna och på andra webbsidor. <a%s>Uppdatera din webbläsare idag</a>';
else if (ll=="hu")
    t = 'Az Ön böngészője (%s) <span style="font-weight:bold;">elavult</span>. Ismert <span style="font-weight:bold;">biztonsági hiányosságai</span> vannak és esetlegesen <span style="font-weight:bold;">nem tud minden funkciót megjeleníteni</span> ezen vagy más weboldalakon. <a%s>Itt talál bővebb információt a böngészőjének frissítésével kapcsolatban</a>		 ';
else if (ll=="gl")
    t = 'O seu navegador (%s) está <span style="font-weight:bold;">desactualizado</span>. Ten coñecidos <span style="font-weight:bold;">fallos de seguranza</span> e podería <span style="font-weight:bold;">non mostrar tódalas características</span> deste e outros sitios web. <a%s>Aprenda como pode actualizar o seu navegador</a>';
else if (ll=="cs")
    t = 'Váš prohlížeč (%s) je <span style="font-weight:bold;">zastaralý</span>. Jsou známy <span style="font-weight:bold;">bezpečnostní rizika</span> a možná <span style="font-weight:bold;">nedokáže zobrazit všechny prvky</span> této a dalších webových stránek. <a%s>Naučte se, jak aktualizovat svůj prohlížeč</a>';
else if (ll=="he")
    t = 'הדפדפן שלך (%s) <span style="font-weight:bold;">אינו מעודכן</span>. יש לו <span style="font-weight:bold;">בעיות אבטחה ידועות</span> ועשוי <span style="font-weight:bold;">לא להציג את כל התכונות</span> של אתר זה ואתרים אחרים. <a%s>למד כיצד לעדכן את הדפדפן שלך</a>';
else if (ll=="nb")
    t='Nettleseren din (%s) er <span style="font-weight:bold;">utdatert</span>. Den har kjente <span style="font-weight:bold;">sikkerhetshull</span> og <span style="font-weight:bold;">kan ikke vise alle funksjonene</span> på denne og andre websider. <a%s>Lær hvordan du kan oppdatere din nettleser</a>';
else if (ll=="zh")
    t='您的浏览器(%s) 需要更新。该浏览器有诸多安全漏洞，无法显示本网站的所有功能。 <a%s>了解如何更新浏览器</a>';
else if (ll=="fi")
    t='Selaimesi (%s) on <span style="font-weight:bold;">vanhentunut</span>. Siinä on tunnettuja tietoturvaongelmia eikä se välttämättä tue kaikkia ominaisuuksia tällä tai muilla sivustoilla. <a%s>Lue lisää siitä kuinka päivität selaimesi</a>.';
else if (ll=="tr")
    t='Tarayıcınız (%s) <span style="font-weight:bold;">güncel değil</span>. Eski versiyon olduğu için <span style="font-weight:bold;">güvenlik açıkları</span> vardır ve görmek istediğiniz bu web sitesinin ve diğer web sitelerinin <span style="font-weight:bold;">tüm özelliklerini hatasız bir şekilde</span> gösteremeyecektir. <a%s>Tarayıcınızı nasıl güncelleyebileceğinizi öğrenin</a>';
else if (ll=="ro")
    t='Browser-ul (%s) tau este <span style="font-weight:bold;">invechit</span>. Detine <span style="font-weight:bold;">probleme de securitate</span> cunoscute si poate <span style="font-weight:bold;">sa nu afiseze corect</span> toate elementele acestui si altor site-uri. <a%s>Invata cum sa-ti actualizezi browserul.</a>';
else if (ll=="bg")
    t='Вашият браузър (%s) <span style="font-weight:bold;">не е актуален</span>. Известно е, че има <span style="font-weight:bold;">пропуски в сигурността</span> и може <span style="font-weight:bold;">да не покаже правилно</span> този или други сайтове. <a%s>Научете как да актуализирате браузъра си</a>.';
else if (ll=="el")
	t = 'Αυτός ο ιστότοπος σας υπενθυμίζει: Ο φυλλομετρητής σας (%s) είναι <span style="font-weight:bold;">παρωχημένος</span>.\
	<a%s>Ενημερώστε το πρόγραμμα περιήγησής σας</a> για μεγαλύτερη ασφάλεια και άνεση σε αυτήν την ιστοσελίδα.';
else if (ll=="ar")
        t='متصفحك (%s) <span style="font-weight:bold;">منتهى الصلاحيه</span>. ويوجد به <span style="font-weight:bold;">ثغرات امنية</span> معروفة وقد <span style="font-weight:bold;">لا يُشغل كثير من الميزات</span> المتعلقه بهذه الموقع. <a%s>أضغط هنا</a>لتعرف كيف تقوم بتحديث متصفحك';


if (op.text)
    t = op.text;
if (op["text_"+ll])
    t = op["text_"+ll];

this.op.text=busprintf(t,this.op.browser.t,' rel="nofollow" href="'+this.op.url+'"'+tar);

var div = document.createElement("div");
this.op.div = div;
div.id="buorg";
div.className="buorg";
div.innerHTML= '<div>' + this.op.text + '<div id="buorgclose">&times;</div></div>';

var sheet = document.createElement("style");
//sheet.setAttribute("type", "text/css");
var style = ".buorg {position:absolute;position:fixed;z-index:111111;\
width:100%; top:0px; left:0px; \
border-bottom:1px solid #A29330; \
background:#FDF2AB no-repeat 13px center url(//browser-update.org/img/small/"+this.op.browser.n+".png);\
text-align:left; cursor:pointer; \
font-family: Arial,Helvetica,sans-serif; color:#000; font-size: 12px;}\
.buorg div { padding:5px 36px 5px 40px; } \
.buorg a,.buorg a:visited  {color:#E25600; text-decoration: underline;}\
#buorgclose { position: absolute; right: 6px; top:-2px; height: 20px; width: 12px; font-weight: bold;font-size:18px; padding:0; }";
document.body.insertBefore(div,document.body.firstChild);
document.getElementsByTagName("head")[0].appendChild(sheet);
try {
    sheet.innerText=style;
    sheet.innerHTML=style;
}
catch(e) {
    try {
        sheet.styleSheet.cssText=style;
    }
    catch(e) {
        return;
    }
}
var me=this;
div.onclick=function(){
    if (me.op.newwindow)
        window.open(me.op.url,"_blank");
    else
        window.location.href=me.op.url;
    setCookie(me.op.reminderClosed);
    me.op.onclick(me.op);
    return false;
};
try {
div.getElementsByTagName("a")[0].onclick = function(e) {
    var e = e || window.event;
    if (e.stopPropagation) e.stopPropagation();
    else e.cancelBubble = true;
    me.op.onclick(me.op);
    return true;
};
}
catch(e) {}

var hm=document.getElementsByTagName("html")[0]||document.body;
this.op.bodymt = hm.style.marginTop;
hm.style.marginTop = (div.clientHeight)+"px";
(function(me) {
            document.getElementById("buorgclose").onclick = function(e) {
                var e = e || window.event;
                if (e.stopPropagation) e.stopPropagation();
                else e.cancelBubble = true;
                me.op.div.style.display = "none";
                hm.style.marginTop = me.op.bodymt;
                me.op.onclose(me.op);
                setCookie(me.op.reminderClosed);
                return true;
            };
})(me);

op.onshow(this.op);

};

var $buoop = $buoop||{};
$bu=$buo($buoop);
