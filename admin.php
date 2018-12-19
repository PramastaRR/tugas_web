    <?php 
include 'connection.php';

// mengaktifkan session
session_start();

 




// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location: admin_login.php");
}


$sql_result = $conn->query(
    "select * from puskesmas.poli"
 )


  
?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Dasbor</title>         
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>         
        <script src="nav.js"></script> 
        <style type="text/css">
            *,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    height: 100%;
    overflow-x: hidden;
    font-family: sans-serif;
}

.admin {
    --spacing: 1rem;
    display: flex;
    flex-wrap: wrap;
    display: grid;
    height: 100vh;
    grid-template-rows: 70px 1fr 70px;
    grid-template-columns: 250px 1fr;
    grid-template-areas: "header header" "nav    main" "footer footer";
}

.admin__header {
    display: flex;
    flex-basis: 100%;
    grid-area: header;
    height: 70px;
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    position: relative;
}

.admin__nav {
    flex: 0 0 250px;
    grid-area: nav;
    background-color: #1d2127;
}

.admin__main {
    flex: 1;
    grid-area: main;
    padding: var(--spacing);
    overflow-y: auto;
    overflow-x: hidden;
    -webkit-overflow-scrolling: touch;
    background-color: #f4f7fa;
}

.admin__footer {
    display: flex;
     flex-basis: 100%;
    justify-content: space-between;
    align-items: center;
    height: 70px;
    padding: 0 var(--spacing);
    color: #4e5561;
    background-color: #1d2127;
}

@media screen and (min-width: 48rem) {
    .admin {
        --spacing: 2rem;
    }
}

.dashboard {
    --column-count: 2;
    display: flex;
    flex-wrap: wrap;
    margin: 0 calc(var(--spacing) * -0.5);
    display: grid;
    grid-template-columns: repeat(var(--column-count), 1fr);
    grid-gap: var(--spacing);
}

.dashboard__item {
    flex: 1 1 50%;
    grid-column-end: span 2;
    padding: calc(var(--spacing) / 2);
}

.dashboard__item--full {
    flex-basis: 100%;
    grid-column: 1/-1;
}

.dashboard__item--col {
    flex-basis: calc(100% / var(--column-count));
    grid-column-end: span 1;
}

@media screen and (min-width: 48rem) {
    .dashboard {
        --column-count: 4;
    }
}

@supports (display: grid) {
    .dashboard {
        margin: 0;
    }

    .dashboard__item {
        padding: 0;
    }
}

a {
    color: #dc5a60;
    text-decoration: none;
}

img {
    max-width: 100%;
    height: auto;
}

.logo {
    display: flex;
    flex: 0 0 250px;
    height: 70;
    justify-content: center;
    align-items: center;
    position: relative;
    margin: 0;
    color: #fff;
    background-color: #3BD2A2 !important;
    font-size: 1rem;
}

.logo h1 {
    margin: 0;
}

.toolbar {
    display: flex;
    flex: 1;
    justify-content: space-between;
    align-items: center;
    padding: 0 var(--spacing);
}

.menu {
    list-style-type: none;
    padding: 0;
}

.menu__item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}

.menu__link {
    font-size: 1rem;
    display: block;
    padding: 1rem 2rem;
    color: #76808f;
    text-decoration: none;
}

.menu__link:hover,
.menu__link:focus {
    color: #fff;
    background-color: #1f222d;
}

.card {
    height: 100%;
    padding: 1rem;
    font-size: 2rem;
    font-weight: 300;
    background-color: #fff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.btn {
    display: inline-block;
    border-radius: 5em;
    border: 0;
    padding: 0.5rem 1rem;
    white-space: nowrap;
    
}

.logout{
    background-color: #dc5a60;
     display: inline-block;
    border-radius: 5em;
    border: 0;
    padding: 0.5rem 1rem;
    white-space: nowrap;
        color: #fff;

    
}

.btn--primary {
    color: #fff;
    background-color: #fff;
}

.ticker {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
}

.ticker__item {
    margin-right: 1rem;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
        </style>        
    </head>     
    <body> 
        <div class="admin"> 
            <header class="admin__header"> 
                <a href="#" class="logo"><h1>Daftar Pasien</h1></a> 
                <div class="toolbar"> 
                    <button class="btn btn--primary">Add New Plumbus</button>  
                    
                    <a href="logout.php" class="logout"> 
        Log Out
 </a> 
                </div>                 
            </header>             
            <nav class="admin__nav"> 
                <ul class="menu"> 
                <?php
                // membuat perulangan cards
                while ($rows = $sql_result->fetch_assoc()){
                ?> 
                <li class="menu__item"> 
                <a class="menu__link" href="#">Poli <?= $rows['nama_poli']?></a></li>  
                 <?php
                }
                ?>                     
                </ul>                 
            </nav>             
            <main class="admin__main"> 
                <h2>Daftar Pasien Puskesmas</h2>

<table>
  <tr>
    <th>No</th>
    <th>Poli</th>
    <th>No Antrean</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>No Telpon</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
  </tr>
  
</table>                 
            </main>             
            <footer class="admin__footer"> 
                <ul class="ticker"> 
</ul>                 
                <span>&nbsp;2018 Dashboard Pasien. </span> 
            </footer>             
        </div>         
    </body>     
</html>


