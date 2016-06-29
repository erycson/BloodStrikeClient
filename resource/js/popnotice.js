var popNoticeAction =function(){
	function popcreatePage(url){
		var iframe, div, close, page = url;
		div = document.createElement("div");
		div.setAttribute("id","popGameNotice");
		div.style.cssText = "position:absolute;left:50%;top:50%;margin-left:-257px;margin-top:-230px;width:514px;height:461px;z-index:99999;background-color:transparent;";
		iframe = document.createElement("iframe");
		iframe.style.cssText = "position:absolute; left:0px; top:0px; z-index:99999;";
		iframe.setAttribute("width","514");
		iframe.setAttribute("height","461");
		iframe.setAttribute("frameborder","0",0);
		iframe.setAttribute("border","0");
		iframe.setAttribute("scrolling","no");
		iframe.setAttribute("allowtransparency","yes",0);
		iframe.setAttribute("id","iframePop");
		iframe.setAttribute("src",page);
		div.appendChild(iframe);

		/*close = document.createElement("div");
		close.setAttribute("id","CloseBtn");
		close.style.cssText = "position:absolute;left:536px;top:6px;width:32px;height:32px;cursor:pointer;z-index:2003;background:none;overflow:hidden;font-size:60px;";
		close.innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;';
		div.appendChild(close);*/
		document.body.appendChild(div);
	}
	return {
		show:function(url){
			if (!$("#popGameNotice")[0]){
				popcreatePage(url);
				/*$("#CloseBtn").bind("click", function(){
					$("#GameNotice").hide();
				});*/
				return;
			}

			if(!$("#popGameNotice").is(":visible")){
				$("#popGameNotice").show();
			}
		}
	}
}();
function closepopNoticeWind(){
	var gnPop = document.getElementById('popGameNotice');
	if(gnPop) gnPop.style.display='none';
}
function showpopnotice(){
	popNoticeAction.show("./noticepage/popindex.html?v=2");
	//15秒后自动关闭弹框
	setTimeout(function(){window.parent.closepopNoticeWind();},15000);
}

