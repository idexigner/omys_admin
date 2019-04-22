<%-- SPG:

This HTML file has been associated with a SharePoint Master Page (.master file) carrying the same name.  While the files remain associated, you will not be allowed to edit the .master file, and any rename, move, or deletion operations will be reciprocated.

To build the master page directly from this HTML file, simply edit the page as you normally would.  Use the Snippet Generator at http://dcasp2-admin.treehouseconsultancy.org/_layouts/15/ComponentHome.aspx?Url=http%3A%2F%2Fdcasp2%2Dadmin%2Etreehouseconsultancy%2Eorg%2F%5Fcatalogs%2Fmasterpage%2FPortalMaster%5FDCAS%2Emaster to create and customize useful SharePoint entities, then copy and paste them as HTML snippets into your HTML code.   All updates to this file will automatically sync to the associated Master Page.

 --%>
<%@Master language="C#"%>
<%@Register TagPrefix="SharePoint" Namespace="Microsoft.SharePoint.WebControls" Assembly="Microsoft.SharePoint, Version=15.0.0.0, Culture=neutral, PublicKeyToken=71e9bce111e9429c"%>
<%@Register TagPrefix="WebPartPages" Namespace="Microsoft.SharePoint.WebPartPages" Assembly="Microsoft.SharePoint, Version=15.0.0.0, Culture=neutral, PublicKeyToken=71e9bce111e9429c"%>
<%@ Register assembly="AjaxControlToolkit, Version=4.5.7.1005, Culture=neutral, PublicKeyToken=28f01b0e84b6d53e" namespace="AjaxControlToolkit" tagprefix="asp" %>
<%@Register TagPrefix="wssucw" TagName="Welcome" Src="~/_controltemplates/15/Welcome.ascx"%>
<%@Register TagPrefix="wssucmui" TagName="MUISelector" Src="~/_controltemplates/15/MUISelector.ascx"%>
<%@Register TagPrefix="PublishingRibbon" TagName="PublishingRibbon" Src="~/_controltemplates/15/Ribbon.ascx"%>
<%@Register TagPrefix="cusCB" TagName="Chatbox" Src="~/_controltemplates/15/DCASProject/Common/ChatboxUC.ascx"%>
<%@Register TagPrefix="cusA" TagName="Accss" Src="~/_controltemplates/15/DCASProject/Common/AccessibilityUC.ascx"%>
<%@Register TagPrefix="cusS" TagName="Share" Src="~/_controltemplates/15/DCASProject/Common/ShareUC.ascx"%>
<%@Register TagPrefix="cusMM" TagName="MainMenu" Src="~/_controltemplates/15/DCASProject/Common/MainMenuUC.ascx"%>
<%@Register TagPrefix="cusP" TagName="Partners" Src="~/_controltemplates/15/DCASProject/Common/PartnersUC.ascx"%>
<%@Register TagPrefix="cusPubCon" TagName="PublicationandContactbox" Src="~/_controltemplates/15/DCASProject/Common/PublicationandContactboxUC.ascx"%>
<%@Register TagPrefix="cusFM" TagName="FooterMenu" Src="~/_controltemplates/15/DCASProject/Common/FooterMenu.ascx"%>
<%@Register TagPrefix="cusNL" TagName="Newsletter" Src="~/_controltemplates/15/DCASProject/Common/NewsletterUC.ascx"%>
<%@Register TagPrefix="cusF" TagName="Footer" Src="~/_controltemplates/15/DCASProject/Common/FooterUC.ascx"%>
<%@Register TagPrefix="cusEGov" TagName="EGov" Src="~/_controltemplates/15/DCASProject/Common/EGovUC.ascx"%>
<%@Register TagPrefix="cusFAQ" TagName="Faq" Src="~/_controltemplates/15/DCASProject/Common/FAQUC.ascx"%>
<%@Register TagPrefix="cusPoll" TagName="Poll" Src="~/_controltemplates/15/DCASProject/Common/PollUC.ascx"%>
<%@Register TagPrefix="cusLogin" TagName="LoginSnippet" Src="~/_controltemplates/15/DCASProject/Common/LoginSnippetUC.ascx"%>



