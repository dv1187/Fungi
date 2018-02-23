{include "head.tpl" title="Admin" pageName="admin"}

<link rel="stylesheet" type="text/css" href="css/addSpecies.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

<body>
<div id="enter">
<div class="result-page-header">
    <h1 id="species-name">Add New Species</h1>
</div>
<div class="container">
    {if isset($msg3)}<h3 id="warning">{$msg3}</h3>{/if}
    {if isset($msg)}<h3 id="warning">{$msg}</h3>{/if}
    {if isset($dup)}<h3 id="warning">{$dup}</h3>{/if}
    {if isset($msgSci)}<h3 id="warning">{$msgSci}</h3>{/if}
    {if isset($msgChar)}<h3 id="warning">{$msgChar}</h3>{/if}

    <!--Add new species-->
    <form name="form" id="form" action="addSpecies.php" method="get" enctype="multipart/form-data" onsubmit="return confirm
    ('Select OK to confirm submission or Cancel to make changes.')">
        <h3>New Species:</h3><br>

        Scientific Name:
	
        <textarea type="text" name="scientificName"
            {if isset($scientificName)}
               value="{$scientificName}"{/if}
               class="form-control" required></textarea>
        Authority Name:
        <textarea type="text" name="authorityName"
                {if isset($authorityName)}
                    value="{$authorityName}"{/if}
               class="form-control"></textarea>
        Name Derivation:
        <textarea type="text" class="form-control"
                {if isset($nameDerivation)}
                    value="{$nameDerivation}"{/if}
               name="nameDerivation"></textarea>

	<table>
	<tr>
	<td>Synonyms:
	        <div id="addSyn">
	            <div class="more">
	        <textarea type="text" class="form-control space"
	                {if isset($synonyms[0])}
	                    value="{$synonyms[0]}"{/if}
	               name="synonyms[]"></textarea>
	            </div>
	        </div>
	</td>
	 
	<td>Synonym Authority Name:
	        <div id="addSynDisc">
	            <div class="more">

	        <textarea type="text" class="form-control space"
	                {if isset($synonyms_discoverer[0])}
	                    value="{$synonyms_discoverer[0]}"{/if}
	               name="synonyms_discoverer[]"></textarea>
	            </div>
	        </div>
	</td>
	</tr>
	</table>

        <input type="button" id="addSynonyms" class="btn btn-default form-control sub resetSpace" value="Add Synonym"/>
	
	<br>
        Common Name(s):
        <textarea type="text" class="form-control"
                {if isset($commonName)}
                    value="{$commonName}"{/if}
               name="commonName"></textarea>
        Phylum:
        <textarea type="text" class="form-control"
                {if isset($phylum)}
                    value="{$phylum}"{/if}
               name="phylum"></textarea>
        Order:
        <textarea type="text" class="form-control"
                {if isset($order)}
                    value="{$order}"{/if}
               name="order"></textarea>
        Family:
        <textarea type="text" class="form-control"
                {if isset($family)}
                    value="{$family}"{/if}
               name="family"></textarea>
        Occurance on Wood Substrate:
        <textarea type="text" class="form-control"
                {if isset($woodSubstrate)}
                    value="{$woodSubstrate}"{/if}
               name="woodSubstrate"></textarea>
        Dimensions:
        <textarea type="text" class="form-control"
                {if isset($dimensions)}
                    value="{$dimensions}"{/if}
               name="dimensions"></textarea>
        <!--- INSERT VARIABLE PORTION HERE ----->
        Edibility:
        <textarea type="text" class="form-control"
                {if isset($edibility)}
                    value="{$edibility}"{/if}
               name="edibility"></textarea>

	Description:
        <textarea type="text" class="form-control"
                {if isset($description)}
                    value="{$description}"{/if}
               name="description"></textarea>

        Comments:
        <textarea type="text" class="form-control"
                {if isset($comments)}
                    value="{$comments}"{/if}
               name="comments"></textarea>
        More information at:
        <textarea type="text" class="form-control"
                {if isset($moreInfo)}
                    value="{$moreInfo}"{/if}
               name="moreInfo"></textarea>


        Shape Association:
        <select name="shape" class="form-control" id="shape" onChange="javascript:chgAction()" >
            <!--THIS CODE BENEATH IS SUPPOSED TO SCAN DB FOR SHAPES AND MAKE IT AS A DROP DOWN MENU-->
            {foreach from=$shapeArray key=key item=item}
            <option value="{$key}" {if isset($shape)
        && $shape == {$key}} selected="selected"{/if} >{$item}</option>
            {/foreach}
            <!--<option value="cupAndSaucer">Cup and Saucer</option>
            <option value="temp">Temporary</option>-->
        </select><br>

        <div id="cupAndSaucer">
            <br>Fertile surface color:<br><br>
            <input type="radio" name="fertileSurfaceColor" value="108" {if isset($color)
            && $color == '108'} checked="checked"{/if}> Whitish<br>
            <input type="radio" name="fertileSurfaceColor" value="109" {if isset($color)
            && $color == '109'} checked="checked"{/if}> Concetrically zoned with white
            and brown<br>
            <input type="radio" name="fertileSurfaceColor" value="110" {if isset($color)
            && $color == '110'} checked="checked"{/if}> Ashy grey<br>
            <input type="radio" name="fertileSurfaceColor" value="111" {if isset($color)
            && $color == '111'} checked="checked"{/if}> Blackish<br>
            <input type="radio" name="fertileSurfaceColor" value="112" {if isset($color)
            && $color == '112'} checked="checked"{/if}> Pale brown to tan to yellow-ish
            brown, reddish brown, or darker brown<br>
            <input type="radio" name="fertileSurfaceColor" value="113" {if isset($color)
            && $color == '113'} checked="checked"{/if}> Green to blue-green<br>
            <input type="radio" name="fertileSurfaceColor" value="114" {if isset($color)
            && $color == '114'} checked="checked"{/if}> Purplish<br>
            <input type="radio" name="fertileSurfaceColor" value="115" {if isset($color)
            && $color == '115'} checked="checked"{/if}> Yellow, orange-yellow to dull orange<br>
            <input type="radio" name="fertileSurfaceColor" value="116" {if isset($color)
            && $color == '116'} checked="checked"{/if}> Red, orange-red to bright orange<br>

            <br>Conspicuous stalk present:<br><br>
            <input type="radio" name="conspicuousStalk" value="117" {if isset($stalk)
            && $stalk == '117'} checked="checked"{/if}> Yes<br>
            <input type="radio" name="conspicuousStalk" value="118" {if isset($stalk)
            && $stalk == '118'} checked="checked"{/if}> No<br>

            <br>Conspicuous hair present:<br><br>
            <input type="radio" name="conspicuousHair" value="119" {if isset($hair)
            && $hair == '119'} checked="checked"{/if}> Margin of fertile surface fringed with dark brown
            or blackish hairs<br>
            <input type="radio" name="conspicuousHair" value="120" {if isset($hair)
            && $hair == '120'} checked="checked"{/if}> Stalk and outside of cup covered with white
            hairs<br>
            <input type="radio" name="conspicuousHair" value="121" {if isset($hair)
            && $hair == '121'} checked="checked"{/if}> Outer surface of cup covered with brownish
            hairs<br>

            <br>Size of individual fruit bodies:<br><br>
            <input type="radio" name="fruitBody" value="122" {if isset($fruit)
            && $fruit == '122'} checked="checked"{/if}> Smaller than 1cm<br>
            <input type="radio" name="fruitBody" value="123" {if isset($fruit)
            && $fruit == '123'} checked="checked"{/if}> larger than 1cm<br>

            <br>Unusual Features:<br><br>
            <input type="radio" name="unusual" value="124" {if isset($unusual)
            && $unusual == '124'} checked="checked"{/if}> Fruit body two-toned with tan to reddish brown fertile
            surface and blackish-brown outer surface<br>
            <input type="radio" name="unusual" value="125" {if isset($unusual)
            && $unusual == '125'} checked="checked"{/if}> Fruit body ear-shaped to irregularly cup-shaped with
            portions of the fruit body irregularly wrinkled or with raised vein-like markings<br>
        </div>
<br><br>
        <input type="submit" value="Add" name="addSpecies">

        {include "footer.tpl"}

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
    <!-- DYNAMIC DROP DOWN MENU SCRIPT -->
    <script>
        $('#name').on('change', function() {
            var val = $(this).val();
            $('#cupAndSaucer').hide();
            $('#' + val).show();

    </script>
    <script>
        var count = 0;
    </script>

    <!--- JQuery function to upload more images--->
    <script>

        $("#addSynonyms").click(function() {
            count = count + 1;
            var more = "<div class='more'><textarea type='text' class='form-control space' name='synonyms[]'></textarea></div>";
            $("#addSyn").append(more);
        });

    </script>
    
    <script>

        $("#addSynonyms").click(function() {
            count = count + 1;
            var more = "<div class='more'><textarea type='text' class='form-control space' name='synonyms_discoverer[]'></textarea></div>";
            $("#addSynDisc").append(more);
        });

    </script>
<script>
	document.querySelector('#txtSearch').addEventListener('keypress', function (e) {
    var key = e.which || e.keyCode;
    if (key === 13) { // 13 is enter
       
    }
});

</script>
</div>
</div>
</body>
</html>