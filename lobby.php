<?php
//Lobby: hall_config.xml => lobby-player.xcloudgame.com, 80|8000|3000|4000

/*
?cdn=1
&time=1464034898
&u=Yzc4OW9RNnR5b2wwTW5QeHRLbDJNVVFaWExOdmtiYWdPUWloaEJ0Q2JzL3Z0WHNIQWpsNGFhc1k2SGM
&cm=1
&flag=035baaa267e319fcfe949d1743401e86
&uid=1001744156
&gameNickName=100000619241596
&current_currency=BRL
&meLocale=pt-br
&serverid=999
&fbid=100000619241596
&fbSource=thirty_after_reconnect
&JUMP=
&Mename=
&Fbemail=
&actions=
&timecheck=ZmNiNHAvUjBqeVY4UDJMcnd5UU5sNVdjdXhqMXdBbmRycFJnSVZpN29TZE0rT3pLbmVtVg
&miniclient=
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Blood Strike | xcloudgame.com</title>
<meta name="google" value="notranslate" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"> -->
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<link href="./resource/css/common.min.css?v14" rel="stylesheet" type="text/css" media="screen" />
<link href="./resource/css/introjs.css" rel="stylesheet" type="text/css" media="screen" />
        <style type="text/css" media="screen">
            html  { height:100%; }
            body { margin:0; padding:0; overflow:auto; text-align:center; background-color: #000000; }
            object:focus { outline:none; }
            #flashContent { display:none; }
        </style>
<script type="text/javascript">
//try{document.domain="xcloudgame.com";}catch(e){}
var level =true;
var $isminiclient = false;
var $fbuserid = 'U10018957263';
</script>

<script type="text/javascript">window.onerror=function(){return true;}</script>
<script src="./swfobject.min.js?v=201309185" type="text/javascript"></script>
<script src="jquery-1.8.1.js" type="text/javascript"></script>
<script src="ga-monitor.min.js?v=61" type="text/javascript"></script>
<script type="text/javascript">
	// For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection.
    var swfVersionStr = "0.0.0";
    // To use express install, set to playerProductInstall.swf, otherwise the empty string.
    var xiSwfUrlStr = "playerProductInstall.swf";
    var flashvars = {};
    var resurl = 'http://127.0.0.1/cdn/brazil/s3/'; // https://d11uyk2dpzfhbx.cloudfront.net/brazil/s3/
    flashvars.username = "U10018957263";
    flashvars.isadult = "1";
    flashvars.timestamp = "1464785590"; "<?php echo time(); ?>";
    flashvars.sign = "33a66c47862a653433d58b3acfa77a07";
    flashvars.serverId = "999";
    flashvars.platform = "bz";
    flashvars.ip = ""; "<?php echo $_SERVER['REMOTE_ADDR']; ?>"; // 191.33.84.135
    flashvars.shortcuturl = "http://br.util.xcloudgame.com/bloodstrikeUtil/client/downminclient.php";
    flashvars.lobbyFileName = "Lobby_78eae86b46f34c6c8fb11045f2e310eb.swf";
    flashvars.renderThreadFileName = "RenderThread_14ea34830065ea864ca0ed0fc1121876.swf";
    flashvars.playerModelFileName="LobbyModelView_09416eb0fc11224a465ed4fa0e4133ea.swf";
    flashvars.weaponModelFileName="LobbyWeaponView_b24885ac4bd82a65ae80817fba6cbe31.swf";
    flashvars.resConfigFileName="res_config_067df6df4a553044454c09e764c47f95.xml";
    flashvars.signConfigFileName = "sign_cf78f59dba073f808ac45cd1e1c8a188.xml";
    flashvars.version = "abroad_2015_10_28_bz_20160218020034";
    flashvars.resurl = resurl; //'https://d11uyk2dpzfhbx.cloudfront.net/brazil/s3/';
    var params = {};
    params.quality = "high";
    params.bgcolor = "#000000";
    params.wmode = "direct";
    params.allowscriptaccess = "always";
    params.allowfullscreeninteractive = "true";
    params.allowfullscreen = "true";
    var attributes = {};
    attributes.id = "Lobby";
    attributes.name = "Lobby";
    attributes.align = "middle";
    swfobject.embedSWF(
        "http://127.0.0.1/cdn/brazil/s3/LobbyPreloader_2e4fcf318a008bdb86e5cea5653f1b99.swf", // 
        "flashContent",
        "1000",
        "650",
        swfVersionStr,
        xiSwfUrlStr,
        flashvars,
        params,
        attributes
    );
    // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
    swfobject.createCSS("#flashContent", "display:block;text-align:left;");
</script>
<script type="text/javascript">
    /**
     * 加入收藏
     */
    function add_favor() {
        var ua = navigator.userAgent.toLowerCase();
        var url = 'https://br-game.xcloudgame.com/index.php?m=Index&a=client&gid=2&sid=999&channel=thirty_after_reconnect';
        var title = 'Blood Strike';
        if (ua.indexOf("msie 8") > -1) {
            external.AddToFavoritesBar(url, title)
        } else if (ua.indexOf("chrom") > -1) {
            alert('Please press <ctrl>+D to add BloodStrike to favourites!');
        } else {
            try {
                window.external.addFavorite(url, title);
            } catch (e) {
                try {
                    window.sidebar.addPanel(title, url, title)
                } catch (e) {
                    alert('Please press <ctrl>+D to add BloodStrike to favourites!')
                }
            }
        }
        return false;
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId: '681463031893735',
            status: true,
            cookie: true,
            xfbml: true,
            oauth: true,
            frictionlessRequests: true,
            version : 'v2.2'
        });
    };

   (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = '//connect.facebook.net/en_US/sdk.js';
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

</script>
<script type="text/javascript" src="fbopengraph.js?v=10"></script>
<style>
.level-tag{display:none;}
.wrap-page iframe{padding-top:20px;background:#F2F2F2 url('https://br-payment.xcloudgame.com/statics/v3/images/loading.gif') no-repeat center center;}
.mini-ad{background-image:url("./resource/img/mini-ad-2.png?v=2");}
.introjs-tooltiptext{
    color:#000;
}
.introjs-skipbutton{
    color:#000;
}
#new-side-btn{
    position: absolute;
    z-index: 99999;
    width: 180px;
    height: 637px;
    background: url(img/sidebar/bg.png?v=3);
    display: none;
    margin-top: 4px;
    left:50%;
    margin-left:-670px;
}
.side-active{
    width:152px;
    height: 66px;
    margin-top: 11px;
}
.side-content{
    width: 159px;
    height: 529px;
    overflow: auto;
    margin-top: 22px;
    margin-left: 22px;
    overflow-y: hidden;
}
 #new-side-btn .active1{
    background: url(img/sidebar/pumpkin-1.jpg?v=3);
    margin-top: 0px;
}
#new-side-btn .active2{
    background: url(img/sidebar/video-1.jpg?v=3);
}
#new-side-btn .active3{
    background: url(img/sidebar/active1-1.jpg?v=3);
}
#new-side-btn .active4{
    background: url(img/sidebar/sevenvip-2.jpg?v=3);
}
#new-side-btn .active5{
    background: url(img/sidebar/blue-1.png?v=3);
}
#new-side-btn .active6, #new-side-btn .active7{
    background: url(img/sidebar/lock.jpg?v=3);
}
#new-side-btn .side-gm{
    cursor:pointer;
    width: 118px;
    height: 32px;
    background: url(img/sidebar/gm.png?v=2);
    margin: 13px 40px;
}
#side-up{
    width: 96px;
    height: 16px;
    margin-left: 50px;
    cursor:pointer;
}
#side-down{
    width: 96px;
    height: 16px;
    margin-left: 50px;
    cursor:pointer;
}
.fbbox {
    background: url("img/sidebar/FBfans.png") no-repeat scroll left center transparent !important;
    display: block;
    float: right;
    height: 560px;
    padding: 0 5px 0 46px;
    width: 320px;
    z-index: 10002;
    position: fixed;
    right: -325px;
    top: 20%;
    display: none;
    cursor: pointer;
}
</style>


