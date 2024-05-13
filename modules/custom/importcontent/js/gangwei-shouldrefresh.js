jQuery(document).ready(function($){
  
  mui('body').on('tap','.shouldrefresh',function(e){
    var url1 = this.getAttribute("href");
    var params = {
      target: "/webact/MTStaticWebVC",
      url: url1,
    };
    shouldRefresh();
    naviWeb(JSON.stringify(params));
    e.preventDefault();
    return false;
  }); 
  function naviWeb(param) {
    if (browser.versions.ios) {
      window.webkit.messageHandlers.naviWeb.postMessage(param);
    } 
    else if (browser.versions.android) {
      window.MTAppJsbridge.naviWeb(param);
    } 
    else {
      param_obj = jQuery.parseJSON(param);
      mui.openWindow({
        url:param_obj.url,
        id:param_obj.url
      });
    }
  }
  function shouldRefresh() {
        try{
            if (browser.versions.ios) {
                window.webkit.messageHandlers.shouldRefresh.postMessage('shouldRefresh');
            } else if (browser.versions.android) {
                window.MTAppJsbridge.shouldRefresh();
            } else {
                console.log("not in mobile device!");
            }
        }
        catch (e)
        {
        }
    }
});

