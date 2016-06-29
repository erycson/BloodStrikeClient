var NoticeAction =function(){
	function createPage(url){
		var iframe, div, close, page = url;
		div = document.createElement("div");
		div.setAttribute("id","GameNotice");
		div.style.cssText = "position:absolute; left:50%; top:30px; margin-left:-291px; width:582px; height:591px; z-index:2001; background-color:#1b1d15;";
		iframe = document.createElement("iframe");
		iframe.style.cssText = "position:absolute; left:0px; top:0px; z-index:2002;";
		iframe.setAttribute("width","582");
		iframe.setAttribute("height","591");
		iframe.setAttribute("frameborder","0",0);
		iframe.setAttribute("border","0");
		iframe.setAttribute("scrolling","no");
		//iframe.setAttribute("allowtransparency","yes",0);
		iframe.setAttribute("id","iframeWin");
		iframe.setAttribute("src",page);
		div.appendChild(iframe);

		close = document.createElement("div");
		close.setAttribute("id","CloseBtn");
		var closeUrl = "resource/images/close.png";
		
		if(typeof(resurl) != "undefined"){
			closeUrl = resurl + closeUrl;
		}
		
		close.style.cssText = "position:absolute; left:542px; top:17px; width:24px; height:21px; cursor:pointer; z-index:2003; background:url("+closeUrl+") no-repeat;";
		div.appendChild(close);
		document.body.appendChild(div);
	}
	return {
		show:function(url){
			if (!$("#GameNotice")[0]){
				createPage(url);
				$("#CloseBtn").bind("click", function(){
					$("#GameNotice").hide();
				});
				return;
			}
			if(!$("#GameNotice").is(":visible")){
				$("#GameNotice").show();
			}
		}
	}
}();
function showVersionAnnounce(url) {
	NoticeAction.show(url);
}
function createBottomBar(url){
	var iframe, div;
		div = document.createElement("div");
		div.setAttribute("id","GameBottomBar");
		div.style.cssText = "position:absolute; left:50%; top:631px; margin-left:-500px; width:1000px; height:154px; z-index:1000;";
		iframe = document.createElement("iframe");
		iframe.style.cssText = "position:absolute; left:15px; top:0px; z-index:2002;";
		iframe.setAttribute("width","974");
		iframe.setAttribute("height","154");
		iframe.setAttribute("frameborder","0",0);
		iframe.setAttribute("border","0");
		iframe.setAttribute("scrolling","no");
		iframe.setAttribute("id","iframeBottomBar");
		iframe.setAttribute("src",url);
		div.appendChild(iframe);
		document.body.appendChild(div);
}

window.onbeforeunload=onbeforeunload_handler;

var whiteCrystal = -1;
function onbeforeunload_handler(){
	getSwfInstance("Lobby").closeWebSite();
	if (!isChrome()) {
		var notice = getSwfInstance("Lobby").getNotice();
		if(notice.length > 0)return notice;
		//if(whiteCrystal != -1) {
		//	var notice = "【继续游戏】可以获得：\r\r★今日还可获得" + whiteCrystal + "个白水晶";
		//	return notice;
		//}
	}
}
function changeWhiteCrystal(num) {
	whiteCrystal = num;
}

function AddFavorite(sURL, sTitle) {
    sURL = encodeURI(sURL); 
    try{   
        window.external.addFavorite(sURL, sTitle);   
    }catch(e){
        try{   
            window.sidebar.addPanel(sTitle, sURL, "");   
        }catch (e){   
            alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
        }
    }
}
function isChrome() {
	var agent = navigator.userAgent.toLowerCase();
	if (agent.search("chrome") > -1) {
		return true;
	} else if (agent.search("firefox") > -1) {
		return true;
	}
	return false;
}

function getSwfInstance(movieName) { 
  if (navigator.appName.indexOf("Microsoft") != -1) { 
    return window[movieName]; 
  } else { 
    return document[movieName]; 
  } 
} 