/*jsonp函数*/

function getJSON(url, fn){
    var oScript = document.createElement('script');
    var randomStr = 'feng' + (Math.random().toString().replace(/\D/g,''));
    var re = /callback=\?/;
    url = url.replace(re,'callback='+randomStr);
    oScript.src = url;
    document.body.appendChild(oScript);
    window[randomStr] = fn;
    oScript.onload = function(){
        document.body.removeChild(oScript);
        delete window[randomStr];
    }
}