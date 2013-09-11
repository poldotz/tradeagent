<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 9/6/13
 * Time: 1:30 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<?php use_helper('GeoUtility') ?>

<?php if(isset($results) && is_object($results)): ?>
<div class="row-fluid center">
    <div class="widget">
        <div class="widget-head">
            <h4 class="heading"><?php echo __('Search Result') ?> : </h4>
        </div>

        <div class="widget-body"
            <?php $address = "" ?>
        <?php foreach($results as $key => $result): ?>
            <div class="row-fluid">
                <div class="span12"><?php echo link_to($result->formatted_address,'address/new?geocodes='.$key) ?> </div>
                <?php $address .= "{address:'".$result->formatted_address."', data:'".$result->formatted_address."'}," ?>
                <?php $coordinates[$key]['lat'] = $result->geometry->location->lat; ?>
                <?php $coordinates[$key]['lng'] = $result->geometry->location->lng; ?>
            </div>
        <?php endforeach; ?>
            <?php $address = substr($address,0,strlen($address)-1); ?>
        <div class="row-fluid ">
            <div class="span12">
                <div class="gmap3" id='geoSearchResutls'></div>
            </div>
        </div>
        </div>
    </div>
</div>
    <?php $averagePoint = averageCoodinates($coordinates) ?>
    <script type="text/javascript">

        $(function(){

            $('#geoSearchResutls').gmap3({
                map:{
                    options:{
                        center:[<?php echo $averagePoint['lat'].",".$averagePoint['lng'] ?>],
                        zoom: 5
                    }
                },
                marker:{
                    values:[
                        <?php echo $address ?>
                    ],
                    options:{
                        draggable: false
                    },
                    events:{
                        mouseover: function(marker, event, context){
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow:{
                                        anchor:marker,
                                        options:{content: context.data}
                                    }
                                });
                            }
                        },
                        mouseout: function(){
                            var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.close();
                            }
                        }
                    }
                }
            });
        });
    </script>
<?php endif; ?>
