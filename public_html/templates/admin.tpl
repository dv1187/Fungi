{include "head.tpl" title="Admin" pageName="Admin"}
<!--Fungi Team 2015-->
<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />
<link rel="stylesheet" type="text/css" href="css/species.css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.14/js/jquery.dataTables.js"></script>

<body>

<div class="result-page-header">
    <h1 id="species-name">Administrator Settings</h1>
</div>
<div class="container">
    <div class="adminDiv">
        <a href="addSpecies.php">
            <div class="adminButton">
                Add Species {$test}
            </div>
        </a>
        <a href="addShape.php">
            <div class="adminButton">
                Add Shape
            </div>
        </a>
    </div> <!-- end row -->

    <h1>Species Edit</h1>
    <table class="display" id="datatable" cellspacing="0" width="100%">
        {if $resultCount > 0}

        <thead>
        <tr>
            <th data-field="sci_name" data-sortable="true">Scientific Name</th>
            <th data-field="common_name" data-sortable="true">Common Name</th>
            <th data-field="phylum" data-sortable="true">Phylum</th>
            <th data-field="order" data-sortable="true">Order</th>
            <th data-field="family" data-sortable="true">Family</th>
            <th data-field="synonyms" data-sortable="true">Synonyms</th>
            <th data-field="synonyms" data-sortable="true">Delete</th>
	    <th data-field="synonyms" data-sortable="true">Edit</th>
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
    {else} No Species Found
    {/if}

    {*<p class="message">Admin Logout </p>*}
    {*<form class="login-form" action="logout.php" method="post">*}
        {*<button> logout </button>*}

    <br><br>
    <h1>Shapes Edit</h1>
    <table class="display" id="datatableShape" cellspacing="0" width="100%">
        {if $resultCount2 > 0}

        <thead>
        <tr>
            <th data-field="sci_name" data-sortable="true">Shape Name</th>
            <th data-field="common_name" data-sortable="true">Description</th>
            <th data-field="synonyms" data-sortable="true">Delete</th>

        </tr>
        </thead>
        <tbody>
        {foreach $data as $shape}

            <tr>
                {foreach $shape as $shapeinfo}
                    <td>
                        {$shapeinfo}
                    </td>
                {/foreach}
            </tr>

        {/foreach}
        </tbody>
    </table>
    {else} No Shapes Found
    {/if}

    </br>

    <a href="logout.php">
        <div class="adminButtonLogout">
            Logout
        </div>
    </a>

    {include "footer.tpl"}
</div>

<script>
    $(document).ready( function () {
        $('#datatable').DataTable();
    } );
</script>
<script>
    $(document).ready( function () {
        $('#datatableShape').DataTable();
    } );
</script>
<script>
	function deleteConfirm() {
		return confirm("This will permanently delete from the database and cannot be undone. Are you sure you want to delete this item?");
	}
</script>
</body>