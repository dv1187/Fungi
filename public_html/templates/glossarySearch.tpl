    <table class="table table-striped" id = "term">

        <thead class="thead-default">
            <tr class="row">
                <th class="col-md-3">Term</th>
                <th class="col-md-9">Definition</th>
            <tr>
        </thead>

        <tbody>
           {if $hasTerms == true}
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
           {/if}
           {if $hasTerms == false}
              <p>Your search has no results</p>
           {/if}
        </tbody>
    </table>
