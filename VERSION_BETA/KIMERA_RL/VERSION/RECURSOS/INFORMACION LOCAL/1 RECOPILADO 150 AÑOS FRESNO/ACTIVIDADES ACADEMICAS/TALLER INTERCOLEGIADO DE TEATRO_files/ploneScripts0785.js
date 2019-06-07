
/* ----- js_helpers.js ----- */
// http://www.karisma.org.co:8081/fresnoartes/portal_javascripts/js_helpers.js?original=1
var isNav4,isNav6,isIE4;if(navigator.appVersion.charAt(0)=="4"){if(navigator.appName.indexOf("Explorer")>=0){isIE4=true}
else{isNav4=true}}
else if(navigator.appVersion.charAt(0)>"4"){isNav6=true}
var list_expanded=false;
function listtoggle(){var rlist="resource_list";var views_menu="views_menu";if(!list_expanded){document.getElementById(rlist).className="expanded";document.getElementById(views_menu).selectedIndex=1;list_expanded=true}else{document.getElementById(rlist).className="cover";document.getElementById(views_menu).selectedIndex=0;list_expanded=false}}
function show_div(divid){document.getElementById(divid).style.display='block'}
function hide_div(divid){document.getElementById(divid).style.display='none'}
function next(id){steps=['selection'];for(i=0;i<steps.length;i=i+1){setIdProperty(steps[i],"display","none")}
setIdProperty(id,"display","block")}
function setIdProperty(id,property,value){if(isNav6){var styleObject=document.getElementById(id);if(styleObject!=null){styleObject=styleObject.style;styleObject[property]=value}}
else if(isNav4){document[id][property]=value}
else if(isIE4){document.all[id].style[property]=value}}
function getIdProperty(id,property){if(isNav6){var styleObject=document.getElementById(id);if(styleObject!=null){styleObject=styleObject.style;if(styleObject[property]){return styleObject[property]}}
styleObject=getStyleBySelector("#"+id);return(styleObject!=null)?styleObject[property]:null}
else if(isNav4){return document[id][property]}
else{return document.all[id].style[property]}}
function getStyleBySelector(selector){if(!isNav6){return null}
var sheetList=document.styleSheets;var ruleList;var i,j;for(i=sheetList.length-1;i>=0;i--){ruleList=sheetList[i].cssRules;for(j=0;j<ruleList.length;j++){if(ruleList[j].type==CSSRule.STYLE_RULE||ruleList[j].selectorText==selector){return ruleList[j].style}}}
return null}
function hide_educational(){change_educational('none','block')}
function show_educational(){change_educational('block','none')}
function change_educational(act1,act2){document.getElementById('archetypes-fieldname-learningResourceType').style.display=act1;document.getElementById('archetypes-fieldname-endUserRole').style.display=act1;document.getElementById('archetypes-fieldname-learningContext').style.display=act1;document.getElementById('archetypes-fieldname-educationalInfo').style.display=act2}
function setValue(elem_id,value){document.getElementById(elem_id).value=value}
var config_values=new Object;
function parseConfig(){dataelem=document.getElementById('dataisland');eles=dataelem.getElementsByTagName('configset')[0];dataelem=eles;for(var c=0;c<dataelem.childNodes.length;c++){wele=dataelem.childNodes[c];if(wele.nodeName.toLowerCase()=='config'){config_values[wele.getAttribute('id')]=wele.childNodes[0].nodeValue}}}
function getConfig(key){if(!config_values[key])
parseConfig();return config_values[key]}
function add_one_more_slides(id_to_clone){var cloning_id=getConfig('base_id_to_clone');if(id_to_clone)
cloning_id=id_to_clone;box=document.getElementById(cloning_id+'0');number=0;for(var i=0;i<99;i++){if(!document.getElementById(cloning_id+i)){number=i;break}}
inserHere=document.getElementById('insertHere');clone=box.cloneNode(true);clone.id=cloning_id+number;inserHere.parentNode.insertBefore(clone,inserHere);clone=document.getElementById(cloning_id+number);inps=clone.getElementsByTagName('input');inps_ids_str=getConfig('input_ids');inps_ids=inps_ids_str.split(',');for(var i=0;i<inps.length;i++){for(var j=0;j<inps_ids.length;j++){if(inps[i].id==inps_ids[j]+'0'){inps[i].id=inps_ids[j]+number;if(inps[i].name.substring(0,inps_ids[i].length)==inps_ids[j]){inps[i].name=inps_ids[j]+number}
if(inps[i].type=='hidden'){inps[i].value=''}
if(inps[i].getAttribute('onclick')){if(inps[i].getAttribute('onclick').toString().indexOf('search_for_pieces')>0){inps[i].onclick=function blaah(event){evt=event?event:window.event;target=evt.target?evt.target:evt.srcElement;target_id=target.getAttribute('id');number=target_id.split('-')[2];search_for_pieces(evt,number,'False')}}}}}}
divs=clone.getElementsByTagName('div');divs_list=getConfig('div_ids');divs_ids=divs_list.split(',');for(var i=0;i<divs.length;i++){for(var j=0;j<divs_ids.length;j++){if(divs[i].id==divs_ids[j]+'0'){divs[i].id=divs_ids[j]+number;if(divs[i].style.backgroundImage){divs[i].style.backgroundImage=''}}}}
ta=clone.getElementsByTagName('textarea');ta_list=getConfig('textarea_ids');ta_ids=ta_list.split(',');for(var i=0;i<ta.length;i++){for(var j=0;j<ta_ids.length;j++){if(ta[i].id==ta_ids[j]+'0'){ta[i].id=ta_ids[j]+number;ta[i].name=ta_ids[j]+number;ta[i].innerHTML=''}}}
spans=clone.getElementsByTagName('span');count=getConfig('counter_id');for(var i=0;i<spans.length;i++){if(spans[i].id==count)
spans[i].textContent=number+1}
id_list=getConfig('display-after-clone');elems_to_show=id_list.split(',')
for(var i=0;i<elems_to_show.length;i++){elem=document.getElementById(elems_to_show[i]+number);if(elem)
elem.style.display='block'}
clone.style.display='block'}
function search_for_pieces(event,number,audio){if(audio=='audio=True'){results_box_ID=getConfig('audio-result-box')} else{results_box_ID=getConfig('search-result-box')}
search_box_base_id=getConfig('search-string-base');val=document.getElementById(search_box_base_id+number).value;if(!val){return}
div=document.getElementById(results_box_ID);div.style.display='block';div2=document.getElementById(results_box_ID+'-body');div2.innerHTML+='<b>Please wait while we process your query</b>';call_remote('js_queryForPieces','keyword='+val+', '+audio,ParseSearchResults,number,audio)}
function ParseSearchResults(response,number,mode){if(mode=='audio=True'){results_box_ID=getConfig('audio-result-box')}
else{results_box_ID=getConfig('search-result-box')}
pieces=eval(response);div=document.getElementById(results_box_ID);div.style.display='block';div=document.getElementById(results_box_ID+'-body');div.style.display='block';div.innerHTML='';if(pieces.length==0){div.innerHTML='<b>No results found</b>';return }
for(var i=0;i<pieces.length;i++){htm=''
if(mode=='audio=False')
htm+='<a href="javascript:presentation_add_to_slide('+number+',\''+pieces[i][0]+'\',\''+'../content/'+pieces[i][1]+'\');">';if(mode=='audio=accept')
htm+='<a href="javascript:chapter_add_multimedia('+number+',\''+pieces[i][0]+'\',\''+pieces[i][1]+'\',\''+pieces[i][2]+'\',\''+pieces[i][3]+'\');">';if(mode=='audio=True')
htm+='<a href="javascript:pilot_add_audio('+number+',\''+pieces[i][0]+'\',\''+pieces[i][1]+'\',\''+pieces[i][2]+'\');">';if(pieces[i][3]==1&&pieces[i][4]==1)
htm+='<img src="'+pieces[i][1]+'/coverImage" /><br />';if(pieces[i][3]==1&&pieces[i][4]==0)
htm+='<img src="'+pieces[i][1]+'/images/default_soundclip.png" /><br />';if(pieces[i][3]==0)
htm+='<img src="../content/'+pieces[i][1]+'/image_small" /><br />';htm+=pieces[i][2]+'</a><br />';div.innerHTML+=htm}}
function chapter_add_multimedia(number,uid,id,title,type){if(type==1){div=document.getElementById(getConfig('target-div-id')+number);div.style.backgroundImage='none';div=document.getElementById(getConfig('selected-media-box'));div.innerHTML='<img src="images/default_soundclip.png" width="120" height="120"><b>'+title+'</b>'}
if(type==0){div=document.getElementById(getConfig('target-div-id')+number);div.style.backgroundImage='url('+id+'/image_large)';div=document.getElementById(getConfig('selected-media-box'));div.innerHTML=''}
if(type==2){div=document.getElementById(getConfig('target-div-id')+number);div.style.backgroundImage='none';div=document.getElementById(getConfig('selected-media-box'));div.innerHTML='<img src="images/default_movieclip.png" width="120" height="120"><b>'+title+'</b>'}
pice=document.getElementById(getConfig('piece-referencing-input')+number);pice.value=uid;div=document.getElementById(getConfig('search-result-box'));div.style.display='none'}
function pilot_add_audio(number,uid,id,title){pice=document.getElementById(getConfig('piece-referencing-input')+number);pice.value=uid;div=document.getElementById(getConfig('audio-result-box')+'-body');div.innerHTML='<b>'+title+'</b>'}
function presentation_add_to_slide(number,uid,id){image_size=getConfig('image-size');div=document.getElementById(getConfig('target-div-id')+number);div.style.backgroundImage='url('+id+'/image_'+image_size+')';pice=document.getElementById(getConfig('piece-referencing-input')+number);pice.value=uid;div=document.getElementById(getConfig('search-result-box'));div.style.display='none'}
function call_remote(receiving_end,data,next_action,attr1,attr2){var xmlObj=null;if(window.XMLHttpRequest){xmlObj=new XMLHttpRequest()} else if(window.ActiveXObject){xmlObj=new ActiveXObject("Microsoft.XMLHTTP")} else{return}
xmlObj.onreadystatechange=function(){if(xmlObj.readyState==4){next_action(xmlObj.responseText,attr1,attr2)}}
xmlObj.open('POST',receiving_end,true);xmlObj.setRequestHeader('Content-Type','application/x-www-form-urlencoded');xmlObj.send(data)}
function edit_slide(index){document.getElementById('edit_button_'+index).style.display='none';document.getElementById('save_button_'+index).style.display='inline';document.getElementById('edit_upload_'+index).style.display='block';document.getElementById('edit_search_'+index).style.display='block';document.getElementById('edit_field_'+(parseInt(index)+1)).style.display='block';document.getElementById('view_field_'+(parseInt(index)+1)).style.display='none'}
function search_for_pieces_slides(event,number,audio){results_box_ID='piece-search-results-'+number;search_box_base_id=getConfig('search-string-base');val=document.getElementById(search_box_base_id+number).value;if(!val){return}
div=document.getElementById(results_box_ID);div.style.display='block';div2=document.getElementById(results_box_ID+'-body');div2.innerHTML+='<b>Please wait while we process your query</b>';call_remote('js_queryForPieces','keyword='+val+', '+audio,ParseSearchResults_slides,number,audio)}
function ParseSearchResults_slides(response,number,mode){results_box_ID='piece-search-results-'+number;pieces=eval(response);div=document.getElementById(results_box_ID);div.style.display='block';div=document.getElementById(results_box_ID+'-body');div.style.display='block';div.innerHTML='';if(pieces.length==0){div.innerHTML='<b>No results found</b>';return }
for(var i=0;i<pieces.length;i++){htm=''
if(mode=='audio=False')
htm+='<a href="javascript:presentation_add_to_slide_slides('+number+',\''+pieces[i][0]+'\',\''+'../content/'+pieces[i][1]+'\');">';if(mode=='audio=accept')
htm+='<a href="javascript:chapter_add_multimedia('+number+',\''+pieces[i][0]+'\',\''+pieces[i][1]+'\',\''+pieces[i][2]+'\',\''+pieces[i][3]+'\');">';if(mode=='audio=True')
htm+='<a href="javascript:pilot_add_audio('+number+',\''+pieces[i][0]+'\',\''+pieces[i][1]+'\',\''+pieces[i][2]+'\');">';if(pieces[i][3]==1&&pieces[i][4]==1)
htm+='<img src="'+pieces[i][1]+'/coverImage" /><br />';if(pieces[i][3]==1&&pieces[i][4]==0)
htm+='<img src="'+pieces[i][1]+'/images/default_soundclip.png" /><br />';if(pieces[i][3]==0)
htm+='<img src="../content/'+pieces[i][1]+'/image_small" /><br />';htm+=pieces[i][2]+'</a><br />';div.innerHTML+=htm}}
function presentation_add_to_slide_slides(number,uid,id){image_size=getConfig('image-size');div=document.getElementById(getConfig('target-div-id')+number);div.style.backgroundImage='url('+id+'/image_'+image_size+')';pice=document.getElementById(getConfig('piece-referencing-input')+number);pice.value=uid;div=document.getElementById('piece-search-results-'+number);div.style.display='none'}

