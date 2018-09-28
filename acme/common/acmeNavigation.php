<ul class="topNav">
    <li><a title="Menu_Home" id="nav0" class="active" href="home.php" onclick="selectActive(0)">Home</a></li>
    <li><a title="Menu_Cannon" id="nav1" href="#cannon" onclick="selectActive(1)">Cannon</a></li>
    <li><a title="Menu_Explosive" id="nav2" href="#explosive" onclick="selectActive(2)">Explosive</a></li>
    <li><a title="Menu_Misc" id="nav3" href="#misc" onclick="selectActive(3)">Misc</a></li>
    <li><a title="Menu_Rocket" id="nav4" href="#rocket" onclick="selectActive(4)">Rocket</a></li>
    <li><a title="Menu_Trap" id="nav5" href="#trap" onclick="selectActive(5)">Trap</a></li>
</ul>
<script>
    function selectActive(selection) {
        if (selection == 0) {var element = document.getElementById("nav0");}
        if (selection == 1) {var element = document.getElementById("nav1");}
        if (selection == 2) {var element = document.getElementById("nav2");}
        if (selection == 3) {var element = document.getElementById("nav3");}
        if (selection == 4) {var element = document.getElementById("nav4");}
        if (selection == 5) {var element = document.getElementById("nav5");}
        nav0.classList.remove("active");        
        nav1.classList.remove("active");
        nav2.classList.remove("active");
        nav3.classList.remove("active");
        nav4.classList.remove("active");
        nav5.classList.remove("active");
        element.classList.add("active");
        
        
        
    }
</script>
