/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
function populateSelectBox()
{
    var cat=document.getElementById("category");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","./populateSelectBox.php",true);
    
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.status==200 && xmlhttp.readyState==4){
            var response=xmlhttp.responseText;
            var ans=JSON.parse(response);
            for(var i=0;i<ans.length;i++){
                var op = document.createElement("option");
                op.text = ans[i].C_NAME;
                op.id = ans[i].C_ID;
                cat.add(op);
            }
        }
    }
xmlhttp.send();
}


function populateSkills(selected)
{
    alert(selected);
    var skills=document.getElementById("skills");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","./populateSelectBox.php?selected="+selected,true);
    
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.status==200 && xmlhttp.readyState==4){
            var response=xmlhttp.responseText;
            var ans=JSON.parse(response);
            for(var i=0;i<ans.length;i++){
                alert(ans[i].ITEM_NAME);
                var op = document.createElement("option");
                op.text = ans[i].ITEM_NAME;
                skills.add(op);
            }
        }
    }
xmlhttp.send();
}
*/
var optionArray=[];
function init()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","./populateSkills.php",true);
    
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.status==200 && xmlhttp.readyState==4){
            var response=xmlhttp.responseText;
            var ans=JSON.parse(response);
            for(var i=0;i<ans.length;i++){
                optionArray[i] = ans[i].SKILL_NAME;
            }
            populate();
        }
    }
    xmlhttp.send();
   
}

function populate() {
        var s2 = document.getElementById("slct2");
    for (var option in optionArray) {
        if (optionArray.hasOwnProperty(option)) {
            var pair = optionArray[option];
            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.name = pair;
            checkbox.value = pair;
            checkbox.id = pair;
            //checkbox.class = "abc";
            s2.appendChild(checkbox);
    
            var label = document.createElement('label')
            label.htmlFor = pair;
            label.appendChild(document.createTextNode(pair));

            s2.appendChild(label);
            //s2.appendChild(document.createElement("br"));
    /*
            var label = document.createElement('label')
            label.htmlFor = pair;
            label.appendChild(document.createTextNode(pair));

            s2.appendChild(label);*/
            //s2.appendChild(document.createElement("br"));    
        }
    }
}