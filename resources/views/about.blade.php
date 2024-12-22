<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>halaman home</title>
    <link rel="stylesheet" href="md.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>
    body{
        background: url(img/pl.avif);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
        padding: 0;
    }
      .nav{
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 30px 0;
    }
    .nav .logo h1{
      font-weight: 600;
      font-family: sans-serif;
      color: white;
    }
    .nav .logo b{
      color: rgb(0, 132, 255);
    }
    .nav ul{
      display: flex;
      list-style: none;
    }
    .nav ul li{
      margin-right: 30px;
    }
    .nav ul li a{
      text-decoration: none;
      color: white;
      font-weight: 500;
      font-family: sans-serif;
      font-size: 17px;
      transition: .3s;
    }
    .nav ul li a:hover{
      color: rgb(0, 132, 255);
    }
    /* Tombol dengan animasi */
.animated-button {
    background-color: rgb(0, 132, 255);
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

/* Efek hover */
.animated-button:hover {
    background-color: rgb(0, 132, 255);
    transform: scale(1.1);
}
</style>
<body>
    <section class="menu">
        <div class="nav">
          <div class="logo" style="margin-left: 50px;"><h1>Alfin<b>Dev</b></h1></div>
          <ul>
            <li><a class="active" href="/home">home</a></li>
            <li><a href="/about">about</a></li>
            <li><a href="/Portofolio">Portofolio</a></li>
            <li><a href="/Education">Education</a></li>
            <li><a href="/Contack">Contack</a></li>
          </ul>
          <div style="margin-right: 50px;">
            <input class="signin" type="submit" value="Sign In" name="singin">
            <input class="signup" type="submit" value="Sign Up" name="singup">
          </div>
        </div>
        </section>
        <button class="animated-button">Download Cv</button>
</body>
</html>