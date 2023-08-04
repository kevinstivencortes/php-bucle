<table>
    <thead>
        <tr>
            <?php for ($column = 0; $column<=10; $column++){ ?>
                <th><?php echo $column;?> </th>
                <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php for ($row = 0; $row <=7; $row++){ ?>
    <tr>
    <?php for ($column = 0; $column <=10; $column++) {
        $result = $column;

        if ($column === 0){
            $result =$row;
        }
        if ($column >= 1){
            $result =$row * $column;
        }
        ?>
        <td> <?php echo $result; ?> </td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>