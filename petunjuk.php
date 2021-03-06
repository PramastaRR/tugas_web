<!DOCTYPE html> 
<html> 
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .header {
                overflow: hidden;
                background-color: #f1f1f1;
                padding: 5px 10px;
            }

            .header a {
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
                margin: 2px;
            }

            .header a.logo {
                font-size: 25px;
                font-weight: bold;
            }

            .header a:hover {
                background-color: #ddd;
                color: black;
            }

            .header a.active {
                background-color: #4CAF50;
                color: white;
            }

            .header-right {
                float: right;
            }

            @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }

                .header-right {
                    float: none;
                }
            }
        </style>         
    </head>     
    <body> 
        <?php 
        include "header.php";
        ?>
        <script>
            // menentukan tombol header yang aktif
            document.getElementById("petunjuk").setAttribute("class", "active");
        </script>                                               
        <div style="padding-left:20px"> 
            <h1>Petunjuk</h1> 
            <p>Berikut ini petunjuk tata cara pendaftaran online</p> 
        </div>         
        <div class="image">
            <img src="petunjuk.jpg" class="center" style=" 
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
 " />
        </div>
    </body>     
</html>
