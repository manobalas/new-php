
<html>
    <head>
        
    </head>
    <body>
        
        <p id="change">Not Logged in</p>
        <a href="auth/index.php?clientId=ranjithdinakaran&clientSecret=Drk_13232104&prefix_url=d-lab-2019" onclick="openWin(this.href); return false;">Click here to login</a>
        <script>
            var myWindow;
            function openWin(link) {
                myWindow = window.open(link,'targetWindow',`toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=500,height=500`);
            }
            
            function closeWin() {
              myWindow.close();
            }
            
            setInterval(function(){ 
                // check
                if(localStorage.getItem("b_token") != null) {
                    document.getElementById("change").innerHTML = "Logged In";
                    closeWin();
                }
            }, 1000);
        </script>
    </body>
</html>
