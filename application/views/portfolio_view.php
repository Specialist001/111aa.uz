<h1>Портфолио</h1>
<p>
<table class="table">
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr>
        <th>ID</th>
        <th>Год</th>
        <th>Проект</th>
        <th>Описание</th>
    </tr>
    <?php

    foreach($data as $row)
    {
        echo '<tr>
                <td>'
                    . $row['ID'] .
                '</td>
                <td>'
                    . $row['Year'] .
                '</td>
                
                <td>'
                    . $row['Site'] .
                '</td>
                <td>'
                    . $row['Description'] .
                '</td>
             </tr>'
        ;
    }

    ?>
</table>
</p>