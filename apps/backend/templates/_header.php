<?php
/**
 * Created by JetBrains PhpStorm.
 * User: poldotz
 * Date: 12/09/13
 * Time: 21.44
 * To change this template use File | Settings | File Templates.
 */

?>

<div class="navbar main hidden-print">
    <a class="appbrand pull-left" href="#"><span>TradeAgent</span></a>
    <!-- Top Menu Right -->
    <ul class="topnav pull-left">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo __('Administration')?> <span class="car"caret"></span></a>
            <ul class="dropdown-menu" id="menu1">
                <li class="dropdown-submenu">
                    <a href="#"><?php echo __('Company') ?></a>
                    <ul class="dropdown-menu">
                        <li><?php echo link_to(__('New'),'company/new')?></li>
                        <li><?php echo link_to(__('list'),'company/index')?></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="#"><?php echo __('Agent') ?></a>
                    <ul class="dropdown-menu">
                        <li><?php echo link_to(__('New'),'agent/new')?></li>
                        <li><?php echo link_to(__('list'),'agent/index')?></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="#"><?php echo __('Customer') ?></a>
                    <ul class="dropdown-menu">
                        <li><?php echo link_to(__('New'),'customer/new')?></li>
                        <li><?php echo link_to(__('list'),'customer/index')?></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="#"><?php echo __('Gallery') ?></a>
                    <ul class="dropdown-menu">
                        <li><?php echo link_to(__('New'),'gallery/new')?></li>
                        <li><?php echo link_to(__('list'),'gallery/index')?></li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </li>
        <!--<li class="dropdown">
            <a href="#">Menu</a>
        </li>
        <li class="dropdown">
            <a href="#">Menu</a>
        </li>-->
    </ul>
</div>