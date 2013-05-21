<section class="span9">
    <h2>Projects</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Owner</th>
                <th>Accepted</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($projects as $project): ?>
            <tr>
                <td><?php echo $project['id']?></td>
                <td><?php echo $project['name']?></td>
                <td><?php echo $project['client']?></td>
                <td><?php echo $project['accepted']?></td>
                <td>True</td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</section>
