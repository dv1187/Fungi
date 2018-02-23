	<!DOCTYPE html>
<html lang="en">
<head>
    <title>{$title}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <link href="css/index.css" type=text/css rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
    <!--Change stylesheet based on page-->
    <link href="css/application.css" type="text/css" rel="stylesheet" />
    <link href="css/about.css" type=text/css rel="stylesheet" />
    <link href="css/result.css" type=text/css rel="stylesheet" />
    {*<link href="css/lightbox.css" type=text/css rel="stylesheet" />*}
    {*<link href="css/cards.css" type=text/css rel="stylesheet" />*}
    <link href="css/head.css" type=text/css rel="stylesheet" />
    <link href="css/glossary.css" type=text/css rel="stylesheet" />
    <link href="css/admin.css" type=text/css rel="stylesheet" />
    
</head>

<body id="{$pageName}">
<!--navigation-->
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container" id="top">
        <ul>
        <li class="main"><a href="index.php">Home</a></li>
        <li class="main"><a href="app.php">Application</a></li>
        <li class="main"><a href="species.php">Species</a></li>
        <li class="main"><a href="glossary.php">Glossary</a></li>
        <li class="about">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">About</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="about.php">About</a>
                    <a href="emberger.php">Dr. Emberger</a>
                    <a href="wood.php">Wood Decay</a>
                    <a href="keyinfo.php">Key Info</a>
                    <a href="acknowledge.php">Acknowledgements</a>
                    <a href="disclaimer.php"> Disclaimer</a>
                </div>
            </div>
            <div class="admin-link">
                <li class="push"><a href="adminLogin.php" class="admin-link">Admin</a></li>
            </div>
        </li>
        </ul>

    </div>

                {*<li><a class="about" href="about.php">About</span></a></li>*}
                {*<li class = "emberger"><a href="emberger.php">Dr. Emberger</a></li>*}
                {*<li class = "emberger"><a href="wood.php">Wood Decay</a></li>*}
                {*<li class = "acknowledge"><a href="keyinfo.php">Key Info</a></li>*}
                {*<li class = "acknowledge"><a href="acknowledge.php">Acknowledgements</a></li>*}
		{*<li class = "disclaimer"><a href = "disclaimer.php">Disclaimer</a></li>*}
            </ul>
            <div>
                {*<ul class="nav navbar-nav navbar-right">*}
                    {*<li class="admin"><a href="adminLogin.php">Admin</a></li>*}
                    {*{if isset($isAdmin)}*}
                    {*<li><button id="helpBtn" class="btn btn-default">*}
                        {*<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*}
                    {*</button>*}
                    {*</li>*}
                    {*{/if}*}
                {*</ul>*}
                <div>
                    {if isset($isAdmin)}

                        <div id="help">{include "userGuide.tpl"}</div>

                    {/if}
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.js"></script> <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#helpBtn").click(function(){
            $("#help").toggle();
        });
    </script>
    <script>
        /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

    </script>

</nav>
