$(document).ready(function () {$("#ajaxform3").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando3").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando3").attr("style", "display:none")}, data:$("#ajaxform3").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso3").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#ajaxform4").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando4").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando4").attr("style", "display:none")}, data:$("#ajaxform4").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso4").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#ajaxform5").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando5").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando5").attr("style", "display:none")}, data:$("#ajaxform5").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso5").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#ajaxform6").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando6").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando6").attr("style", "display:none")}, data:$("#ajaxform6").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso6").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#ajaxform7").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando7").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando7").attr("style", "display:none")}, data:$("#ajaxform7").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso7").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#ajaxform13").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando13").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando13").attr("style", "display:none")}, data:$("#ajaxform13").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso13").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#ajaxform14").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando14").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando14").attr("style", "display:none")}, data:$("#ajaxform14").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso14").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#ajaxform15").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {$("#enviando15").attr("style", " ")}, complete:function (XMLHttpRequest, textStatus) {$("#enviando15").attr("style", "display:none")}, data:$("#ajaxform15").serialize(), dataType:"html", success:function (data, textStatus) {$("#sucesso15").html(data);}, type:"post", url:"\/sigerh\/concursos\/editarModal"});
return false;});
$("#addForm").bind("submit", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#salvar_processando").attr("style", "")}, complete:function (XMLHttpRequest, textStatus) {$("#salvar_processando").attr("style", "display:none")}, data:$("#addForm").serialize(), dataType:"html", success:function (data, textStatus) {$.ajax({async:true, dataType:"html", success:function (data, textStatus) {$("#table-body").html(data);}, type:"post", url:"\/sigerh\/concursos"});$("#salvar_exito").html(data);}, type:"post", url:"\/sigerh\/concursos\/adicionarModal"});
return false;});});