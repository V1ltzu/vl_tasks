<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
</head>

<body>
<div class="header">
        <a class="logo-con" href="index.php">
            <img src="cool-logo01.png" alt="cool-logo01" class="logo">
            <img src="cool-font03.png" alt="cool-font03" class="logo-3">
        </a>

        <div class="header-links">
            <div class="header-menu">
                <a href="index.php">Home</a>
                <a href="ex1.php">Exercise 1</a>
                <a href="contactus.php">Contacts</a>
                <a href="aboutus.php">About Us</a>
            </div>

            <!-- This is a hamburger menu -->
            <div class="ham_menu">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>

<style>
.logo-con {
    display: flex;
}
.logo {
    width: 50px; 
    height: 50px;
    margin: auto;

}

.logo-3 {
    width: 250px; 
    height: 70px;
    margin: auto; 
}

h1 {
    font-size: 1.6em;
}

h2 {
    font-family: Times, serif;
    font-weight: bolder;
    font-size: 1.2em;
}

h3 {
    font-size: 1.3em;
}

p {
    font-size: 14px;
}

body {
    background-image: url(background2.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: justify;
}

.top-container {
    background-color: #f1f1f1;
    padding: 30px;
    text-align: center;
}

.header {
    width: 100%;
    box-sizing: border-box;
    padding: 10px 16px;
    background:#006e6e;
    color: white;
    text-align: left;
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1;
}

.content {
    padding: 50px;
    padding-top: 150px;
    padding-bottom: 150px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex : 0 1 45%;
}

.content_info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;
    width: 50%;
}

.content img{
    padding: 16px;
    width: 330px;
    height: auto;
    border-radius: 40px;
}

.footer {
    width: 100%;
    background-color: #006e6e;
    color: white;
    text-align: center;
    text-align: 1vw;
    line-height: 0.6;
    padding-bottom: 15px;
}

button {
    background-color: #006e6e;
    color: black;
    padding: 5px 15px;
    border-radius: 5px;
    border: none;
    float: right;
    margin-left: 5px;
    width: fit-content; 
}

button:hover {
    background-color: rgb(102, 102, 107);
}

a{
    text-decoration: none;
    font-weight: bold;
    color: white;
}

a:hover{
    color: rgb(0, 0, 0);
}

button {
    background-color: white;
    color: black;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    float: right;
    font-weight: bold;
    margin-left: 10px;
    width: fit-content;    
}



.container{
    align-items: center;
}

.menu_con {
    padding-top: 100px;
    text-align: center;
}

</style></style>