</head>


<body onunload="add_favor();" oncontextmenu="return false" onselectstart="return false" ondragstart="return false" oncopy="return false" oncut="return false;">

    <div class="fbbox">
        <div style="background:#FFFFFF">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FBloodStrikeGlobal&width=325&height=558&colorscheme=light&show_faces=true&header=false&stream=true&show_border=true&appId=681463031893735" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:325px; height:558px;" allowTransparency="true"></iframe>
        </div>
    </div>
    <!--加载游戏 start -->
    <div id="Swf" style="top:45px">
        <div id="Swf2">
            <!-- <a href="javascript:void(0);" id="callgm" class="zendesk-btn zendesk-btn-ultra zendesk-dropbox" title="Faça uma pergunta">&nbsp;</a> -->
            <div id="flashContent">
                <p>To view this page ensure that Adobe Flash Player version 11.5.0 or greater is installed.</p>
                <a href="http://www.adobe.com/go/getflashplayer" target="_blank">Get Adobe Flash player</a>
            </div>


            <!-- <div class="zendesk-btn" style="left:-58px;margin-top:15px;background-image:none;height:60px;width:60px;top:0;display:none" >
                            <a id="test" href="https://game-active.xcloudgame.com/index.php?m=Adt&a=index" target="_blank">
                            <img src="resource/img/nanguaok.gif?v=v2"></a>
                        </div> -->


        </div>
    </div>

    <noscript>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="650" id="${application}">
     <param name="movie" value="http://127.0.0.1/cdn/brazil/s3/LobbyPreloader_2e4fcf318a008bdb86e5cea5653f1b99.swf?v=1464034899&version=20141125034723&username=U10018957263&isadult=1&timestamp=1464034898&sign=035baaa267e319fcfe949d1743401e86&version=20141125034723" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <param name="wmode" value="direct" />
            <param name="allowScriptAccess" value="always" />
            <param name="allowfullscreeninteractive" value="true" />
            <param name="allowFullScreen" value="true" />
            <param name="EnableContextMenu" value="false" />
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="http://127.0.0.1/cdn/brazil/s3/LobbyPreloader_2e4fcf318a008bdb86e5cea5653f1b99.swf?v=1464034899&version=20141125034723&username=U10018957263&isadult=1&timestamp=1464034898&sign=035baaa267e319fcfe949d1743401e86&version=20141125034723" width="1000" height="650">
                <param name="quality" value="high" />
                <param name="bgcolor" value="#000000" />
                <param name="wmode" value="direct" />
                <param name="allowScriptAccess" value="always" />
                <param name="allowfullscreeninteractive" value="true" />
                <param name="allowFullScreen" value="true" />
                <param name="EnableContextMenu" value="false" />
                <!--<![endif]-->
                <!--[if gte IE 6]>-->
                <p>Either scripts and active content are not permitted to run or Adobe Flash Player version 11.5.0 or greater is not installed.</p>
                <!--<![endif]-->
                <a href="http://www.adobe.com/go/getflashplayer" target="_blank">Get Adobe Flash player</a>
                <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
        </object>
    </noscript>
    <script type="text/javascript">
        _ga = {
            app: "bz",
            user: "100000619241596",
            server: "999",
            version: "20141125034723",
            device: "",
            platform: "web"
        };
        var flashVersionArr = swfobject.getFlashPlayerVersion();
        var flashVersion = flashVersionArr['major'] + "." + flashVersionArr['minor'] + "." + flashVersionArr['release'];
        saveFlashVer("flashVersion", flashVersion);
    </script>
    <!--加载游戏 end -->

    <div id="fb-root"></div>



   
    <!-- mini导航 start-->

    <div id="header">
        <div class="logo">
             <li><a href="https://goo.gl/0fYQft" target="_blank">
                <img class="tool-imgbtn" src="./resource/img/youtube2.png" width="" height="" border="0" alt="Fan Page">
              </a></li>
                 <li><a href="https://goo.gl/1ujQf5" target="_blank">
                  <img class="tool-imgbtn" src="./resource/img/google_plus.png" width="" height="" border="0" alt=""></a>
                 </li>
               <li><a href="https://twitter.com/BloodStrikeBR" target="_blank">
                   <img class="tool-imgbtn" src="./resource/img/twitter.png" width="" height="" border="0" alt=""></a>
                </li>
        </div>


