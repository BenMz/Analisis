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
                <td>
                    <a href="<?php echo base_url('index.php/projects/view/'.$project['id'])?>">
                    <?php echo $project['name']?>
                </td>
                <td><?php echo $project['client']?></td>
                <td><?php
                    switch($project['status']){
                        case 0 : echo "Pending"; break;
                        case 1 : echo "Rejected"; break;
                        case 2 : echo "Accepted"; break;
                    }
                ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</section>
