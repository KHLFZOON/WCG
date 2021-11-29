<footer>
    <div id="footer_items_con">
        <div id="items_con">
            <a href="<?php echo $lang_links[1]?>">العربية</a>
            <a href="<?php echo $lang_links[2]?>">English</a>
            <!-- <a href="#">Germany</a>
            <a href="#">Turkish</a> -->
        </div>
        <div id="items_con_1">
            <a href="https://www.facebook.com/Toonionoffical">Facebook</a>
            <a href="https://www.twitter.com/Toonionoffical">Twitter</a>
            <a href="https://www.instagram.com/Toonionoffical">Instagram</a>
            <!-- <a href="#">Turkish</a> -->
        </div>
        <div id="terms">
        <a href="#"><?php echo $footerLang[1]?></a>
    </div>
    <p>WholeCakeGroup @2021</p>
</div>
</footer>
<style>
    #terms{
            position: relative;
            width: 200px;
            height: 30px;
            left: 50%;
            transform: translate(-50%);
            top: 160px;
            text-align: center;
        }
     
        #social_con{
            width: 200px;
            height: 195px;
            position: absolute;
            left: 260px;
            /* border-right: 1px solid white; */
            /* background: ; */
        }#social_con a{
            display:block;
            width: 100px;
            color:white;
            text-decoration: none;
            position: relative;
            top: 20px;
            left: 40px;
            margin-top: 20px;
            font-size: 15px;
        }
    #terms a{
            position: absolute;
            color: white;
            text-decoration: none;
            width: 100%;
            left:0px;
            top:5px;
        }
     footer p{
            position: absolute;
            top: 140px;
            left: 50%;
            color:#777;
            transform: translate(-50%);
        }
        footer{
            width: 100%;
            background: black;
            height: 200px;
            top: 400px;
            position:relative;
        }
        #items_con{
            width: 200px;
            height: 195px;
            position: absolute;
            left: 10px;
            /* border-right: 1px solid white; */
            /* background: ; */
        }#items_con a{
            display:block;
            width: 100px;
            color:white;
            text-decoration: none;
            position: relative;
            top: 20px;
            left: 40px;
            margin-top: 20px;
            font-size: 15px;
        }
        #items_con_1{
            width: 150px;
            height: 195px;
            position: absolute;
            left: 300px;
            /* border-right: 1px solid white; */
            /* background: ; */
        }#items_con_1 a{
            display:block;
            width: 100px;
            color:white;
            text-decoration: none;
            position: relative;
            top: 20px;
            left: 40px;
            margin-top: 20px;
            font-size: 15px;
        }
        @media screen and (max-width:740px){
            footer{
                height: 250px;
            }
            #items_con{
            width: 200px;
            height: 195px;
            position:absolute;
            left: 25%;
            transform: translate(-50%);
            display:inline;
            /* border-right: 1px solid white; */
            /* background:red; */
        }#items_con a{
            display:block;
            width: 100px;
            color:white;
            text-decoration: none;
            position: relative;
            top: 20px;
            left: 40px;
            margin-top: 20px;
            font-size: 15px;
        }
        #items_con_1{
            width: 200px;
            height: 195px;
            position:absolute;
            left: 74%;
            transform: translate(-50%);
            display:inline;
            /* border-right: 1px solid white; */
            /* background:red; */
        }#items_con_1 a{
            display:block;
            width: 100px;
            color:white;
            text-decoration: none;
            position: relative;
            top: 20px;
            left: 40px;
            margin-top: 20px;
            font-size: 15px;
        }
        #terms{
            position: relative;
            width: 200px;
            height: 30px;
            left: 50%;
            transform: translate(-50%);
            top: 210px;
            text-align: center;
        }footer p{
            position: absolute;
            top: 190px;
            left: 50%;
            color: #777;
            transform: translate(-50%);
        }
        }@media screen and (max-width:1000px){
            #items_con_1{
                left:65%;
            }
            #items_con{
                left:20%;
            }
        }
</style>