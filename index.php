
<html>
    <head>
        
    </head>
    <body>
        
        <p id="change">Checking storage</p>
        <script>
            setInterval(function(){ 
                // check
                if(localStorage.getItem("b_token") != null) {
                    document.getElementById("change").innerHTML = "Cookie Available"
                }
            }, 1000);
        </script>
    </body>
</html>
