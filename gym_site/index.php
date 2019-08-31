<!DOCTYPE html> 
<html> 

    <head> 
        <title> 
            Website Layout 
        </title> 
        <style> 
            * { 
                box-sizing: border-box; 
            } 
              
            /* CSS property for header section */ 
            .header { 
                background-color: green; 
                padding: 15px; 
                text-align: center; 
            } 
               

         
              
            /* CSS property for nevigation menu */ 
            .nav_menu { 
                overflow: hidden; 
                //width: 20%;
                background-color: #334; 
            } 
            .nav_menu a { 
                float: center; 
                display: block; 
                color: white;
                width: 100%;
                text-align: center; 
                padding: 55px 16px; 
                text-decoration: none; 
            } 
            .nav_menu a:hover { 
                background-color: white;
                 width: 100%;
                color: green; 
            } 
              
            /* CSS property for content section */ 
            .columnA, .columnB, .columnC { 
                float: left; 
                width: 21%; 
                padding: 15px; 
                text-align:justify; 
            } 
            h2 { 
                color:green; 
                text-align:center; 
            } 
              
            /* Media query to set website layout  
            according to screen size */ 
            @media screen and (max-width:600px) { 
                .columnA, .columnB, .columnC { 
                    width: 50%; 
                } 
            } 
            @media screen and (max-width:400px) { 
                .columnA, .columnB, .columnC { 
                    width: 100%; 
                } 
            } 
            
            
            /* Style the footer */
				footer {
  				background-color: #333;
  				padding: 100px;
  				text-align:  center;
  				color: red;
				}
        </style> 
    </head> 
    <body> 
          
        <!-- header of website layout -->
        <div class = "header"> 
            <h2 style = "color:white;font-size:200%"> 
                PengCub Gym Managment 
            </h2> 
        </div> 
         

        
        
        
<style>
    .indent-1 {float: left;}
    .indent-1 section {width: 18%; float: left;}
</style>

 <style>  
    div.a {
  padding: 80px 40px;
  min-width: 700px;
  max-width:10000px;
  
 color: white;
 text-align: left;
}
</style>


<section class="indent-1">
    <!-- Section 1 --> 
    <section>
        <!-- nevigation menu of website layout -->
        <div class = "nav_menu"> 
         <nav>
		<a href="available_sections1.php">Classes</a>
		<a href="members.php">Members</a>
		<a href="exercises.php">Workouts</a>
		<a href="Instructors.php">Instructors</a>
         </nav>
	  </div> 
    </section>

    <!-- Section 2 -->
    <section>

<div class="a">
<p2 style="font-family:arial;font-size:120%; text-align:left;color: white;">The PengCub-Gym-Managment-Tool is an online application that functions as a scheduling and personnel management tool for a fake gym I created, the PengCub Gym. The tool allows administrators the ability to manage gym members, instructors and classes. Exercise classes, members, and instructors can be both added and removed at the administrators discretion. Once an exercise class is scheduled for a particular date and time, the administrator can register members for said class. Triggers and foreign keys in the back-end ensure room capacities are not exceeded, instructors cannot teach more than one class at once, members cannot attend more than one class at once, and rooms cannot be scheduled for more than once class at once. The front end was written in PHP and the back-end in MYSQL. I used Heroku to host and deploy the application with JawsDB as the database add-on.</p2>
</div>

    </section>
</section>  
     
        
        
        

        
<footer>
  <p>PengCubInc.</p>
</footer>        
        
        
        

        
        

        

      

</body>
</html>