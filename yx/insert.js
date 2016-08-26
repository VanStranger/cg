var configjson={
		"width":"942",
		"height":"530",
		"bg":"./img/1.jpg",
		"start":{
			"width":"48",
			"height":"182",
			"bg":"./img/start.jpg",
			"title":"",
			"bghover":"./img/starthover.jpg",
			"top":"288",
			"left":"298"
		},
		"restart":{
			"width":"48",
			"height":"182",
			"bg":"./img/restart.jpg",
			"title":"",
			"bghover":"./img/restarthover.jpg",
			"top":"288",
			"left":"242"
		},
		"cj-opnions":{
			"class":"",
			"left":"",
			"top":"",
			"z-margin":"",
			"z-bg":"",
			"z-bghover":"",
			"z-width":"",
			"z-height":"",
			"opnions":[{
				"title":"",
				"tocj":"",
				"index":""
			}]
		},
		"cz-opnions":{
			"class":"",
			"left":"",
			"top":"",
			"z-margin":"",
			"z-bg":"",
			"z-bghover":"",
			"z-width":"",
			"z-height":"",
			"opnions":[{
				"title":"",
				"tocj":"",
				"index":""
			}]
		}
	};
	var config=JSON.stringify(configjson);
	$.ajax({
		url: './iud.php',
		type: 'post',
		dataType: 'text',
		data: {"type":"i-m",
		"mid":"1",
		"config":config},
		success:function(msg){
			console.log(msg);
		},error:function(){}
	});