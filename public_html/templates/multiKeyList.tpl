<div>
    {*{if isset($sciName)}*}
        <h3>Species:</h3> <ul>

        {for $i = 1 to {$sciName|@count}}
            <li><a href='result.php?name={$url[{$i}]}'> {$sciName[{$i}]} </a>
            </li>
        {/for}
    </ul>
    {*{/if}*}
</div>
