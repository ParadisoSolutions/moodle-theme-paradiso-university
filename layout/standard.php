<?php
// HTML HEADER
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
echo $OUTPUT->doctype(); ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<?php
// HTML HEADER

// PAGE HEADER
?>
<body id="<?php p($PAGE->bodyid); ?>" class="<?php p($PAGE->bodyclasses); ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page">
	<div id="logo">
<?php if ($PAGE->heading || (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar())) { ?>
    <div id="page-header">
        <?php if ($PAGE->heading) { ?>
            <h1 class="headermain"><?php //echo $PAGE->heading ?></h1>
            <div class="headermenu"><?php
                $login_info = $OUTPUT->login_info();
                echo $login_info;
                if (!empty($PAGE->layout_options['langmenu'])) {
                    echo $OUTPUT->lang_menu();
                }
                echo $PAGE->headingmenu;
                if(substr(strip_tags($login_info),0,22) != 'You are not logged in.') {
            ?>
			<div class="profileoptions" id="profileoptions">
				<div class="userinfo">
					<ul>
<li><a href="/user/edit.php?id=%USERID%&amp;course=%COURSEID%" target="_parent">My Profile</a></li>
<li><a href="/my" target="_parent">My Courses</a></li>
<li><a href="/message" target="_parent">My Messages</a></li>
<li><a href="http://my.americansentinel.edu/Account/Login.aspx?ReturnUrl=%2fDefault.aspx" target="_blank">My Grades</a></li>
					</ul>
			    </div>
			</div>	            
            <?php
            }    
            ?></div>
        <?php } 

// TOP MENU	        
        ?>
    </div>        
	<div id="ASU_2010_menu">
		<div id="ASU_2010_menu_date">
		<a href="/calendar/view.php"  target="_parent">
		<script language="Javascript" type="text/javascript">
		//<![CDATA[
		<!--

		// Get today's current date.
		var now = new Date();

		// Array list of days.
		var days = new Array('Sun','Mon','Tues','Wed','Thurs','Fri','Sat');

		// Array list of months.
		var months = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec');

		// Calculate the number of the current day in the week.
		var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();

		// Calculate four digit year.
		function fourdigits(number)     {
		        return (number < 1000) ? number + 1900 : number;
		                                                                }

		// Join it all together
		today =  days[now.getDay()] + " " +
		              months[now.getMonth()] + " " +
		              date + " " +							               
		              (fourdigits(now.getYear())) ;

		// Print out the data.
		document.write("" +today+ " ");

		//-->
		//]]>
		</script>
		</a>
		</div>

		
	</div>        
        
        <?php
// TOP MENU
         
        	if (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar()) { ?>
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                <div class="navbutton"> <?php echo $PAGE->button; ?></div>
            </div>
        <?php } ?>
    
<?php } 
// PAGE HEADER

// PAGE CONTENT	
?>
<div id="page-content">
    <div id="region-main-box">
        <div id="region-post-box">
            <div id="region-main-wrap">
                <div id="region-main">
                    <div class="region-content">
                        <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                    </div>
                </div>
            </div>
            <?php if ($hassidepre) { ?>
                <div id="region-pre">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                    </div>
                </div>
                <?php } ?>
 
                <?php if ($hassidepost) { ?>
                <div id="region-post">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
// PAGE CONTENT

// PAGE FOOTER
?>
<?php if (empty($PAGE->layout_options['nofooter'])) { ?>
    <div id="page-footer" class="clearfix">
        <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
        <!--<div style="color: white; font-weight: bold; font-size: 11px; padding-top: 10px">For TECHNICAL SUPPORT - email <a style="color: white; font-weight: bold; font-size: 11px;" href="mailto:moodleadmin@americansentinel.edu">moodleadmin@americansentinel.edu</a></div>-->
    </div>
    <?php } ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</div>
</div>
</body>
</html>
<?php
// PAGE FOOTER
?>