<!DOCTYPE html>
<SharePoint:SPHtmlTag runat="server" id="SPHtmlTag" dir="&lt;%$Resources:wss,multipages_direction_dir_value%&gt;">

    <head runat="server">
        <meta http-equiv="X-UA-Compatible" />
        <link rel="shortcut icon" href="/Style Library/DCASBranding/img/favicon.ico" type="image/vnd.microsoft.icon" />






        <meta name="GENERATOR" content="Microsoft SharePoint" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Expires" content="0" />
        <SharePoint:RobotsMetaTag runat="server"></SharePoint:RobotsMetaTag>
        <SharePoint:PageTitle runat="server"><asp:ContentPlaceHolder id="PlaceHolderPageTitle" runat="server"><SharePoint:ProjectProperty Property="Title" runat="server">
				



                </SharePoint:ProjectProperty></asp:ContentPlaceHolder></SharePoint:PageTitle>
        <SharePoint:StartScript runat="server"></SharePoint:StartScript>
        <SharePoint:CssLink runat="server" Version="15"></SharePoint:CssLink>
        <SharePoint:CacheManifestLink runat="server"></SharePoint:CacheManifestLink>
        <SharePoint:PageRenderMode runat="server" RenderModeType="Standard"></SharePoint:PageRenderMode>
        <SharePoint:ScriptLink language="javascript" name="core.js" OnDemand="true" runat="server" Localizable="false"></SharePoint:ScriptLink>
        <SharePoint:ScriptLink language="javascript" name="menu.js" OnDemand="true" runat="server" Localizable="false"></SharePoint:ScriptLink>
        <SharePoint:ScriptLink language="javascript" name="callout.js" OnDemand="true" runat="server"
            Localizable="false"></SharePoint:ScriptLink>
        <SharePoint:ScriptLink language="javascript" name="sharing.js" OnDemand="true" runat="server"
            Localizable="false"></SharePoint:ScriptLink>
        <SharePoint:ScriptLink language="javascript" name="suitelinks.js" OnDemand="true" runat="server"
            Localizable="false"></SharePoint:ScriptLink>
        <SharePoint:CustomJSUrl runat="server"></SharePoint:CustomJSUrl>
        <SharePoint:SoapDiscoveryLink runat="server"></SharePoint:SoapDiscoveryLink>
        <SharePoint:AjaxDelta id="DeltaPlaceHolderAdditionalPageHead" Container="false" runat="server">
            <asp:ContentPlaceHolder id="PlaceHolderAdditionalPageHead" runat="server">
            </asp:ContentPlaceHolder>
            <SharePoint:DelegateControl runat="server" ControlId="AdditionalPageHead" AllowMultipleControls="true"></SharePoint:DelegateControl>
            <asp:ContentPlaceHolder id="PlaceHolderBodyAreaClass" runat="server">
            </asp:ContentPlaceHolder>
        </SharePoint:AjaxDelta>
        <SharePoint:CssRegistration Name="Themable/corev15.css" runat="server"></SharePoint:CssRegistration>


        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i"
            rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dubai-font@1.0.1/dubai-font/css/dubai-font.css" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/font-awesome.min.css %&gt;" runat="server"
            after="SharepointCssFile" />
        <SharePoint:CssRegistration name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/icomoon.css %&gt;"
            runat="server" after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/owl.theme.default.min.css %&gt;"
            runat="server" after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/owl.carousel.css %&gt;" runat="server"
            after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/jquery.mCustomScrollbar.css %&gt;"
            runat="server" after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/~language/DCASBranding/css/style.css %&gt;" runat="server"
            after="SharepointCssFile" />
             <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/~language/DCASBranding/css/responsive.css %&gt;" runat="server"
            after="SharepointCssFile" />

        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/~language/DCASBranding/css/slider.css %&gt;" runat="server"
            after="SharepointCssFile" />
        <SharePoint:CssRegistration name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/custom.css %&gt;"
            runat="server" after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/bs-datepicker.css %&gt;" runat="server"
            after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/assets/common/css/animate.css %&gt;"
            runat="server" after="SharepointCssFile" />


        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/bootstrap-datetimepicker.min.css %&gt;"
            runat="server" after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/jquery-ui.css %&gt;" runat="server"
            after="SharepointCssFile" />
        <SharePoint:CssRegistration
            name="&lt;% $SPUrl:~SiteCollection/Style Library/DCASBranding/css/responsive.css %&gt;" runat="server"
            after="SharepointCssFile" />



        <script src="/Style Library/DCASBranding/js/jquery.js">//<![CDATA[

        //]]></script>
        

        <script src="/Style Library/DCASBranding/js/modernizr.js">//<![CDATA[

        //]]></script>

        <script src="/Style Library/DCASBranding/js/jquery.plugin.js">//<![CDATA[

        //]]></script>


        <script src="/Style Library/DCASBranding/js/jquery.realperson.js">//<![CDATA[

        //]]></script>

        <script src="/Style Library/DCASBranding/js/customCode.js">//<![CDATA[

        //]]></script>

				<script src="/Style Library/DCASBranding/js/heading.js">//<![CDATA[

				//]]></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js">//<![CDATA[

        //]]></script>



        <script src="/Style Library/DCASBranding/js/bootstrap.min.js">//<![CDATA[                

        //]]></script>

        <script src="/Style Library/DCASBranding/js/bootstrap-datetimepicker.js">//<![CDATA[                

        //]]></script>

        <script src="/Style Library/DCASBranding/js/jquery-ui.js">//<![CDATA[                

        //]]></script>


        <script src="/Style Library/DCASBranding/js/qrcode.min.js">//<![CDATA[               

        //]]></script>
        <script src="/Style Library/DCASBranding/js/jquery.animateSlider.js">//<![CDATA[//]]></script>
        <script src="/Style Library/DCASBranding/js/owl.carousel.min.js">//<![CDATA[                

        //]]></script>
        <script src="/Style Library/DCASBranding/js/jquery.mCustomScrollbar.js">//<![CDATA[

        //]]></script>

        <script src="/Style Library/DCASBranding/js/jquery.bootstrap-responsive-tabs.min.js">//<![CDATA[

        //]]></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNOnHHk7oHxOiC6wzGMO7d5H8pe5711VI">//<![CDATA[
        //]]></script>

        <script src="/Style Library/DCASBranding/js/site.js">//<![CDATA[

                //]]></script>

        <script src="http://f1.as.readspeaker.com/script/8068/ReadSpeaker.js?pids=embhl" type="text/javascript">//<![CDATA[

        //]]>
        </script>

        <link rel="stylesheet" type="text/css"
            href="https://happinessmeter.dubai.gov.ae/HappinessMeter2/source/jquery.fancybox.css?v=2.1.5"
            media="screen" />
        <!--<script type="text/javascript" src="https://happinessmeter.dubai.gov.ae/HappinessMeter2/source/jquery-1.10.1.min.js"></script>-->
        <script type="text/javascript"
            src="https://happinessmeter.dubai.gov.ae/HappinessMeter2/source/jquery.fancybox.js?v=2.1.5"></script>



        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fc9383e1ee05f1b">//<![CDATA[

        //]]>
        </script>

        <script src="/Style Library/DCASBranding/assets/common/js/jquery.scrollify.js"></script>
        <script src="/Style Library/DCASBranding/assets/jquery.qrcode.min.js"></script>

    </head>

    <body onhashchange="if (typeof(_spBodyOnHashChange) != 'undefined') _spBodyOnHashChange();">
        <SharePoint:SPClientIDGenerator runat="server"
            ServerControlID="DeltaPlaceHolderMain;DeltaPlaceHolderPageTitleInTitleArea;DeltaPlaceHolderUtilityContent" />
        <SharePoint:ImageLink runat="server" />
        <SharePoint:SharePointForm
            onsubmit="if (typeof(_spFormOnSubmitWrapper) != 'undefined') {return _spFormOnSubmitWrapper();} else {return true;}"
            runat="server">

            <asp:ToolkitScriptManager ID="ToolkitScriptManager1" runat="server" EnablePageMethods="false"
                EnablePartialRendering="true" EnableScriptGlobalization="false" EnableScriptLocalization="true"></asp:ToolkitScriptManager>
            <SharePoint:AjaxDelta id="DeltaSPWebPartManager" runat="server">
                <WebPartPages:SPWebPartManager runat="server">
                </WebPartPages:SPWebPartManager>
            </SharePoint:AjaxDelta>

            <script>//<![CDATA[
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date(); a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-86413253-1', 'auto');
                ga('send', 'pageview');


        //]]></script>

            <script type="text/javascript">//<![CDATA[
                $(document).ready(function () {
                    if (window.location.href.indexOf("ar-sa") > -1) {
                        $("#foo a").attr('href', '/_layouts/15/DCASServices/PostData.aspx');
                    }
                    else {
                        $("#foo a").attr('href', '/_layouts/15/DCASServices/PostData.aspx');
                    }
                });

                $(document).ready(function () {
                    $('.fancybox').fancybox();
                });


        //]]></script>





