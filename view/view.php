<!-- (A) SEARCH JAVASCRIPT -->
<script>
function doSearch () {
  // (A1) GET SEARCH TERM
  var data = new FormData();
  data.append("search", document.getElementById("search").value);
  // (A2) AJAX - USE HTTP:// NOT FILE://
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../controller/controller2.php");
  xhr.onload = function(){
    let results = document.getElementById("results"),
             search = JSON.parse(this.response);
    results.innerHTML = "";
    if (search !== null) { for (let s of search) {
      results.innerHTML += `<div>${s.id} - ${s.name}</div>`;
    }}
  };
  xhr.send(data);
  return false;
}
</script>
 <h1>Busqueda de datos</h1>
 <hr>
<!-- (B) SEARCH FORM -->
<form onsubmit="return doSearch();">
    <label for="search">dato a buscar</label>
    <input type="text" id="search" required/>
    <input type="submit" value="Buscar"/> 
</form>
 
<!-- (C) SEARCH RESULTS -->
<div id="results"></div>