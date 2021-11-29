<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="wcg.manifest">
    <title>About us</title>
</head>
<body>
    <?php $about = 'about';include('navBar.php')?>

    <div id="container">
        <div id="welcome">
        <h1><?php echo $navLang[2]?></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis maiores totam nesciunt. Illum, accusantium est corporis
             cumque assumenda fugit quis quam voluptates aspernatur et commodi aliquam officiis, earum, neque fugiat!</p>
        </div>
        <div id="card">
            
            <div id="bar"><h3>Alharith yassin</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non numquam odit deserunt quis iste voluptas molestias consequatur
             asperiores facere beatae ducimus recusandae, impedit aliquid reprehenderit voluptatum quod molestiae consectetur praesentium.</p>
        </div>
        </div>

        <div id="card"><div id="bar"><h3>Khalaf alla </h3> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non numquam odit deserunt quis iste voluptas molestias consequatur
             asperiores facere beatae ducimus recusandae, impedit aliquid reprehenderit voluptatum quod molestiae consectetur praesentium.</p></div></div>
        <div id="card"><div id="bar"><h3>Obai bahgat</h3> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non numquam odit deserunt quis iste voluptas molestias consequatur
             asperiores facere beatae ducimus recusandae, impedit aliquid reprehenderit voluptatum quod molestiae consectetur praesentium.</p></div></div>
        <div id="card"><div id="bar"><h3>Odai bahgat</h3> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non numquam odit deserunt quis iste voluptas molestias consequatur
             asperiores facere beatae ducimus recusandae, impedit aliquid reprehenderit voluptatum quod molestiae consectetur praesentium.</p></div></div>
    </div>
    <div id="pad"></div>
    <?php include('footer.php')?>
</body>
<style>
    ::-webkit-scrollbar{
            width: 5px;
        }
        ::-webkit-scrollbar-thumb{
            background: #777;
            border-radius: 20px;
        }
    #pad{
        height: 200px;
        position: relative;
        width: 200px;
        /* background: red; */
        top: 300px;
    }
    #welcome{
        text-align: center;
        width: 100%;
        left: 0px;
        position: relative;
        top: 200px;
    }
    #welcome p{
        width: 80%;
        left: 50%;
        transform: translate(-50%);
        font-size: 20px;
    }
    *{
        user-select: none;
    }
    #card{
        width: 300px;
        height: 250px;
        box-shadow: 0 1px 6px #777;
        position: relative;
        left:1.5%;
        /* transform: translate(0%); */
        margin-left: 20px;
        display: inline-block;
        top: 330px;
        transition: 0.20s;
        text-align: center;
    }#bar{
        /* border: 1px solid red; */
        position: relative;
        top: 15%;
        height: 200px;
    }p{
        position: relative;
        top: 20px;
        padding: 10px;
    }#card:hover{
        top: 320px;
    }#terms{
        top:170px;
    }
    @media screen and (max-width:740px){
        
        
        footer{
        height: 260px;
    }
        #card{
            margin-top: 20px;
            left: 5.5%;
            border-radius: 5px;
            width: 80%;
            padding-bottom: 50px;
            padding-left: 20px;
            padding-right: 20px;
        }
        #terms{
        top:220px;
    }
    }@media screen and (min-width:1000px){
        #card{
            left: 2%;
            margin-top: 30px;
        }footer{
            top:270px;
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
</html>