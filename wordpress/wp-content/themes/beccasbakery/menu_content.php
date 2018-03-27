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
            document.getElementById('menu-items').innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET","<?php echo get_bloginfo('template_directory'); ?>'/menu_request.php'", true);
    xmlhttp.send();
</script>