<div class="middlebutton">
    <img src="./resource/img/newbarbutton4.gif" border="0" usemap="#mymap">
    <map name="mymap">
        <area shape="rect" coords="141,0,281,96" href="http://br.forum.xcloudgame.com/?ref=app" target="_blank">
        <area shape="rect" coords="282,0,422,96" href="javascript:void(0);" onclick="loadPayment();return false;">
        <area shape="rect" coords="423,0,578,96" href="http://br.bloodstrike.xcloudgame.com/?ref=app" target="_blank">
        <area shape="rect" coords="579,0,719,96" href="https://br-game.xcloudgame.com/index.php?m=InviteTaskV3&amp;a=index&amp;gid=2&amp;sid=999" target="_blank">
        <area shape="rect" coords="720,0,860,96" href="http://br.util.xcloudgame.com/bloodstrikeUtil/client/downminclient.php" target="_blank">
        <area shape="rect" coords="861,0,1003,96" href="javascript:void(0);" onclick="onlineChat();return false;">
    </map>
</div>

 <div class="top_right">
        <ul>

        <!--    <li>
                <a href="https://www.facebook.com/BloodStrikeGlobal?fref=ts" target="_blank">
                    <img class="tool-imgbtn" src="./resource/img/fanpage_btn_white_bg.png" width="106" height="24" border="0" alt="Fan Page" />
                </a>
            </li> -->
            <!-- <li>
                <a href="http://www.raidcall.com.br/client/go?sid=9362978&vendor=BloodStrike" target="_blank">
                    <img class="tool-imgbtn" src="./resource/img/id4688.png" width="86" height="24" border="0" alt="Recarregar" />
                </a>
            </li> -->
    <!--        <li>
                <div class="like">
                    <div class="fb-like" data-href="https://www.facebook.com/BloodStrikeGlobal" data-width="450" data-height="21" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false" data-share="true"></div>
                </div>
            </li> -->
        </ul>
      </div>
    </div>
    

