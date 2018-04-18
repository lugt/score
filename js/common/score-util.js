var score_params;

function score_page_init(params){
    score_params = params;
    document.title = score_params.name + " - 添加 - 东海航空";
    // 同步完成
    dh_add_table();
    // 异步完成
    Util_linking_load();
}

function dh_add_table() {
    var i,tableHtml = "";
    var list = score_params.cols;
    list.forEach(function(t){
        if(t.link != undefined) {
            tableHtml += prepare_single_display(t.col,t.name,t.link);
        }else{
            tableHtml += prepare_single_input(t.col,t.name);
        }
    });
    tableHtml += $("#table_form").html();
    $("#table_form").html(tableHtml);
}

function prepare_single_input(col, title){
    return  '<div class="card-header">'+
        '<div class="row"><div class="col-lg-3">'+title+'</div>'+
        '<div class="col-lg-9"><input type="text" id="dhinput_'+col+'"/ ></div>'+
        '</div></div>';
}

function prepare_single_display(col, title, linker){
    return  '<div class="card-header">'+
        '<div class="row"><div class="col-lg-3">'+title+'</div>'+
        '<div class="col-lg-9"><span id="dh_display_'+col+'"></span></div>'+
        '</div></div>';
}

function prepare_top_detail_line(title, content){
    return '<div class="row">\n' +
        '<div class="col-lg-12">\n' +
        '<div class="card">\n' +
        '<div class="card-header">'+title+'：<span id="">'+content+'</span></div>\n' +
        '</div>\n' +
        '</div>\n' +
        '</div>';
}

function call_save(){
    var list = score_params.cols;
    var obj = {};
    list.forEach(function(item) {
        var key = item.col;
        if(item.link != undefined) {
            obj[key] = $("#dh_display_" + key).attr("dh-val");
        }else{
            obj[key] = $("#dhinput_" + key).val();
        }
    });
    $.ajax({
        type : "POST",
        contentType : "application/json",
        url : utils_get_api(score_params.obj,"save"),
        data : JSON.stringify(obj)
    }).always(saveRet);
}

function saveRet(returnVal, status) {
    console.log(returnVal);
    console.log(status);
    try {
        if(typeof(returnVal) === "string"){
            var jsObj = JSON.parse(returnVal);
        }else{
            jsObj = returnVal;
        }
        if(jsObj != null && jsObj.result == 10000){
            // OK
            alert("添加成功");
        }else{
            alert("添加失败");
        }
    }catch(exception){
        console.warn(exception);
        alert("添加失败");
    }
}

function Util_linking_load(){
    var list = score_params.cols;
    list.forEach(function(t){
        if(t.link != undefined && t.link != null){
            if(t.link.method == "key"){
                var targetId = utils_get_param(t.link.keyParam);
                if(targetId == null){
                    alert("缺少参数 ： " + t.link.keyParam + " => " + t.link.obj + "/" + t.link.col);
                    return;
                }
                var param = new Utils_params();
                param.setParam("key",targetId);
                $.ajax({
                    url : utils_get_api(t.link.obj,"getByKey") +
                    "?" + utils_prepare_params(param),
                    linker:t
                }).always(Util_linking_load_Ret);
            }else{
                alert("不支持的关联");
            }
        }
    });
}

function Util_linking_load_Ret(returnVal, status){
    console.log(returnVal);  console.log(status);
    linked = this.linker;
    try {
        if(typeof(returnVal) === "string") {
            returnVal = JSON.parse(returnVal);
            return;
        }
        $("#dh_display_" + linked.col).html(returnVal.model[linked.link.displayCol]);
        $("#dh_display_" + linked.col).attr("dh-val",returnVal.model[linked.link.col]);
        if(linked.link.preDisp == 1){
            $("#prePage-display").html($("#prePage-display").html() + prepare_top_detail_line(linked.name, returnVal.model[linked.link.displayCol]));
        }
    }catch(exception){
        console.warn(exception);
    }

}

function get_api_uri(className){
    return "https://1.niimei.com/score/api/"+ className;
}

function pack_params(params){
    var paramString = "";
    for (var item in obj){
        if(item === "constructor") continue;
        paramString += "&"+item+":"+obj[item];
    }
    return paramString.substring(1);
}


KFuture = function(futureObj){
    if(futureObj != null){

    }
    this.then = {

    }
}

function getData(){
    return new KFuture({func:function(future,params){
        $.ajax(get_api_uri("data/list"));
    }});
}
