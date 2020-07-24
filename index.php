
<html>
    <head>
        
    </head>
    <body>
        
        <p id="change">Checking storage</p>
        <a href="/index2.php?option=com_jumi&amp;fileid=3&amp;Itemid=11"
   onclick="window.open(this.href,'targetWindow',
                                   `toolbar=no,
                                    location=no,
                                    status=no,
                                    menubar=no,
                                    scrollbars=yes,
                                    resizable=yes,
                                    width=SomeSize,
                                    height=SomeSize`);
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
