<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="css/style__home.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
	<header>
        <!--Nav-->
        <div class="nav container">
            <!--Logo-->
            <a href="home.php" class="logo">Servicios<span>Para</span>Todos</a>
			<div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class='bx bx-search'></i></button>
                </form>
            </div>
			<div class="profile">
				<a href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
        </div>    
   
    </header>
	<body>
    <!---->
   
    <section class="home" id="home">
        <!--Home-->
        <div class="home-text container">
            <h2 class="home-title">Servicios</h2>
            <span class="home-subtitle">Encuentre aqui todos sus servicios </span>
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter='all'>Todo</span>
        <span class="filter-item" data-filter='education'>Educacion</span>
        <span class="filter-item" data-filter='art'>Arte/Cultura</span>
        <span class="filter-item" data-filter='legal'>Legal</span>
        <span class="filter-item" data-filter='health'>Salud</span>
        <span class="filter-item" data-filter='tech'>Tecnologia</span>
        <span class="filter-item" data-filter='home'>Hogar</span>
        <span class="filter-item" data-filter='automobile'>Mecanica</span>
        <span class="filter-item" data-filter='transportation'>Transporte</span>
        <span class="filter-item" data-filter='events'>Eventos</span>
        <span class="filter-item" data-filter='various'>OficiosVarios</span>
    </div>

    <!--Posts-->

   <section class="post container">
        <!--Post box 1-->
        <div class="post-box $various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html " class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>
          <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div> <!--Post box 1-->
        <div class="post-box various">
            <img src="images/hombre1.jpg" alt="" class="post-img">
            <h2 class="category">OficiosVarios</h2>
            <a href="./Pages_Services/post-page3.html" class="post-title">
                Servicio de plomeria
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre1.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

         <!--Post box 2-->
         <div class="post-box education">
            <img src="images/hombre2.jpg" alt="" class="post-img">
            <h2 class="category">Education</h2>
            <a href="./Pages_Services/post-page.html" class="post-title">
                Clases de Matematicas
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre2.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>

        <!--Post box 3-->
        <div class="post-box health">
            <img src="images/hombre3.jpg" alt="" class="post-img">
            <h2 class="category">Salud</h2>
            <a href="./Pages_Services/post-page2.html" class="post-title">
                Odontologia
            </a>
            <span class="post-data">12 feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laudantium porro nulla inventore ipsam eveniet repellat? Reprehenderit eveniet quod asperiores deleniti quo quaerat praesentium fugiat? Dolorum eaque esse amet repudiandae!</p>
            
            <!--Profile-->
            <div class="profile">
                <img src="images/hombre3.jpg" alt="" class="profile-img">
                <span class="profile-name">Juan Perez</span>

            </div>
        </div>
   </section>
   <!--footer-->
   <div class="footer container">
        <p>&#169; David*David All Rights Reserverd</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
        </div>
   </div>




<!--link Jquery-->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<!--link javascript-->
<script src="js/main.js"></script>


</body>
	</body>
</html>