<!-- 页内 start  -->
<div class="wrap-page" id="recharge_box">
    <div class="page-close paypage-close">close</div>
</div>

<div class="wrap-page" id="invite_box">
    <div class="page-close paypage-close">close</div>
</div>
<!-- 页内 end  -->
<div id="new-side-btn">
    <div id="side-up"></div>
    <div class="side-content">
        <div class="side-active active1"></div>
        <div class="side-active active2"></div>
        <div class="side-active active3"></div>
        <div class="side-active active4"></div>
        <div class="side-active active5"></div>
        <div class="side-active active6"></div>
        <div class="side-active active7"></div>
        <div class="side-active active7"></div>
    </div>
    <div class="side-gm"></div>
    <div id="side-down"></div>
</div>


<script type="text/javascript" >

    function getPayUrl( uid, sid ){
        var serverId = sid ? sid : 999;
        return 'https://br-payment.xcloudgame.com/index.php?s=/Payment/inGame/gid/2/uid/' + uid + '/sid/' + serverId;
    }

    //活动翻页
    $('#side-up').click(function(event) {
        $('.side-content').animate({scrollTop: '0px'}, 300);
    });
    $('#side-down').click(function(event) {
        $('.side-content').animate({scrollTop: '76px'}, 300);
    });

    $('.side-gm').click(function(){
        var _xcurl = "./gm-support?id=1001744156&display=popup&ref=plugin";
        var _xcw = 815, _xch = 656;
        (function(I,H,G){var F=document.body,E="screenX" in window?window.screenX:window.screenLeft,D="screenY" in window?window.screenY:window.screenTop,C="outerWidth" in window?window.outerWidth:F.clientWidth,B="outerHeight" in window?window.outerHeight:F.clientHeight-22,A=Math.floor(E+(C-H)/2),z=Math.floor(D+(B-G)/2.5),y=["width="+H,"height="+G,"left="+A,"top="+z,"location=0","toolbar=0"];return window.open(I,"_blank",y.join(","));})(_xcurl,_xcw,_xch);

        return false;
    });

    //$('.active4').css({'background': 'url(img/sidebar/active4-2.jpg)'});

    $(".fbbox").hover(function(){
        $(this).stop().animate({right: "0"}, "medium");}, function(){
            $(this).stop().animate({right: "-325"}, "medium");
    }, 500);


    var hlnowdate = new Date();
    hlnowdate = hlnowdate.getTime();
    //7*24*3600 = 604800(秒)
    if (hlnowdate - parseInt(hltime) * 1000 > 604800000 && hltime) {
        $('.active5').css({
            background: 'url(img/sidebar/new_huiliu.jpg)',
            cursor: 'pointer'
        });
        $('.active5').click(function() {
            $.ajax({
                url: 'https://game-active.xcloudgame.com/index.php?m=BlueHui&a=Get_Rewrds',
                type: 'GET',
                dataType: 'jsonp',
                cache : false,
                data: {
                    "uid": huiliuid,
                    "sid": "999",
                    "gid": "2",
                    "ljtime": suohltime
                },
                success: function(res) {
                    if (res.status == 300) {
                        $('.active5').attr('style', 'background: url(img/sidebar/lock.jpg)');
                        $('.active5').off();
                        alert('Vc retirou prêmio com sucesso!!');
                    } else {
                        alert('Foi recebida, obrigado Participação!');
                    }
                },
                error: function(res) {
                    console.log(res);
                }
            })
        });
    }

    /**
     * 加载页内充值iframe
     */
    function loadIframe(patterns,callback){

        patterns.iframeBoxObj.fadeIn(800);

        var box = patterns.iframeBoxObj;
        var topBar = $('.top-bar');
        var body = $('body');
        var swf = $('#Swf');
        var friendList = $('.friend_list');

        body.css({'overflow':'hidden','backgroundColor':'#F2F2F2'});
        topBar.hide();
        swf.css({ left:'-150%' });
        friendList.length && friendList.css('top',0);

        var screenHeight = $(window).height();
        var iframe = document.createElement('iframe');
        iframe.height         = screenHeight-60;
        iframe.width        = 1000;
        iframe.frameBorder    = '0';
        iframe.scrolling    = 'yes';
        iframe.src            = patterns.src;
        iframe.id            = patterns.iframeId;
        iframe.style.border    = 'none';
        iframe.style.display= 'block';
        iframe.onload = iframe.onreadystatechange = function () {
            if (!iframe.readyState || iframe.readyState === 'loaded' || iframe.readyState === 'complete') {
                iframe.onload = iframe.onreadystatechange = null;
                callback && callback(iframe);
            }
        };
        setTimeout(function(){
            box.append(iframe);
        },100);

        box.height(screenHeight-40);

        //关闭页面
        box.find('.paypage-close').click(function(){
            box.hide();
            $('#' + patterns.iframeId ).remove();
            topBar.show();
            body.css({'backgroundColor':'#000','overflow':''});
            swf.css({ left:'50%' });
            friendList.length && friendList.css('top',666);
        });
    }

    /**
     * 加载页内充值
     */
    function loadPayment(){

        var isLevel5 = true;

        if( isLevel5 ){

            // load pay iframe
            loadIframe({
                'src' : getPayUrl( "1001744156", "999" ),
                'iframeId':'pay_iframe_page_id',
                'iframeBoxObj' : $('#recharge_box')
            },function(iframe){

            });

        } else {

            var src = 'https://apps.facebook.com/blood-strike/?pay=1';
            window.open(src,'_blank');
        }

        google_analysis_recharge();
    }

    /**
     * 加载页内邀请任务
     */
    function loadInviteTask(){
        var src = 'https://br-game.xcloudgame.com/index.php?m=InviteTaskV2&a=index&gid=2&sid=999';
        window.open(src,'_blank');
        return false;
    }

   /**
    * 判断是否是ie6
    */
    function is_ie67(){
        return ( window.ActiveXObject && !window.XMLHttpRequest ) || window.navigator.userAgent.toLowerCase().indexOf('msie 7.0') > -1 ;
    }

    function openFbWind(type){
        var urlMap = {
            fb_bs_level_share : 'https://www.facebook.com/v2.2/dialog/share?app_id=681463031893735&display=popup&href=https%3A%2F%2Fapps.facebook.com/blood-strike/&redirect_uri=http://www.xcloudgame.com',
            fb_bs_GetWeapon : 'https://www.facebook.com/v2.2/dialog/share?app_id=681463031893735&display=popup&href=https%3A%2F%2Fapps.facebook.com/blood-strike/&redirect_uri=http://www.xcloudgame.com',
            fb_bs_dolike : 'http://www.facebook.com/v2.2/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FBloodStrikeGlobal%3Ffref%3Dnf&width&height=550&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true&appId=681463031893735'
        };

        //
        if( type == "fb_bs_level_share"){

            shareStories(beginShareLevel);

        }else if ( type == "fb_bs_dolike" ){

            window.open(urlMap[type], 'newwindow','height=215,width=300,top=0,left=0,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no');

        } else {

            //等待完善

        }
    }

    function GpuInfo(){
        var html = '<div id="miniclientdlg" style="position:relative;background:url(\'//br-bloodstrikeclient.xcloudgame.com/brazil/s3/resource/img/miniclientdlg4.jpg\') center center no-repeat;width:1000px;height:800px; margin: -88px auto;z-index:89999;">';
            html = html + '<div id="download-gpuinfo" style="position: absolute;height: 60px;width: 60px;right: 150px;top: 150px;z-index:999999;cursor: pointer;"></div>';
            html = html + '<a href="http://br.util.xcloudgame.com/bloodstrikeUtil/client/downminclient.php" target="_blank" style="outline:none;border:0;"><img src="//br-bloodstrikeclient.xcloudgame.com/brazil/s3/resource/img/landers2.gif?v=2" style="border:0;position: absolute;left: 396px;top: 567px; z-index:999998;" /></a>';
            html = html + '</div>';
        $('body').append(html);
    //10秒后自动关闭
        setTimeout(function(){$('#miniclientdlg').remove();},20000);
        // close gpuinfo dailgo
        $('#download-gpuinfo').click(function(){
            $('#miniclientdlg').remove();
        });
    }


   /**
    * 此函数用于游戏内部调用
    * @pream JsonData
    */
    function BScallflashfunc(JsonData){
		console.log(JsonData);
        // fix ie6 or ie7 unsupported function of JSON.parse()
        if ( is_ie67() ) {

            var dataArray = JsonData.replace(/":"|{"|"}|","/g,'|@|').split("|@|");
            var jsonObj = {};
            for (var i = 1; i < dataArray.length - 1; i+=2) {
                jsonObj[dataArray[i]] = dataArray[i+1];
            };

        }else{
            var jsonObj = JSON.parse(JsonData);
        }

        switch( jsonObj.keyinfo ){
            case 'Recharge': loadPayment(jsonObj.playerName); break;
            case 'disconnect': break;
            case 'GpuInfo': GpuInfo(); break;
            case 'FacebookLike': break;
            // 判断用户成功创建角色，做like操作
            case 'CreateRole': openFbWind('fb_bs_dolike'); break;
            case 'GetWeapon':
                    openFbWind('fb_bs_GetWeapon');
                    google_analysis_purchase_items();
                    break;
            //case 'LeveUp': shareStories(beginShareLevel, jsonObj); break;
            case 'BuyWeapon': shareStories(beginShareWeapon, jsonObj); break;
            case 'GetTitle': shareStories(beginShareAce, jsonObj); break;
            case 'GradeUp': shareStories(beginShareRank, jsonObj); break;
            case 'KillData': shareStories(beginShareKill, jsonObj); break;
            default: break;
        }
    };
    function check_nangua(){
        var url = "https://game-active.xcloudgame.com/index.php?m=Adt&a=index&is_ajax=1";
        $.ajax({
            cache:false,
            type:"get",
            url:url,
            dataType:"jsonp",
            success:function(res){
                if( res.status == 1 ){
                   //$('.zendesk-btn').show();
                   $('.active1').css({'background': 'url(img/sidebar/pumpkin-2.jpg)', 'cursor': 'pointer'});
                   $('.active1').click(function(event) {
                       window.open('https://game-active.xcloudgame.com/index.php?m=Adt&a=index', '_blank');
                   });
                }
            }
        });
    }
    check_nangua();
