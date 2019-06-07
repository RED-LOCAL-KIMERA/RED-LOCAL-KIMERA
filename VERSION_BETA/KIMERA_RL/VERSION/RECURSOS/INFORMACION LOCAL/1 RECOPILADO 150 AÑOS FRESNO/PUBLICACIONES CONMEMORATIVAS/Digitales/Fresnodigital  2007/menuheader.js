  <script type="text/javascript">
function ocultamenu(){
  var menu = document.getElementById("productos");
  menu.style.display = "none";
}
function despliega(){
  var menu = document.getElementById("productos");
    if(menu.style.display == "none"){
      menu.style.display = "block";
    }
    else{
      menu.style.display = "none";
    }
}
</script>

En el evento onload del <body> llama