
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

    <?php
        $cssScriptPaths = [
            "/assets/css/reece-finance.css",
            "/assets/css/selectric.css"
        ];
        include_once($serverBase."/includes/head/head-generic.php");
    ?>

    <body class="withSubNav finance">
        <div class="ocmain-wrapper">
            <div class="navbar navbar-fixed-top topNav">
                <?php
                    $genericNavActiveMenuItem = "About Us";
                    include_once($serverBase."/includes/nav/nav-generic.php");
                ?>
            </div>

            <?php
            include_once($serverBase."/includes/nav/nav-about-us.php");
            ?>


            <div class="content-container">
                <div class="inner-wrapper">

                    <ul class="breadcrumb">
                        <li><a href="#">About us</a> <span class="divider">/</span></li>
                        <li class="active page-branding text-brand">Finance</li>
                    </ul>

                    <section class="row-fluid banner">
                        <div class="span12">
                            <img src="/assets/images/aboutus/banner-finance.jpg" alt="Don't forget alt text">
                        </div>
                    </section>


                    <div class="row-fluid">

                        <div class="span8">
                            <h3 class="heading">Finance</h3>
                            <blockquote>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum ipsum dolor sit amet, consectetur adipiscing sollicitudindolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. </p>
                        </div>
                        <div class="span4 asxFeed">
                            <h4>Share Price</h4>
                            <div class="asxData">
                            <ul class="odd">
                                <li>
                                    <strong>Open</strong>
                                    <span id="asxOpen"></span>
                                </li>
                                <li>
                                    <strong>High</strong>
                                    <span id="asxHigh"></span>
                                </li>
                                <li>
                                    <strong>Low</strong>
                                    <span id="asxLow"></span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <strong>Close</strong>
                                    <span id="asxClose"></span>
                                </li>
                                <li>
                                    <strong>Change</strong>
                                    <span id="asxChange"></span>
                                </li>
                                <li>
                                    <strong>Change %</strong>
                                    <span id="asxChangePercent"></span>
                                </li>
                            </ul>
                            <small class="disclaimer">Quotes delayed by 20 minutes. Currency in AUD.</small>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="grey-bg file-download">
                <div class="content-container">
                <div class="inner-wrapper">
                    <div class="row-fluid">
                        <div class="span4">
                            <h4>ASX Announcements</h4>
                            <dl>
                                <dt>ASX Announcement - Completion of Acquisition<small>31 January 2014</small></dt>
                                <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2013/Reece_-_Actrol_Group_Presentation_-_Completion.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
                                <dt>Signing of Share Sale Agreement – Reece and Actrol Parts Holding Pty Ltd<small>20 December 2013</small></dt>
                                <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2013/Signing-of-Share-Sale-Agreement_Reece-and-Actrol-Parts-Holding-Pty-Ltd.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
                            </dl>
                        </div>
                        <div class="span4">
                            <h4>Corporate Governance</h4>
                            <dl>
                                <dt>Code of Conduct for Directors &amp; Senior Executives</dt>
                                <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
                                <dt>Code of Business Ethics &amp; Conduct</dt>
                                <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
                                <dt>Policy on Share Trading for Directors &amp; Employees</dt>
                                <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
                                <dt>Equal Opportunity and Diversity Policy</dt>
                                <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
                                <dt>Workplace Profile</dt>
                                <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
                            </dl>
                        </div>
                        <div class="span4">
                            <div class="financialReports">
                                <h4>Financial Reports</h4>
                                <select id="reportYear">
                                    <option value="2013-14">Year 2013-14</option>
                                    <option value="2012-13">Year 2012-13</option>
                                    <option value="2011-12">Year 2011-12</option>
                                    <option value="2010-11">Year 2010-11</option>
                                    <option value="2009-10">Year 2009-10</option>
                                    <option value="2008-09">Year 2008-09</option>
                                    <option value="2007-08">Year 2007-08</option>
                                    <option value="2006-07">Year 2006-07</option>
                                    <option value="2005-06">Year 2005-06</option>
                                    <option value="2004-05">Year 2004-05</option>
                                    <option value="2003-04">Year 2003-04</option>
                                    <option value="2002-03">Year 2002-03</option>
                                    <option value="2001-02">Year 2001-02</option>
                                    <option value="2000-01">Year 2000-01</option>
                                    <option value="1999-00">Year 1999-00</option>
                                    <option value="1998-99">Year 1998-99</option>
                                    <option value="1998-99">Year 1998-99</option>
                                </select>