<!--
            <div id="TurnOnAccessibility" style="display:none" class="s4-notdlg noindex">
                <a id="linkTurnOnAcc" href="#" class="ms-accessible ms-acc-button"
                    onclick="SetIsAccessibilityFeatureEnabled(true);UpdateAccessibilityUI();document.getElementById('linkTurnOffAcc').focus();return false;">
                    <SharePoint:EncodedLiteral runat="server" text="&lt;%$Resources:wss,master_turnonaccessibility%&gt;"
                        EncodeMethod="HtmlEncode" __designer:Preview="Turn on more accessible mode" __designer:Values="&lt;P N=&#39;Text&#39; Bound=&#39;True&#39; T=&#39;Resources:wss,master_turnonaccessibility&#39; /&gt;&lt;P N=&#39;ID&#39; T=&#39;ctl00&#39; /&gt;&lt;P N=&#39;Page&#39; ID=&#39;1&#39; /&gt;&lt;P N=&#39;TemplateControl&#39; ID=&#39;2&#39; /&gt;&lt;P N=&#39;AppRelativeTemplateSourceDirectory&#39; R=&#39;-1&#39; /&gt;"></SharePoint:EncodedLiteral>
                </a>
            </div>
            <div id="TurnOffAccessibility" style="display:none" class="s4-notdlg noindex">
                <a id="linkTurnOffAcc" href="#" class="ms-accessible ms-acc-button"
                    onclick="SetIsAccessibilityFeatureEnabled(false);UpdateAccessibilityUI();document.getElementById('linkTurnOnAcc').focus();return false;">
                    <SharePoint:EncodedLiteral runat="server"
                        text="&lt;%$Resources:wss,master_turnoffaccessibility%&gt;" EncodeMethod="HtmlEncode" __designer:Preview="Turn off more accessible mode" __designer:Values="&lt;P N=&#39;Text&#39; Bound=&#39;True&#39; T=&#39;Resources:wss,master_turnoffaccessibility&#39; /&gt;&lt;P N=&#39;ID&#39; T=&#39;ctl01&#39; /&gt;&lt;P N=&#39;Page&#39; ID=&#39;1&#39; /&gt;&lt;P N=&#39;TemplateControl&#39; ID=&#39;2&#39; /&gt;&lt;P N=&#39;AppRelativeTemplateSourceDirectory&#39; R=&#39;-1&#39; /&gt;">
                    </SharePoint:EncodedLiteral>
                </a>
            </div> -->
						<div id="top"></div>

            <div id="ms-designer-ribbon" style="display:none">
                <PublishingRibbon:PublishingRibbon runat="server"/>

            </div>

            <div id="s4-workspace">
                <div id="s4-bodyContainer">
                    <main class="wrapper">


                        <div id="happinessIcon"><a class="happy-meter-btn fancybox fancybox.iframe"
                                href="/_layouts/15/DCASServices/PostData.aspx?type=application"><img
                                    src="/Style Library/DCASBranding/img/icon-happymeter.png" border="0" alt="" /></a>
                        </div>
                        <!--<div id="foo"><a href="#" class="happy-meter-btn"><img src="/Style Library/DCASBranding/img/icon-happymeter.png" alt="Happy Meter" /></a></div>-->

                        <a href="#top" class="goto-top"><em class="fa fa-angle-double-up"></em></a>

                        <a href="javascript:;" class="chat-btn"><em class="fa fa-comments-o"></em></a>


                        <cusCB:Chatbox runat="server" ID="cusCBChatbox">
                        </cusCB:Chatbox>



                        <header class="main-header">

                            <section class="mh--top">
                                <div class="container">

                                    <div class="mht---left">
                                        <div class="logo-dubai">
                                            <a href="http://www.dubai.ae/" target="_blank">
                                                <img src="/Style Library/DCASBranding/img/dubai_en.png" alt="Dubai" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mht---right">
                                        <div class="emergency-code">
                                            <span class="icon">
                                                <em class="fa fa-phone">
                                                </em>
                                            </span>
                                            <span class="text">Emergency

                                            </span>
                                            <span class="number">998

                                            </span>
                                        </div>
                                        <nav class="mht-nav">
                                            <ul>
                                                <li class="mht-dropdown"> 
												<cusS:Share runat="server" ID="cusSShare">
                                                    </cusS:Share> </li>
                                                <li class="mht-dropdown hide-mobile">

                                                   <cusA:Accss runat="server" ID="cusSAccss">
                                                    </cusA:Accss >
                                                </li>
                                                <li>

													<cusLogin:LoginSnippet runat="server" ID="cusSLogin"></cusLogin:LoginSnippet>

													
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </section>

                            <section class="mh--middle">
                                <div class="container">

                                    <div class="logo-gov">
                                        <a href="http://www.dubai.ae/" target="_blank">
                                            <img src="/Style Library/DCASBranding/img/logo-government.png"
                                                alt="Government of Dubai" />
                                        </a>
                                    </div>
                                    <div class="logos-right">
                                        <a href="/" class="logo-zayed">
                                            <img src="/Style Library/DCASBranding/img/logo-zayed.png"
                                                alt="Zayed bin Sultan Al Nahyan" />
                                        </a>
                                        <dir class="logo-dcas">
                                            <div data-name="SiteLogo" class="logo-dcas">


                                                <SharePoint:AjaxDelta runat="server" BlockElement="True">

                                                    <SharePoint:SPSimpleSiteLink runat="server" CssClass=""
                                                        ID="x00774429580243f3bdb188b78555416e"><SharePoint:SiteLogoImage name="onetidHeadbnnr0" runat="server"
                                                            CssClass="" ID="xadb5c353b6e84c2ea1c5debe248e3e80"
                                                            LogoImageUrl="/_layouts/15/images/siteIcon.png">
												




                                                        </SharePoint:SiteLogoImage></SharePoint:SPSimpleSiteLink>

                                                </SharePoint:AjaxDelta>

                                            </div>
                                        </dir>
                                    </div>

                                </div>
                            </section>

                            <section class="mh--bottom">
                                <div class="container">

                                    <cusMM:MainMenu runat="server" ID="cusMMMainMenu">
                                    </cusMM:MainMenu>


                                </div>
                            </section>
                        </header>

                        <section>


                            <SharePoint:AjaxDelta ID="DeltaPlaceHolderMain" IsMainContent="true" runat="server">
                                <asp:ContentPlaceHolder ID="PlaceHolderMain" runat="server">
									<div class="DefaultContentBlock"
                                        style="border:medium black solid; background:yellow; color:black; margin:20px; padding:10px;">
                                        This div, which you should delete, represents the content area that your Page
                                        Layouts and pages will fill. Design your Master Page around this content
                                        placeholder.










                                    </div>
                                </asp:ContentPlaceHolder>
                            </SharePoint:AjaxDelta>

                        </section>

                        <section class="before-footer">
                            <div class="container">

                                <div class="col-md-1 footer-handle-button">
                                    <em class="fa fa-caret-down"></em>
                                </div>


                                <cusP:Partners runat="server" ID="cusPPartners">
                                </cusP:Partners>



                                <cusPubCon:PublicationandContactbox runat="server"
                                    ID="cusPubConPublicationandContactbox">
                                </cusPubCon:PublicationandContactbox>

                            </div>
                        </section>

                        <footer class="main-footer">
                            <div class="container">

                                <!--footer menu webpart start-->

                                <cusFM:FooterMenu runat="server" ID="cusFMFooterMenu">
                                </cusFM:FooterMenu>
                                <!--footer menu webpart end-->

                                <section class="footer-hidden">

                                    <nav class="social-nav">
                                        <ul>
                                            <li class="facebook"><a href="https://www.facebook.com/DubaiAmbulance/"
                                                    target="_blank"><em class="fa fa-facebook"></em></a></li>
                                            <li class="twiiter"><a href="https://twitter.com/search?q=dubai_Ambulance"
                                                    target="_blank"><em class="fa fa-twitter"></em></a></li>
                                            <li class="instagram"><a href="https://www.instagram.com/dubai_ambulance/"
                                                    target="_blank"><em class="fa fa-instagram"></em></a></li>
                                            <li class="linkedin"><a
                                                    href="https://www.linkedin.com/company/dubai-corporation-for-ambulance-services"
                                                    target="_blank"><em class="fa fa-linkedin"></em></a></li>
                                            <li class="youtube"><a href="https://www.youtube.com/user/dcasambulance"
                                                    target="_blank"><em class="fa fa-youtube"></em></a></li>
                                            <li class="google-plus"><a
                                                    href="https://plus.google.com/104663025933004623334"
                                                    target="_blank"><em class="fa fa-google-plus"></em></a></li>
                                        </ul>
                                    </nav>


                                    <cusF:Footer runat="server" ID="cusFFooter">
                                    </cusF:Footer>

                                </section>
                            </div>
                        </footer>
                        <section class="partners-section">
                            <div class="container">
                                <!--- This is E-GOV Web Part -->
                                <cusEGov:EGov runat="server" ID="cusEGovEGov"></cusEGov:EGov>
                                <!--<section class="dcas-partners2">
				        
				          <div id="dcas-partners2" class="owl-carousel owl-theme">
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkAsk.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkComplain.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkSuggest.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkSurvey.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkAsk.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkComplain.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkSuggest.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkSurvey.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkAsk.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkComplain.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkSuggest.png" alt=""></a></div>
				            <div class="item"><a href=""><img src="/Style Library/DCASBranding/img/partners/HomeExtLinkSurvey.png" alt=""></a></div>
				          </div>
				        </section> -->

                            </div>
                        </section>
                        <section class="copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <p class="col-md-7">
                                                <span>DUBAI CORPORATION FOR AMBULANCE SERVICES</span>
                                                <span>Last updated On 22 Feb 2018</span>
                                                <span>© 2012-2018 DCAS™ - ALL RIGHTS RESERVED</span>
                                            </p>
                                            <div class="col-md-5">
																							<a title="Download Adobe Reader " class="dcas-doc" href="https://get2.adobe.com/reader/" target="_blank"> 
																								<img src="/Style Library/DCASBranding/img/AdobeReaderIcon.png" alt="Download Adobe Reader"> 
																								<span><small>Download Adobe Reader</small></span> 
																							</a> 
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1 bottom-logoes">
                                        <a href="http://www.dubai.ae/">
                                            <img src="/Style Library/DCASBranding/img/DubaiEgovLogo_W.png"
                                                alt="Government of Dubai" />
                                        </a>
                                        <a href="http://www.dubai.ae/">
                                            <img src="/Style Library/DCASBranding/img/DubaiAELogo_en.png"
                                                alt="Dubai.ae" />
                                        </a>
                                        <a href="https://www.expo2020dubai.com/">
                                            <img src="/Style Library/DCASBranding/img/Expo2020Logo.png"
                                                alt="Expo 2020" />
                                        </a>
                                        <a href="http://www.dubai.ae/">
                                            <img src="/Style Library/DCASBranding/img/DubaiLogo.png" alt="Dubai" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>

                    <div data-name="ContentPlaceHolderMain">
                    </div>
                </div>
            </div>
            <!-- start: Floating Widgets -->
            <section class="floating-widgets">
                <div class="fw--right tab-content">
                    <div role="tabpanel" class="tab-pane" id="tab-polls">
                        <div class="polls-box wrap">
                            <!-- Poll User Control Starts -->
                            <cusPoll:Poll runat="server" id="PollId"></cusPoll:Poll>
                            <!-- Poll User Control Ends -->
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="tab-newsletter">

                        <!--Newsletter Cus Start-->
                        <cusNL:NewsLetter runat="server" id="NewsLetterId"></cusNL:NewsLetter>
                        <!--Newsletter Cus End-->

                    </div>
                    <!-- <div role="tabpanel" class="tab-pane" id="faqs">
                    
                </div> -->

											<div role="tabpanel" class="tab-pane" id="tab-chat">
												<section class="chat-box">
													<h2 class="heading-h2">Chat Now!</h2>
													<input type="text" class="form-control form-group" placeholder="Name">
													<input type="text" class="form-control form-group" placeholder="Email">
													<textarea name="" id="" class="form-control form-group" rows="4" placeholder="Message"></textarea>
													<input type="submit" class="btn btn-primary btn-full">
												</section>
											</div>
                </div>
                <div class="fw--left material-button-anim">
                    <ul id="options">
                        <!-- <li><a href="#chat" title="Chat" data-toggle="tab"><em class="icon-chat"></em></a></li> -->
                        <li class="polls option"><a class="tab-link option1" href="#tab-polls" title="Polls"
                                data-toggle="tab"><em class="icon-poll"></em> <span>Polls</span></a></li>
                        <li class="newsletter  option"><a class="tab-link  option2" href="#tab-newsletter"
                                title="Newsletter" data-toggle="tab"><em
                                    class="fa fa-envelope-open-o"></em><span>Newsletter</span></a></li>
                        <li class="faqs  option"><a class="option3" href="#faqsModal" title="FAQs"
                                data-target="#faqsModal" data-toggle="modal"><em
                                    class="fa fa-question-circle-o"></em><span>FAQs</span></a></li>
                        <li class="chat-btn option"><a class="tab-link option4" href="#tab-chat" title="Chat Now!"
                                data-toggle="tab"><em class="icon-chat"></em><span>Chat Now!</span></a></li>
																<li class="goto-top option"><a class="option5" id="goto-top" href="#top"><em class="fa fa-angle-double-up"></em><span>Goto Top</span></a></li>
                        <!-- <li class="goto-top option"><a class="option5" id="goto-top" href="#top"><em -->
                                    <!-- class="fa fa-angle-double-up"></em><span>Goto Top</span></a></li> -->
                        <!-- <li><a href="#events" title="Events" data-toggle="tab"><em class="icon-calendar"></em></a></li> -->
                    </ul>
                    <button class="material-button material-button-toggle" type="button">
                        <span class="fa fa-align-justify" aria-hidden="true"></span>

                    </button>
                </div>

            </section>
            <!-- end: Floating Widgets -->


            <script>
                $(document).ready(function () {
                    $('.material-button-toggle').on("click", function () {
                        $(this).toggleClass('open');
                        $('.option').toggleClass('scale-on');
                    });
                });
            </script>
            <!-- FAQ User Control Starts -->
            <cusFAQ:Faq runat="server" ID="cusFFAQ">
            </cusFAQ:Faq>


            <!-- FAQ User Control Ends -->

            <!--  <script>
    $(document).ready(function () {
        $('.material-button-toggle').on("click", function () {
            $(this).toggleClass('open');Newsletter
            $('.option').toggleClass('scale-on');
        });
    });
    </script>-->
            <SharePoint:SPSecurityTrimmedControl runat="server" Permissions="ManageWeb"><script type="text/javascript">//<![CDATA[
                    $(window).on("load", function () {
                        $('#ms-designer-ribbon').attr('style', 'display : block');
                    });

            //]]></script></SharePoint:SPSecurityTrimmedControl>

            <SharePoint:AjaxDelta id="DeltaFormDigest" BlockElement="true" runat="server">
                <asp:ContentPlaceHolder id="PlaceHolderFormDigest" runat="server">
					<SharePoint:formdigest runat="server" />
                </asp:ContentPlaceHolder>
            </SharePoint:AjaxDelta>
        </SharePoint:SharePointForm>
        <SharePoint:AjaxDelta id="DeltaPlaceHolderUtilityContent" runat="server">
            <asp:ContentPlaceHolder id="PlaceHolderUtilityContent" runat="server" />
        </SharePoint:AjaxDelta>
        <asp:ContentPlaceHolder id="PlaceHolderTitleAreaClass" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderTitleBreadcrumb" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderGlobalNavigationSiteMap" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderGlobalNavigation" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderSearchArea" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderLeftNavBar" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderHorizontalNav" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderTopNavBar" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderLeftNavBarDataSource" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderCalendarNavigator" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderLeftActions" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderLeftNavBarTop" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderSiteName" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderPageTitleInTitleArea" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderPageDescription" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderPageImage" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderTitleLeftBorder" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderMiniConsole" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderTitleRightMargin" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderTitleAreaSeparator" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderNavSpacer" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderLeftNavBarBorder" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderBodyLeftBorder" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderBodyRightMargin" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="WSSDesignConsole" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="SPNavigation" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderQuickLaunchTop" Visible="False" runat="server" />
        <asp:ContentPlaceHolder id="PlaceHolderQuickLaunchBottom" Visible="False" runat="server" />
    </body>
</SharePoint:SPHtmlTag>