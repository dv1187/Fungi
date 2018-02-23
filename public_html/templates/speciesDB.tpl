{include "head.tpl" title="Species List"}

<!--Fungi Team 2015-->
<link href="css/species.css" type=text/css rel="stylesheet" />


	<div class="container" id="container">
		<div class="page-header">

			<h1 id="species-list" class="speciesTitle">{$name} Species List</h1>
		</div>
		{if $resultCount > 0}
		<!--{html_table loop=$data cols=5 table_attr="class=table"} -->

		<table class="display" id="datatable" cellspacing="0" width="100%">
		<!--data-toggle="table" data-sort-name="sci_name"
			   data-sort-order="desc" class="table table-striped table-hover -->
		<thead>
			<tr>
				<th data-field="sci_name" data-sortable="true">Scientific Name</th>
				<th data-field="synonyms" data-sortable="true">Synonyms</th>

				<th data-field="common_name" data-sortable="true">Common Name</th>
				
								<th data-field="phylum" data-sortable="true">Phylum</th>
				<th data-field="order" data-sortable="true">Order</th>
				<th data-field="family" data-sortable="true">Family</th>
				
			</tr>
		</thead>
			<tbody>
				{foreach $newdata as $fungus}

					<tr>
						{foreach $fungus as $info}
							<td>
								{$info}
							</td>
						{/foreach}
					</tr>

				{/foreach}
			</tbody>
		</table>

	</div>



			<!---
			<form>
				Search: <input placeholder="Scientific Name" type="text" onkeyup="doSearch(this.value)">
			</form>

			<table id="tableList" class="table table-striped table-hover">
			<thead>
				<tr>
					<th><button value="Scientific_Name" id="Scientific_Name" class="button" type="button" onclick="orderBy(this.id)">Scientific Name</button></th>
					
					<th><button value="Common_Name" id="Common_Name" class="button" type="button" onclick="orderBy(this.id)">Common Name</button></th>
					<th><button value="Phylum" id="Phylum" class="button" type="button" onclick="orderBy(this.id)">Phylum</button></th>
					<th><button value="Sp_Order" id="Sp_Order" class="button" type="button" onclick="orderBy(this.id)">Order</button></th>
					<th><button value="Family" id="Family" class="button" type="button" onclick="orderBy(this.id)">Family</button></th>
				</tr>
			</thead> <!--make into another tpl that gets called from this tpl, that way i can just change the tpl?-->
<!--
		<div id="search">
			{foreach $newdata as $fungus}
				<tbody>
				<tr>
				{foreach $fungus as $info}
					<td>
					{$info}
					</td>
				{/foreach}
				</tr>
				</tbody>
			{/foreach}
			</table>
			{else} No Species Found
		{/if}
		</div>
		{include "footer.tpl"}

	</div>
	<script>
		$(document).ready(function() {
			$('#datatable').DataTable();
		} );
	</script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
 {* ALL OF THIS CODE IS NO LONGER IN USE FOR THIS SECTION, USED IN GLOSSARY*}
	{*<script>*}
		{*function orderBy(clickedId){*}

			{*var table_field = document.getElementById(clickedId).value;*}

			{*var xmlhttp = new XMLHttpRequest();*}
			{*xmlhttp.onreadystatechange = function() {*}
				{*if (this.readyState == 4 && this.status == 200) {*}
					{*document.getElementById("container").innerHTML = this.responseText;*}
				{*}*}
			{*};*}
			{*xmlhttp.open("GET", "species.php?q=" + table_field, true);*}
			{*xmlhttp.send();*}
		{*}*}

		{*function doSearch(str) {*}
			{*if (str.length == 0) {*}
				{*document.getElementById("search").innerHTML = "";*}
				{*var xmlhttp = new XMLHttpRequest();*}
				{*xmlhttp.onreadystatechange = function() {*}
					{*if (this.readyState == 4 && this.status == 200) {*}
						{*document.getElementById("container").innerHTML = this.responseText;*}
					{*}*}
				{*};*}
				{*xmlhttp.open("GET", "species.php?", true);*}
				{*xmlhttp.send();*}
			{*} else {*}
				{*document.getElementById("tableList").innerHTML = "";*}
				{*var xmlhttp = new XMLHttpRequest();*}
				{*xmlhttp.onreadystatechange = function() {*}
					{*if (this.readyState == 4 && this.status == 200) {*}
						{*document.getElementById("search").innerHTML = this.responseText;*}
					{*}*}
				{*};*}
				{*xmlhttp.open("GET", "speciesSearch.php?q=" + str, true);*}
				{*xmlhttp.send();*}

			{*}*}
		{*}*}
	{*</script>*}
</body>