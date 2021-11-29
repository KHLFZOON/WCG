<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="This Is the ">
    <meta name="theme-color" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='manifest' href='wcg.manifest'>
    <title>WholeCakeGroup</title>
</head>
<body>
   
<?php
include('navBar.php');
?>
    <div id="container">
        <img src="app/icons/logo_1.png" alt="WCG Logo" srcset="">
       
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Odit, perspiciatis! Voluptas temporibus quisquam vitae,
                nostrum, labore veniam atque ipsum dicta inventore saepe
                est consectetur fugit. Quod odit harum voluptas debitis.
            </p>
      
    </div>
<?php include('footer.php')?>
    <style>
      
       *{
           padding: 0px;
       }
        ::-webkit-scrollbar{
            width: 5px;
        }::-webkit-scrollbar-thumb{
            background: #777;
            border-radius: 20px;
        }
        
        #container{
            position: relative;
            top: 200px;
            width: 60%;
            height: 300px;
            left: 50%;
            transform: translate(-50%);
        }
        #container img{
            width: 350px;
            position: relative;
            float: left;
            top: 100px;
            left: -40px;
        }#container p{
            font-size: 19px;
            width: 70%;
            position: relative;
            float: left;
            left: 40%;
        }@media screen and (max-width:740px){

        #container img{
                width: 340px;
                top: 10px;
                position: relative;
                left: 50%;
                transform: translate(-50%);
            }
            /* footer{
               
                top: 450px;
            } */
            #container{
                position: relative;
                left: 50%;
                transform: translate(-50%);
                text-align: center;
            }#paragraph_con{
                position: relative;
                left: 50%;
                transform: translate(-50%);
                height: 200px;
                top: 100px;
                text-align: center;
                /* text-align: unset; */
            }#container p{
                position: relative;
                left: 50%;
                top: 110px;
                width: 80%;
                transform: translate(-50%);
            }
            body{
                user-zoom:none;
                user-select: none;
            }footer{
                top: 500px;
                height: 250px;
            }
        }
    </style>
     <script>
         window.addEventListener('load',()=>{
            registerSW();
         });
         
        async function registerSW(){
            if('serviceWorker' in navigator){
                try{
                    await navigator.serviceWorker.register('./sw.js')
                }catch (e){
                    console.log('SW registeration failed');
                }
            }
        }

    </script>
</body>
</html>