</script>


<script src="./resource/js/notice.js?version=20141125034723&v=3.0"></script>



<script type="text/javascript">

$(function(){

    //针对新用户在登陆次数5次以内，只显示游戏，不显示Canvas以及两侧的广告和水晶活动。
    var is_play_game_5 = true ;

    //是否来自Facebook的用户
    var fromFacebook = true;

    //展示两边广告
    function ShowAD(){
        (function() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = './ad/xc-ad-google.min.js?v=36';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    }

    // facebook过来的用户需要判断play game次数显示广告
    if( fromFacebook ){

        if(is_play_game_5) {

            //ShowAD();
        }

    } else {

        //ShowAD();
    }


    //关闭广告
    $('#close-ad').click(function(){
        $('.top-bar .mini-ad').fadeOut();
        return false;
    });
    $('#callgm').click(function(){
        var _xcurl = "./gm-support?id=1001744156&display=popup&ref=plugin";
        var _xcw = 815, _xch = 656;
        (function(I,H,G){var F=document.body,E="screenX" in window?window.screenX:window.screenLeft,D="screenY" in window?window.screenY:window.screenTop,C="outerWidth" in window?window.outerWidth:F.clientWidth,B="outerHeight" in window?window.outerHeight:F.clientHeight-22,A=Math.floor(E+(C-H)/2),z=Math.floor(D+(B-G)/2.5),y=["width="+H,"height="+G,"left="+A,"top="+z,"location=0","toolbar=0"];return window.open(I,"_blank",y.join(","));})(_xcurl,_xcw,_xch);

        return false;
    });

});

</script>
<script src="./resource/js/intro.js"></script>    
<script>

    introJs().setOption('showStepNumbers',false).setOption('showBullets',false).start().oncomplete(function() {
        //alert("end of introduction");
    });
</script>

<!-- Facebook Conversion Code for page like-install -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6047540834631', {'value':'0.01','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6047540834631&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
<script async src="./player_video/js/new_google.js"></script>
<script language="javascript" type="text/javascript">
   var advclick = true;
   function clickads(){
       window.open("https://www.terraclicks.com/watch?key=4e5bf7ebf7e0e17e46b9907d7c6a81df");
   }
   
    $('.active2').attr('style', 'background: url(img/sidebar/adpound-2.jpg); cursor: pointer; ');
    $('.active2').click(function(event) {
        if (advclick) {
            //advclick = false;
            //$('.active2').attr('style', 'display:block;background: url(img/sidebar/video-1.jpg);');
            //showpopnotice();
            clickads();
        }
    });

</script>
<script>
var google_gid="ad-tracking";
var google_gstyle="top:90px;right:50%;margin-right:-665px;display: block;";
var google_gclient="ca-pub-2332816132561837";
var google_gslot= "4211126504";
    
function newad(){
        $(document).ready(function(){
    var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
        
    var c = '<div class="xc-ads-events" id="' + google_gid + '" style="position:absolute;z-index:9999;' + google_gstyle + '">\
    <ins class="adsbygoogle"\
    style="display:inline-block;width:160px;height:600px"\
    data-ad-client="' + google_gclient + '"\
    data-ad-slot="' + google_gslot + '"></ins>\
    </div>'; 
            
     $("#showids").append(c);     

    (adsbygoogle = window.adsbygoogle || []).push({});    
    });
    
    /*var rand_time = (Math.floor(Math.random()*600) + 300)*1000;
    window.setTimeout(function() {
        
      closead();

    },rand_time);*/
  
}
function closead(){
    $("#showids").empty();
    window.setTimeout(function() {

    newad();

    },1000);
}
</script>
            <center>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 468*60-1 -->
        <div id='showids'>
        <div class="xc-ads-events" id="ad-tracking" style="position: absolute; z-index: 9999; top: 90px; right: 50%; margin-right: -665px; display: block;">
                            <img style="margin-top:10px" src="./images/adstop.gif?v4" alt="" align="top">
                        <ins class="adsbygoogle"
            style="display:inline-block;width:160px;height:600px"
            data-ad-client="ca-pub-2332816132561837" 
            data-ad-slot="5066700109"></ins>        
        </div>
        </div>
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px;margin-top:658px;margin-left:-190px;"
             data-ad-client="ca-pub-2332816132561837"
             data-ad-slot="4425962506"></ins>
        <!--ins class="adsbygoogle"
             style="display:inline-block;width:468px;height:60px;margin-top:658px;"
             data-ad-client="ca-pub-2332816132561837"
             data-ad-slot="4628098906"></ins-->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-2332816132561837"
             data-ad-slot="5756311303"
             data-ad-format="link"></ins>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-2332816132561837"
             data-ad-slot="2802844906"
             data-ad-format="link"></ins>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-2332816132561837"
             data-ad-slot="7880565705"
             data-ad-format="link"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
                        <script src="./ad/jquery.iframetracker.js"></script>
            <script>
                $('.xc-ads-events').attr('style', "position: absolute; z-index: 9999; top:67px;right:50%;height:701px;width:203px;margin-right:-682px;background: url('./images/adsright.png')");
                var ppid = 1;
                
                window.setTimeout(function() {
                    closead();
                },4800000);
                
                jQuery(document).ready(function ($) {
                    $("ins").iframeTracker({
                        blurCallback: function () {
                            if (ppid == 1) {
                                ppid = 2;
                                // Do something when the iframe is clicked (like firing an XHR request)
                                $.ajax({
                                    url: 'https://game-active.xcloudgame.com/index.php?m=AdGoogle&a=adscallback',
                                    type: 'GET',
                                    dataType: 'jsonp',
                                    cache: false,
                                    jsonp: 'callback',
                                    data: {
                                        "uid": '1001744156_2_999'
                                    },
                                    success: function (result) {
                                        if (result.msg == "ok"){
                                            alert('Os Cristais do dia já acabou.. tente mais cedo amanha!! \n Apenas uma vez por jogador. \n Bom jogo!Venha amanha e garanta o seu!');
                                        }else if(result.msg == "err"){
                                            alert('Os Cristais do dia já acabou.. tente mais cedo amanha!! \n Apenas uma vez por jogador. \n Bom jogo!Venha amanha e garanta o seu!');
                                        }
                                    }
                                });

                            }
                        }
                    });
                });
            </script>

                </center>
<script language="javascript" type="text/javascript">

    var sevenvipclick = true;

   function clicksevenvip(){
       window.open("http://bloodstrike.mercadoshops.com.br/pacote-vip-dias-cristais-amarelos-88073410xJM");
   }
   
   function ajaxsevenvip(){
        // Do something when the iframe is clicked (like firing an XHR request)
        $.ajax({
            url: 'https://game-active.xcloudgame.com/index.php?m=JiangMember&a=sevencallback',
            type: 'GET',
            dataType: 'jsonp',
            cache: false,
            jsonp: 'callback',
            data: {
                "uid": '1001744156_2_999'
            },
            success: function (result) {
                if (result.msg == "200"){
                    alert('Você obteve com sucesso o pacote vip 7 dias de hoje!');
                }else if(result.msg == "404"){
                    clicksevenvip();
                }else if(result.msg == "403"){
                    clicksevenvip();
                }else if(result.msg == "302"){
                    alert('Já obteu o pacote vip hoje, volte amanhã!');
                }
            }
        });
   }
   //获取领取时间
    $('.active4').attr('style', 'background: url(img/sidebar/sevenvip-1.jpg); cursor: pointer; ');
    $('.active4').click(function(event) {
        if (sevenvipclick) {
            sevenvipclick = false;
            $('.active4').attr('style', 'display:block;background: url(img/sidebar/sevenvip-2.jpg);');
            ajaxsevenvip();
        }
    });
</script>
<div style="display:none">
<!-- Google Code for Remarketing Tag

Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 949455324;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/949455324/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</div>


<div style="display:none">
<!-- Google Code for Remarketing Tag

Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 974373075;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/974373075/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</div>


<!-- Google Code for 724-756-6755 (first onto lobby page) Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 949455324;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "BApgCNK_tl4Q3JPexAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/949455324/?label=BApgCNK_tl4Q3JPexAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Google Code for Remarketing Tag

Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 945923114;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/945923114/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript">
    /*$('.active2').click(function() {
        $('.active2').off('click');
        ga('send', 'event', 'affiz', 'click', 'test', 0);
        $('.active2').attr('style', 'display:block;background: url(img/sidebar/video-1.jpg);cursor: not-allowed;');
        var _xcurl = "https://game-active.xcloudgame.com/index.php?m=AdAffiz&a=index&sid=999&gid=2";
        var _xcw = 900, _xch = 750;
        (function(I,H,G){var F=document.body,E="screenX" in window?window.screenX:window.screenLeft,D="screenY" in window?window.screenY:window.screenTop,C="outerWidth" in window?window.outerWidth:F.clientWidth,B="outerHeight" in window?window.outerHeight:F.clientHeight-22,A=Math.floor(E+(C-H)/2),z=Math.floor(D+(B-G)/2.5),y=["width="+H,"height="+G,"left="+A,"top="+z,"location=0","toolbar=0"];return window.open(I,"_blank",y.join(","));})(_xcurl,_xcw,_xch);

        return false;
    });*/
    /*function loadAds()
        {
            var video_img = document.createElement('img'),video_div=document.createElement("div"),set_div = document.getElementById('Swf');
            video_div.style.position= "absolute";
            video_div.style.left= "15%";
            video_div.style.top= "80px";
            video_img.style.cursor= "pointer";
            video_div.id="videoimg";
            set_div.appendChild(video_div);
            video_img.setAttribute('src','img/sidebar/videoimage.jpg');
            video_div.appendChild(video_img);
            video_img.onclick = function(){
                    AFFIZVIDEO.show();
                    video_div.removeChild(video_img);
                    set_div.removeChild(video_div);
            }
        }
    function noAds()
        {
            var video_img = document.createElement('img'),video_div=document.createElement("div"),set_div = document.getElementById('Swf');
            video_div.style.position= "absolute";
            video_div.style.left= "15%";
            video_div.style.top= "80px";
            video_img.style.cursor= "pointer";
            video_div.id="videoimg";
            set_div.appendChild(video_div);
            video_img.setAttribute('src','img/sidebar/videoimage1.jpg');
            video_div.appendChild(video_img);
            video_img.onclick = function(){
                    video_div.removeChild(video_img);
                    set_div.removeChild(video_div);
            };

        }*/
</script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="//v2.zopim.com/?3qzx6yhWrUvhvgjhnTKTKHQjsBrL47uO";z.t=+new Date;$.
                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<script type="text/javascript">
function onlineChat () {
     var onlineChatName = '1001744156';
      $zopim(function() {
                $zopim.livechat.window.show();
                if (onlineChatName) {
                    $zopim.livechat.setName(onlineChatName);
                }
            });
}
</script>
<!--End of Zopim Live Chat Script-->
</body>
</html>
