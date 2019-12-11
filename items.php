
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href ="items.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="./js/vue.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Menu Items</title>
</head>
<body>
<div id ="mySideNav" class="sidebar">
        <div class="sidebarlogo">
            <img src="img/boomy.png" alt="BOOMY" id = "circleimg">
            <h1>Camp Boomy Cafe</h1>
        </div>
        <ul class="list-group">
            <a href="dashboard.php"><li class="list-group-item">Dashboard</li></a>
            <a href="pos.php"><li class="list-group-item">Point of Sales</li></a>
            <a href="items.php"><li class="list-group-item">Items</li></a>
            <a href="records.php"><li class="list-group-item">Records</li></a>
            <a href="settings.php"><li class="list-group-item">Settings</li></a>
            <a href="javascript:void(0)" class="closebtn" onclick="fnCloseNav()">&times;</a>
        </ul>
</div>
<div class="header">
        <a href="dashboard.php">
        <img src="img/boomy.png" alt="Boomy" id="icon">
        <span> Camp Boomy Cafe</span>
        </a>
</div>
<div class="main">
    <div class="burger">
    <span id = "sidebar-btn" onclick = "fnOpenNav()">&#9776;</span>
    </div>
    <div class="itemHeader">
        <span> Items</span>
        <label for="filter">Filter</label>
            <select name="filter" id="filter" v-model="filter">
                <option value="name">Name</option>
                <option value="category">Category</option>
                <option value="price">Price</option>
            </select>
            <button id = "order" @click="changeOrder()">{{order}}</button>
            <input type="text" name="search" id="search" placeholder = "&#128270 Search" v-model="search">
            <button id = "addItem" @click="showAddForm()">Add Item</button>
    </div>
</div>
<script>
    var app = new Vue({
        el: ".itemHeader",
        data: {
            filter: "",
            order: "ASC",
            search: ""
        }
    })
</script>
<script>
function fnOpenNav(){
    document.getElementById("mySideNav").style.width = "335px";

}

function fnCloseNav(){
    document.getElementById("mySideNav").style.width = "0px";
}
</script>
</body>
</html>