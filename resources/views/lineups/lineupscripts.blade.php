<script>
     var lista_picks = [], slots = ['free','free','free','free','free'];

    function listFilter() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');
    
      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }

    function pick(id, ico, port) {
        if(!pickincludes(id) && lista_picks.length < 5){
            lista_picks.push({hero:id,slot:slotfree()});
            var pick = document.createElement("img");
            pick.src = port;
            pick.height = 50;
            pick.width = 90;
            pick.id = (pickslot(id)+'pick');
            pick.alt = 'hero_'+id;
            pick.addEventListener("click", function(){
              deletePick((this.id).replace("pick",""),(this.alt).replace("hero_",""));
            });
            document.getElementById('pick'+slotfree()).appendChild(pick);
            document.getElementById(id).style.display = "none";
            var pickico = document.createElement("img");
            pickico.src = ico;
            pickico.height = 30;
            pickico.width = 30;
            pickico.id = (pickslot(id)+'ico');
            pickico.alt = 'ico_'+id;
            pickico.draggable='true';
            pickico.addEventListener('dragstart',function(){drag(event);});
            document.getElementById('ico'+slotfree()).appendChild(pickico);
            slotchange(slotfree());
        }
    }
    function deletePick(slotid,heroid){
        slotchange(slotid);
        removeFromList(lista_picks,slotid);
        var pick = document.getElementById(slotid+'pick');
        document.getElementById('pick'+slotid).removeChild(pick);
        document.getElementById(heroid).style.display ="";
        document.getElementById(slotid+'ico').remove();
    }
    
    // funciones aux
    //devuelve el index del primer slot que encuentra libre
    function removeFromList(lista,slotAEliminar){
      lista.splice((lista.findIndex(element => element.slot == slotAEliminar)),1);
    }
    
    function pickslot(item){
      var result;
      for(var i = 0 ; i<(lista_picks.length);i++){
        if (lista_picks[i].hero == item){
          result = lista_picks[i].slot;
          break; 
        }
      }
      return result;
    }

    function pickincludes(item){
      for(var i = 0; i<(lista_picks.length);i++){
        if (lista_picks[i].hero == item) {
          return true;
        }
      }
      return false;
      }

    function slotfree(){
      return slots.findIndex(element => element == "free");
    }

    function slotchange(item){
      if (slots[item]=="free"){
        slots[item] = "occu";
      }else{
        slots[item] = "free";
      }
    } 
  //drag and drop
    function allowDrop(ev){
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
    }
    //upload button check
    function checkUploadButton(){
      return(lineupTitleNotEmpty() && lineupDescriptionNotEmpty() && positionsNotEmpty());
    }

    //not empty auxs for check upload
    function lineupTitleNotEmpty(){
      const title = document.getElementById("lineup_title");
      return (title.value.length != 0  && title.value.trim().length != 0);
    }
    function lineupDescriptionNotEmpty(){
      const description = document.getElementById("lineUpDescription");
      return (description.value.length !=0 && description.value.trim().length != 0);
    }
    function positionsNotEmpty(){
      const divposition1 = document.getElementById("position1");
      const divposition2 = document.getElementById("position2");
      const divposition3 = document.getElementById("position3");
      const divposition4 = document.getElementById("position4");
      const divposition5 = document.getElementById("position5");
      return (positionNotEmpty(divposition1) && positionNotEmpty(divposition2) && positionNotEmpty(divposition3) && positionNotEmpty(divposition4) && positionNotEmpty(divposition5))
    }
    function positionNotEmpty(pos){
      return (pos.childElementCount != 0)
    }

    //ajax
    function loadXMLDoc() {
      if(checkUploadButton()){
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
          if (xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
       }
        else if (xmlhttp.status == 400) {
          alert('There was an error 400');
       }
        else {
           alert('something else other than 200 was returned');
       }
      }
    };
    var jsontitle = new Object();
    jsontitle.name = "LineUpTitle";
    jsontitle.value = document.getElementById("lineup_title").value;
    var jsondescription = new Object();
    jsondescription.name = "Description";
    jsondescription.value = document.getElementById("lineUpDescription").value;
    var jsonPos1 = new Object();
    jsonPos1.name = "Pos1Hero";
    jsonPos1.value = document.getElementById("position1").firstElementChild.alt.slice(4);
    var jsonPos2 = new Object();
    jsonPos2.name = "Pos2Hero";
    jsonPos2.value = document.getElementById("position2").firstElementChild.alt.slice(4);
    var jsonPos3 = new Object();
    jsonPos3.name = "Pos3Hero";
    jsonPos3.value = document.getElementById("position3").firstElementChild.alt.slice(4);
    var jsonPos4 = new Object();
    jsonPos4.name = "Pos4Hero";
    jsonPos4.value = document.getElementById("position4").firstElementChild.alt.slice(4);
    var jsonPos5 = new Object();
    jsonPos5.name = "Pos5Hero";
    jsonPos5.value = document.getElementById("position5").firstElementChild.alt.slice(4);
    var infoArray = new Array();
    infoArray.push(jsontitle);
    infoArray.push(jsondescription);
    infoArray.push(jsonPos1);
    infoArray.push(jsonPos2);
    infoArray.push(jsonPos3);
    infoArray.push(jsonPos4);
    infoArray.push(jsonPos5);
    var tokenValue = document.getElementsByName("_token");  
    xmlhttp.open("POST", "lineupnewstore", true);
    xmlhttp.setRequestHeader('X-CSRF-TOKEN', tokenValue[0].value);
    xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xmlhttp.send(JSON.stringify(infoArray));
  }
  else{
    //add modal boostrap to warning about uncompleted fields
    $('#incompleteFieldModal').modal('show');
  }
}
</script>