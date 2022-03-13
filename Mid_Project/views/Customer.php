<!DOCTYPE html>
<html>
<head>
</head>
<body background="../model/customer.jpg"style="
    background-repeat: no-repeat;
    background-size: cover;">

 <h1 style="
    color: green;
">Search Customer by Name and Serial no</h1>

 <label for="searchKey" style="
    color: green;
">Name</label>
<input type="text" name="searchKey" id="searchKey">
<br><br>
<label for="searchKey" style="
    color: green;
">Serial no</label>
<input type="text" name="searchKey" id="searchKey">
<br><br>
<button id="search" onclick="search()">Search</button>
<button onclick="history.go(-1);">Back </button>
 <p id="p2"></p>


</body>
</html>