<dl class="fincialYearReportList active" id="FinanceDoc2013-14">
    <dt>Half year results for six months ended 31 December 2013 </dt>
    <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
    <dt>ASX Announcement - Completion of Acquisition </dt>
    <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
    <dt>ASX Announcement - Signing of Share Sale Agreement </dt>
    <dd><a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2012-13" >
  <dt>Notice of 2013 Annual General Meeting / Proxy Form</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2013/Company AGM Announcement.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Annual Report 2013</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2013/F2013 Reece Annual Report.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>F2013 Appendix 4E</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2013/F2013 Appendix 4E.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Amendment to Record Date</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2013/Amendment to Record Date.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half year results for six months ended 31 December 2012</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2013/Half_year_results_for_six_months_ended_31_Dec_12.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2011-12" >
  <dt>2012 Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2012/F2012_Reece_Annual_Report.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>2012 Appendix 4E</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2012/F2012_Reece_Appendix_4E.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half year results for six months to 31 December 2011</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Half-Year-results-for-six-months-ending-31-December-2011.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2010-11" >
  <dt>Financial Reports Year Ending 30 June 2011</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2011_Annual_Report.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>2011 Appendix 4E</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2011_Appendix_4E.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half year results for six months to 31 December 2010</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/F2011_Appendix_4D_and_Financial_Report.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Queensland & Victorian Flood Announcement 2011</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Flood-Announcement_24_January_2011.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2009-10" >
  <dt>Financial Reports Year Ending 30 June 2010</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Reece_Annual_Report_30_06_2010.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>2010 Appendix 4E</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Reece_Appendix_4E_June_2010.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half year results for six months to 31 December 2009</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Half_year_results_for_six_months_to_31_December_2009.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>AGM presentation 2009</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/AGM_ASX_presentation_2009.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2008-09" >
  <dt>Financial Reports Year Ending 30 June 2009</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Financial_Reports_Year_Ended_30_June_2009.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>2009 Appendix 4E</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Reece_Appendix_4E_June_2009.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Sales and Profit Announcement 29 May 2009</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Sales_Profit_Announcement_29_May_2009.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half year results for six months to 31 December 2008</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Half_year_results_and_4D_report_31_Dec08.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Sales and Profit Announcement 23 October 2008</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ASX_23_October_2008.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>ASX Announcement of Appointment</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ASX_Announcement_of_appointment.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Senior Management Changes 01 August 2008</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Senior_Management_Changes_01_Aug_08.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2007-08" >
  <dt>2008 Annual Report & Appendix 4E</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Appendix_4E_and_Annual_Report_REH_30_June08.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Sales and Profit Announcement 26 June 2008</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Sales_Profit_Announcement_26_June_2008.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Appointment of Non-Executive Director</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Appointment_of_Mr_Andrew_Gorecki.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half-year report for the six months to 31 December 2007</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2008_Half_Year_4D_and_accounts.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Senior Management Changes 06 December 2007</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Senior_Management_Changes_6_Dec_07.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Sales and Profit Announcement 25 October 2007</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Sales_Profit_Announcemenrt_25_Oct_2007.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2006-07" >
  <dt>Financial information for the year ended 30 June 2007</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Appendix4E_and_AnnualReport.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Sales and Profit Announcement 25 May 2007</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Sales_Profit_Announcement_25May2007.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half-year information for the six months ended 31 December 2006</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/07_hy_report_hy_accounts.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2005-06" >
  <dt>Financial Information</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/04_09AnnRep06Final.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2006_4E_Annual_Report_Notice_of_AGM.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report & Half Yearly Accounts</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_05_06.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>LG Carder Announcement</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/L_G_Carder_Announcement_13Dec2005.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Sales and Profit Announcement</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Sales_and_Profit_Announcement_20Oct05.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Chairman's Address from AGM</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Chairmans_Address_AGM_20_October_2005.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2004-05" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Appendix_4E_Annual_Report_AGM_2005.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hyr_04_05.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Sales and Profit Announcement</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Sales_Profit_Announcement_2Jun05.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Year Results</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_04_05.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>YTD Results Announcement</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/YTD_Results_Announcement_21_10_04.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>General Meeting Notice</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/2004_Meeting_Proxy_Form.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2003-04" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ar_2004.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_03_04.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Preliminary Final Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/pre_ar_2004.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Announcement</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/Profit_Announcement_22_June_2004.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2002-03" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ar_2003.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_02_03.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2001-02" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ar_2002.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_01_02.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc2000-01" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ar_2001.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_00_01.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc1999-00" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ar_2000.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_99_00.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc1998-99" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ar_99.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_98_99.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>
