<div class="table-responsive">
    <table class="table dt-table" data-order-col="1" data-order-type="asc">
        <thead>
            <tr>
                <th width="20%"><?php echo _l('milestone_name'); ?></th>
                <th width="45%"><?php echo _l('milestone_description'); ?></th>
                <th width="20%"><?php echo _l('milestone_due_date'); ?></th>
                <th width="25%"><?php echo _l('milestone_total_logged_time'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($milestones as $milestone){ ?>
                <tr>
                    <td><?php echo $milestone['name']; ?></td>
                    <td>
                        <?php if($milestone['description_visible_to_customer'] == 1){
                            echo $milestone['description'];
                        }
                        ?>
                    </td>
                    <td data-order="<?php echo $milestone['due_date']; ?>"><?php echo _d($milestone['due_date']); ?></td>
                    <td><?php echo format_seconds($milestone['total_logged_time']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
