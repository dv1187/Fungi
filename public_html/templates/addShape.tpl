{include "head.tpl" title="Admin" pageName="admin"}

<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />

<div class="result-page-header">
    <h1 id="species-name">Add New Shape</h1>
</div>
<div class="container">
    {if isset($msg)}<h3 id="warning">{$msg}</h3>{/if}
    {if isset($msg3)}<h3 id="warning">{$msg3}</h3>{/if}
    {if isset($dup)}<h3 id="warning">{$dup}</h3>{/if}
    <!--include "adminNav.tpl"}-->

    <!--Add new shape-->
    <form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
        <h3>New Shape:</h3>
            Name:
        <input type="text" name="shapeName"
                {if isset($shapeName)}
                    value="{$shapeName}"{/if}
               class="form-control" required><br>
            Description:
        <textarea name="description"
                  class="form-control" required>{if isset($description)}{$description}{/if}</textarea><br>
            Image:
        <input type="file" name="myimage" id="myimage"><br>

        <div id="char">
            <h4><strong>Shape Characteristic:</strong></h4>
        <input type="text" name="newCharName[]"
               {if isset($charName[0])}
                   value="{$charName[0]}"{/if}
                class="form-control"><br>
            <div class="opt">
                Characteristic Option:
                <input type="text" name="newOptName[0][]"
                        {if isset($optName[0][0])}
                            value="{$optName[0][0]}"{/if}
                       class="form-control"><br>
            </div>
        </div>
        <input type="button" id="addOption" class="btn btn-default form-control sub resetSpace" value="Add More Options"/>
        <input type="button" id="addChar" class="btn btn-default form-control sub resetSpace" value="Add New Characteristic"/>

        <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Add New Shape">
    </form>


    <script>

        var charCount = 0;
        var optCount = 0;

        $("#addChar").click(function() {
            charCount++;
            optCount = 0;
            var more = "<h4><strong>Shape Characteristic:</strong></h4> <input type='text' name='newCharName[]' class='form-control'<br>" +
                    "<div class='opt'> Characteristic Option: <input type='text' name='newOptName["+charCount+"]'[] class='form-control'><br>";
            $("#char").append(more);
        });

        $("#addOption").click(function() {
            optCount++;
            var add = "<div class='opt'> Characteristic Option: <input type='text' name='newOptName["+charCount+"]["+optCount+"]' class='form-control'><br>";
            $("#char").append(add);
        });
    </script>

    {include "footer.tpl"}

</div>