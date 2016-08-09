<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$extraMenu = $view['menu']->render('extra');
?>
<!-- start: sidebar-header -->
<div class="sidebar-header">
    <!-- brand -->
    <a class="mautic-brand<?php echo (!empty($extraMenu)) ? ' pull-left pl-0 pr-0' : ''; ?>" href="#">
        <!-- logo figure -->
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 500 200" style="enable-background:new 0 0 500 200;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
	.st1{fill:#27AAE1;}
	.st2{fill:#1C75BC;}
	.st3{fill:#BE1E2D;}
	.st4{fill:#8D0E1B;}
	.st5{font-family:'HelveticaNeue-Bold';}
	.st6{font-size:116.6899px;}
	.st7{font-family:'HelveticaNeue-Light';}
	.st8{font-size:22.6824px;}
	.st9{font-size:90.5653px;}
	.st10{letter-spacing:2;}
	.st11{fill:#FFFFFF;stroke:#FFFFFF;stroke-width:5;stroke-miterlimit:10;}
</style>
<g>
	<path class="st0" d="M45.4,157.7c0,2.3,1.8,4.1,4.1,4.1h48.3c2.3,0,4.1-1.8,4.1-4.1l0,0c0-2.3-1.8-4.1-4.1-4.1H49.5
		C47.2,153.6,45.4,155.5,45.4,157.7L45.4,157.7z"/>
	<path class="st0" d="M46.8,168.2c0,2.2,1.8,4,4,4h45.8c2.2,0,4-1.8,4-4l0,0c0-2.2-1.8-4-4-4H50.8C48.6,164.2,46.8,166,46.8,168.2
		L46.8,168.2z"/>
	<path class="st0" d="M94.8,175H54.2C54.2,175,72.8,196.5,94.8,175z"/>
	<g>
		<g>
			<path class="st0" d="M127,37.3c-0.1,0.3-0.1,0.6,0,0.9c0.2,0.4,0.5,0.8,0.8,0.9c0.7,0.2,1.5-0.1,1.7-0.9c1.1-3.3,1.6-6.4,1.7-9.2
				l-2.7-2C128.7,29.9,128.3,33.4,127,37.3z"/>
			<path class="st1" d="M116.3,17.9l12.2,9c-0.1-5.4-1.7-9-1.7-9c-0.3-0.7,0-1.5,0.7-1.8c0.7-0.3,1.5,0,1.8,0.7
				c0.1,0.3,2.2,5.1,2,12.2l2.7,2c0.8-7.2-0.4-14.4-4.5-18.6l2.3-3.3c0.7-1,0.5-2.4-0.5-3.1c-0.2-0.1-0.4-0.2-0.6-0.3l-6.6,9.5
				C124.1,15.1,120.7,16.1,116.3,17.9z"/>
			<path class="st0" d="M129.4,16.8c-0.3-0.7-1.1-1-1.8-0.7c-0.7,0.3-1,1.1-0.7,1.8c0,0.1,1.6,3.6,1.7,9l2.7,2
				C131.6,21.8,129.5,17,129.4,16.8z"/>
			<path class="st2" d="M124.1,15.1l6.6-9.5c0,0,0,0,0,0c-0.2,0-0.4-0.1-0.5-0.1c0,0-0.1,0-0.1,0c-0.2,0-0.4,0-0.6,0.1
				c0,0,0,0-0.1,0c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1
				c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.2-0.3,0.3L126,9.7c-5.2-2.5-12.2-1.4-18.7,1.6l9,6.6C120.7,16.1,124.1,15.1,124.1,15.1z"/>
			<path class="st2" d="M130.7,5.7C130.7,5.7,130.7,5.7,130.7,5.7C130.7,5.7,130.7,5.7,130.7,5.7L130.7,5.7z"/>
			<path class="st2" d="M130,5.6c0,0,0.1,0,0.1,0C130.1,5.6,130,5.6,130,5.6z"/>
			<path class="st3" d="M119.2,74.3l-5-9.8L128.1,48c3.1-4.3,5.3-10.7,5.9-17.1l-2.7-2c-0.1,2.8-0.6,5.9-1.7,9.2
				c-0.2,0.7-1,1.1-1.7,0.9c-0.4-0.1-0.7-0.5-0.8-0.9c-0.1-0.3-0.1-0.6,0-0.9c1.3-3.8,1.7-7.4,1.6-10.3l-12.2-9
				c-5.6,2.4-12.8,6.3-16,11.5c-5.7,9.3-22,33-22,33l0.4,10.5c2.9,2.1,5.7,4.1,14.3,10.2l6.6-1l12,11L119.2,74.3z M103.2,45.2
				c-4-2.9-4.8-8.5-1.9-12.5c2.9-4,8.5-4.8,12.5-1.9c4,2.9,4.8,8.5,1.9,12.5C112.7,47.2,107.1,48.1,103.2,45.2z"/>
			<path class="st4" d="M100.3,29.5c3.2-5.3,10.4-9.1,16-11.5l-9-6.6c-6,2.7-11.5,7.1-14.7,11.5l-10.7,18l-12.4-1.7L54.4,52.5
				L70,60.9l1.3,6.7c2.4,1.8,4.1,3,5.5,4c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.3,0.2c0.1,0.1,0.3,0.2,0.4,0.3
				c0.1,0.1,0.2,0.1,0.2,0.2c0.2,0.1,0.4,0.3,0.6,0.4c0,0,0,0,0.1,0l-0.4-10.5C78.3,62.4,94.6,38.8,100.3,29.5z"/>
			<path class="st1" d="M113.7,30.8c-4-2.9-9.6-2.1-12.5,1.9c-2.9,4-2.1,9.6,1.9,12.5c4,2.9,9.6,2.1,12.5-1.9
				C118.6,39.3,117.7,33.7,113.7,30.8z M105.2,42.9c-2.7-1.9-3.3-5.6-1.4-8.3c1.9-2.7,5.6-3.3,8.3-1.4c2.7,1.9,3.3,5.6,1.4,8.3
				C111.5,44.1,107.9,44.8,105.2,42.9z"/>
		</g>
	</g>
	<g>
		<path class="st0" d="M130,78.8c0,13.4-4.8,26.1-13.4,36c-3.1,3.6-6.7,6.9-10.8,9.6c-3.6,2.4-9.6,6.5-9.8,13.2l-0.1,5.6H52.1
			c0,0-2.3-11.1,10.7-33.8c7.5-13,20.2-22,23.6-24.7l-18.5-13c-29.3,38.1-23.1,79.4-23.1,79.4h7.5h43.7h7.5h0.1v-7l0.1-6.3
			c0.1-2.9,4.1-5.6,6.5-7.2c4.5-3.1,8.5-6.7,12-10.7c9.8-11.3,15.4-25.9,15.4-41.2c0-10-2.4-19.4-6.5-27.8l-5.3,6.4
			C128.4,63.9,130,71.2,130,78.8z"/>
		<path class="st0" d="M89.2,20.6l0.1-0.1c0.5-0.7,1.1-1.5,1.8-2.2c-5.2-1.4-10.7-2.2-16.3-2.2c-20.8,0-39.2,10.1-50.6,25.7
			c0-0.1-0.1-0.1-0.1-0.2C16.4,52,11.8,64.9,11.8,78.8c0,15.3,5.6,29.9,15.4,41.2c2.9,3.4,6.3,6.5,10,9.2c0.3-3.3,0.9-6.2,1.4-8.4
			c-1.9-1.6-3.7-3.4-5.3-5.2c-0.1-0.3-0.3-0.5-0.6-0.7c0,0,0,0,0,0C24.8,105.6,20,94,19.4,81.7c0.1-1,0.2-2,0.2-2.9
			c0-30.5,24.8-55.2,55.2-55.2c4.1,0,8.1,0.5,11.9,1.3l2.4-4.1L89.2,20.6z"/>
	</g>
</g>
<text transform="matrix(1 0 0 1 141.4854 162.9672)"><tspan x="0" y="0" class="st0 st5 st6">big</tspan><tspan x="172.7" y="0" class="st0 st7 st8"> </tspan><tspan x="179.6" y="0" class="st0 st7 st9 st10">idea</tspan></text>
<line class="st11" x1="146.7" y1="173.3" x2="235.1" y2="173.3"/>
<text transform="matrix(0.9274 0 0 1 539.0713 203.5)" class="st3" style="font-family:'STHeitiSC-Light'; font-size:30.7194px;">marketing</text>
<text transform="matrix(0.9274 0 0 1 578.5713 223.9927)" class="st3" style="font-family:'STHeitiSC-Light'; font-size:30.7194px;">group</text>
</svg>


        <!--/ logo text -->
    </a>
    <?php if (!empty($extraMenu)): ?>
        <div class="dropdown extra-menu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-chevron-down fa-lg"></i>
            </a>
            <?php echo $extraMenu; ?>
        </div>
    <?php endif; ?>
    <!--/ brand -->
</div>
<!--/ end: sidebar-header -->

<!-- start: sidebar-content -->
<div class="sidebar-content">
    <!-- scroll-content -->
    <div class="scroll-content slimscroll">
        <!-- start: navigation -->
        <nav class="nav-sidebar">
            <?php echo $view['menu']->render('main'); ?>

            <!-- start: left nav -->
            <ul class="nav sidebar-left-dark">
                <li class="hidden-xs">
                    <a href="javascript:void(0)" data-toggle="minimize" class="sidebar-minimizer"><span class="direction icon pull-left fa"></span><span class="nav-item-name pull-left text"><?php echo $view['translator']->trans('mautic.core.menu.left.collapse'); ?></span></a>
                </li>
            </ul>
            <!--/ end: left nav -->

        </nav>
        <!--/ end: navigation -->
    </div>
    <!--/ scroll-content -->
</div>
<!--/ end: sidebar-content -->
