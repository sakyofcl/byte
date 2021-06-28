
<?php 

function carouselHeader($name,$badgeColor,$fsize,$fWeight){
    $element=
    '
    
    <div class="border border-bottom-0 bg-light m-0 p-2">
        <div class="carousel-header">
            <p class="text-uppercase text-dark m-0">
                <span class="badge '.$badgeColor.' border rounded-0" style="font-size:'.$fsize.'px;font-weight:'.$fWeight.';">
                    '.$name.'
                </span>
            </p>
        </div>
    </div>
    
    ';
    return $element;
}

function carouselBody($id,$item){
    $element=
    '
    <div class="carousel-body mt-0">
        <div class="owl-carousel" id="'.$id.'">

            '.$item().'
        
        </div>
    </div>

    ';
    return $element;
}
?>