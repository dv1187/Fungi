{include "head.tpl" title="Key" pageName="query"}
<link href="css/query.css" type=text/css rel="stylesheet" />

	<div class="container">
		<div class="row">
		<h3>Choose the characteristics that best describe your specimen.</h3>
			<hr>
	</div>
		<div class="row">

			<div class="col-md-8">

		<form action="multiKey.php?id={$id}" method="post">
			{foreach $charList as $char}
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							{foreach $charID as $id}
								{if $char.ID == $id}
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse{$id}" aria-expanded="true"><span class="glyphicon glyphicon-th-list">
									</span> {$char.Name}
									</a>
								{/if}
							{/foreach}

						</h4>
					</div>
					{foreach $charID as $id}
					{if $char.ID == $id}
					<div id="collapse{$id}"  class="panel-collapse collapse in" aria-expanded="true">
						{/if}
						{/foreach}
						<div class="list-group">
							{foreach $char.options as $opt}
								<input type="checkbox" id="{$opt.Opt_ID}" name={$char.Name} value={$opt.Opt_ID} onchange="keyChoices(this.value)"> {$opt.Opt_Name}<br>

							{/foreach}
						</div>

					</div>

				</div>
			{/foreach}

		</form>
			</div>
			<div class="col-md-4">
		{if isset($success)}<h3>{$success}</h3>{/if}
		{if isset($scientificName)}
			<h3>Species:</h3> <ul>
			{for $i = 1 to {$scientificName|@count}}
				<li><a href='result.php?name={$urlToBePassed[{$i}]}' class="nothing"> {$scientificName[{$i}]} </a>

				</li>
			{/for}
		</ul>
		{/if}

				<p id="demo"></p>
		<p id="populate"></p>
				<div id="setup">
						{if isset($sciName)}
					<h3>Species:</h3> <ul>

					{for $i = 1 to {$sciName|@count}}
						<li><a href='result.php?name={$url[{$i}]}'> {$sciName[{$i}]} </a>
						</li>
					{/for}
				</ul>
				{/if}
				</div>
			</div>
		</div>
		{include "footer.tpl"}
</div>

<script>

	$('input:checkbox').change(function() {
		var selectedOptions = [];
		var count = 0;
		$(':checked').each(function(){
			selectedOptions[count] = $(this).attr("id");
			count++;
		});

		if(count > 0) {
			document.getElementById("setup").innerHTML = "";

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("populate").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "multiKeyList.php?val=" + selectedOptions + "&id=" + {$consId}, true);
			xhttp.send();
		} else {
			document.getElementById("populate").innerHTML = "";

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("populate").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "multiKeyList.php?val=none&id=" + {$consId}, true);
			xhttp.send();
		}
	})
</script>

</html><!-- 11 on
$("input:checkbox").change(function(){
	var selectedOptions
	$(':checkd').each(function(){
		build selected list
	}

}-->