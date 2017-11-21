<?php

//get all events
$events=sql_getEvents();



?>
<div class="row">
    <?php foreach( $events as $event): 
        $e_name = $event['a_name'];
        $e_desc = $event['description'];
        $e_price = $event['price'];
        $e_age = $event['min_age'];
        $e_date = $event['a_date'];
        $e_loc = $event['location'];
        $e_img = $event['image'];
        
        
        ?>
    <div class="col-md-4 col-sm-3 event-item">
        <h3 class="event-name"><?php echo $e_name ?></h3>
        <img class="event-img" src="'<?php echo base64_encode($event['image']); ?>'"/>
    </div>
</div>
    <?php endforeach; ?>