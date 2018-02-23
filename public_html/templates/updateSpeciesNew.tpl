{include "head.tpl" title="Admin" pageName="admin"}

<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

<body>

<div class="result-page-header">
    <h1 id="species-name">Update Species</h1>
</div>
<div class="container">
    <form name="form" id="form" action="updateSpecies.php" method="get" enctype="multipart/form-data">
        <h3>Choose Species:</h3><br>

        <select name="shape" class="form-control" id="shape" onChange="javascript:chgAction()">
            <!--THIS CODE BENEATH IS SUPPOSED TO SCAN DB FOR SHAPES AND MAKE IT AS A DROP DOWN MENU-->
            {foreach from=$shapeArray key=key item=item}
                <option value="{$key}">{$item}</option>
            {/foreach}
            <!--<option value="cupAndSaucer">Cup and Saucer</option>
            <option value="temp">Temporary</option>-->
        </select><br>
        <input type="submit" value="Find" name="addSpecies">
    </form>
        {include "footer.tpl"}
</div>


<script>
    var count = 0;
</script>

<!--- JQuery function to upload more images--->
<script>

    $("#addDiv").click(function() {
        count = count + 1;
        var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>" +
            "Caption: <input type='text' class='form-control'  name='caption["+count+"]'/><br>";
        $("#addingImages").append(uploadDiv);
    });

</script>


</div>
</body>
</html>