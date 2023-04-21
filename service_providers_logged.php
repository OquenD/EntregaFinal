<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'mainbase';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$id = $_GET['id'];
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT name, lastname, phonenumber, email, password, service_type, company_name, service_name, personal_descripcion FROM providers WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_GET['id']);
$stmt->execute();
$stmt->bind_result( $name, $lastname, $phonenumber, $email, $password, $service_type, $company_name, $service_name, $personal_descripcion);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SERVICIOS A TU MANO</title>

<!--CSS-->
<link rel="stylesheet" href="css/style_log_post.css">

<!--Icons-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">


</head>
<body>
    <!---->
    <!--Header-->
	<header>
        <!--Nav-->
        <div class="nav container">
            <!--Logo-->
            <a href="home.php" class="logo">Servicios<span>Para</span>Todos</a>
            <nav class="navtop">
			
				<a href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			
		</nav>
        </div>    
   
    </header>
    <section class="home" id="home">
        <!--Home-->
        <div class="home-text container">
            <h2 class="home-title">Servicios</h2>
            <span class="home-subtitle">Encuentre aqui todos sus servicios </span>
        </div>
    </section>
  <!--Post content-->
    <section class="post-header">
        <div class="header-content post-container ">
            <!--back to home-->
            <a href="index.php" class="back-home">Back to home</a>
            <!--Title-->
            <h1 class="header-title"><?=$company_name?></h1>
             <!--Post Image-->
             <img src="images/<?=$email?>.jpg" alt="" class="header-img">

        </div>

    </section>
   
    <!--Posts-->

    <section class="post-content post-container">
        <h2 class="sub-heading"><?=$service_name?></h2>
        <p class="post-text"><?=$personal_descripcion?></p>
   
        <div class="container">
           
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr class="bg-light-gray">
                            <th class="text-uppercase">Hora
                            </th>
                            <th class="text-uppercase">Lunes</th>
                            <th class="text-uppercase">Martes</th>
                            <th class="text-uppercase">Miercoles</th>
                            <th class="text-uppercase">Jueves</th>
                            <th class="text-uppercase">Viernes</th>
                            <th class="text-uppercase">Sabado</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!--8am-->                        
                        <tr>
                            <td class="align-middle">08:00am</td>
                            <td class="bg-light-gray" rowspan="2">
                              
                            </td>
                            <td class="bg-light-gray" rowspan="9">

                            </td>

                           <td class="bg-light-gray" rowspan="2">
                              
                            </td>
                            <td class="bg-light-gray" rowspan="9">

                            </td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Clase</span>
                                <div class="margin-10px-top font-size14">8:00-10:00</div>
                                <div class="font-size13 text-light-gray">Disponible</div>
                            </td>
                            <td class="bg-light-gray" rowspan="9">

                            </td>
                            
                        </tr>

                        <!--9am-->                        
                        <tr>
                            <td class="align-middle">09:00am</td>
                         

                        </tr>

                        <!--10am-->
                        <tr>
                            <td class="align-middle">10:00am</td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13" rowspan="2">Clase</span>
                                <div class="margin-10px-top font-size14" >10:00-12:00</div>
                                <div class="font-size13 text-light-gray">Disponible </div>
                            </td>

                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13" rowspan="2">Clase</span>
                                <div class="margin-10px-top font-size14" >10:00-12:00</div>
                                <div class="font-size13 text-light-gray">Disponible </div>
                            </td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13" rowspan="2">Clase</span>
                                <div class="margin-10px-top font-size14" >10:00-12:00</div>
                                <div class="font-size13 text-light-gray">Disponible </div>
                            </td>

                            
                           
                        </tr>

                        <!--11am-->
                        <tr>
                            <td class="align-middle">11:00am</td>
                            
                            </td>
                           
                        </tr>

                        <!--12pm-->
                        <tr>
                            <td class="align-middle">12:00pm</td>
                            <td class="bg-light-gray"> </td>
                            <td class="bg-light-gray"> </td>
                            <td class="bg-light-gray"> </td>
                           
                        </tr>

                        <!--2pm-->
                        <tr>
                            <td class="align-middle">02:00pm</td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Clase</span>
                                <div class="margin-10px-top font-size14">2:00-4:00</div>
                                <div class="font-size13 text-light-gray">Disponible</div>
                            </td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Clase</span>
                                <div class="margin-10px-top font-size14">2:00-4:00</div>
                                <div class="font-size13 text-light-gray">Disponible </div>
                            </td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Clase</span>
                                <div class="margin-10px-top font-size14">2:00-4:00</div>
                                <div class="font-size13 text-light-gray">Disponible </div>
                            </td>
                           
                           
                        </tr>

                        <!--3pm-->
                        <tr>
                            <td class="align-middle">03:00pm</td>
  
                        </tr>

                        <!--4pm-->
                        <tr>
                            <td class="align-middle">04:00pm</td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Clase</span>
                                <div class="margin-10px-top font-size14">04:00-06:00</div>
                                <div class="font-size13 text-light-gray">Disponible </div>
                            </td>
                            <td rowspan="2">
                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Clase</span>
                                <div class="margin-10px-top font-size14">04:00-06:00</div>
                                <div class="font-size13 text-light-gray">Disponible </div>
                            </td>
                            <td class="bg-light-gray" rowspan="2"> </td>
                            
                            
                        </tr>

                        <!--5pm-->
                        <tr>
                            <td class="align-middle">05:00pm</td>   
                            
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="info">
            <form action="/">
                <!--Cita-->
                <div class="appointment">
                <h1>Elegir Clase</h1>
                
                     <input class="fname" type="text" name="name" placeholder="Nombre Completo">
                     <input type="text" name="name" placeholder="Email">
                     <input type="text" name="name" placeholder="Telefono">

                <p>Clase</p>
                    <select>
                    <option selected value="" disabled selected></option>
                    <option value="monday1" >Lunes 10AM-12PM</option>
                    <option value="monday2">Lunes 02PM-04PM</option>
                    <option value="monday3">Lunes 04PM-06PM</option>
                    <option value="wednesday1">Miercoles 10AM-12PM </option>
                    <option value="wednesday2">Miercoles 02PM-04PM </option>
                    <option value="wednesday3">Miercoles 04PM-06PM </option>
                    <option value="friday1">Viernes 08AM-10AM</option>
                    <option value="friday2 ">Viernes 10AM-12PM </option>
                    <option value="friday3 ">Viernes 02PM-04PM </option>
                    </select>
               <p>Comentario</p>
                    <div>
                        <textarea rows="3"></textarea>
                    </div>
                </div>
                <!--Payment-->
                <br>
                <div class="appointment">
                    <h1>Pago</h1>   
                        
                        <input type="number" name="creditcardnumber" placeholder="Numero de tarjeta" id="creditcardnumber" required>
                       
                    
                        <input type="month" name="creditcarddate"  id="creditcarddate" min="2019-01" max="2029-12">
                        
                      
                        <input type="number" name="cvc" placeholder="CVC" id="cvc" required>
                       
        
                        <input type="submit" value="Agendar"> 
            </div>
            </form>
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
</html>
