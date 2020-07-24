
<html>
    <head>
        
    </head>
    <body>
        
        <p id="change">Checking storage</p>
        <a href="auth/index.php?clientId=ranjithdinakaran&clientSecret=Drk_13232104&prefix_url=d-lab-2019"
   onclick="window.open(this.href,'targetWindow',
                                   `toolbar=no,
                                    location=no,
                                    status=no,
                                    menubar=no,
                                    scrollbars=yes,
                                    resizable=yes,
                                    width=500,
                                    height=500`);
 return false;">Popup link</a>
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
