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
	 viewBox="0 0 100 100" style="enable-background:new 0 0 600 600;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#808285;}
	.st1{fill:#414042;}
	.st2{fill:#FFFFFF;}
	.st3{fill:#27AAE1;}
	.st4{fill:#1C75BC;}
	.st5{fill:#BE1E2D;}
	.st6{fill:#8D0E1B;}
	.st7{fill:#E37C1D;}
</style>
<g>
	<path class="st0" d="M215.5,475.1c0,6.5,5.3,11.8,11.8,11.8h139.5c6.5,0,11.8-5.3,11.8-11.8l0,0c0-6.5-5.3-11.8-11.8-11.8H227.3
		C220.8,463.3,215.5,468.6,215.5,475.1L215.5,475.1z"/>
	<path class="st0" d="M219.8,505.2c0,6.4,5.1,11.5,11.5,11.5h132.2c6.3,0,11.5-5.1,11.5-11.5l0,0c0-6.4-5.2-11.5-11.5-11.5H231.3
		C224.9,493.7,219.8,498.8,219.8,505.2L219.8,505.2z"/>
	<path class="st1" d="M358.2,524.8H241C241,524.8,294.7,587,358.2,524.8z"/>
	<g>
		<g>
			<path class="st2" d="M451,127.6c-0.3,0.8-0.2,1.7,0.1,2.5c0.4,1.2,1.3,2.2,2.4,2.5c2.1,0.7,4.3-0.4,5-2.5
				c3.3-9.6,4.6-18.6,5-26.6l-7.9-5.8C455.8,106.3,454.7,116.5,451,127.6z"/>
			<path class="st3" d="M420.2,71.8l35.3,25.9c-0.3-15.6-4.9-25.8-4.9-26c-0.9-2,0-4.3,1.9-5.3c2-0.9,4.4,0,5.3,2
				c0.4,0.8,6.5,14.6,5.6,35.1l7.9,5.8c2.2-20.7-1.2-41.5-13-53.8l6.7-9.4c2-2.8,1.3-6.8-1.5-8.8c-0.6-0.4-1.2-0.7-1.8-0.9l-19,27.3
				C442.7,63.7,432.8,66.5,420.2,71.8z"/>
			<path class="st2" d="M457.8,68.4c-0.9-2-3.3-2.9-5.3-2c-2,0.9-2.9,3.3-1.9,5.3c0.1,0.2,4.6,10.4,4.9,26l7.9,5.8
				C464.3,83.1,458.2,69.2,457.8,68.4z"/>
			<path class="st4" d="M442.7,63.7l19-27.3c0,0-0.1,0-0.1,0c-0.5-0.1-1-0.2-1.5-0.2c-0.1,0-0.2,0-0.3,0c-0.6,0-1.2,0.1-1.7,0.3
				c-0.1,0-0.1,0-0.2,0c-0.2,0.1-0.4,0.2-0.6,0.3c-0.2,0.1-0.3,0.1-0.5,0.2c-0.2,0.1-0.3,0.2-0.5,0.3c-0.2,0.1-0.4,0.3-0.5,0.4
				c-0.1,0.1-0.2,0.2-0.3,0.3c-0.3,0.3-0.5,0.6-0.8,0.9l-6.6,9.4c-15.1-7.2-35.3-3.9-53.9,4.6l26.1,19.1
				C432.8,66.5,442.7,63.7,442.7,63.7z"/>
			<path class="st4" d="M461.7,36.4c0,0-0.1,0-0.1,0C461.6,36.4,461.6,36.5,461.7,36.4L461.7,36.4z"/>
			<path class="st4" d="M459.7,36.2c0.1,0,0.2,0,0.3,0C459.9,36.2,459.8,36.2,459.7,36.2z"/>
			<path class="st5" d="M428.6,234.5l-14.3-28.3l39.9-47.7c8.8-12.4,15.2-30.8,17.1-49.2l-7.9-5.8c-0.3,8-1.7,16.9-5,26.6
				c-0.7,2.1-2.9,3.2-5,2.5c-1.1-0.4-2-1.4-2.4-2.5c-0.3-0.8-0.4-1.7-0.1-2.5c3.8-11.1,4.8-21.3,4.6-29.8l-35.3-25.9
				C404,78.7,383.4,90,374,105.1c-16.6,26.9-63.5,95.1-63.5,95.1l1.1,30.3c8.5,6.1,16.6,11.9,41.2,29.4l19.1-3l34.7,31.7
				L428.6,234.5z M382.2,150.4c-11.5-8.4-14-24.5-5.5-36c8.4-11.5,24.5-13.9,36-5.5c11.5,8.4,14,24.5,5.5,36
				C409.8,156.4,393.7,158.9,382.2,150.4z"/>
			<path class="st6" d="M374,105.1c9.4-15.2,30-26.4,46.2-33.3l-26.1-19.1c-17.3,7.9-33.3,20.4-42.4,33.2l-30.9,52l-35.7-4.8
				l-43.6,38.4l45,24.1l3.8,19.2c7,5.1,11.8,8.6,15.9,11.6c0.3,0.2,0.5,0.4,0.8,0.5c0.3,0.2,0.6,0.5,0.9,0.7
				c0.4,0.3,0.7,0.5,1.1,0.8c0.2,0.2,0.5,0.4,0.7,0.5c0.6,0.4,1.1,0.8,1.7,1.2c0.1,0.1,0.1,0.1,0.2,0.1l-1.1-30.3
				C310.5,200.2,357.4,132,374,105.1z"/>
			<path class="st3" d="M412.7,108.9c-11.5-8.4-27.6-5.9-36,5.5c-8.4,11.5-5.9,27.6,5.5,36c11.5,8.4,27.6,5.9,36-5.6
				C426.7,133.4,424.2,117.3,412.7,108.9z M388.1,143.8c-7.7-5.5-9.5-16.1-4.1-23.8c5.5-7.7,16.1-9.5,23.8-4.1
				c7.7,5.5,9.5,16.1,4.1,23.8C406.4,147.4,395.8,149.2,388.1,143.8z"/>
		</g>
	</g>
	<g>
		<path class="st7" d="M459.7,247.4c0,38.6-14,75.4-38.6,104c-9,10.5-19.4,19.8-31.1,27.8c-10.3,7-27.6,18.8-28.2,38l-0.2,16H234.9
			c0,0-6.8-31.9,30.9-97.5c21.5-37.6,58.2-63.4,68-71.1l-53.5-37.5c-84.5,110-66.7,229.1-66.7,229.1h21.6h126h21.6h0.3V436l0.3-18.1
			c0.2-8.3,11.8-16.2,18.8-20.9c13-8.8,24.6-19.2,34.6-30.8c28.4-32.6,44.5-74.6,44.5-118.8c0-28.8-6.8-56.1-18.9-80.3l-15.3,18.3
			C455.1,204.5,459.7,225.4,459.7,247.4z"/>
		<path class="st7" d="M341.9,79.5l0.3-0.4c1.5-2.2,3.3-4.3,5.1-6.4c-15-4-30.7-6.2-47-6.2c-59.9,0-113,29.2-146,74.2
			c-0.1-0.2-0.2-0.4-0.3-0.6c-22.2,30-35.3,67.1-35.3,107.3c0,44.2,16.1,86.3,44.5,118.8c8.5,9.8,18.2,18.6,28.8,26.5
			c0.9-9.5,2.5-18,4-24.4c-5.4-4.7-10.6-9.7-15.3-15c-0.3-0.8-0.8-1.5-1.7-1.9c0,0,0-0.1-0.1-0.1c-22.8-26.5-36.5-60.1-38.4-95.6
			c0.3-2.9,0.5-5.7,0.5-8.4C141,159.5,212.5,88,300.3,88c11.8,0,23.2,1.3,34.3,3.7l7-11.8L341.9,79.5z"/>
	</g>
</g>
</svg>

        <!--/ logo figure -->
        <!-- logo text -->
        <svg version="1.1" class="mautic-logo-text mnl-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 65" enable-background="new 0 0 260 65" xml:space="preserve">
            <g>
                <path class="m" d="M39.336,57.983V37.951c0-4.932-2.58-9.409-7.664-9.409
                c-5.008,0-7.967,4.477-7.967,9.409v20.032h-9.258V20.498h8.575l0.683,4.553c1.972-3.794,6.298-5.16,9.864-5.16
                c4.477,0,8.955,1.822,11.079,6.981c3.339-5.311,7.664-6.829,12.521-6.829c10.623,0,15.859,6.526,15.859,17.756v20.185H63.77V37.799
                c0-4.932-2.049-9.106-7.057-9.106s-8.119,4.326-8.119,9.258v20.032H39.336z"/>
                <path class="a" d="M109.031,20.574h8.879v37.41h-8.728l-0.456-5.464
                c-2.124,4.402-7.967,6.527-12.14,6.604c-11.079,0.074-19.275-6.754-19.275-19.883c0-12.898,8.575-19.652,19.502-19.577
                c5.01,0,9.789,2.352,11.913,6.07L109.031,20.574z M86.569,39.24c0,7.134,4.934,11.384,11.079,11.384
                c14.569,0,14.569-22.689,0-22.689C91.503,27.935,86.569,32.108,86.569,39.24"/>
                <path class="u" d="M133.101,20.574v19.578c0,5.69,3.11,10.016,9.03,10.016
                c5.69,0,9.561-4.781,9.561-10.471V20.574h9.181v37.486h-8.27l-0.607-5.084c-3.871,3.794-7.437,5.614-12.672,5.614
                c-8.954,0-15.48-6.754-15.48-18.363V20.574H133.101z"/>
                <path class="t" d="M182.123,10.026V20.65h10.319v7.967h-10.396V44.78
                c0,3.567,1.973,5.313,4.855,5.313c1.443,0,3.112-0.455,4.479-1.14l2.58,7.893c-2.656,1.062-4.857,1.518-7.664,1.594
                c-8.12,0.303-13.432-4.326-13.432-13.659V28.617h-6.98V20.65h6.98v-9.637L182.123,10.026z"/>
                <path class="i" d="M209.441,10.026c0,7.209-10.929,7.209-10.929,0 C198.513,2.818,209.441,2.818,209.441,10.026 M199.348,57.984h9.259V20.422h-9.259V57.984z"/>
                <path class="c" d="M247.803,53.203c-4.326,4.249-8.879,5.92-14.418,5.92
                c-10.853,0-19.881-6.526-19.881-19.807c0-13.279,9.028-19.805,19.881-19.805c5.312,0,9.409,1.518,13.507,5.54l-5.843,6.146
                c-2.2-1.973-4.934-2.959-7.514-2.959c-6.221,0-10.773,4.553-10.773,11.078c0,7.133,4.855,10.927,10.623,10.927
                c2.959,0,5.919-0.834,8.194-3.11L247.803,53.203z"/>
            </g>
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
