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
	{if $admin == "true"}
		<br>
		<div class="edit">
			<a href="speciesUpdate.php?name={$sciNameNone}"><button> Edit </button></a>
		</div>
	{/if}

</div>
<div class="containerResult">
    {*<div class="page-header">*}
    {*<h1 id="species-name">{$sciName}</h1>*}
    {*</div>*}
	<div class="row">
		<div class="col-lg-7">
			<p><strong>Scientific Name:</strong> <i>{$sciNameNone}</i> {$authName}</p>
			<p><strong>Name Derivation:</strong> {$nameDerivation}</p>
			<p><strong>Synonyms:</strong> {$syn}</p>
			<p><strong>Common name:</strong> {$commonName}</p>
			<p><strong>Phylum:</strong> {$phylum}</p>
			<p><strong>Order:</strong> {$spOrder}</p>
			<p><strong>Family:</strong> {$family}</p>
			<p><strong>Wood substrate:</strong> {$woodSubstrate}</p>
			<p><strong>Dimensions:</strong> {$dimensions}</p>
			<p><strong>Description:</strong> {$description}</p>
			<p><strong>Edibility:</strong> {$edib}</p>
			<p><strong>Comment:</strong> {$comment}</p>
			<p><strong>More information at:</strong> <a href="{$url}" style="color:olivedrab;">The Oakes Museum</a></p>
			<br/>

		</div>
	</div> <!-- end row -->
</div>

<div class="imageCont">
	<div class="hs">
		<h3><strong>Photo Examples</strong></h3><br>
        {foreach $photos as $pic}
			<a class="fancybox" data-fancybox-group="gallery">
				<img src="Images/{$pic['Photo_Name']}" id="mainImage" width="500" height="100%"/></a>
            {break}
        {/foreach}
	</div>
	<p id="imageLink" align="center">{$pic['Caption']}</p>
	<div class="showcase" onclick="changeImageOnClick(event)">
        {foreach $photos as $pic}
			<img class="scImage" src="Images/{$pic['Photo_Name']}" width="125" height="100" title="{$pic['Caption']}"/>
        {/foreach}
	</div>

</div>
	{include "footer.tpl"}

</body>