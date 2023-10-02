<body>
<table>
        <thead>
        <!-- Capçalera de la taula --> <tr><th>Prova</th>
            <th>Marca</th>
            <th>Atleta</th>
            <th>Natalici</th>
            <th>Club</th>
            <th>Data</th>
            <th>Lloc</th>
        </tr>
        </thead>
        <tbody>
        <!-- Cos de la taula -->
        <?php foreach ($records as $prova => $record){ ?>
                <tr><td><?= $prova ?></td>
                    <td><?= $record['marca']?></td>
                    <td><?= $record['atleta']?></td>
                    <td><?= $record['natalici']?></td>
                    <td><?= $record['club']?></td>
                    <td><?= $record['data']?></td>
                    <td><?= $record['lloc']?></td>
                </tr>
           <?php } ?>
        </tbody>
</table>