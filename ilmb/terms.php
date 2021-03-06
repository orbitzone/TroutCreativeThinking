
  <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

  <?php 
      $cssScriptPaths = array(
        "/assets/css/reece-products.css",
        "/assets/css/reece-bathrooms.css",
        "/assets/css/reece-bathrooms-ilmb.css",
        "/assets/js/fancybox/jquery.fancybox.css"     
      ); 
      include_once($serverBase."/includes/head/head-generic.php");
  ?>    

    <body class="ilmb withHappinessSubNav">

		<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
          $genericNavActiveMenuItem = "Bathrooms";
            include_once($serverBase."/includes/nav/nav-generic.php");
        ?>
  </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>
        <div class="content-container">
          <div class="inner-wrapper ">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a><span class="divider"> / </span></li>
              <li class="active page-branding text-brand"> terms and conditions</li>
            </ul>
            <div class="main-wrapper  top-space">
              <div class="row-fluid">
                <div class="span4"> <a href="#ilmbMobileNav" class="showIlmbMenu visible-phone" data-toggle="collapse">Menu</a>
                  <div class="ilmbNav collapse" id="ilmbMobileNav">
                    <?php
                      $ilmbPage = 'terms';
                      include_once('navigation.php');
                    ?>
                  </div>
                  <div class="ilmbDates hidden-phone">
                    <h3>competition dates</h3>
                    <dl>
                      <dt>Comp opens</dt>
                      <dd>March 1st</dd>
                      <dt>Entries close</dt>
                      <dd>May 30th</dd>
                      <dt>Voting Opens</dt>
                      <dd>June 7th</dd>
                      <dt>Voting closes</dt>
                      <dd>June 30th</dd>
                      <dt>Winner announced</dt>
                      <dd>August 5th </dd>
                    </dl>
                  </div>
                </div>
                <div class="span8">
                  <h3 class="ilmbPageHeader"> <img src="/assets/images/ilmb/ilmb-logo.png" alt="I love my bathroom" /> <span class="pageTitle">terms and conditions</span> </h3>
                  <div class="row-fluid">
                    <div class="inner-content">
                      <h3>How to Enter - Bathroom Designs</h3>
                      <ol>
                        <li>To be eligible to enter, individuals must send in original photo/s (a minimum of two, no more than 5) of their bathroom. <br />
                          Enter via;
                          <ol type="a">
                            <li>Online, visit <a href="http://www.reece.com.au/enter" title="Reece Website">www.reece.com.au/enter</a>, follow the prompts to the competition entry page, input the requested details (including a 25 words or less description of what you love about your bathroom) also include your name, address, daytime telephone number contact details. To complete your entry upload your photos of your bathroom. Submit your completed entry as instructed; or </li>
                            <li>By mail, send your photos along with your name, address and phone number and a description of where your inspiration came from when designing the bathroom (in 25 words or less) together to &lsquo;I Love My Bathroom Competition', Private Bag 109, Burwood VIC 3125 by last mail received on <strong>XX/XX/2013</strong>.</li>
                          </ol>
                        </li>
                        <li>Judging for the beautiful bathroom submission component of the promotion to be done by a panel of judges appointed by the Promoter. Judging will commence <strong>XX/XX/2013</strong>. The best entries (up to 20) as determined by the judges will be deemed Finalists. The Finalists will be uploaded on <a href="http://www.reece.com.au/enter" title="Reece Website">www.reece.com.au/enter</a> where readers will be called to vote for their favourite bathroom during the Voting Period (see below details on voting).</li>
                        <li>The Finalist who submits the most beautiful bathroom and most creative 25 words, as deemed by the judges, will be the Major prize winner and will receive $5,000. Prize will be awarded in the form of a cheque made in favour of the winner.</li>
                        <li>The Promoter will select the best entry in the 'Beautiful Bathroom Submissions' element of the promotion based on the following criteria: (a) overall look and layout; (b) inspired and innovative design; (c) product selection; (d) use of space; and (e) clever ideas shown in the bathroom design. </li>
                        <li>Individuals who submit a photo/s of their inspirational bathroom must own the house in which the bathroom is situated. In the case of an individual that takes a photo of a bathroom in their parent's or guardian's house, the parent or guardian must own the house in which the bathroom is situated. </li>
                        <li>Multiple entries into the 'Beautiful Bathroom Submissions' element of the promotion are permitted, subject to the following: (a) each entry must be substantially unique; (b) each entry must show a different bathroom; and (c) each entry must be submitted separately and in accordance with entry requirements.</li>
                      </ol>
                      <h3>How to Enter - Voters</h3>
                      <ol>
                        <li>The Finalists will be featured on <a href="http://www.reece.com.au/enter" title="Reece Website">www.reece.com.au/enter</a> during the voting period (between <strong>1/05/2013</strong> 9am and 5pm EST <strong>26/05/2013</strong>).</li>
                        <li>To vote, readers must visit <a href="http://www.reece.com.au" title="Reece Website">www.reece.com.au</a> and then follow the prompts to the competition voting page, input the requested details, including a vote for their favourite bathroom and, in 25 words or less, provide an explanation as to what they love about the bathroom design submit the completed entry form as instructed during the voting period.</li>
                        <li>Limit one vote per person.</li>
                        <li>Voting promotion will be judged by a panel of judges appointed by the Promoter. Judging will begin on <strong>27/05/2013</strong>, each voting entry will be individually judged based on the response provided to explain what they love about the bathroom they voted for. Responses will be judged based on creativity, literary merit and originality.</li>
                        <li>The two best valid entries, as determined by the judges, will each receive a $5,000 Reece voucher. The Reece voucher can be used at any participating Reece Plumbing Centre or Reece Bathroom Life Showroom.</li>
                      </ol>
                      <h3>Terms &amp; Conditions</h3>
                      <ol>
                        <li>Information on how to enter and prizes form part of these Terms and Conditions. Participation in this promotion is deemed acceptance of these Terms and Conditions.</li>
                        <li>Entry to both promotions is only open to Australian residents. For the removal of doubt, whilst a person is eligible to vote for their own bathroom, any such vote is subject to the terms and conditions of voting. The individual who has submitted the picture/s of the bathroom that wins the judges vote will not be eligible to receive any other prize (including the voting prize). In the event that the winner of the Beautiful Bathroom Submission promotion has also submitted a voting entry, their vote will be included in the voting but their entry will be deemed invalid to be deemed a winner in the Voting component of the Reece promotion.</li>
                        <li>Employees (and their immediate families) of the Promoter and agencies associated with this promotion are ineligible to enter. Immediate family means any of the following: spouse, ex-spouse, de-facto spouse, child or step-child (whether natural or by adoption), parent, step-parent, grandparent, step-grandparent, uncle, aunt, niece, nephew, brother, sister, step-brother, step-sister or 1st cousin.</li>
                        <li>The Promoter reserves the right, at any time, to verify the validity of entries, entrants (including an entrant's identity, age and place of residence) and votes, and to disqualify any entrant who submits an entry or vote that is not in accordance with these Terms and Conditions or who tampers with the entry process. Errors and omissions will be accepted at the Promoter's discretion. Failure by the Promoter to enforce any of its rights at any stage does not constitute a waiver of those rights.</li>
                        <li>For the removal of doubt, in the event that the Promoter has any cause for suspicion that a person has voted more than one time, the Promoter reserves the right to undertake any and all investigation required into determining whether or not a vote will be considered valid and whether or not an entry will be deemed to be valid. Determination of any such investigation is made at the complete discretion of the Promoter and will remain confidential (unless required to be disclosed by law).</li>
                        <li>Incomplete, indecipherable or illegible entries or votes will be deemed invalid.</li>
                        <li>If there is a dispute as to the identity of an entrant or the owner of a bathroom, the Promoter reserves the right, in its sole discretion, to request that the entrant provide proof of ownership of the bathroom in order to determine the identity of the entrant or the owner of the bathroom. Determination of what constitutes proof of ownership is made by the Promoter in its complete discretion.</li>
                        <li>The judges may select additional reserve entries which they determine to be the next best, and record them in order, in case of an invalid entry or ineligible entrant or an unclaimed prize.</li>
                        <li>Any ancillary costs associated with redeeming a prize are not included. Any costs in excess of the value of the voucher (including GST) and all ancillary costs associated with redeeming the prize are the responsibility of the winner. In the event that the cost of products purchased by the winner is less than the value of the voucher, the balance of the value of the voucher will not be awarded as cash. Reece vouchers are not transferable or exchangeable. Redemption of the Reece voucher is subject to Reece standard terms and conditions and standard business guidelines, including (but not limited to) those terms and conditions specified on the voucher. The Promoter is not responsible for any Reece voucher that is lost, stolen, forged, damaged or tampered with.</li>
                        <li>Winners will be notified by telephone and published in Australian House &amp; Garden Magazine and at <a href="http://www.reece.com.au/enter" title="Reece Website">www.reece.com.au/enter</a> as soon as practicable after they have been determined.</li>
                        <li>This is a game of skill. Each entry will be individually judged based on the criteria outlined for each element of the promotion above. Chance plays no part in determining the winners.</li>
                        <li>The judges' decision in relation to any aspect of the promotion is final and binding on each person who enters. No correspondence regarding any element of this promotion will be entered into. For the removal of doubt, an invalid entry consisting of a valid vote, may still be included for voting purposes only.</li>
                        <li>Entrants under 18 years old must have parental/guardian approval to enter and further, the parent/guardian of the entrant must read and consent to these Terms and Conditions. Parents/guardians may be required by the Promoter to enter into a further agreement as evidence of consent to their child entering this Promotion. </li>
                        <li>If the winner of a prize is under the age of 18 years, the prize will be awarded to their nominated parent or guardian on behalf of the winner.</li>
                        <li>If for any reason a winner does not redeem the prize or an element of the prize by the time stipulated by the Promoter, then the prize or that element of the prize will be forfeited.</li>
                        <li>If any prize is unavailable, the Promoter, in its discretion, reserves the right to substitute the prize with a prize to the equal value and/or specification.</li>
                        <li>Total prize pool value is $15,000. </li>
                        <li>Prizes, or any unused portion of a prize, are not transferable or exchangeable and cannot be taken as cash, unless otherwise specified. </li>
                        <li>When an entrant submits any materials via the Promotion including comments, recordings and images ("<strong>Content</strong>"), the entrant, unless the Promoter advises otherwise, licenses and grants the Promoter and Bauer Media Group (Publisher of Australian House &amp; Garden magazine), its affiliates and sub-licensees a non-exclusive, royalty-free, and sub-licensable right to use, reproduce, modify, adapt, publish and display such Content for any purpose in any media, without compensation, restriction on use, attribution or liability. Entrants agree not to assert any moral rights in relation to such use and warrant that they have the full authority to grant these rights.</li>
                        <li>Entrants agree that they are fully responsible for the Content they submit. The Promoter shall not be liable in any way for such Content to the full extent permitted by law. The Promoter may remove any Content without notice for any reason whatsoever. Entrants warrant and agree that: (a) they will not submit any Content that is unlawful or fraudulent, or that the Promoter may deem in breach of any intellectual property, privacy, publicity or other rights, or otherwise unsuitable for publication; (b) they will obtain prior consent from any person or property that appears in their Content; (c) they will obtain full prior consent from any person who has jointly created or has any rights in the Content, to the uses and terms herein; (d) their Content shall not contain viruses or cause injury or harm to any person or entity; and (e) they will comply with all applicable laws and regulations, including without limitation, those governing copyright, content, defamation, privacy, publicity and the access or use of others' computer or communication systems.</li>
                        <li>Without limiting any other terms herein, the entrant indemnifies the Promoter for any breach of the above terms. </li>
                        <li>Entrants consent to the Promoter and Bauer Media Group using the entrant's name, likeness, image and/or voice and/or video in the event they are a selected as a Finalist and/or winner (including photograph, submitted) in any media for an unlimited period without remuneration for the purpose of promoting this competition (including any outcome), and promoting any products manufactured, distributed and/or supplied by the Promoter.</li>
                        <li>If this promotion is interfered with in any way or is not capable of being conducted as reasonably anticipated due to any reason beyond the reasonable control of the Promoter, the Promoter reserves the right, in its sole discretion subject to all relevant state/ territory regulations, to the fullest extent permitted by law (a) to disqualify any entrant; or (b) to modify, suspend, terminate or cancel the promotion, as appropriate.</li>
                        <li>Any cost associated with accessing the promotional website is the entrant's responsibility and is dependent on the Internet service provider used. </li>
                        <li>The use of any automated entry software or any other mechanical or electronic means that allows an entrant to automatically enter or vote repeatedly is prohibited and will render all entries submitted by that entrant invalid. In the event the Promoter deems an entry to be invalid and could in some way be connected to other entries by the same entrant (or is unidentifiable as to whether that particular entry is in fact a valid entry, the Promoter reserves the right (with reference to all relevant state and territory regulations) to request to see proof of validity of all of that entrants entries and then, if unsatisfied with the validity of all of those entries either deem some or all of that entrants entries invalid. Determination of this will be made by the Promoter in its complete discretion (with reference to relevant state and territory regulations).</li>
                        <li>Except for any liability that cannot be excluded by law, the Promoter and ACP Magazines Ltd (Publisher of Australian House and Garden magazine) (including its officers, employees and agents) excludes all liability (including negligence), for any personal injury; or any loss or damage (including loss of opportunity); whether direct, indirect, special or consequential, arising in any way out of the promotion, including, but not limited to, where arising out of the following: (a) any technical difficulties or equipment malfunction (whether or not under the Promoter's control); (b) any theft, unauthorised access or third party interference; (c) any entry or prize claim that is late, lost, altered, damaged or misdirected (whether or not after their receipt by the Promoter) due to any reason beyond the reasonable control of the Promoter; (d) any variation in prize value to that stated in these Terms and Conditions; (e) any tax liability incurred by a inner or entrant; (f) redemption of a prize; and/or (g) participation in this promotion.</li>
                        <li>As a condition of accepting a prize, winners must sign any legal documentation in the form required by the Promoter and/or prize suppliers in their absolute discretion, including but not limited to a legal release and indemnity form. </li>
                        <li>The personal information provided by entrants when entering this promotion is collected by the Promoter to conduct this promotion (including prize distribution and promotion) and to provide entrants with information about the Promoter's products and services. By entering the promotion, unless otherwise advised, each entrant agrees that the information provided on the entry form may be disclosed to those involved in conducting the promotion or those that assist in providing information about the Promoter's services, such as mailing houses or marketing companies. The information provided may also be entered into a database for future promotional, marketing and publicity purposes. If an entrant does not provide their personal information, the Promoter will not be able to award that entrant with a prize under this promotion. If an entrant has any questions in relation to the treatment of their personal information, they should contact the Promoter at the address outlined below. A copy of the Promoter's privacy policy is available at <a href="http://www.reece.com.au" title="Reece Website">www.reece.com.au</a>. All entries become property of the Promoter. The personal information and contact details of all finalists will be provided by the Promoter to ACP Magazines. The collection, use and disclosure of personal information provided is governed by the ACP Privacy Notice (see contents page of Australian House and Garden magazine for location in each issue)</li>
                        <li>The Promoter is <strong>Reece Pty Ltd</strong>, ABN 84 004 097 090 of 118 Burwood Highway, Burwood VIC 3125.</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ilmbDates visible-phone">
                <h3>competition dates</h3>
                <dl>
                  <dt>Comp opens</dt>
                  <dd>March 1st</dd>
                  <dt>Entries close</dt>
                  <dd>May 30th</dd>
                  <dt>Voting Opens</dt>
                  <dd>June 7th</dd>
                  <dt>Voting closes</dt>
                  <dd>June 30th</dd>
                  <dt>Winner announced</dt>
                  <dd>August 5th </dd>
                </dl>
              </div>

            </div>

          </div>
        </div>

      <?php 
          include_once($serverBase."/includes/foot/foot-generic.php");
      ?>    

    </div>

      <?php
        $mobileNavActiveMenu = array(
          "activeMenu" => "Bathrooms",
          "activeMenuItem" => "Bathroom Moments"
        );
        include_once($serverBase."/includes/nav/nav-mobile.php");
    ?>  

    <?php 
        $jsScriptPaths = array(
        "/assets/js/jquery.mobile.custom.min.js",         
          "/assets/js/jquery.lazyload.min.js",
          "/assets/js/bootstrap-transition.js", 
          "/assets/js/bootstrap-carousel.js",
          "/assets/js/bootstrap-collapse.js",
          "/assets/js/bootstrap-dropdown.js",
          "/assets/js/reece-ocnav.js",
          "/assets/js/reece-carousel.js",
          "/assets/js/reece-ilmb-minisite.js",
          "/assets/js/fancybox/jquery.fancybox.js"
        ); 
        include_once($serverBase."/includes/foot/scripts.php");
    ?>      

    </body>
</html>