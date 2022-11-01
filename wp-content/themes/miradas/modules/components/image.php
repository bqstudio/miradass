<?php $image = $args['image'];
echo '<img 
    srcset="'.$image['sizes']['thumbnail'].' '.$image['sizes']['thumbnail-width'].'w,
            '.$image['sizes']['medium'].' '.$image['sizes']['medium-width'].'w,
            '.$image['sizes']['large'].' '.$image['sizes']['large-width'].'w,
            '.$image['sizes']['full-width'].' '.$image['sizes']['full-width-width'].'w"
    sizes="(max-width: 500px) 500px,
            (max-width: 800px) 800px,
            (max-width: 1000px) 1600px,
            (max-width: 2000px) 3000px,
            3000px"
    src="'.$image['sizes']['full-width'].'" 
    alt="'.$image['alt'].'"
/>'; ?>