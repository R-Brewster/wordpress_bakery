<script>
    var xmlhttp = '';

    if(window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    else {
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $('.menu-items').innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "menu_request.php", true);
    xmlhttp.send();
</script>