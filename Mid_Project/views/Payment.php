<!DOCTYPE html>
<html>
<head>
</head>
<body background="../model/payment.jpg">

 <h1 style="
    color: orangered;
">Check payment history by Name and Serial no</h1>

 <label for="searchKey"style="
    color: orangered;
">Name</label>
<input type="text" name="searchKey" id="searchKey">
<br><br>
<label for="searchKey"style="
    color: orangered;
">Serial no</label>
<input type="text" name="searchKey" id="searchKey">
<br><br>
<button id="search" onclick="search()">Search</button>
<button onclick="history.go(-1);">Back </button>

 <p id="p2"></p>


</body>
</html>