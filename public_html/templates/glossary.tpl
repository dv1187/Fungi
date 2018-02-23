
{include "head.tpl" title="Glossary" pageName="glossary"}

<body>

<div class="container">
    <div class="page-header">
        <h1 class="glossarytitle">Glossary</h1>
    </div>

    <p>As with any specialized area of study,
        mycology employs specialized words to convey
        specific meanings. While highly technical language
        is minimized in the keys, the user should understand
        the specialized terms that are used. Taking the time
        to do this will greatly facilitate the use of the keys
        and understanding of the species descriptions.
        The specialized terms found in the keys are defined here and,
        in cases where a picture is worth a thousand words,
        the term is illustrated as well.
    </p><hr>


    <form action="" method="post">
        Search: <input type="text" name="search" placeholder="search for fungi" onkeyup="doSearch(this.value)"/>
    </form>


    <table class="table table-striped" id = "term">

        <thead class="thead-default">
            <tr class="row">
                <th class="col-md-3">Term</th>
                <th class="col-md-9">Definition</th>
            <tr>
        </thead>

        <tbody>
            {foreach $terms as $term}
                <tr class="row">
                    <td><strong>{$term['Term']}</strong></td>
                    <td>{$term['Def']}<br>

                        <table class="row">
                            <tr class="col-md-4">
                                    {foreach $term['Images'] as $image}
                                        {if !is_null($image['Image_Name']) && !empty($image['Image_Name'])}
                                            <th class="col-md-12 multiple-images">
                                                <img src="img/{$image['Image_Name']}" class="glossarypic"><br>
                                                {$image['Caption']}
                                            </th>
                                        {/if}
                                    {/foreach}
                            </tr>
                        </table>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>

    {include "footer.tpl"}
</div>

<script>

    function doSearch(str) {

        if(str.length == 0){
            document.getElementById("term").innerHTML = "";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("term").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "glossary.php?q=" + str, true);
            xmlhttp.send();
        }else{
            document.getElementById("term").innerHTML = "";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("term").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "glossary.php?q=" + str, true);
            xmlhttp.send();
        }

    }

</script>

</body>

