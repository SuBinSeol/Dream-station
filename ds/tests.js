window.sStorage = window.sessionStorage || (function() {
    // window.sStorage = (function() {
    var winObj = opener || window; //opener가 있으면 팝업창으로 열렸으므로 부모 창을 사용
    var data = JSON.parse(winObj.top.name || '{}');
    var fn = {
    length : Object.keys(data).length,
    setItem : function(key, value) {
    data[key] = value + '';
    winObj.top.name = JSON.stringify(data);
    fn.length++;
    },
    getItem : function(key) {
    return data[key] || null;
    },
    key : function(idx) {
    return Object.keys(data)[idx] || null; //Object.keys() 는 IE9 이상을 지원하므로 IE8 이하 브라우저 환경에선 수정되어야함
    },
    removeItem : function(key) {
    delete data[key];
    winObj.top.name = JSON.stringify(data);
    fn.length--;
    },
    clear : function() {
    winObj.top.name = '{}';
    fn.length = 0;
    }
    };
    return fn;
    })();
    sStorage.setItem("key1", 10);
    alert("key1="+sStorage.getItem("key1"));
    sStorage.setItem("key2", new Date());
    console.log(sStorage.getItem("key1"));