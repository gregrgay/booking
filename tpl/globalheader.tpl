{*
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*}
<?xml version="1.0" encoding="{$Charset}"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
		xmlns="http://www.w3.org/1999/xhtml" lang="{$HtmlLang}" xml:lang="{$HtmlLang}" dir="{$HtmlTextDirection}">
<head>
	<title>{if $TitleKey neq ''}{translate key=$TitleKey args=$TitleArgs}{else}{$Title}{/if} | Inclusive Design Institute</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$Charset}"/>
	<meta name="robots" content="noindex" />
{if $ShouldLogout}
	<meta http-equiv="REFRESH" content="{$SessionTimeoutSeconds};URL={$Path}logout.php?{QueryStringKeys::REDIRECT}={$smarty.server.REQUEST_URI|urlencode}">
{/if}
	<link rel="shortcut icon" href="{$Path}favicon.ico"/>
	<link rel="icon" href="{$Path}favicon.ico"/>
<script type="text/javascript" src="{$Path}scripts/idi.js" ></script>
<script type="text/javascript" src="{$Path}scripts/infusion/MyInfusion.js"></script>
<script type="javacsript">
<!--
jQuery.noConflict();
-->
</script>
	{if $UseLocalJquery}
		<script type="text/javascript" src="{$Path}scripts/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="{$Path}scripts/js/jquery-ui-1.9.0.custom.min.js"></script>
	{else}
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
	{/if}
	<script type="text/javascript" src="{$Path}scripts/phpscheduleit.js"></script>
	<!-- <script type="text/javascript" src="{$Path}scripts/menubar.js"></script> -->
		<script type="text/javascript" src="{$Path}scripts/menu_new.js"></script>
	<style type="text/css">
		@import url({$Path}css/nav.css);
		@import url({$Path}css/style.css);
		{if $UseLocalJquery}
			@import url({$Path}scripts/css/smoothness/jquery-ui-1.9.0.custom.min.css);
		{else}
			@import url(//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/smoothness/jquery-ui.css);
		{/if}
		{if $cssFiles neq ''}
			{assign var='CssFileList' value=','|explode:$cssFiles}
			{foreach from=$CssFileList item=cssFile}
			@import url({$Path}{$cssFile});
			{/foreach}
		{/if}
		@import url('{$Path}css/{$CssUrl}');
		{if $CssExtensionFile neq ''}
			@import url('{$CssExtensionFile}');
		{/if}
	</style>

	{if $printCssFiles neq ''}
		{assign var='PrintCssFileList' value=','|explode:$printCssFiles}
		{foreach from=$PrintCssFileList item=cssFile}
		<link rel='stylesheet' type='text/css' href='{$Path}{$cssFile}' media='print' />
		{/foreach}
	{/if}

	<script type="text/javascript">
		$(document).ready(function () {
		initMenu();
		});
	</script>
	
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/framework/fss/css/fss-layout.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/framework/fss/css/fss-text.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/components/uiOptions/css/fss/fss-theme-bw-uio.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/components/uiOptions/css/fss/fss-theme-wb-uio.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/components/uiOptions/css/fss/fss-theme-by-uio.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/components/uiOptions/css/fss/fss-theme-yb-uio.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/components/uiOptions/css/fss/fss-text-uio.css" />

<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/lib/jquery/ui/css/fl-theme-hc/hc.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/lib/jquery/ui/css/fl-theme-hci/hci.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/lib/jquery/ui/css/fl-theme-blackYellow/blackYellow.css" />
<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/lib/jquery/ui/css/fl-theme-yellowBlack/yellowBlack.css" />

<link rel="stylesheet" type="text/css" href="{$Path}scripts/infusion/components/uiOptions/css/FatPanelUIOptions.css" />



</head>
<body>
<!-- Fluid UI Options -->

<div class="flc-uiOptions-fatPanel fl-uiOptions-fatPanel">
    <!-- This is the div that will contain the UI Options component -->
    <div id="myUIOptions" class="flc-slidingPanel-panel flc-uiOptions-iframe"></div>
 
    <!-- This div is for the sliding panel that shows and hides the UI Options controls -->
    <div class="fl-panelBar">
        <button class="flc-slidingPanel-toggleButton fl-toggleButton">Preferences</button>
    </div>
</div> 

<script type="text/javascript">
    // Instantiate the UI Enhancer component, specifying the table of contents' template URL
    var expire_when = 'Mon, 31 Dec 2015 23:59:00 UTC';
    fluid.pageEnhancer({
        tocTemplate: "{$Path}scripts/infusion/components/tableOfContents/html/TableOfContents.html",
        classnameMap: {
            theme: {
                "default": "uio-demo-theme"
            }
        },
        components: {   
            settingsStore:{
            options: {
               cookie: {
                     expires: expire_when
                    } 
                }
            }
        }
    });

    // Start up UI Options
    fluid.uiOptions.fatPanel(".flc-uiOptions-fatPanel", {
        prefix: "{$Path}scripts/infusion/components/uiOptions/html/",
	          // Provide custom strings for slidingPanel button
            slidingPanel: {
                options: {
                    strings: {
                        showText: "Preferences",
                        hideText: "Preferences"
                    }
                }
            }
    });
</script>

<!-- // End UI Options -->

<div id="wrapper">
<a href="#content" class="skiplink" accesskey="c">jump to content (c)</a><a href="#menu" class="skiplink" accesskey="m">jump to main navigation (m)</a>
	<div id="doc">
		<div id="logo" class=".fl-site-link"><a href="{$HomeUrl}">
		<span>Inclusive Design Institute</span></a>
		<br style="clear:both;" /></div>
		
		<div id="header">
			<div id="header-top">
				<div id="signout">
				{if $LoggedIn}
					{translate key="SignedInAs"} {$UserName}<br/><a
						href="{$Path}logout.php">{translate key="SignOut"}</a>
					{else}
					{translate key="NotSignedIn"}<br/>
					<a href="{$Path}index.php">{translate key="LogIn"}</a>
				{/if}
				</div>
			</div>
			<div role="navigation" aria-label="Main menu" id="navigation" class="fl-site-nav-main">
			<div class="idi-nav-links">
			<a name="mainnav" title="main navigation"></a>
			<ul id="menu">
			<li class="mainli" class><a href="http://inclusivedesign.ca" id="home">Home</a></li>
					<li class="mainli" ><a href="{$Path}{Pages::BROWSE}">{translate key="Browse"}</a></li>
			{if $LoggedIn}
				<li class="mainli"><a href="{$Path}{Pages::DASHBOARD}">{translate key="Dashboard"}</a></li>
				<li class="mainli"><a href="{$Path}{Pages::PROFILE}">{translate key="MyAccount"}</a>
					<ul>
						<li><a href="{$Path}{Pages::PROFILE}">{translate key="Profile"}</a></li>
						<li><a href="{$Path}{Pages::PASSWORD}">{translate key="ChangePassword"}</a></li>
						<li><a href="{$Path}{Pages::NOTIFICATION_PREFERENCES}">{translate key="NotificationPreferences"}</a></li>
						<li><a href="{$Path}{Pages::PARTICIPATION}">{translate key="OpenInvitations"}</a></li>
					</ul>
				</li>
				<li class="mainli"><a href="{$Path}{Pages::CALENDAR}">{translate key="Schedule"}</a>
					<ul>
						<li><a href="{$Path}{Pages::SCHEDULE}">{translate key="Bookings"}</a></li>
						<li><a href="{$Path}{Pages::MY_CALENDAR}">{translate key="MyCalendar"}</a></li>
						<li><a href="{$Path}{Pages::CALENDAR}">{translate key="ResourceCalendar"}</a></li>
						<!--<li><a href="#">{translate key="Current Status"}</a></li>-->
						<!--<li><a href="{$Path}{Pages::OPENINGS}">{translate key="FindAnOpening"}</a></li>-->
					</ul>
				</li>
			{if $CanViewAdmin}
				<li class="mainli"><a href="#">{translate key=ApplicationManagement}</a>
					<ul>
						<li><a
								href="{$Path}admin/manage_reservations.php">{translate key="ManageReservations"}</a>
							<ul>
								<li><a
										href="{$Path}admin/manage_blackouts.php">{translate key="ManageBlackouts"}</a></li>
							</ul>
						</li>
						<li><a
								href="{$Path}admin/manage_schedules.php">{translate key="ManageSchedules"}</a></li>
						<li><a
								href="{$Path}admin/manage_resources.php">{translate key="ManageResources"}</a>
							<ul>
								<li><a
										href="{$Path}admin/manage_accessories.php">{translate key="ManageAccessories"}</a></li>
							</ul>
						</li>
						<li><a href="{$Path}admin/manage_users.php">{translate key="ManageUsers"}</a></li>
						<li><a href="{$Path}admin/manage_groups.php">{translate key="ManageGroups"}</a></li>
						<li><a href="{$Path}admin/manage_quotas.php">{translate key="ManageQuotas"}</a></li>
						<li><a href="{$Path}admin/manage_announcements.php">{translate key="ManageAnnouncements"}</a></li>
						<li><a href="#">{translate key="Customization"}</a>
								<ul>
									<li><a
											href="{$Path}admin/manage_attributes.php">{translate key="Attributes"}</a></li>
									{if $EnableConfigurationPage}<li><a
											href="{$Path}admin/manage_configuration.php">{translate key="ManageConfiguration"}</a></li>
									{/if}
									<li><a href="{$Path}admin/manage_theme.php">{translate key="LookAndFeel"}</a></li>
								</ul>
							</li>
						<li><a href="{$Path}admin/server_settings.php">{translate key="ServerSettings"}</a></li>
					</ul>
				</li>
			{/if}
			{if $CanViewResponsibilities}
				<li><a href="#">{translate key=Responsibilities}</a>
					<ul>
						{if $CanViewGroupAdmin}
							<li><a
									href="{$Path}admin/manage_group_users.php">{translate key="ManageUsers"}</a></li>
							<li><a href="{$Path}admin/manage_group_reservations.php">{translate key=GroupReservations}</a>
							</li>
							<li><a href="{$Path}admin/manage_admin_groups.php">{translate key="ManageGroups"}</a>

						{/if}
						{if $CanViewResourceAdmin || $CanViewScheduleAdmin}
							<li><a href="{$Path}admin/manage_admin_resources.php">{translate key="ManageResources"}</a></li>
							<li><a href="{$Path}admin/manage_blackouts.php">{translate key="ManageBlackouts"}</a></li>
						{/if}
						{if $CanViewResourceAdmin}
							<li><a href="{$Path}admin/manage_resource_reservations.php">{translate key=ResourceReservations}</a></li>
						{/if}
						{if $CanViewScheduleAdmin}
							<li><a href="{$Path}admin/manage_admin_schedules.php">{translate key="ManageSchedules"}</a></li>
							<li><a href="{$Path}admin/manage_schedule_reservations.php">{translate key=ScheduleReservations}</a></li>
						{/if}
					</ul>
				</li>
			{/if}
			{if $CanViewReports}
			<li class="mainli"><a href="{$Path}reports/{Pages::REPORTS_GENERATE}">{translate key=Reports}</a>
				<ul>
					<li><a href="{$Path}reports/{Pages::REPORTS_GENERATE}">{translate key=GenerateReport}</a></li>
					<li><a href="{$Path}reports/{Pages::REPORTS_SAVED}">{translate key=MySavedReports}</a></li>
					<li><a href="{$Path}reports/{Pages::REPORTS_COMMON}">{translate key=CommonReports}</a></li>
				</ul>
			</li>
			{/if}
			{/if}
				<li class="mainli"><a href="{$Path}help.php">{translate key=Help}</a><ul>
				
					<li><a href="{$Path}help.php?ht=admin">{translate key=Administration}</a></li>
					<li><a href="{$Path}help.php?ht=about">{translate key=About}</a></li>
				</ul></li>
		
			</ul>
			</div>
			<!-- end #nav -->
			</div>
		</div>
		<!-- end #header -->
		<div id="content" role="mainUdate th">
		<a name="content" title="content anchor"></a>