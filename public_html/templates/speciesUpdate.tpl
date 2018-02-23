{include "head.tpl"  title={$sciNameNone}}
<!--Fungi Team 2015-->
<script type="text/javascript" src="js/ImageChanger.js"></script>
<link rel="stylesheet" type="text/css" href="css/result.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>


<body>

<div class="result-page-header">
    <h1 id="species-name">{$sciNameNone}</h1>
</div>
<div class="containerResult">
    {*<div class="page-header">*}
    {*<h1 id="species-name">{$sciName}</h1>*}
    {*</div>*}
    <div class="row">
        <div class="col-lg-7">
            <form action="speciesUpdate.php" method="get">
                <p hidden><strong>Do Not Edit:</strong> <input type="text" size="75" value="{$sciNameNone}" name="name"></p>
            </form>
            <form action="speciesUpdate.php" method="post">
                <p hidden><strong>Do Not Edit:</strong> <input type="text" size="75" value="{$sciNameNone}" name="name"></p>
                <p><strong>Scientific Name:</strong> <input type="text" size="75" value="{$sciNameNone}" name="scientificName"></p>
                <p><strong>Name Derivation:</strong> <input type="text" size="75" value="{$nameDerivation}" name="nameDerivation"></p>
                <p><strong>Common name:</strong> <input type="text" size="75" value="{$commonName}" name="commonName"></p>
                <p><strong>Phylum:</strong> <input type="text" size="75" value="{$phylum}" name="phylum"></p>
                <p><strong>Order:</strong> <input type="text" size="75" value="{$spOrder}" name="order"></p>
                <p><strong>Family:</strong> <input type="text" size="75" value="{$family}" name="family"></p>
                <p><strong>Wood substrate:</strong> <input type="text" size="75" value="{$woodSubstrate}" name="woodSubstrate"></p>
                <p><strong>Dimensions:</strong> <input type="text" size="75" value="{$dimensions}" name="dimensions"></p>
                <p><strong>Description:</strong> <input type="text" size="75" value="{$description}" name="description"></p>
                <p><strong>Edibility:</strong> <input type="text" size="75" value="{$edib}" name="edib"></p>
                <p><strong>Comment:</strong> <textarea rows="3" cols="85" name="comments">{$comment}</textarea> </p>
                <p><strong>More information at:</strong> <input type="text" size="75" value="{$url}" name="url"></p>
                <strong>Update Synonyms:</strong>
                {*{foreach from=$synArray key=id item=name}*}
                {*<p><input type="text" size="75" value="{$name}" name="syn{$id}"> <br/>*}

                {*<input type="checkbox" name="synd{$id}" value="delete"> Delete {$name} </p>*}

                {*{/foreach}*}
                {foreach $synArray as $syn}
                    <p><strong>{$syn[1]} Scientific</strong>: <input type="text" size="75" value="{$syn[1]}" name="sci{$syn[0]}"></br>
                        <strong>{$syn[1]} Discoverer</strong>: <input type="text" size="75" value="{$syn[2]}" name="dis{$syn[0]}"></br>
                        <strong>Delete {$syn[1]}</strong>: <input type="radio" value="yes" name="del{$syn[0]}"> Yes
                        <input type="radio" value="no" name="del{$syn[0]}" checked> No

                    <p hidden> <input type="text" size="75" value="{$syn[0]}" name="id{$syn[0]}"></p>
                    </p>
                {/foreach}

                <table>
                    <tbody>
                    <tr>
                        <td style="padding-right:10px;">
                            Synonyms:
                            <div id="addSyn">
                                <div class="more">
                                    <input type="text" class="form-control"
                                            {if isset($synonyms[0])}
                                                value="{$synonyms[0]}"{/if}
                                           name="synonyms[]"><br>
                                </div>
                            </div>
                        </td>

                        <td>

                            Synonym Authority Name:
                            <div id="addSynDisc">
                                <div class="more">
                                    <input type="text" class="form-control"
                                            {if isset($synonyms_discoverer[0])}
                                                value="{$synonyms_discoverer[0]}"{/if}
                                           name="synonyms_discoverer[]"><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <input type="button" id="addSynonyms" class="btn btn-default form-control sub resetSpace" value="Add Synonym"/>

                {foreach $variableData as $data}
                    <p>
                        {foreach $data as $part}
                            {$part}
                        {/foreach}
                    </p>
                {/foreach}
                <button style="background-color:olivedrab;color:white;height:50px;width:100px" value="submit" name="submit"> Update</button>
            </form>


            <br/>
        </div>
    </div> <!-- end row -->
</div>

<div class="imageCont">
    <div class="hs">
        <h3><strong>Photo Examples</strong></h3><br>
        {foreach $photos as $pic}
            <a class="fancybox" data-fancybox-group="gallery">
                <img src="img/{$pic['Photo_Name']}" id="mainImage" width="500" height="100%"/></a>
            {break}
        {/foreach}
    </div>
    <p id="imageLink" align="center">{$pic['Caption']}</p>
    <div class="showcase" onclick="changeImageOnClick(event)">
        {foreach $photos as $pic}
            <img class="scImage" src="img/{$pic['Photo_Name']}" width="125" height="100" title="{$pic['Caption']}"/>
        {/foreach}
    </div>
</div>


{*this is javascript stuff*}
<script>
    var count = 0;
</script>
<script>

    $("#addSynonyms").click(function() {
        count = count + 1;
        var more = "<div class='more'><input type='text' class='form-control' name='synonyms[]'></div><br>";
        $("#addSyn").append(more);
    });

</script>

<script>

    $("#addSynonyms").click(function() {
        count = count + 1;
        var more = "<div class='more'><input type='text' class='form-control' name='synonyms_discoverer[]'></div><br>";
        $("#addSynDisc").append(more);
    });

</script>

</body>