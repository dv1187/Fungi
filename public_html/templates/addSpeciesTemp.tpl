{include "head.tpl" title="Admin" pageName="admin"}

<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

<body>

<div class="result-page-header">
    <h1 id="species-name">Add New Species</h1>
</div>
<div class="container">
    {if isset($msg)}<h3 id="warning">{$msg}</h3>{/if}
    <!---->
    <!--<h3 id="warning"></h3>-->

    <!--Add new species-->
    <form action="addSpecies.php" method="get" enctype="multipart/form-data">
        <h3>New Species:</h3><br>

	//<a href="#" class="add_another_file_link">...</a> == $0
	<table>
<tr>
<td>Tom</td>
<td bgcolor='grey'><input type='text' id='value' name='itemupdate[]' disabled='disabled' style='text-align: center' value='10'></td>
<td><div align='center'><input type='button' value='+' onclick='add(this,1)'><input type='button' value='-' onclick='add(this,-1)'></div></td>
</tr>
<tr>
<td>Tom</td>
<td bgcolor='grey'><input type='text' id='value' name='itemupdate[]' disabled='disabled' style='text-align: center' value='10'></td>
<td><div align='center'><input type='button' value='+' onclick='add(this,1)'><input type='button' value='-' onclick='add(this,-1)'></div></td>
</tr>
</table>
        Scientific Name:{if isset($msgSci)}<h3 id="warning"><strong>{$msgSci}</strong></h3>{/if}
        <input type="text" name="scientificName"
               value=""
               class="form-control"><br>
        Authority Name:{if isset($msgAuth)}<h3 id="warning"><strong>{$msgAuth}</strong></h3>{/if}
        <input type="text" name="authorityName"
               value=""
               class="form-control"><br>
        Name Derivation:{if isset($msgName)}<h3 id="warning"><strong>{$msgName}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="nameDerivation"><br>
        Synonyms:{if isset($msgSyn)}<h3 id="warning"><strong>{$msgSyn}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="synonyms"><br>
        Common Name(s):{if isset($msgCom)}<h3 id="warning"><strong>{$msgCom}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="commonName"><br>
        Phylum:{if isset($msgPhy)}<h3 id="warning"><strong>{$msgPhy}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="phylum"><br>
        Order:{if isset($msgOrder)}<h3 id="warning"><strong>{$msgOrder}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="order"><br>
        Family:{if isset($msgFamily)}<h3 id="warning"><strong>{$msgFamily}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="family"><br>
        Occurance on Wood Substrate:{if isset($msgWood)}<h3 id="warning"><strong>{$msgWood}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="woodSubstrate"><br>
        Dimensions:{if isset($msgDim)}<h3 id="warning"><strong>{$msgDim}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="dimensions"><br>
        <!--- INSERT VARIABLE PORTION HERE ----->
        Edibility:{if isset($msgEdi)}<h3 id="warning"><strong>{$msgEdi}</strong></h3>{/if}
        <input type="text" class="form-control"
               value=""
               name="edibility"><br>
        Comment:
        <input type="text" class="form-control"
               value=""
               name="comments"><br>
        More information at:
        <input type="text" class="form-control"
               value=""
               name="moreInfo"><br>


        Shape Association:
        <select name="shape" class="form-control">
            <!--THIS CODE BENEATH IS SUPPOSED TO SCAN DB FOR SHAPES AND MAKE IT AS A DROP DOWN MENU-->
            {foreach from=$shapeArray key=key item=item}
            <option value="{$key}">{$item}</option>
            {/foreach}
            <!--<option value="cupAndSaucer">Cup and Saucer</option>
            <option value="temp">Temporary</option>-->
        </select><br>

        <div class="cupAndSaucer">
            {if isset($msgColor)}<h3 id="warning"><strong>{$msgColor}</strong></h3>{/if}<br>Fertile surface color:<br><br>
            <input type="radio" name="fertileSurfaceColor" value="whitish"> Whitish<br>
            <input type="radio" name="fertileSurfaceColor" value="concetricallyZoned"> Concetrically zoned with white
            and brown<br>
            <input type="radio" name="fertileSurfaceColor" value="ashyGrey"> Ashy grey<br>
            <input type="radio" name="fertileSurfaceColor" value="blackish"> Blackish<br>
            <input type="radio" name="fertileSurfaceColor" value="paleBrownToTan"> Pale brown to tan to yellow-ish
            brown, reddish brown, or darker brown<br>
            <input type="radio" name="fertileSurfaceColor" value="greenToBlue"> Green to blue-green<br>
            <input type="radio" name="fertileSurfaceColor" value="purplish"> Purplish<br>
            <input type="radio" name="fertileSurfaceColor" value="yellow"> Yellow, orange-yellow to dull orange<br>
            <input type="radio" name="fertileSurfaceColor" value="red"> Red, orange-red to bright orange<br>

            {if isset($msgStalk)}<h3 id="warning"><strong>{$msgStalk}</strong></h3>{/if}<br>Conspicuous stalk present:<br><br>
            <input type="radio" name="conspicuousStalk" value="yes"> Yes<br>
            <input type="radio" name="conspicuousStalk" value="no"> No<br>

            {if isset($msgHair)}<h3 id="warning"><strong>{$msgHair}</strong></h3>{/if}<br>Conspicuous hair present:<br><br>
            <input type="radio" name="conspicuousHair" value="margin"> Margin of fertile surface fringed with dark brown
            or blackish hairs<br>
            <input type="radio" name="conspicuousHair" value="stalk"> Stalk and outside of cup covered with white
            hairs<br>
            <input type="radio" name="conspicuousHair" value="outerSurface"> Outer surface of cup covered with brownish
            hairs<br>

            {if isset($msgFruit)}<h3 id="warning"><strong>{$msgFruit}</strong></h3>{/if}<br>Size of individual fruit bodies:<br><br>
            <input type="radio" name="fruitBody" value="smaller"> Smaller than 1cm<br>
            <input type="radio" name="fruitBody" value="larger"> larger than 1cm<br>

            <br>Unusual Features:<br><br>
            <input type="radio" name="unusual" value="two-tone"> Fruit body two-toned with tan to reddish brown fertile
            surface and blackish-brown outer surface<br>
            <input type="radio" name="unusual" value="ear-shaped"> Fruit body ear-shaped to irregularly cup-shaped with
            portions of the fruit body irregularly wrinkled or with raised vein-like markings<br>
        </div>
<br><br>
        <input type="submit" value="Add" name="addSpecies">

        </div>

        <!--Add Image:<br>-->
        <!--{if isset($photoName)}-->
        <!--<img class="pic glossarypic" src="img/{$photoName}">-->
        <!--{/if}-->

        <!--<div id="addingImages">-->
        <!--<div class="uploadDiv">-->
        <!--<input name="file[]" type="file" id="file"/>-->
        <!--</div>-->
        <!--Caption: <input type="text" class="form-control" name="caption[0]"/><br>-->
        <!--</div>-->
        <!--<input type="button" id="addDiv" class="btn btn-default form-control sub resetSpace" value="Add More Photo"/>-->



    </form>
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
    <!--{include "footer.tpl"}-->

</div>
</body>
</html>