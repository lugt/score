var score_params;

function score_page_init(params) {
    score_params = params;
    document.title = score_params.name + " - ScoreBoard";
    // 同步完成
    dh_add_table();
    // 异步完成
    Util_linking_load();
}

function dh_add_table() {
    var i, tableHtml = "";
    var list = score_params.cols;
    list.forEach(function (t) {
        if (t.link != undefined) {
            tableHtml += prepare_single_display(t.col, t.name, t.link);
        } else {
            tableHtml += prepare_single_input(t.col, t.name);
        }
    });
    tableHtml += $("#table_form").html();
    $("#table_form").html(tableHtml);
}

function prepare_single_input(col, title) {
    return '<div class="card-header">' +
        '<div class="row"><div class="col-lg-3">' + title + '</div>' +
        '<div class="col-lg-9"><input type="text" id="dhinput_' + col + '"/ ></div>' +
        '</div></div>';
}

function prepare_single_display(col, title, linker) {
    return '<div class="card-header">' +
        '<div class="row"><div class="col-lg-3">' + title + '</div>' +
        '<div class="col-lg-9"><span id="dh_display_' + col + '"></span></div>' +
        '</div></div>';
}

function prepare_top_detail_line(title, content) {
    return '<div class="row">\n' +
        '<div class="col-lg-12">\n' +
        '<div class="card">\n' +
        '<div class="card-header">' + title + '：<span id="">' + content + '</span></div>\n' +
        '</div>\n' +
        '</div>\n' +
        '</div>';
}

function call_save() {
    var list = score_params.cols;
    var obj = {};
    list.forEach(function (item) {
        var key = item.col;
        if (item.link != undefined) {
            obj[key] = $("#dh_display_" + key).attr("dh-val");
        } else {
            obj[key] = $("#dhinput_" + key).val();
        }
    });
    $.ajax({
        type: "POST",
        contentType: "application/json",
        url: utils_get_api(score_params.obj, "save"),
        data: JSON.stringify(obj)
    }).always(saveRet);
}

function saveRet(returnVal, status) {
    console.log(returnVal);
    console.log(status);
    try {
        if (typeof(returnVal) === "string") {
            var jsObj = JSON.parse(returnVal);
        } else {
            jsObj = returnVal;
        }
        if (jsObj != null && jsObj.result == 10000) {
            // OK
            alert("添加成功");
        } else {
            alert("添加失败");
        }
    } catch (exception) {
        console.warn(exception);
        alert("添加失败");
    }
}

function Util_linking_load() {
    var list = score_params.cols;
    list.forEach(function (t) {
        if (t.link != undefined && t.link != null) {
            if (t.link.method == "key") {
                var targetId = utils_get_param(t.link.keyParam);
                if (targetId == null) {
                    alert("缺少参数 ： " + t.link.keyParam + " => " + t.link.obj + "/" + t.link.col);
                    return;
                }
                var param = new Utils_params();
                param.setParam("key", targetId);
                $.ajax({
                    url: utils_get_api(t.link.obj, "getByKey") +
                    "?" + utils_prepare_params(param),
                    linker: t
                }).always(Util_linking_load_Ret);
            } else {
                alert("不支持的关联");
            }
        }
    });
}

function Util_linking_load_Ret(returnVal, status) {
    console.log(returnVal);
    console.log(status);
    linked = this.linker;
    try {
        if (typeof(returnVal) === "string") {
            returnVal = JSON.parse(returnVal);
            return;
        }
        $("#dh_display_" + linked.col).html(returnVal.model[linked.link.displayCol]);
        $("#dh_display_" + linked.col).attr("dh-val", returnVal.model[linked.link.col]);
        if (linked.link.preDisp == 1) {
            $("#prePage-display").html($("#prePage-display").html() + prepare_top_detail_line(linked.name, returnVal.model[linked.link.displayCol]));
        }
    } catch (exception) {
        console.warn(exception);
    }

}

function get_api_uri(className) {
    return "https://1.niimei.com/score/api/" + className;
}

function pack_params(params) {
    var paramString = "";
    for (var item in obj) {
        if (item === "constructor") continue;
        paramString += "&" + item + ":" + obj[item];
    }
    return paramString.substring(1);
}



getData({id: "teacher/info", institute:"1000"}).then(function(data){
    if(getDataType()(data) == ""){

    }
});

// Future.then.then.then.then.then;
// Future.get


// Future
function KFuture(action,futureObj) {

    this.before = null;
    if(futureObj !== undefined && typeof(futureObj) === "object"){
        this.before = futureObj;
    }
    this.nextFuture = null;
    this.onGet = false;
    this.func = function(){return {};};
    if(action !== undefined && typeof(action) === "function"){
        this.func = action;
    }
    this.onComplete = function(){};
    this.params = null;
    this.result = undefined;
    this.then = function(func, second){
        if(this.nextFuture == null){
            this.nextFuture = new KFuture(func,this);
            return this.nextFuture;
        }
    };

    this.get = function(params){
        if(this.onGet === false) {
            this.onGet = true;
            this.params = params;
            setTimeout(this.get, 10);
            return 1000;
        }
        var ans = this.func(this, params);
        this.onGet = false;
        this.params.__result = ans;
        this.result = ans;
        this.onComplete(ans,this);
        if(this.nextFuture != null){
            this.nextFuture.get(ans);
        }
    };

    if (futureObj !== undefined) {
        if(futureObj.eachState !== undefined){

        }
    }
}


function getData() {
    return new KFuture(function (future, params) {
        getNetwork(get_api_uri("data/list"), params).done();
    });

}

function getDataType(data) {
    if(typeof(data) === "object"){

    }
}

function getNetwork(objURL, params_) {
    return $.ajax({url: objURL, params: params_});
}
