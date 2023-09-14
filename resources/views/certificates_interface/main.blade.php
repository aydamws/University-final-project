<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>
  <title> SRMS</title>

  <style>
    * {
    box-sizing: border-box;
  }

  body {
    margin:0;
    padding:0;
    font-family: sans-serif;
    background:linear-gradient(90deg,#fff,#03e9f4,#03e9f4,#fff);
    background-attachment: fixed;
  }
  
  :root {
    --color-primary: #03e9f4;
    --color-secondary:#00001f;
    --color-third:#fff;
  }

  button {
    position: relative;
    place-items: center;
    width: 50px;
    height: 42px;
    font-size:20px;
    border: 0;
    padding: 0;
    font-family: inherit;
    background: transparent;
    color: #fff;
    cursor: pointer;
    scale:0.9;
  }
  
  .burger {
    width: 72px;
  }
  
  .navbar {
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 72px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    background: #00001f;
  }

  .navbar h3{
    font-size:16px;
    color:#fff;
    margin-left:10px;
  }
  
  .center {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 auto;
    color: #fff;
  }
  
  .search {
    position: relative;
    display: none;
  }
  
  .search button {
    position: absolute;
    top: 50%;
    right: 1px;
    translate: 0 -50%;
    z-index: 1;
    font-size: 20px;
    width:50px;
    height: 42px;
    border-radius: 0;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background: #00001f;
    color:#fff;
  }
  
  .search input {
    flex: 1 1 auto;
    height: 44px;
    width: 25vw;
    padding-left: 16px;
    padding-right: 60px;
    font-size: 16px;
    border: 1px solid #fff;
    border-radius: 22px;
    background: inherit;
    color: inherit;
    font-family: inherit;
    font-weight: 400;
    outline: none;
  }
  
  .navbar nav {
    display: flex;
    align-items: center;
    padding-right: 20px;
  }

  .navbar nav button{opacity:0.5;}
  .navbar nav button:hover{opacity:1;}
  
  .sidebar {
    position: fixed;
    overflow: hidden;
    top: 0;
    left: 0;
    width: 72px;
    height: 90.4%;
    background: #00001f;
    transition: width 0.4s;
    margin-top:72px;
    z-index:2;
  }
  
  body.open .sidebar {
    width: 230px;
  }

  .sidebar .material-symbols-outlined {
    position: relative;
    z-index: 2;
    padding: 20px;
    font-size: 25px;
    flex: 1 1 auto;
    min-width: 58px;
    opacity: 1;
    cursor: pointer;
    text-align: center;
    transition: 0.3s;
    color:#fff;
  }

  .sidebar a{text-decoration:none;}
  
  .sidebar-inner {
    position: absolute;
    top: 0;
    left: -20px;
    width: 300px;
    height: inherit;
    display: flex;
    flex-direction: column;
  }
  
  .sidebar-header {
    display: flex;
    align-items: center;
    height: 72px;
    padding: 0 1.25rem 0 0;
    background: rgba(0,0,0,0.1);
  }
  
  #sidebar-logo {
    height: 20px;
    opacity: 0;
    transition: 0.3s;
  }
  
  .sidebar-nav {
    padding-top: 10px;
    flex: 1 1 auto;
  }
  
  .sidebar button {
    display: flex;
    gap: 25px;
    align-items: center;
    height: 50px;
    width: 72px;
    font-family: "Poppins";
    font-size: 16px;
    font-weight: 200;
    letter-spacing: 2px;
    line-height: 1;
    padding: 0 25px;
    border-radius:25px;
  }
 
button .material-symbols-outlined{
  opacity: 1;
}  

  .sidebar button > img {
    width: 24px;
    height: 24px;
  }
  
  .sidebar button > span {
    color: #fff;
    opacity: 0;
    transition: 0.3s;
  }
  
  @keyframes appear {
    0% {
      opacity: 0;
      translate: 0 10px;
    }
    100% {
      opacity: 1;
      translate: 0;
    }
  }
  
  body.open .sidebar button > span {
    opacity: 1;
    animation: appear 0.3s both;
  }

  .Inter-box {
    position:relative;
    top: 475px;
    left: 50%;
    width: 400px;
    padding: 40px;
    margin:0 0 100px 0;
    transform: translate(-50%,-50%);
    background: #00001f;
    box-sizing:border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 50px;
    text-align:center;
  }

  .Inter-box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
  }
  
  .Inter-box form a {
    text-align: center; 
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    letter-spacing: 4px;
    margin:12px 40px;
  }

  .Inter-box a:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
  }
  
  @media screen and (max-width:800px){
    .Inter-box{
      width:375px;
      left:58%;}
   }


   /* media */


   @media (width <= 400px) {
    .navbar nav a button:is(:nth-child(2), :nth-child(3)) {
      display: none;}
  }
  @media(width<=550px){
    .Inter-box{
    left:57.8%;
    width:350px;
  }}
  @media (width >= 550px) {
    .center button { display: block; }
    .search {display: block; }
    #searchin { display: none;}
    .navbar h3{width:185px;}
    .navbar nav button{width:60px;}
    .Inter-box{left:50%;}
  }
  @media (width >= 650px) { 
    .search input { width: 240px;} 
    .navbar h3{width:187.5px;}
  }
  @media (width >= 750px) {
    .search input { width: 300px;}
    .navbar h3{width:200px;}
    .navbar nav button{width:70px;}
    }
    @media (width >= 800px) {
      .search input { width: 350px;}
      .navbar h3{width:210px;}
      }
      @media (width >= 850px) {
        .search input { width: 400px;}
        .navbar h3{width:220px;}
        }
        @media (width >= 900px) {
          .search input { width: 450px;}
          .navbar h3{width:230px;}
          }
  @media (width >= 950px) {
    .search input {width: 400px; }
    .center {padding-right:51px;}
    .navbar h3{width:250px;}
    .center {padding-right:52.5px;}
    .navbar nav button{width:70px;}
  }
  @media(width>=1100px){
    .navbar h3{width:270px;}
    .center {padding-right:20px;}
    .navbar nav button{width:80px;}
  }
  
    
  </style>
</head>
<body>

  <nav class="navbar">
    <h3>Computer Engineering Department</h3>
  <div class="center">
    <!-- <div class="search">
      <input spellcheck="false" type="text" class="search" id="search" placeholder="Search"/>
      <button class="material-symbols-outlined">search</button>
    </div> -->
  </div>
  <nav>
    <button class="material-symbols-outlined" id="searchin">search</button>
    <a href="#"><button class="material-symbols-outlined">home</button></a>
    <a href="#"><button class="material-symbols-outlined">info</button></a>
    <button class="material-symbols-outlined">settings</button>
  </nav>
</nav>

@include('sidebar')


      <div class="Inter-box">
        <h2>Certificates Interface</h2>
        <form>
          <a href="{{ route('cert_en') }}" id="a1">Degree Graduation Certificate English</a>
          <a href="{{ route('cert_ar') }}" id="a2">Degree Graduation Certificate </a>
          <a href="{{ route('endor_ar') }}" id="a3">Graduation Endorsement</a>
          <a href="{{ route('higher_ar') }}" id="a4">High Degree Graduation Certificate</a>
          <a href="{{ route('paper_en') }}" id="a5">Paper Graduation Certificate English</a>
          <a href="{{ route('paper_ar') }}" id="a5">Paper Graduation Certificate</a>
        </form>
      </div>

<script type="text/javascript">
     const toggleSidebar = () => document.body.classList.toggle("open");
</script>


</body>
</html>