<dl class="fincialYearReportList" id="FinanceDoc1997-98" >
  <dt>Annual Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/ar_98.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
  <dt>Half Yearly Report</dt>
  <dd><a href="http://www.reece.com.au/new/pdf/aboutus/reports/hy_97_98.pdf" class="download-pdf"><span class="icon-file"></span> Download PDF</a></dd>
</dl>


                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="news">
                
                    <div class="content-container">
                        <div class="inner-wrapper">
                            <h3 class="newsHeading">News</h3>
                        </div>
                    </div>

                    <section class="newsItem">
                        <div class="content-container">
                            <div class="inner-wrapper">
                                <div class="row-fluid">
                                    <div class="span5">
                                       <img src="/assets/images/aboutus/img-news.jpg" alt="Don't forget alt text">
                                    </div>
                                    <div class="span7">
                                        <p class="date">23rd December 2013</p>
                                        <h2>Reece excited to announce acquisition of Actrol</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>

            <?php
                include_once($serverBase."/includes/foot/foot-generic.php");
            ?>

        </div>

        <?php
            $mobileNavActiveMenu = array(
                "activeMenu" => "About Us"
            );
            include_once($serverBase."/includes/nav/nav-mobile.php");
        ?>

        <?php
            $jsScriptPaths = [
                "/assets/js/jquery.mobile.custom.min.js",
                "/assets/js/bootstrap-tab.js",
                "/assets/js/bootstrap-transition.js",
                "/assets/js/bootstrap-dropdown.js",
                "/assets/js/reece-signon.js",
                "/assets/js/bootstrap-carousel.js",
                "/assets/js/reece-finance.js",
                "/assets/js/reece-hidesubnavbar.js",
                "/assets/js/reece-ocnav.js",
                "/assets/js/jquery.selectric.min.js",
            ];
            include_once($serverBase."/includes/foot/scripts.php");
        ?>
<script type="text/javascript">
    $(function(){
        URL="http://query.yahooapis.com/v1/public/yql";
        data={
            "env": "http://datatables.org/alltables.env",
            "format":"json",
            "q": "select * from yahoo.finance.quotes where symbol in ('REH.AX')"
        }
        $.getJSON(
            URL+"?callback=?",
            data,
            showAXSData
            );
        $('#reportYear').selectric({onChange: changeFinancialYear});
    });
    function showAXSData (data){
        result = data.query.results.quote;
        $('#asxOpen').html(result.Open);
        $('#asxHigh').html(result.DaysHigh);
        $('#asxLow').html(result.DaysLow);

        $('#asxClose').html(result.PreviousClose);
        $('#asxChange').html(result.Change);
        $('#asxChangePercent').html(result.PercentChange);
    }
    function changeFinancialYear(){
        $('.fincialYearReportList').removeClass('active');
        $('#FinanceDoc'+$('#reportYear').val()).addClass('active');
    }
</script>
    </body>
</html>