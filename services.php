<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="wcg.manifest">
    <title>Services</title>
</head>
<body>
    <?php $services = 'services'; include('navBar.php');?>
    <div id="services_con">
        <div id="toonion">
            <img id='toonion_logo'src="app/icons/toonion.png" alt="" srcset="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id unde atque ut, deleniti quaerat eius inventore quisquam sunt aut perspiciatis saepe, explicabo 
                dolore tempore? Dolorem, excepturi! Unde harum 
            commodi dolore.</p>
        </div>
        <div id="exp">
            <img id='exp_img' src="app/icons/manga.png" alt="" srcset="">
            <p id='exp_txt'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id unde atque ut, deleniti quaerat eius inventore quisquam sunt aut perspiciatis saepe, explicabo 
                dolore tempore? Dolorem, excepturi! Unde harum 
            commodi dolore.</p>
        </div>
        <div id="exp">
            <img id='exp_img_1'src="app/icons/book.png" alt="" srcset="">
            <p id='exp_txt_1'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id unde atque ut, deleniti quaerat eius inventore quisquam sunt aut perspiciatis saepe, explicabo 
                dolore tempore? Dolorem, excepturi! Unde harum 
            commodi dolore.</p>
        </div>
    </div>
    <?php include('footer.php')?>
    <style>
        footer{
            top: 900px;
        }
        #exp_img_1{
          width:200px;
          position:relative;
          float:left;
        }
        ::-webkit-scrollbar{
            width: 5px;
        }::-webkit-scrollbar-thumb{
            background: #777;
            border-radius: 20px;
        }
      #exp{
          position: relative;
          top: 400px;
          text-align: right;
          /* border: 1px solid red; */
          height: 300px;
          display: block;
          margin-top: 60px;
      }
      #exp_img{
          width:200px;
          position:relative;
          float:right;
      }#exp_txt{
          width: 600px;
          position: relative;
          float:right;
          right: 100px;
          top: 40px;
      }
      #exp_txt_1{
          width: 600px;
          position: relative;
          float:left;
          left: 100px;
          top: 40px;
      }
        #toonion_logo{
            position: relative;
            top: 140px;
            left: 100px;
            width: 200px;
        }#toonion p{
            position: relative;
            top: 170px;
            left: 100px;
            width: 500px;
        }
        #services_con{
            position: relative;
            top: 100px;
            height:500px;
            padding: 20px;
            width: 90%;
            /* border: 1px solid red; */
            left: 50%;
            transform: translate(-50%);

        }@media screen and (max-width:740px){
            #toonion{
                position: relative;
                left: 50%;
                text-align: center;
                transform: translate(-50%);
            }#toonion img{
                position:absolute;
                left: 50%;
                transform: translate(-50%);
            }#toonion p{
                position: relative;
                top: 240px;
                left: 50%;
                transform: translate(-50%);
                width: 100%;
            }#exp{
                position: relative;
                left: 50%;
                top: 200px;
                text-align: center;
                margin-top: 230px;
                transform: translate(-50%);
            }#exp_img{
                position: absolute;
                left: 50%;
                transform: translate(-50%);
            }#exp_txt{
                top: 240px;
                position: relative;
                width: 100%;
                left: 50%;
                transform: translate(-50%);
            }footer{
                top: 1200px;
                height: 250px;
            }
        #exp_img_1{
                position: absolute;
                left: 50%;
                transform: translate(-50%);
            }#exp_txt_1{
                top: 240px;
                position: relative;
                width: 100%;
                left: 50%;
                transform: translate(-50%);
            
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