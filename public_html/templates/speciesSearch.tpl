<link href="css/species.css" type=text/css rel="stylesheet" />

{if $resultCount > 0}
    <!--{html_table loop=$data cols=5 table_attr="class=table"} -->
    <!--
    <table data-toggle="table" data-sort-name="sci_name"
           data-sort-order="desc" class="table table-striped table-hover">
    <thead>
        <tr>
            <th data-field="sci_name" data-sortable="true">Scientific Name</th>
            <th data-field="common_name" data-sortable="true">Common Name</th>
            <th data-field="phylum" data-sortable="true">Phylum</th>
            <th data-field="order" data-sortable="true">Order</th>
            <th data-field="family" data-sortable="true">Family</th>
        </tr>
    </thead> -->

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Scientific Name</th>
            <th>Common Name</th>
            <th>Phylum</th>
            <th>Order</th>
            <th>Family</th>
        </tr>
        </thead> <!--make into another tpl that gets called from this tpl, that way i can just change the tpl?-->
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