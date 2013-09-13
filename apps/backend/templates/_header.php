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
    <ul class="topnav pull-left">
        <li class="dropdown visible-abc">
            <a data-toggle="dropdown" href="#"><?php echo __('Administration');?>  <span class="caret"></span></a>
            <ul class="dropdown-menu pull-left">
                <li class="dropdown submenu">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Level 2 » </a>
                    <ul class="dropdown-menu submenu-show pull-left submenu-hide">
                        <li class="dropdown submenu">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Level 2.1 » </a>
                            <ul class="dropdown-menu submenu-show submenu-hide pull-left">
                                <li><a href="#">Level 2.1.1</a></li>
                                <li><a href="#">Level 2.1.2</a></li>
                                <li><a href="#">Level 2.1.3</a></li>
                                <li><a href="#">Level 2.1.4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Level 2.2 » </a>
                            <ul class="dropdown-menu submenu-show submenu-hide pull-left">
                                <li><a href="#">Level 2.2.1</a></li>
                                <li><a href="#">Level 2.2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="">Some option</a></li>
                <li><a href="">Some other option</a></li>
                <li><a href="">Other option</a></li>

            </ul>

        </li>
    </ul>
</div>