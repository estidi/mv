<!DOCTYPE html> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>multiVerse</title>
        <link href="/Public/css/normalize.css" rel="stylesheet" />
        <link href="/Public/css/default.css" rel="stylesheet" />
        <script src="/Public/js/ajax.js"></script>
        <script src="/Public/js/common.js"></script>
        <style>
            .overlay {
                position:absolute;
                right:0px;
                top:0px;
                background:rgba(0,0,0,0.6);
                z-index:2222;
                border:1px solid green;
                padding:10px;
                font-size: 10px;
            }
            .messages {
                margin:0 auto;
                position:relative;
                top:10px;
                z-index:222;
                width:100%;
            }
            .success {
                background: rgba(0,255,0,0.1);
                border:1px solid green;

                color:green;
                margin-top:5px;
                padding:10px;
            }
            .fail {
                background: rgba(255,0,0,0.1);
                border:1px solid red;

                color:red;
                margin-top:5px;
                padding:10px;
            }
            .wrapper {
                width: 1050px;
                margin:0 auto;
            }
            .leftSide {
                width:250px;
                margin-right: 50px;
                float:left;
                    background: rgba(0, 255, 255, 0.15);
    border-radius: 5px;
    box-shadow: 0 0 36px 29px rgba(0, 255, 255, 0.15);
               
            }
            .rightSide {
                overflow: hidden;
                width:750px;
                float:left;
                     background: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
    box-shadow: 0 0 36px 29px rgba(0, 0, 0, 0.5);
            }
            .top {
            height:50px;
            }
        </style>            
    </head>
    <body>
        {if isset($debug)}
            <div class="overlay">
                <pre> {$debug}</pre>
            </div>
        {/if}
        <div class="wrapper">
            <div class="top"></div>
            <div>
                <div class="leftSide">
                    <div class="menu-left">
                        <h3>ZARZADZANIE</h3>
                        <ul>
                            <li>Podgląd</li>
                            <li>Budynki</li>
                            <li>Badania</li>
                            <li>Stocznia</li>
                            <li>Handel</li>
                            <li>Flota</li>
                            <li>Obrona</li>
                            <li>Galaktyka</li>
                            <li>Sojusz</li>
                            <li>Forum</li>
                            <li>Ustawienia</li>
                        </ul>
                    </div>
                    {$leftSide}                
                </div>
                <div class="rightSide">
                    {include file="Common/messages.tpl"}
                    {$rightSide}
                </div>
            </div>
        </div>	 
        <footer>multiVerse @ {date("Y")} </footer>
    </body>
</html>