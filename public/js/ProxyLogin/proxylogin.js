$(document).ready(function() {

	// $('tr:even').text('Im even'
	var string1 = "<data><appobject><appdata><appid>11111</appid><appname>11111test</appname><pin>111111444</pin></appdata></appobject>";
	var string2 = "<appobject><appdata><appid>22222</appid><appname>22222test</appname><pin>222222444</pin></appdata></appobject>";
	var string3 = "<appobject><appdata><appid>33333</appid><appname>33333test</appname><pin>333333444</pin></appdata></appobject>";
	var string4 = "<appobject><appdata><appid>44444</appid><appname>C4444test</appname><pin>44444444</pin></appdata></appobject>"
	var string5 = "<appobject><appdata><appid>55555</appid><appname>B5555test</appname><pin>55555444</pin></appdata></appobject>"
	var string6 = "<appobject><appdata><appid>66666</appid><appname>A6666test</appname><pin>66666444</pin></appdata></appobject></data>"
	var masterstring = string1 + string2 + string3 + string4 + string5 + string6;
	parser = new DOMParser();
	obj = parser.parseFromString(masterstring, "text/xml");
	console.log(obj)
	console.log(obj.getElementsByTagName("appdata")[0].getElementsByTagName("appdata").innerHTML);
	console.log(obj.getElementsByTagName("appdata").length);
	intializeTable(obj);

	$("#testbutton").click(function(){
		// alert('onclickwors');
		// $('#tableshow').toggle();
		$('#tbody').append('<tr><td>eat this</td></tr>')
		// $('tr:even').text('Im even');
	})


	$('#addNewApp').click(function(){
		var groupID = $("#newAppId").val();
		// alert($("#newAppId").val());
		var groupName = $("#newAppName").val();
		var groupPin = $("#newAppPassCode").val();
		var groupPromptID = $("#newAppInitialPromptId").val();
		var groupPromptName = $("newAppInitialPromptName").val();
		$('#tbody').append('<tr><td>' + groupID + '</td>' +
			'<td>' + groupName + '</td>' +
			'<td class="collapsing"> <div class="ui fitted slider checkbox"> <input type="checkbox"> <label></label> </div> </td>' +
			'<td class="collapsing"> <div class="ui fitted slider checkbox"> <input type="checkbox"> <label></label> </div> </td>' +
			'<td>' + 0 + '</td>' +
			'<td>' + groupPin + '</td>' +
			'<td> <button id="editPrompt" class="button">Edit Prompt</button> </td>' + 
			'<td> <button id="showPrompt" class="button">Show Prompts</button> </td></tr>')

	})

	
	$('#editPrompt').click(function(){
		$('#tbody')
	})


	function intializeTable(obj){
		console.log(obj)
		console.log(obj.getElementsByTagName("appdata")[0].getElementsByTagName("appdata").innerHTML);
		length = obj.getElementsByTagName("appdata").length;
		even_odd = "even";
		for (i = 0; i < length; i++)
		{
			createTableRow(obj.getElementsByTagName("appdata")[i], even_odd);
			if (even_odd == "even") {
				even_odd = "odd";
			} else {
				even_odd = "even";
			}
		}
	}

	function createTableRow(appdata, even_odd){
		var groupIdNum = appdata.getElementsByTagName("appid")[0].innerHTML;
		var groupIdName = appdata.getElementsByTagName("appname")[0].innerHTML;
		var groupPin = appdata.getElementsByTagName("pin")[0].innerHTML;
		var tempstring = 	'<tr id="appRow-' + groupIdNum + '" class="' + 'even_odd'+' ">' +
	      					 	'<td class="sorting_1">' + groupIdNum + '</td>' +
	      						
	      						'<td id="appNameText'+groupIdNum+'" class="readOnly">' +
	      							'<div id="appname'+groupIdName+'">'+groupIdName+'</div>' +
	      							'<div id="appNameEdit'+groupIdNum+'" class="editOptions">' +
                                		'<span class="tooltip">' +
                                    		'<input id="editAppNameInput'+groupIdNum+'" name="editAppNameInput'+groupIdNum+'" placeholder='+groupIdName+' value='+groupIdName+' style="width: 240px; " type="text" class="textInput">' +
                                		'</span>' +
                            		'</div></td>' +
	      						
	      						'<td class="collapsing">' +
	        						'<div class="ui fitted slider checkbox">' +
	          							'<input type="checkbox"> <label></label>' +
	        						'</div></td>' +
	      						
	      						'<td class="collapsing">' + 
	        						'<div class="ui fitted slider checkbox">' +
	          							'<input type="checkbox"> <label></label>' +
	        						'</div></td>' +
	      						
	      						'<td>4</td>' +
	      						
	      						'<td>' + groupPin + '</td>' +
	      						
	      						'<td style="height: 25px;  text-align: center;" class=" ">' +
                            		'<span class="tooltip">' +
                                		'<a id="editAppAnchor'+groupIdNum+'"></a>' +
                                			'<button id="editApp'+groupIdNum+'" value="'+groupIdNum+'" class="button">Edit</button>' +
			                                '<button id="editAppSave'+groupIdNum+'" value="'+groupIdNum+'" class="editOptions button">Save</button>' +
			                                '<button id="editAppCancel'+groupIdNum+'" value="'+groupIdNum+'" class="editOptions button">Cancel</button>' +
			                                '<button id="deleteApp'+groupIdNum+'" value="'+groupIdNum+'" class="editOptions button">Delete</button>' +
                                		
                            		'</span></td>' +
	      						
	      						'<td class=" ">' +
                            		'<button id="showHidePrompts'+groupIdNum+'" >Show Prompts</button>' +
                        		'</td>' +
      						'</tr>'

    	$('tbody').append(tempstring)
    	console.log()

	}



	$('#editApp11111').click(function(){
		document.getElementsById("appdata11111")
	});

	$('#11111').click(function(){
		alert("It worked!");
	});


})