$(document).ready(function () {$("#ajaxFormAdd").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#requesting").attr("style", "")}, complete:function (XMLHttpRequest, textStatus) {$("#requesting").attr("style", "display:none")}, data:$("#ajaxFormAdd").serialize(), dataType:"html", success:function (data, textStatus) {$("#table-body").html(data);}, type:"post", url:"\/sigerh\/concursos\/add"});
return false;});});