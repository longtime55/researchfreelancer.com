<?php
/**
 * Class PageSeeder.
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * Class PageSeeder
 */
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
                [
                    'title' => 'Main',
                    'slug' => 'main',
                    'body' => '<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="wt-greeting-holder">
                    <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 float-left">
                    <div class="wt-greetingcontent">
                    <div class="wt-sectionhead">
                    <div class="wt-sectiontitle">
                    <h2>Greetings &amp; Welcome</h2>
                    Start Today For a Great Future</div>
                    <div class="wt-description">
                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce anim id est laborumed.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborumed perspiciatis unde omnis isteatus error aluptatem accusantium doloremque laudantium.</p>
                    </div>
                    </div>
                    <div id="wt-statistics" class="wt-statistics">
                    <div class="wt-statisticcontent wt-countercolor1">
                    <h3 data-from="0" data-to="1500" data-speed="8000" data-refresh-interval="50">1,500</h3>
                    <em>k</em>
                    <h4>Active Projects</h4>
                    </div>
                    <div class="wt-statisticcontent wt-countercolor2">
                    <h3 data-from="0" data-to="99.6" data-speed="8000" data-refresh-interval="5.9">75</h3>
                    <em>%</em>
                    <h4>Great Feedback</h4>
                    </div>
                    <div class="wt-statisticcontent wt-countercolor3">
                    <h3 data-from="0" data-to="5000" data-speed="8000" data-refresh-interval="100">5,000</h3>
                    <em>k</em>
                    <h4>Active Freelancers</h4>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 float-left">
                    <div class="wt-greetingvideo">
                    <figure><a href="https://www.youtube.com/watch?v=B-ph2g5o2K4" rel="prettyPhoto[video]" data-rel="prettyPhoto[video]"><img src="http://www.amentotech.com/projects/worketic/images/video-img.png" alt="video" width="415" height="450" /> </a></figure>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 0,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Privacy Policy',
                    'slug' => 'privacy-policy',
                    'body' => '<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                    <div class="wt-submitreportholder wt-bgwhite">
                    <div class="wt-titlebar">
                    <h2 class="wt-chocolate">Privacy and Confidentiality</h2>
                    </div>
                    <div class="wt-reportdescription">
                    <div class="wt-description">
                    <p>We respect your privacy and want to protect your personal information. To learn more, please read this Privacy Policy.</p>
                    <p>This Privacy Policy explains how we collect, use and (under certain conditions) disclose your personal information. This Privacy Policy also explains the steps we have taken to secure your personal information. Finally, this Privacy
                      Policy explains your options regarding the collection, use and disclosure of your personal information. By visiting <a href="/">www.researchfreelancer.com </a> directly or through another site, you accept the practices described in this
                      Policy.</p>
                    <p>Data protection is a matter of trust and your privacy is important to us. We shall therefore only use your name and other information which relates to you in the manner set out in this Privacy Policy. We will only collect information
                      where it is necessary for us to do so and we will only collect information if it is relevant to our dealings with you.</p>
                    <p>We will only keep your information for as long as we are either required to by law or as is relevant for the purposes for which it was collected. You can visit the Site and browse without having to provide personal details. During your
                      visit to the Site you remain anonymous and at no time can we identify you unless you have an account on the Site and log on with your user name and password.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <h3>1. Data that we collect</h3>
                    </div>
                    <div class="wt-description">
                    <p>We may collect various pieces of information if you seek to hire a writer or you are a freelancer. We collect, store and process your data for processing your deal on the website and for any possible later claims, and to provide you with
                      our services. We may collect personal information including, but not limited to, your title, name, gender, date of birth, email address, postal address, telephone number, mobile number, fax number, payment details, payment card details or
                      bank account details.</p>
                    <p>We will use the information you provide to enable us to process your orders and to provide you with the services and information offered through our website and which you request. Further, we will use the information you provide to
                      administer your account with us; verify and carry out financial transactions in relation to payments you make online; audit the downloading of data from our website; improve the layout and/or content of the pages of our website and
                      customize them for users; identify visitors on our website; carry out research on our users demographics; send you information we think you may find useful or which you have requested from us, including information about our services,
                      provided you have indicated that you have not objected to being contacted for these purposes. Subject to obtaining your consent we may contact you by email with details of other products and services.</p>
                    <p>If you prefer not to receive any marketing communications from us, you can opt out at any time.</p>
                    <p>Payments that you make through the Site will be processed by our payment agents. You must only submit to us or our Agent or the Site information which is accurate and not misleading and you must keep it up to date and inform us of
                      changes.</p>
                    <p>Your actual order details may be stored with us but for security reasons cannot be retrieved directly by us. However, you may access this information by logging into your account on the Site. Here you can view the details of your orders
                      that have been completed, those which are open and administer your address details, bank details and any newsletter to which you may have subscribed. You undertake to treat the personal access data confidentially and not make it available
                      to unauthorized third parties. We cannot assume any liability for misuse of passwords unless this misuse is our fault.</p>
                    </div>
                    <div class="wt-title">
                    <h3><em class="wt-chocolate">Other uses of your Personal Information</em></h3>
                    </div>
                    <div class="wt-description">
                    <p>We may use your personal information for opinion and market research. Your details are anonymous and will only be used for statistical purposes. You can choose to opt out of this at any time. Any answers to surveys or opinion polls we
                      may ask you to complete will not be forwarded on to third parties. Disclosing your email address is only necessary if you would like to take part in competitions. We save the answers to our surveys separately from your email address.</p>
                    <p>We may also send you other information about us, the Site, our other websites, our products, sales promotions, our newsletters, anything relating to other companies in our group or our business partners. If you would prefer not to
                      receive any of this additional information as detailed in this paragraph (or any part of it) please click the "unsubscribe" link in any email that we send to you. Within 7 working days of receipt of your instruction we will cease to send
                      you information as requested. If your instruction is unclear we will contact you for clarification.</p>
                    <p>We may further anonymize data about users of the Site generally and use it for various purposes, including ascertaining the general location of the users and usage of certain aspects of the Site or a link contained in an email to those
                      registered to receive them, and supplying that anonymized data to third parties such as publishers. However, that anonymized data will not be capable of identifying you personally.</p>
                    </div>
                    <div class="wt-title">
                    <h3><em class="wt-chocolate">Competitions</em></h3>
                    </div>
                    <div class="wt-description">
                    <p>For any competition we use the data to notify winners and advertise our offers. You can find more details where applicable in our participation terms for the respective competition.</p>
                    </div>
                    <div class="wt-title">
                    <h3><em class="wt-chocolate">Third Parties and Links</em></h3>
                    </div>
                    <div class="wt-description">
                    <p>We may pass your details to other companies in our group. We may also pass your details to our agents and subcontractors to help us with any of our uses of your data set out in our <a href="http://localhost/page/privacy-policy">Privacy Policy</a>. For example, we may use third parties to
                      assist us to collect payments from you, to analyze data and to provide us with marketing or customer service assistance.</p>
                    <p>We may exchange information with third parties for the purposes of fraud protection and credit risk reduction. We may transfer our databases containing your personal information if we sell our business or part of it. Other than as set
                      out in this Privacy Policy, we shall NOT sell or disclose your personal data to third parties without obtaining your prior consent unless this is necessary for the purposes set out in this Privacy Policy or unless we are required to do so
                      by law. The Site may contain advertising of third parties and links to other sites or frames of other sites. Please be aware that we are not responsible for the privacy practices or content of those third parties or other sites, nor for
                      any third party to whom we transfer your data in accordance with our Privacy Policy.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <h3>2. Cookies</h3>
                    </div>
                    <div class="wt-description">
                    <p>The acceptance of cookies is not a requirement for visiting the projectshelve.com. However we would like to point out that the use of the "basket" functionality on the Site and ordering is only possible with the activation of cookies.
                      Cookies are tiny text files which identify your computer to our server as a unique user when you visit certain pages on the Site and they are stored by your Internet browser on your computer`s hard drive. Cookies can be used to recognize
                      your Internet Protocol address, saving you time while you are on, or want to enter, the Site. We only use cookies for your convenience in using the Site (for example to remember who you are when you want to amend your shopping cart
                      without having to re-enter your email address) and not for obtaining or using any other information about you (for example targeted advertising). Your browser can be set to not accept cookies, but this would restrict your use of the Site.
                      Please accept our assurance that our use of cookies does not contain any personal or private details and are free from viruses. If you want to find out more information about cookies, go to <a
                        href="http://www.allaboutcookies.org">http://www.allaboutcookies.org</a> or to find out about removing them from your browser, go to <a
                        href="http://www.allaboutcookies.org/manage-cookies/index.html">http://www.allaboutcookies.org/manage-cookies/index.html.</a></p>
                    <p>This website uses Google Analytics, a web analytics service provided by Google, Inc. ("Google"). Google Analytics uses cookies, which are text files placed on your computer, to help the website analyze how users use the site. The
                      information generated by the cookie about your use of the website (including your IP address) will be transmitted to and stored by Google on servers in the United States. Google will use this information for the purpose of evaluating your
                      use of the website, compiling reports on website activity for website operators and providing other services relating to website activity and internet usage. </p>
                    <p>Google may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google`s behalf. Google will not associate your IP address with any other data held by
                      Google. You may refuse the use of cookies by selecting the appropriate settings on your browser, however please note that if you do this you may not be able to use the full functionality of this website. By using this website, you consent
                      to the processing of data about you by Google in the manner and for the purposes set out above.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <h3>3. Security</h3>
                    </div>
                    <div class="wt-description">
                    <p>We have in place appropriate technical and security measures to prevent unauthorized or unlawful access to or accidental loss of or destruction or damage to your information. When we collect data through the Site, we collect your
                      personal details on a secure server. We use firewalls on our servers. When we collect payment card details electronically, we use encryption by using Secure Socket Layer (SSL) coding. While we are unable to guarantee 100% security, this
                      makes it hard for a hacker to decrypt your details.</p>
                    <p>You are strongly recommended not to send full credit or debit card details in unencrypted electronic communications with us. We maintain physical, electronic and procedural safeguards in connection with the collection, storage and
                      disclosure of your information. Our security procedures mean that we may occasionally request proof of identity before we disclose personal information to you. You are responsible for protecting against unauthorized access to your
                      password and to your computer.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <h3>4. Your rights</h3>
                    </div>
                    <div class="wt-description">
                    <p>If you are concerned about your data you have the right to request access to the personal data which we may hold or process about you. You have the right to require us to correct any inaccuracies in your data free of charge. At any stage
                      you also have the right to ask us to stop using your personal data for direct marketing purposes.</p>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 0,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'About Us',
                    'slug' => 'about-us',
                    'body' => '<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="wt-greeting-holder">
                    <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 float-left">
                    <div class="wt-greetingcontent">
                    <div class="wt-sectionhead">
                    <div class="wt-sectiontitle">
                    <h2>Greetings &amp; Welcome</h2>
                    Start Today For a Great Future</div>
                    <div class="wt-description">
                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua eniina ilukita ylokem lokateise ination voluptate velite esse cillum dolore eu fugnulla pariatur lokaim urianewce anim id est laborumed.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborumed perspiciatis unde omnis isteatus error aluptatem accusantium doloremque laudantium.</p>
                    </div>
                    </div>
                    <div id="wt-statistics" class="wt-statistics">
                    <div class="wt-statisticcontent wt-countercolor1">
                    <h3 data-from="0" data-to="1500" data-speed="8000" data-refresh-interval="50">1,500</h3>
                    <em>k</em>
                    <h4>Active Projects</h4>
                    </div>
                    <div class="wt-statisticcontent wt-countercolor2">
                    <h3 data-from="0" data-to="99.6" data-speed="8000" data-refresh-interval="5.9">75</h3>
                    <em>%</em>
                    <h4>Great Feedback</h4>
                    </div>
                    <div class="wt-statisticcontent wt-countercolor3">
                    <h3 data-from="0" data-to="5000" data-speed="8000" data-refresh-interval="100">5,000</h3>
                    <em>k</em>
                    <h4>Active Freelancers</h4>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 float-left">
                    <div class="wt-greetingvideo">
                    <figure><a href="https://www.youtube.com/watch?v=B-ph2g5o2K4" rel="prettyPhoto[video]" data-rel="prettyPhoto[video]"><img src="http://www.amentotech.com/projects/worketic/images/video-img.png" alt="video" width="415" height="450" /> </a></figure>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'How It Works',
                    'slug' => 'how-it-works',
                    'body' => '<div class="wt-contentwrappers">
                    <div class="container">
                    <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                    <div class="wt-howitwork-hold wt-bgwhite wt-haslayout">
                    <ul class="wt-navarticletab wt-navarticletabvtwo nav navbar-nav">
                    <li class="nav-item"><a id="all-tab" class="active" href="#forhiring" data-toggle="tab">How does it work?</a></li>
                    <li class="nav-item"><a id="trading-tab" href="#faq" data-toggle="tab">FAQ</a></li>
                    </ul>
                    <div class="tab-content wt-haslayout">
                    <div id="forhiring" class="wt-contentarticle tab-pane active fade show">
                    <div class="row">
                    <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                    <div class="wt-starthiringcontent">
                    <div class="wt-sectionhead wt-textcenter">
                    <div class="wt-sectiontitle">
                    <p>Employer</p>
                    Start Today For a Great Future
                    </div>
                    </div>
                    <div class="wt-accordionhold accordion">
                    <div class="wt-accordiontitle">
                    <div class="wt-title pt-3">
                    <h4>1. Post a project</h4>
                    </div>
                    <div class="wt-description">
                    <p>It is always free to post your project. You will automatically begin to receive bids from our professional Writers/Freelancers. Alternatively, you can browse through the skills of available writers on our site, and make a direct offer to a freelancer instead. All our freelancers are screened professional writers.</p>
                    </div>
                    <div class="wt-title">
                    <h4>2. Choose the perfect freelancer</h4>
                    </div>
                    <div class="wt-description">
                    <ul>
                      <li><p>Browse freelancer profiles</p></li>
                      <li><p>Chat in real-time</p></li>
                      <li><p>Compare proposals and select the best one</p></li>
                      <li><p>Award your project and your freelancer goes to work</p></li>
                    </ul>
                    </div>
                    <div class="wt-title">
                    <h4>3. Pay safely using our Milestone Payment System</h4>
                    </div>
                    <div class="wt-description">
                    <p>release payments according to a schedule of goals you set, or only upon completion. You are in control, so you get to make decisions.</p>
                    </div>
                    <div class="wt-title">
                    <h4>4. Release Payment</h4>
                    </div>
                    <div class="wt-description pb-3">
                    <p>Release Payment when you are satisfied!</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="form-group pt-4">
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <a href="http://localhost/employer/dashboard/post-job" class="form-control wt-hirebtn">Post a Project</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                    <div class="wt-starthiringcontent">
                    <div class="wt-sectionhead wt-textcenter">
                    <div class="wt-sectiontitle">
                    <p>Writer/Freelancer</p>
                    Start Today For a Great Future
                    </div>
                    </div>
                    <div class="wt-accordionhold accordion">
                    <div class="wt-accordiontitle">
                    <div class="wt-title pt-3">
                    <h4>1. Sign up and complete your profile</h4>
                    </div>
                    <div class="wt-description">
                    <ul>
                      <li><p>Select your skills and expertise</p></li>
                      <li><p>Upload a professional profile photo</p></li>
                      <li><p>Go through the Verification Center checklist</p></li>
                    </ul>
                    </div>
                    <div class="wt-title">
                    <h4>2. Select fields that suit your skills, expertise, price, and schedule</h4>
                    </div>
                    <div class="wt-description">
                    <p>We have research works available for all fields. Maximize your opportunities by optimizing your filters. Save your search and get alerted when relevant jobs are available.</p>
                    </div>
                    <div class="wt-title">
                    <h4>3. Write your best bid</h4>
                    </div>
                    <div class="wt-description">
                    <p>Put your best foot forward and write the best pitch possible. Read the project and let the clients knows you understand their brief. Tell them why you are the best person for the job. Writing a new brief for each project is more effective than using the same one!</p>
                    </div>
                    <div class="wt-title pb-3">
                    <h4>4. Negotiate on price, Get awarded, tell your client to create milestone of agreed amount.</h4>
                    </div>
                    <div class="wt-title pb-3">
                    <h4>5. Get ready to work once you get hired. Deliver high quality work and earn the agreed amount.</h4>
                    </div>
                    <div class="wt-title pb-3">
                    <h4>6. You can negotiate on modality for release of milestone. It could be in installment or at the end of the whole work.</h4>
                    </div>
                    <div class="wt-title pb-3">
                    <h4>7. Once milestone is released by your client, payment goes to your account.</h4>
                    </div>
                    <div class="wt-title pb-3">
                    <h4>8. Encourage clients to give testimony and rate you after end of work. This add to your profile and increases your chances and position in further bids.</h4>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="form-group pt-4">
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <a href="http://localhost/search-results?type=projects" class="form-control wt-hirebtn">Browse Projects</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                    <div class="wt-starthiringcontent">
                    <div class="wt-sectionhead wt-textcenter">
                    <div class="wt-sectiontitle">
                    <p>Requirements:</p>
                    Manage Your Resume
                    </div>
                    </div>
                    <div class="wt-accordionhold accordion">
                    <div id="headingOne3" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapseOne3"><h4>Excepteur sint occaecat cupidatat non proident?</h4></div>
                    <div id="collapseOne3" class="wt-accordiondetails collapse" aria-labelledby="headingOne3">
                    <div class="wt-description">
                    <p>1. Must possess at least a Degree in your field of specialization.</p>
                    <p>2. You must possess exceptional academic writing experience of not less than 2 years.</p>
                    <p>3. You must possess knowledge of various citation styles including but not limited to: MLA, APA. Harvard, Chicago, Turabian and AMA.</p>
                    <p>4. Government I.D. or Passport</p>
                    <p>5. We expect our writers to be available and reachable for prompt communication.</p>
                    <p>6. Deadlines must be met, otherwise fines will be applied and you may lose your writing privileges with us.</p>
                    <p>Qualified? Feel free to <a href="http://localhost/register">Sign up</a>&nbsp as an <em>Academic Writer.</em></p>
                    </div>
                    <div class="wt-likeunlike"></div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div id="faq" class="wt-contentarticle tab-pane fade">
                    <div class="row">
                    <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                    <div class="wt-starthiringcontent">
                    <div class="wt-sectionhead wt-textcenter">
                    <div class="wt-sectiontitle">
                    <p>Frequently Asked Questions</p>
                    Start Today For a Great Future
                    </div>
                    <div class="wt-description">
                    <p></p>
                    </div>
                    </div>
                    <ul class="wt-accordionhold accordion">
                    <li>
                    <div id="headingOnea" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapseOnea"><h4>What is Research Freelancer?</h4></div>
                    <div id="collapseOnea" class="wt-accordiondetails collapse" aria-labelledby="headingOne">
                    <div class="wt-description">
                    <p>Research Freelancer is an online platform that puts employers that needs research service in contact with a global network of professional writers/freelancers that will get the research work done. Employer can post a project and choose from skilled freelancers who offer bid proposals with rate quotes and time estimates for completing the research work. It is a mutually beneficial arrangement.</p>
                    <p><a href="/">ResearchFreelancer.com </a> provide a safe, simple, and affordable environment for cooperation between employers and freelancers around the world. Join our ever-increasing membership to maximize the earning potential of your business through employing, freelancing, or both! &nbsp &nbsp<a href="http://localhost/register">Join Now</a></p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingtwoa" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapsetwoa"><h4>What Services can I get from Research Freelancer?</h4></div>
                    <div id="collapsetwoa" class="wt-accordiondetails collapse" aria-labelledby="headingtwoa">
                    <div class="wt-description">
                    <p>Basically all forms of research work not limited to research thesis, research project, data analysis, seminar, term paper, assignment, business plan, feasibility report, proofreading, book review and all lots of research work</p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingthree" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapsethreea"><h4>I am an Employer, how will Research Freelancer work for me?</h4></div>
                    <div id="collapsethreea" class="wt-accordiondetails collapse" aria-labelledby="headingthree">
                    <div class="wt-description">
                    <p>You can gain a competitive advantage over your competition by tapping into a skilled global workforce researchers on demand.</p>
                    <p>The power of Research Freelancer is available to individuals and companies for research work that needs to be done, this is the place for you!</p>
                    <p>Thousands of skilled research writers are ready to start working right now! All you need to do is <a href="http://localhost/employer/dashboard/post-job">Post a Project!</a></p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingfour" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapsefour"><h4>I am a Writer, how will Research Freelancer work for me?</h4></div>
                    <div id="collapsefour" class="wt-accordiondetails collapse" aria-labelledby="headingfour">
                    <div class="wt-description">
                    <p>With Research Freelancer, you can work at home and tap into a global network of research jobs - the ultimate opportunity in job flexibility!</p>
                    <p>Work on what you want, when you want and where you want to! The lifestyle of a research freelancer is taking off. By working as a Freelancer/Writer online, you can greatly increase your client base and job throughput.</p>
                    <p>To start, all you need to do is <a href="http://localhost/register">Sign up</a>&nbsp and <a href="http://localhost/freelancer/dashboard/bidding">start bidding</a>. It is FREE!</p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingfive" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapsefive"><h4>What fees does Research Freelancer charge?</h4></div>
                    <div id="collapsefive" class="wt-accordiondetails collapse" aria-labelledby="headingfive">
                    <div class="wt-description">
                    <p>Please refer to our <a href="http://localhost/page/fees-and-charges">Fees & Charges.</a></p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingsix" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapsesix"><h4>How do I make payment?</h4></div>
                    <div id="collapsesix" class="wt-accordiondetails collapse" aria-labelledby="headingsix">
                    <div class="wt-description">
                    <p>We recommend the use of our <b>Milestone Payment System </b>in receiving payments for your projects. The <b>Milestone Payment System </b> is a special feature that allows controlled payments to be made for the awarded freelancer on a project. You can deposit funds to your <a href="/">ResearchFreelancer.com </a> account/wallet using Credit Card.</p>
                    </div>
                    <div class="wt-description">
                    <p>Employer’s payments are secure with <b>Milestone Payment System</b>, payments are released by employers when they are satisfied with the job.</p> 
                    <p>We highly advise freelancers to ask for a Milestone Payment first before doing any work on an accepted project. That way, you will be assured that the employer is willing to pay for your work.</p>
                    <p>When a freelancer requests for a Milestone Payment, the employer can create one by depositing the project funds for it. The funds will be held until the employer decides to release the Milestone Payment to the freelancer or until both parties have concluded the process of the <a href="http://localhost/page/dispute-resolution-policy">Dispute Resolution Service</a>.</p>
                    <p>Once an employer releases a Milestone Payment, the employer acknowledges that their awarded freelancer has completed the work fully and most satisfactorily.</p>
                    <p>If an employer does not approve work of the freelancer or the freelancer requests payment to an unwilling employer, the parties can access the Dispute Resolution Services.</p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingseven" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapseseven"><h4>Can I make/receive payments outside of ResearchFreelancer?</h4></div>
                    <div id="collapseseven" class="wt-accordiondetails collapse" aria-labelledby="headingseven">
                    <div class="wt-description">
                    <p>To ensure you have the best protection possible in the unlikely event of a dispute, keep your correspondences and payments within <a href="/">ResearchFreelancer.com</a>. We equip you with the <b>Milestone Payment System </b>where the <a href="http://localhost/page/dispute-resolution-policy">Dispute Resolution Service </a> is available, as well as a <b>messaging system </b> which includes text, voice, and attachment features, for efficient and secure project management within the site.</p>
                    </div>
                    <div class="wt-description">
                    <p>Milestone Payment give employers guarantee of getting satisfactory job before releasing fund to the writer. It also assures freelancers that the employer is willing to pay for the work.</p>
                    </div>
                    <div class="wt-description">
                    <p>There is no dispute for any failed transaction made off site other than the milestone payment.</p>
                    </div>
                    <div class="wt-description">
                    <p>If you encounter users trying to initiate offsite communication and/or payments, report them to us by scrolling down and clicking <a href="http://localhost/page/contact-us">Contact Us</a>. Choose the <a href="http://localhost/page/user-agreement">Terms and Conditions </a> issue category, select the chat or ticket option, and provide the following details:</p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingeight" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapseeight"><h4>How do I withdraw money from my account?</h4></div>
                    <div id="collapseeight" class="wt-accordiondetails collapse" aria-labelledby="headingeight">
                    <div class="wt-description">
                    <p>To withdraw money that you earned from the site, follow these steps:</p>
                    </div>
                    <div class="wt-description">
                    <p>1.Log in to your Freelancer.com account.</p>
                    <p>2.Select <a href="http://localhost/">Withdraw Funds.</a></p>
                    <p>3.Choose your preferred withdrawal method (some are not available in some countries). [Paypal, Bank Withdrawal, Flutterwave Wallet]</p>
                    <p>4.Fill out the details of the withdrawal which will be specific to the chosen method.</p>
                    <p>5.Click <a href="http://localhost/">Withdraw Funds.</a></p>
                    </div>
                    <div class="wt-description">
                    <p>You will receive an email notification for your submitted withdrawal request.</p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingnine" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapsenine"><h4>How do I rate and write a review for a Freelancer?</h4></div>
                    <div id="collapsenine" class="wt-accordiondetails collapse" aria-labelledby="headingnine">
                    <div class="wt-description">
                    <p>After a project is completed and the freelancer is paid the full amount of his or her winning bid, the feedback system for that project will become available. You will be automatically redirected to the feedback form once you mark your project as completed.</p>
                    </div>
                    <div class="wt-description">
                    <p>A notification will also be posted on the <a href="http://localhost/">News feed </a> section of your Dashboard page. Just click <a href="http://localhost/">Give Feedback </a> on the notification to leave your review and ratings for your freelancer.</p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingten" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapseten"><h4>How do I cancel a project if a Freelancer fails to complete my project?</h4></div>
                    <div id="collapseten" class="wt-accordiondetails collapse" aria-labelledby="headingten">
                    <div class="wt-description">
                    <p>Employers have the following options if their freelancer is unable to complete the work required.</p>
                    </div>
                    <div class="wt-description">
                    <p>1. Re-award the project</p>
                    <p>2. Cancel the project</p>
                    <p>3. Repost the project</p>
                    <p>4. Mark the project as Incomplete</p>
                    </div>
                    <div class="wt-description">
                    <p>Please note that <a href="/">ResearchFreelancer.com </a> recommends making every attempt to resolve any issues before submitting an Incomplete Report. If you find it necessary to leave this review, keep your comments at a professional level and refrain from derogatory statements.</p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingeleven" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapseeleven"><h4>What is the Dispute Resolution Service?</h4></div>
                    <div id="collapseeleven" class="wt-accordiondetails collapse" aria-labelledby="headingeleven">
                    <div class="wt-description">
                    <p>The <a href="http://localhost/page/dispute-resolution-policy">Dispute Resolution Service </a> is offered by <a href="/">ResearchFreelancer.com </a> to users who wish to contest the return or release of an existing Milestone Payment.</p>
                    </div>
                    <div class="wt-description">
                    <p>If an issue arises wherein you wish to negotiate the return or release of a Milestone Payment, you have the option to file a dispute.</p>
                    </div>
                    <div class="wt-description">
                    <p>In all circumstances, we still encourage users to resolve project issues or disputes between themselves rather than use this service. It is provided only as a last resort should parties be unable to reach an agreement.</p>
                    </div>
                    <div class="wt-description">
                    <p>For more information about the Dispute Resolution Service, please click <a href="http://localhost/page/dispute-resolution-policy">here.</a></p>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div id="headingtwelve" class="wt-accordiontitle wt-title collapsed" data-toggle="collapse" data-target="#collapsetwelve"><h4>How do I file a dispute on my project?</h4></div>
                    <div id="collapsetwelve" class="wt-accordiondetails collapse" aria-labelledby="headingtwelve">
                    <div class="wt-description">
                    <p>Any Freelancer.com user can file a dispute as long as their project has a related Milestone Payment.</p>
                    </div>
                    <div class="wt-description">
                    <p>To file a dispute, follow these steps:</p>
                    </div>
                    <div class="wt-description">
                    <p>1. Hover over <a href="http://localhost/">Help </a> and select <a href="{{{ route("/") }}}">Disputes.</a></p>
                    <p>2. On the Disputes page, click <a href="ttp://localhost/">Create New Dispute.</a></p>
                    <p>3. Select the project to dispute and the user.</p>
                    <p>4. Tick the Milestone Payment to dispute. (You can file a dispute for all Milestone Payments in a project.)</p>
                    <p>5. Describe your reason for the dispute in detail and attach any supporting evidence you may have.</p>
                    <p>6. Enter the amount you are prepared to pay (if an employer) or wish to receive (if a freelancer) from the disputed Milestone/s. The amount can be between 0 and the total amount of the disputed Milestone/s.</p>
                    </div>
                    <div class="wt-description">
                    <p>From Stages 1 to 3, you are encouraged to attach any files that could support your claims.</p>
                    </div>
                    <div class="wt-description">
                    <p>Once you file a dispute, the other party will be given a number of days (4 if the other party is a freelancer, 14 if the other party is an employer) to respond to the dispute. If the party does not respond within the given timeframe, the dispute will close in your favor.</p>
                    </div>
                    <div class="wt-description">
                    <p>For more information about the dispute process, please read this: <a href="http://localhost/page/dispute-resolution-policy">Milestone Dispute Resolution Policy.</a></p>
                    </div>
                    </div>
                    </li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 0,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Contact Us',
                    'slug' => 'contact-us',
                    'body' => '<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="wt-greeting-holder">
                    <div class="wt-greetingcontent">
                    <div class="wt-sectionhead">
                    <div class="wt-sectiontitle">
                    <h2>Research Freelancer</h2>
                    keep in contact</div>
                    <div class="wt-description">
                    <p>2-4, Akinsegun Street,</p>
                    <p>New Oko Oba,</p>
                    <p>Abule Egba, Lagos</p>
                    </div>
                    </div>
                    <div id="wt-statistics" class="wt-statistics">
                    <div class="wt-statisticcontent wt-countercolor1">
                    <h5>(+234)<b>08147801594</b></h5>
                    <h3>Mobile</h3>
                    </div>
                    <div class="wt-statisticcontent wt-countercolor2">
                    <h5>(+234)<b>08096221646</b></h5>
                    <h3>Phone</h3>
                    </div>
                    <div class="wt-statisticcontent wt-countercolor3">
                    <h5>info@<b>researchfreelancer.com</b></h5>
                    <h3>Email Address</h3>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'User Agreement',
                    'slug' => 'user-agreement',
                    'body' => '<div class="wt-twocolumns wt-haslayout">
                    <div class="form-group">
                    <div class="row">
                    <div class="wt-desc wt-textcenter">
                    <p class="wt-red">All communication and transmission of files and data (discursion, attachment) must be through ResearchFreelancer platform chat. Exchange of email, phone contact or any social media contact is not allowed. Defaulters will be fined and deregistered.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 float-left">
                    <aside id="wt-sidebar" class="wt-sidebar">
                    <div class="wt-widget wt-effectiveholder">
                    <div class="wt-widgettitle">
                    <h2>Table of Contents</h2>
                    </div>
                    <div class="wt-widgetcontent">
                    <ul class="wt-effectivecontent">
                    <li><a>Overview</a></li>
                    <li><a>Scope</a></li>
                    <li><a>Eligibility</a></li>
                    <li><a>Using Research Freelancer</a></li>
                    <li><a>Intellectual Property Rights Infringement</a></li>
                    <li><a>Fees and Services</a></li>
                    <li><a>Promotion</a></li>
                    <li><a>Content</a></li>
                    <li><a>Feedback, Reputation and Reviews</a></li>
                    <li><a>Advertising</a></li>
                    <li><a>Communication With Other Users</a></li>
                    <li><a>Identity / Know Your Customer</a></li>
                    <li><a>User Services</a></li>
                    <li><a>Special Provisions for Local Jobs</a></li>
                    <li><a>Limits & Fraud Prevention</a></li>
                    <li><a>Refunds</a></li>
                    <li><a>Chargebacks</a></li>
                    <li><a>Milestone Payments</a></li>
                    <li><a>Currencies</a></li>
                    <li><a>Survival and Release</a></li>
                    <li><a>Access and Interference</a></li>
                    <li><a>Closing Your Account</a></li>
                    <li><a>Privacy</a></li>
                    <li><a>Indemnity</a></li>
                    <li><a>Security</a></li>
                    <li><a>No Warranty as to Each User`s Purported Identity</a></li>
                    <li><a>No Warranty as to Content</a></li>
                    <li><a>Limitation of Liability</a></li>
                    <li><a>Legal Limitations</a></li>
                    <li><a>Notices</a></li>
                    <li><a>Severability</a></li>
                    <li><a>Interpretation</a></li>
                    <li><a>No Waiver</a></li>
                    <li><a>Communications</a></li>
                    <li><a>Additional Terms</a></li>
                    <li><a>General</a></li>
                    <li><a>Abusing Freelancer</a></li>
                    <li><a>Feedback</a></li>
                    </ul>
                    </div>
                    </div>
                    </aside>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-9 float-left">
                    <div class="wt-submitreportholder wt-bgwhite">
                    <div class="wt-titlebar">
                    <h2 class="wt-chocolate">User Agreement</h2>
                    </div>
                    <div class="wt-reportdescription">
                    <div class="wt-description wt-black">
                    <p>This User Agreement describes the terms and conditions which you accept by using our Website or our Services. We have incorporated by reference some linked information.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <h3>In this User Agreement:</h3>
                    </div>
                    <div class="wt-description">
                    <p><b class="wt-desc">"Client" </b> means users that wish to hire a writer.</p>
                    <p><b class="wt-desc">"Dispute Resolution Process" </b> means the process to be followed by Clients and Writers in accordance with the Dispute Resolution Services.</p>
                    <p><b class="wt-desc">"Freelancer"</b>, means our professional writers</p>
                    <p><b class="wt-desc">"Inactive Account" </b> means a User Account that has not been logged into for a 6 month period, or other period determined by us from time to time.</p>
                    <p><b class="wt-desc">"Intellectual Property Rights" </b> means any and all intellectual property rights, existing worldwide and the subject matter of such rights, including: (a) patents, copyright, rights in circuit layouts (or similar rights), registered designs, registered and unregistered trademarks, and any right to have confidential information kept confidential; and (b) any application or right to apply for registration of any of the rights referred to in paragraph (a), whether or not such rights are registered or capable of being registered and whether existing under any laws, at common law or in equity.</p>
                    <p><b class="wt-desc">"Local Job" </b> or <b class="wt-desc"> "Local Jobs" </b> means a service we provide to match a Client with a Writer in relation to the provision of location specific services.</p>
                    <p><b class="wt-desc">"Milestone Payment" </b> means a payment made by the Client for the provision of Writer Services under a User Contract and which will be released in accordance with the section "Milestone Payments" of these terms and conditions.</p>
                    <p><b class="wt-desc">"Project" </b> means a job offered or awarded by a Client via the Website, which may include Thesis writing, Research Project, Seminar, Journal, Article, Report, etc awarded by a Client to a Writer</p>
                    <p><b class="wt-desc">"Freelancer Services"</b> means all services provided by us to you.</p>
                    <p><b class="wt-desc">"User"</b>, <b class="wt-desc"> "you" </b> or <b class="wt-desc"> "your" </b> means an individual who visits or uses the Website.</p>
                    <p><b class="wt-desc">"User Contract" </b> means: (1) this User Agreement; (2) the Code of Conduct as amended from time to time; (3) any other contractual provisions accepted by both the Client and Writer uploaded to the Website, to the extent not inconsistent with the User Agreement and the <a href="http://localhost/page/code-conduct"> Code of Conduct</a>; (4) the Project terms as awarded and accepted on the Website, to the extent not inconsistent with the User Agreement and the Code of Conduct; and (5) any other material incorporated by reference from time to time.</p>
                    <p><b class="wt-desc">"Website" </b> means the Websites operated by Research Freelancer and available at: <a href="/"> ResearchFreelancer.com </a> and any of its regional or other domains or properties, and any related Freelancer service, tool or application, specifically including mobile web, any iOS App and any Android App, or API or other access mechanism.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>1. Overview</p>
                    </div>
                    <div class="wt-description">
                    <p>By accessing the Website, you agree to the following terms with Research Freelancer.</p>
                    <p>We may amend this User Agreement and any linked information from time to time by posting amended terms on the Website, without notice to you.</p>
                    <p>The Website is an online venue where Clients posts their projects and Writers bid for same. Clients and Writers must register for an Account in order to posts projects or bid projects. The Website enables Users to work together online to complete and pay for Projects, and to use the services that we provide. We are not a party to any contractual agreements between Client and Writer in the online venue, we merely facilitate connections between the parties.</p>
                    <p>We may, from time to time, and without notice, change or add to the Website or the information, products or services described in it. However, we do not undertake to keep the Website updated. We are not liable to you or anyone else if any error occurs in the information on the Website or if that information is not current.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>2. Scope</p>
                    </div>
                    <div class="wt-description">
                    <p>Before using the Website, you must read the whole User Agreement, the Website policies and all linked information.</p>
                    <p>You must read and accept all of the terms in, and linked to, this User Agreement, the <a href="http://localhost/page/code-conduct"> Code of Conduct</a>, the <a href="http://localhost/page/privacy-policy"> Privacy Policy </a> and all Website policies. By accepting this <a href="http://localhost/page/user-agreement"> User Agreement </a> as you access our Website, you agree that this User Agreement will apply whenever you use the Website, or when you use the tools we make available to interact with the Website. Some Websites may have additional or other terms that we provide to you when you use those services.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>3. Eligibility</p>
                    </div>
                    <div class="wt-description">
                    <p>You will not use the Website if you:</p>
                    <ul class="wt-accordiontitle">
                    <li>Are not able to form legally binding contracts;</li>
                    <li>Are under the age of 16;</li>
                    <li>A person barred from receiving and rendering services under the laws of your country or other applicable jurisdiction;</li>
                    <li>Are suspended from using the Website; or</li>
                    <li>Do not hold a valid email address.</li>
                    </ul>
                    <p>Login credentials should not be shared by users with others. The individual associated with the account will be held responsible for all actions taken by the account, without limitation.</p>
                    <p>Subject to your local laws, a person over 15 but under 18 can use an adult`s account with the permission of the account holder. However, the account holder is responsible for all actions taken by the account, without limitation.</p>
                    <p>Users may provide a business name or a company name, which is associated with the User`s Account. Users acknowledge and agree that where a business name or company name is associated with their Account, this User Agreement is a contract with the User as an individual (not the business or company) and Users remain solely responsible for all activity undertaken in respect of their Account.</p>
                    <p>A company, corporation, trust, partnership or other non-individual corporate entity may be a User subject to an eligible corporate account.</p>
                    <p>We may, at our absolute discretion, refuse to register any person or entity as a User.</p>
                    <p>You cannot transfer or assign any rights or obligations you have under this agreement without prior written consent.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>4. Using Research Freelancer</p>
                    </div>
                    <div class="wt-description">
                    <p>While using the Website, you will not attempt to or otherwise do any of the following:</p>
                    <ul class="wt-accordiontitle">
                    <li>Post content or items in inappropriate categories or areas on our Websites and services;</li>
                    <li>Infringe any laws, third party rights or our policies, such as the <a href="http://localhost/page/code-conduct"> Code of Conduct</a>;</li>
                    <li>Fail to deliver payment for services delivered to you;</li>
                    <li>Fail to deliver services purchased from you;</li>
                    <li>Circumvent or manipulate our fee structure, the billing process, or fees owed to Writer;</li>
                    <li>Post false, inaccurate, misleading, deceptive, defamatory or offensive content (including personal information);</li>
                    <li>Take any action that may undermine the feedback or reputation systems (such as displaying, importing or exporting feedback information or using it for purposes unrelated to the Website);</li>
                    <li>Transfer your account (including feedback) and Username to another party without our consent;</li>
                    <li>Distribute or post spam, unsolicited, or bulk electronic communications, chain letters, or pyramid schemes;</li>
                    <li>distribute viruses or any other technologies that may harm Users, the Website, or the interests or property of Research Freelancer users (including their Intellectual Property Rights, privacy and publicity rights) or is unlawful, threatening, abusive, defamatory, invasive of privacy, vulgar, obscene, profane or which may harass or cause distress or inconvenience to, or incite hatred of, any person;</li>
                    <li>Download and aggregate listings from our website for display with listings from other websites without our express written permission, "frame", "mirror" or otherwise incorporate any part of the Website into any other website without our prior written authorisation;</li>
                    <li>Attempt to modify, translate, adapt, edit, decompile, disassemble, or reverse engineer any software programs used by us in connection with the Website;</li>
                    <li>Copy, modify or distribute rights or content from the Website or Research Freelancer`s copyrights and trademarks; or</li>
                    <li>Harvest or otherwise collect information about Users, including email addresses, without their consent.</li>
                    </ul>
                    <p></p>
                    </div>
                    <div class="wt-sectiontitle pt-4">
                    <p>5. Intellectual Property Rights Infringement</p>
                    </div>
                    <div class="wt-description">
                    <p>It is our policy to respond to clear notices of alleged intellectual property rights infringement. Our Copyright Infringement Policy is designed to make submitting notices of alleged infringement to us as straightforward as possible while reducing the number of notices that we receive that are fraudulent or difficult to understand or verify.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>6. Fees and Services</p>
                    </div>
                    <div class="wt-description">
                    <p>When you use a service that has a fee, you have an opportunity to review and accept the fees that you will be charged based on our schedule of <a href="http://localhost/page/fees-and-charges"> Fees and Charges</a>, which we may change from time to time and will update by placing on our Website. We may choose to temporarily change the fees for our services for promotional events (for example, discounts on memberships) or new services, and such changes are effective when we post a temporary promotional event or new service on the Websites, or as notified through promotional correspondence.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>7. Promotion</p>
                    </div>
                    <div class="wt-description">
                    <p>We may display your company or business name, logo, images or other media as part of the Freelancer Services and/or other marketing materials relating to the Website, except where you have explicitly requested that we do not do this and we have agreed to such a request in writing.</p>
                    <p>You acknowledge that we may use the public description of your Projects and the content of your profile information on the Website for marketing and other related purposes.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>8. Content</p>
                    </div>
                    <div class="wt-description">
                    <p>When you give us content, you grant us a worldwide, perpetual, irrevocable, royalty-free, sublicensable (through multiple tiers) right to exercise any and all copyright, trademark, publicity, and database rights (but no other rights) you have in the content, in any media known now or in the future.</p>
                    <p>You acknowledge and agree that: (1) we act only as a forum for the online distribution and publication of User content. We make no warranty that User content is made available on the Website. We have the right (but not the obligation) to take any action deemed appropriate by us with respect to your User content; (2) we have no responsibility or liability for the deletion or failure to store any content, whether or not the content was actually made available on the Website; and (3) any and all content submitted to the Website is subject to our approval. We may reject, approve or modify your User content at our sole discretion.</p>
                    <p>You represent and warrant that your content:</p>
                    <ul class="wt-accordiontitle">
                    <li>will not infringe upon or misappropriate any copyright, patent, trademark, trade secret, or other intellectual property right or proprietary right or right of publicity or privacy of any person;</li>
                    <li>will not violate any law or regulation;</li>
                    <li>will not be defamatory or trade libelous;</li>
                    <li>will not be obscene or contain child pornography;</li>
                    <li>will not contain material linked to terrorist activities</li>
                    <li>will not include incomplete, false or inaccurate information about User or any other individual; and</li>
                    <li>Will not contain any viruses or other computer programming routines that are intended to damage, detrimentally interfere with, surreptitiously intercept or expropriate any system, data or personal information.</li>
                    <li>Do not hold a valid email address.</li>
                    <li>Do not hold a valid email address.</li>
                    </ul>
                    <p>You acknowledge and agree that we may transfer your personal information to a related body corporate and your information may be transferred outside of your country. If you wish to withdraw your consent, you acknowledge and agree that we may be unable to provide you with access to the Website and Services and may close your Account.</p>
                    <p>Information on the Website may contain general information about legal, financial, health and other matters. The information is not advice, and should not be treated as such. You must not rely on the information on the Website as an alternative to professional advice. If you have specific questions about any matter you should consult your professional adviser.</p>
                    <p>We provide unmonitored access to third party content, including User feedback and articles with original content and opinions (or links to such third party content). We only act as a portal and have no liability based on, or related to, third party content on the Website, whether arising under the laws of copyright or other intellectual property, defamation, libel, privacy, obscenity, or any other legal discipline.</p>
                    <p>The Website may contain links to other third party websites. We do not control the websites to which we link from the Website. We do not endorse the content, products, services, practices, policies or performance of the websites we link to from the Website. Use of third party content, links to third party content and/or websites is at your risk.</p>
                    <p>In relation to deletion or hiding of any information or content, using the Website to delete, hide or otherwise dispose of information does not imply permanent deletion of content or information. Information may be retained for a period of time to fulfil record keeping, regulatory, compliance, statistical, law enforcement and other obligations.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>9. Feedback, Reputation and Reviews</p>
                    </div>
                    <div class="wt-description">
                    <p>You acknowledge that you transfer copyright of any feedback, reputation or reviews you leave consisting of comments and any rating(s) (e.g. quality, communication etc.) together with any composite rating by us. You acknowledge that such feedback, reputation and reviews belong solely to us, notwithstanding that we permit you to use it on our Website while you remain a User. You must not use, or deal with such feedback, reputation and reviews in any way inconsistent with our policies as posted on the Website from time to time without our prior written permission.</p>
                    <p>You may not do (or omit to do) anything that may undermine the integrity of the feedback system. We are entitled to suspend or terminate your Account at any time if we, in our sole and absolute discretion, are concerned by any feedback about you, or your feedback rating, where we believe our feedback system may be subverted.</p>
                    <p>Our feedback ratings belong to us and may not be used for any purpose other than facilitating the provision of Writer Services via the Website. You may not use your Client or Writer feedback (including, but not limited to, marketing or exporting any or all of your composite rating(s) or feedback comments) in any real or virtual venue other than a website operated by Research Freelancer or its related entities, without our written permission.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>10. Advertising</p>
                    </div>
                    <div class="wt-description">
                    <p>Unless otherwise agreed with us, you must not advertise an external website, product or service on the Website. Any website address posted on the Website, including in a listing, bid, listing description, clarification board or the message board, must relate to a Project, Contest, item listed, user or service being performed on the Website.</p>
                    <p>We may display advertisements or promotions on the Website. You acknowledge and agree that we shall not be responsible for any loss or damage of any kind incurred by you as a result of the presence of such advertisements or promotions or any subsequent dealings with third parties. Furthermore, you acknowledge and agree that content of any advertisements or promotions may be protected by copyrights, trademarks, service marks, patents or other intellectual property or proprietary rights and laws. Unless expressly authorised by Research Freelancer or third party right holders, you agree not to modify, sell, distribute, appropriate or create derivative works based on such advertisement/promotions.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>11. Communication With Other Users</p>
                    </div>
                    <div class="wt-description">
                    <p>Communication with other users on the Website must be conducted through the text and attachment chat functionality, along with message boards, public clarification boards, Project message board, direct message sending and other communication channels provided on the Website.</p>
                    <p>You must not post your email address or any other contact information (including but not limited to Skype ID or other identifying strings on other platforms) on the Website, except in the "email" field of the signup form, at our request or as otherwise permitted by us on the Website.</p>
                    <p>Unless you have a prior relationship with a User, you must only communicate with Users via the Website. You must not, and must not attempt to, communicate with other Users through any other means including but not limited to email, telephone, Skype, ICQ, AIM, MSN Messenger, WeChat, SnapChat, GTalk, GChat or Yahoo.</p>
                    <p>In relation to video chat and audio chat, any terms agreed to between any Users must be confirmed in writing using the chat or direct message function.</p>
                    <p>Research Freelancer may use information such as your name, location, display or username, and or your image, in relation to the provision messaging services on the Website.</p>
                    <p>We may read all correspondence posted to the Website and download or access, and test (if necessary), all uploaded files, programs and websites related to your use of the Website for the purpose of investigating fraud, regulatory compliance, risk management and other related purposes.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>12. Identity / Know Your Customer</p>
                    </div>
                    <div class="wt-description">
                    <p>You authorise us, directly or through third parties, to make any inquiries we consider necessary to validate your identity. You must, at our request: (1) provide further information to us, which may include your date of birth and or other information that will allow us to reasonably identify you; (2) take steps to confirm ownership of your email address or financial instruments; or (3) verify your information against third party databases or through other sources.</p>
                    <p>You must also, at our request, provide copies of identification documents (such as your passport or drivers` licence). We may also ask you to provide photographic identification holding a sign with a code that we provide as an additional identity verification step.</p>
                    <p>We reserve the right to close, suspend, or limit access to your Account, the Website and/or Research Freelancer Services in the event we are unable to obtain or verify to our satisfaction the information which we request under this section.</p>
                    <p>We reserve the right to update your particulars on the website in order to match any KYC documentation that has been provided. Disbursements such as wire transfers from the website may only be made to the beneficiary matching your provided KYC documents and account information.</p>
                    <p>If you are not Freelancer verified you may not be able to withdraw funds from your Research Freelancer account, and other restrictions may apply.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>13. User Services</p>
                    </div>
                    <div class="wt-description">
                    <p>Upon the Client awarding a Project to the Writer, and the Writer`s acceptance on the Website, the Client and Writer will be deemed to have entered into a User Contract under which the Client agrees to pay, and the Writer agrees to deliver the Services. You agree not to enter into any contractual provisions in conflict with the User Agreement.</p>
                    <p>You are solely responsible for ensuring that you comply with your obligations to other Users. If you do not, you may become liable to that User. You must ensure that you are aware of any domestic laws (including common law), international laws, statutes, ordinances and regulations relevant to you as a Client or Writer, or in any other uses you make of the Website.</p>
                    <p>If another User breaches any obligation to you, you are solely responsible for enforcing any rights that you may have. For the avoidance of doubt, we have no responsibility for enforcing any rights under a User Contract.</p>
                    <p>Depending on their jurisdiction, Clients and Writers may have rights under statutory warranties that cannot lawfully be excluded. Nothing in this User Agreement is intended to override a right that by applicable law may not be excluded. Nothing in this User Agreement is intended to violate any laws relating to unfair contracts, and this agreement has been specifically redrafted to ensure compliance with unfair contracts legislation. To the extent that any component of this User Agreement is in conflict with inalienable rights under local laws, all parties intend for this agreement to be read down only insofar as to be in compliance with such local laws and no further.</p>
                    <p>Each User acknowledges and agrees that the relationship between Clients and Writers is that of an independent contractor. Nothing in this User Agreement creates a partnership, joint venture, agency or employment relationship between Users. Nothing in this User Agreement shall in any way be construed as forming a joint venture, partnership or an employer-employee relationship between Research Freelancer and any User.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>14. Special Provisions for Local Jobs</p>
                    </div>
                    <div class="wt-description">
                    <p>Each User acknowledges:</p>
                    <ul class="wt-accordiontitle">
                    <li>Research Freelancer does not review, approve, recommend or verify any of the credentials, licenses or statements of capability in relation to Local Jobs (or, for the avoidance of doubt, any non Local Jobs on the Website);</li>
                    <li>Research Freelancer provides matchmaking and platform services only. Users agree that Research Freelancer has no liability for any other aspect of service delivery or interaction between Clients and Writers. Research Freelancer is not a party to any disputes between Clients and Writers, although we provide a dispute resolution mechanism to assist the parties in resolving issues;</li>
                    <li>Research Freelancer may from time to time include map features and Research Freelancer may display the location of Users to persons browsing the Website on that map. Every client seeking services for Local Jobs will be asked to provide the location where the Local Job is to be performed. You expressly agree that Research Freelancer has no liability for displaying such information.</li>
                    <li>A User must never disclose, in any Project posted, personal details such as the User`s name, street number, phone number or the email address in any Project description for a Local Job or in any other public communication on the Website (these may be disclosed for Local Jobs as required in private direct messages);</li>
                    <li>Research Freelancer may collect location related data from you via technologies including but not limited to GPS, IP address location, wifi, and other methods. This data may be shared in the context of facilitating services for Local Jobs and each User specifically consents to this collection and sharing as part of this agreement;</li>
                    <li>Our fees are applied to the amount of the awarded Writer`s bid to perform the services for the Local Job.</li>
                    </ul>
                    </div>
                    <div class="wt-sectiontitle pt-4">
                    <p>15. Limits & Fraud Prevention</p>
                    </div>
                    <div class="wt-description">
                    <p>We reserve the right to suspend a User withdrawal request if the source of the funds is suspected to be fraudulent.</p>
                    <p>If we become aware that any funds received into an Account from another Account as a result of a fraudulent transaction, this will be reversed immediately. If those funds have already been released to you, you must pay the funds into your Account. If you do not do so, we may suspend, limit or cancel your account, or take action against you to recover those funds.</p>
                    <p>We may, in our sole discretion, place a limit on any or all of the funds in your Account (thereby preventing any use of the funds) if:</p>
                    <ul class="wt-accordiontitle">
                    <li>we believe there may be an unacceptable level of risk associated with you, your Account, or any or all of your transactions, including if we believe that there is a risk that such funds will be subject to reversal or chargeback;</li>
                    <li>we believe that the beneficiary of the payment is someone other than you;</li>
                    <li>we believe that the payment is being made to a country where we do not offer our Service; or</li>
                    <li>we are required to do so by law or applicable law enforcement agencies.</li>
                    </ul>
                    <p>If you are involved in a dispute, we may (in certain circumstances) place a temporary limit on the funds in your Account to cover the amount of any potential liability. If the dispute is resolved in your favour, we will lift the limit on your funds and those funds may be released to you. If the dispute is not resolved in your favour, we may remove the funds from your Account. We may also place a limit on your account in circumstances where we suspect you of fraudulent or other unacceptable behaviour, while we investigate any such matter.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>16. Refunds</p>
                    </div>
                    <div class="wt-description">
                    <p>You may ask for a refund at any time for any funds that you have paid into your Account except if the amount to refund relates to a Milestone Payment or relates to fees or charges payable to us.</p>
                    <p>If the amount the User has asked to refund relates to: (1) a Milestone Payment, the Dispute Resolution Process may be followed; or (2) our fees and charges, the process set out must be followed.</p>
                    <p>If we agree to the refund, the funds will be received by the User via the same payment method(s) that the User used to make the original payment to us.</p>
                    <p>We may refund funds to Users irrespective of whether a User has requested funds be refunded if: (1) we are required by law or consider that we are required by law to do so; (2) we determine that refunding funds to the User will avoid any dispute or an increase in our costs; (3) we refund funds to the User in accordance with any refund policy specified by us from time to time; (4) we find out that the original payment made by the User is fraudulent; (5) the User made a duplicate payment in error; or (6) we consider, in our sole opinion, that it is likely that the refund of funds is necessary to avoid a credit card chargeback.</p>
                    <p>Once you have made a milestone payment, you expressly agree to use the dispute resolution process in this agreement, expressly agree to be bound by its ruling and expressly agree not to initiate any chargeback request with your card issuer.</p>
                    <p>If you initiate any chargeback request or other "Request for Information" or similar process, you expressly agree and consent to us to share any and all information in relation to your agreement of these terms and conditions, in order to defeat any such chargeback request.</p>
                    <p>If you have already initiated a chargeback request with your credit card issuer, you must not request a refund of funds by contacting us and must not seek double recovery.</p>
                    <p>If we reasonably determine, having considered all the relevant circumstances, that you have made an excessive or unreasonable number of requests to refund funds back to you or chargebacks, we may suspend, limit or close your Account.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>17. Chargebacks</p>
                    </div>
                    <div class="wt-description">
                    <p>A chargeback (being a challenge to a payment that a User files with their card issuer or financial institution), and any subsequent reversal instruction, is made by the payment product issuer or third parties (such as payment processors) and not by us. We are bound to follow such instructions.</p>
                    <p>You acknowledge and agree that we will be entitled to recover any chargebacks and reversals that may be imposed on us by a payment product issuer or third parties (such as payment processors) on funds paid to you by Clients through the Website, as well as any processing or any other fees whatsoever incurred by us on those chargebacks and reversals.</p>
                    <p>You agree that we may reverse any such payments made to you, which are subject to chargeback or reversal instruction via your payment product issuer or third parties (such as payment processors). If you initiate any chargeback request or other "Request for Information" or similar process, you expressly agree and consent to us to share any and all information in relation to your agreement of these terms and conditions, in order to defeat any such chargeback request.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>18. Milestone Payments</p>
                    </div>
                    <div class="wt-description">
                    <p>Subject to the User Contract, the Client can make a Milestone Payment, which will be locked from the Client`s Account and cannot be claimed by the Writer until:</p>
                    <ul class="wt-accordiontitle">
                    <li>the Client and Writer agree that the funds can be claimed by the Writer;</li>
                    <li>if there is a dispute, the Client and Writer have concluded the Dispute Resolution Process and the Dispute is resolved in the Writer`s favour;</li>
                    <li>the Client instructs us to pay a Writer for services performed by the Writer in respect of a Project; or</li>
                    <li>the Client acknowledges that the Writer has completed the services fully and satisfactory.</li>
                    </ul>
                    <p>If a Client does not approve of the Writer`s work, the parties may elect to resolve the issue under the Dispute Resolution Process.</p>
                    <p>If we have not received any instructions or dispute from a Client and Writer in respect of a Milestone Payment within six months or any other reasonable length of time after the day that the Milestone Payment was paid and the Client has not logged into their Account during that time, the Milestone Payment will be unlocked and released back to the Client.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>19. Currencies</p>
                    </div>
                    <div class="wt-description">
                    <p>Some of the Websites will display rates in the local currency of that Website, in addition to the actual amount. These rates are based on a conversion from the originating currency using indicative market exchange rates. You understand and agree that these rates are only indicative and the amount specified in the origin currency is the actual amount.</p>
                    <p>As a convenience service, you may withdraw funds from the Website in another currency. If you wish to do so, you will be quoted an exchange rate which will be available for the time specified, which you may choose to accept. We may charge a fee for effecting the currency conversion transactions. This fee will be embedded within the rate provided to you and the currency exchange will be settled immediately.</p>
                    <p>We reserve the right to reject any request for a conversion of currency at any time.</p>
                    <p>You are responsible for all risks associated with converting and maintaining funds in various available currencies, including but not limited to the risk that the value of these funds will fluctuate as exchange rates change, which could result in decreases in the value of your funds in aggregate. You must not use (or attempt to use) the Website to engage in speculative trading, which could result in substantial losses. We are not a financial services provider.</p>
                    <p>All information included on the Website in respect of currency conversion is general information only. Use of currency conversion is at your own risk. Currency conversions are final and irreversible.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>20. Survival and Release</p>
                    </div>
                    <div class="wt-description">
                    <p>This agreement supersedes any other agreement between you and the Company. If any part of this document is found to be unenforceable, that part will be limited to the minimum extent necessary so that this document will otherwise remain in full force and effect. Our failure to enforce any part of this document is not a waiver of any of our rights to later enforce that or any other part of this documents. We may assign any of our rights and obligations under this document from time to time.</p>
                    <p>If there is a dispute between participants on this site, or between users and any third party, you agree that the Company is under no obligation to become involved. In the event that you have a dispute with one or more other users, you release the Company, its officers, employees, agents, and successors from claims, demands, and damages of every kind or nature, known or unknown, suspected or unsuspected, disclosed or undisclosed, arising out of or in any way related to such disputes and/or our Services.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>21. Access and Interference</p>
                    </div>
                    <div class="wt-description">
                    <p>You agree that you will not use any robot, spider, scraper or other automated means to access the Website via any means, including for the avoidance of doubt access to our API or application programming interface, for any purpose without our express written permission.</p>
                    <p>Additionally, you agree that you will not:</p>
                    <ul class="wt-accordiontitle">
                    <li>take any action that imposes or may impose (in our sole discretion, exercised reasonably) an unreasonable or disproportionately large load on our infrastructure;</li>
                    <li>interfere with, damage, manipulate, disrupt, disable, modify, overburden, or impair any device, software system or network connected to or used (by you or us) in relation to the Website or your Account, or assist any other person to do any of these things, or take any action that imposes, or may impose, in our discretion, an unreasonable or disproportionately large load on our infrastructure;</li>
                    <li>copy, reproduce, modify, create derivative works from, distribute, or publicly display any content (except for your information) from the websites without the prior express written permission of Writer and the appropriate third party, as applicable;</li>
                    <li>interfere or attempt to interfere with the proper working of the Websites, services or tools, or any activities conducted on or with the Websites, services or tools; or</li>
                    <li>bypass our robot exclusion headers or other measures we may use to prevent or restrict access to the Website.</li>
                    </ul>
                    </div>
                    <div class="wt-sectiontitle pt-4">
                    <p>22. Closing Your Account</p>
                    </div>
                    <div class="wt-description">
                    <p>You may close your Account at any time. Account closure is subject to:</p>
                    <ul class="wt-accordiontitle">
                    <li>not having any outstanding listings on the Website;</li>
                    <li>resolving any outstanding matters (such as a suspension or restriction on your Account); and</li>
                    <li>paying any outstanding fees or amounts owing on the Account.</li>
                    </ul>
                    <p>We may retain some of your personal information to satisfy regulatory requirements and our own external obligations. Closing your account does not necessarily delete or remove all of the information we hold.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>23. Privacy</p>
                    </div>
                    <div class="wt-description">
                    <p>We use your information as described in the Research Freelancer <a href="http://localhost/page/privacy-policy"> Privacy Policy</a>. If you object to your information being transferred or used in this way then you must not use our services. For the avoidance of doubt, your name and personal details shall be used for identity purposes in the normal course of conducting business in this online marketplace. This may include on invoices and purchase orders including but not limited to between transacting parties, including those automatically generated on awarding, accepting and payment.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>24. Indemnity</p>
                    </div>
                    <div class="wt-description">
                    <p>You will indemnify us (and our officers, directors, agents, subsidiaries, joint venturers and employees) against any claim or demand, including legal fees and costs, made against us by any third party due to or arising out of your breach of this Agreement, or your infringement of any law or the rights of a third party in the course of using the Website and our Services.</p>
                    <p>In addition, we can apply any funds in your Account against any liabilities you owe to us or loss suffered by us as a result of your non-performance or breach of this User Agreement.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>25. Security</p>
                    </div>
                    <div class="wt-description">
                    <p>You must immediately notify us upon becoming aware of any unauthorised access or any other security breach to the Website, your Account or our Services and do everything possible to mitigate the unauthorised access or security breach (including preserving evidence and notifying appropriate authorities). Your User Account is yours only, and you must not share your password with others. </p>
                    <p>You are solely responsible for securing your password. We will not be liable for any loss or damage arising from unauthorised access of your account resulting from your failure to secure your password.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>26. No Warranty as to Each User`s Purported Identity</p>
                    </div>
                    <div class="wt-description">
                    <p>We cannot and do not confirm each User`s purported identity on the Website. We may provide information about a User, such as a strength or risk score, geographical location, or third party background check or verification of identity or credentials. However, such information is based solely on data that a User submits and we provide such information solely for the convenience of Users and the provision of such information is not an introduction, endorsement or recommendation by us.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>27. No Warranty as to Content</p>
                    </div>
                    <div class="wt-description">
                    <p>The Website is a dynamic time-sensitive Website. As such, information on the Website will change frequently. It is possible that some information could be considered offensive, harmful, inaccurate or misleading or mislabelled or deceptively labelled accidentally by us or accidentally or purposefully by a third party.</p>
                    <p>Our Services, the Website and all content on it are provided on an `as is`, `with all faults` and `as available` basis and without warranties of any kind either express or implied. Without limiting the foregoing, we make no representation or warranty about:</p>
                    <ul class="wt-accordiontitle">
                    <li>1.the Website or any Writer Services or Research Freelancer Services;</li>
                    <li>2.the accuracy, reliability, availability, veracity, timeliness or content of the Website or any Writer Services or Research Freelancer Services;</li>
                    <li>3.whether the Website or Writer Services or Research Freelancer Services will be up-to-date, uninterrupted, secure, error-free or non-misleading;</li>
                    <li>4.whether defects in the Website will be corrected;</li>
                    <li>5.whether the Website, the Writer Services or the Research Freelancer Services or any data, content or material will be backed up or whether business continuity arrangements are in place in respect of the Website, Writer Services or Research Freelancer Services;</li>
                    <li>6.any third party agreements or any guarantee of business gained by you through the Website, Writer Services or Research Freelancer Services or us; or</li>
                    <li>7.the Website, Writer Services or Research Freelancer Services or infrastructure on which they are based, being error or malicious code free, secure, confidential or performing at any particular standard or having any particular function.</li>
                    </ul>
                    <p>To every extent permitted by law, we specifically disclaim any implied warranties of title, merchantability, fitness for a particular purpose, quality, suitability and non-infringement.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>28. Limitation of Liability</p>
                    </div>
                    <div class="wt-description">
                    <p>In no event shall we, our related entities, our affiliates or staff be liable, whether in contract, warranty, tort (including negligence), or any other form of liability, for:</p>
                    <ul class="wt-accordiontitle">
                    <li>any indirect, special, incidental or consequential damages that may be incurred by you;</li>
                    <li>any loss of income, business or profits (whether direct or indirect) that may be incurred by you;</li>
                    <li>any claim, damage, or loss which may be incurred by you as a result of any of your transactions involving the Website.</li>
                    </ul>
                    <p>The limitations on our liability to you above shall apply whether or not we, our related entities, our affiliates or staff have been advised of the possibility of such losses or damages arising.</p>
                    <p>Notwithstanding the above provisions, nothing in this User Agreement is intended to limit or exclude any liability on the part of us and our affiliates and related entities where and to the extent that applicable law prohibits such exclusion or limitation.</p>
                    <p>To the extent that we are able to limit the remedies available under this User Agreement, we expressly limit our liability for breach of a non-excludable condition or warranty implied by virtue of any legislation to the following remedies (the choice of which is to be at our sole discretion) to the supply of the Research Freelancer services again or the payment of the cost of having the Research Freelancer services supplied again.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>29. Legal Limitations</p>
                    </div>
                    <div class="wt-description">
                    <p>As some jurisdictions do not allow some of the exclusions or limitations as established above, some of these exclusions or limitations may not apply to you. In that event, the liability will be limited as far as legally possible under the applicable legislation. We may plead this User Agreement in bar to any claim, action, proceeding or suit brought by you, against us for any matter arising out of any transaction or otherwise in respect of this User Agreement.</p>
                    <p>You and we agree that you and we will only be permitted to bring claims against the other only on an individual basis and not as a plaintiff or class member in any purported class or representative action or proceeding. Unless both you and we agree otherwise, the arbitrator may not consolidate or join more than one person`s or party`s claims and may not otherwise preside over any form of a consolidated, representative, or class proceeding. In addition, the arbitrator may award relief (including monetary, injunctive, and declaratory relief) only in favour of the individual party seeking relief and only to the extent necessary to provide relief necessitated by that party`s individual claim(s). Any relief awarded cannot affect other Users.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>30. Notices</p>
                    </div>
                    <div class="wt-description">
                    <p>Legal notices will be served or to the email address you provide to Research Freelancer during the registration process. Notice will be deemed given 24 hours after email is sent, unless the sending party is notified that the email address is invalid or that the email has not been delivered. Alternatively, we may give you legal notice by mail to the address provided by you during the registration process. In such case, notice will be deemed given three days after the date of mailing.</p>
                    <p>Any notices to Research Freelancer must be given by registered ordinary post (or if posted to or from a place outside Australia, by registered airmail).</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>31. Severability</p>
                    </div>
                    <div class="wt-description">
                    <p>The provisions of this User Agreement are severable, and if any provision of this User Agreement is held to be invalid or unenforceable, such provision may be removed and the remaining provisions will be enforced. This Agreement may be assigned by us to an associated entity at any time, or to a third party without your consent in the event of a sale or other transfer of some or all of our assets. In the event of any sale or transfer you will remain bound by this User Agreement.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>32. Interpretation</p>
                    </div>
                    <div class="wt-description">
                    <p>Headings are for reference purposes only and in no way define, limit, construe or describe the scope or extent of such section.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>33. No Waiver</p>
                    </div>
                    <div class="wt-description">
                    <p>Our failure to act with respect to an anticipated or actual breach by you or others does not waive our right to act with respect to subsequent or similar breaches. Nothing in this section shall exclude or restrict your liability arising out of fraud or fraudulent misrepresentation.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>34. Communications</p>
                    </div>
                    <div class="wt-description">
                    <p>You consent to receive notices and information from us in respect of the Website and Services by electronic communication. You may withdraw this consent at any time, but if you do so we may choose to suspend or close your Account.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>35. Additional Terms</p>
                    </div>
                    <div class="wt-description">
                    <p>It is important to read and understand all our policies as they provide the rules for trading on the Research Freelancer Website. In addition there may be specific policies or rules that apply, and it is your responsibility to check our Help pages and policies to make sure you comply. Our policies, including all policies referenced in them, are part of this Agreement and provide additional terms and conditions related to specific services offered on our Websites, including but not limited to:</p>
                    <ul class="wt-accordiontitle">
                    <li><a href="http://localhost/page/privacy-policy">Privacy Policy</a></li>
                    <li><a href="http://localhost/page/code-conduct">Code of Conduct</a></li>
                    <li><a href="http://localhost/page/fees-and-charges">Fees and Charges</a></li>
                    <li><a href="http://localhost/page/refund-policy">Refund Policy</a></li>
                    </ul>
                    <p>Each of these policies may be changed from time to time. Changes take effect when we post them on the Research Freelancer Website. When using particular services on our Website, you are subject to any posted policies or rules applicable to services you use through the Website, which may be posted from time to time. All such policies or rules are incorporated into this User Agreement.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>36. General</p>
                    </div>
                    <div class="wt-description">
                    <p>This Agreement contains the entire understanding and agreement between you and Research Freelancer. The following Sections survive any termination of this Agreement: Fees and Services (with respect to fees owed for our services), Release, Content, No Warranty As To Content, Limitation Of Liability, Indemnity, Bar To Action, No Class Actions, Legal Limitations, and Disputes With Us.</p>
                    </div>
                    <div class="wt-sectiontitle">
                    <p>37. Abusing Freelancer</p>
                    </div>
                    <div class="wt-description">
                    <p>Research Freelancer reserves to the greatest extent possible all rights, without limiting any other remedies, to limit, suspend or terminate our service(s) and or user account(s), suspend or ban access to our services, remove any content, and to take any and all technical or legal steps to ban users.</p>
                    <p>Without limiting the reasons for taking the aforementioned actions, conduct giving rise to this response could include:</p>
                    <ul class="wt-accordiontitle">
                    <li>use of our services for any illegitimate or non bona fide purpose</li>
                    <li>creating problems with other users or potential legal liabilities</li>
                    <li>infringing the intellectual property rights of third parties</li>
                    <li>acting inconsistently with the letter or spirit of any of our policies</li>
                    <li>abuse of any staff members including inappropriate or unreasonable communications</li>
                    <li>abuse or poor performance in the Research Freelancer Services</li>
                    <li>any attempt to use Research Freelancer`s platform or services for any objectionable purpose</li>
                    </ul>
                    </div>
                    <div class="wt-sectiontitle pt-4">
                    <p>38. Feedback</p>
                    </div>
                    <div class="wt-description">
                    <p>If you have any questions about this User Agreement or if you wish to report breaches of this User Agreement, please contact us by emailing us at <a href=""> support@researchfreelancer.com</a>.</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 0,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Code of Conduct',
                    'slug' => 'code-conduct',
                    'body' => '<div class="wt-twocolumns wt-haslayout">
                    <div class="wt-submitreportholder wt-bgwhite">
                    <div class="wt-titlebar">
                    <h2 class="wt-chocolate">Code of Conduct</h2>
                    </div>
                    <div class="wt-reportdescription">
                    <div class="wt-description wt-black">
                    <p>Research Freelancer has an obligation to conduct its business in accordance with all applicable rules, regulations and laws. We are committed to helping all Users act in a way that preserves trust and respect.</p>
                    <p>This Code is a guide to using <a href="/"> www.researchfreelancer.com </a> appropriately and must be followed at all times. Breaches of this Code are handled according to our Violations Policy will result in disciplinary action, up to, and including, account termination.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Personal Behavior</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will act ethically and with integrity.</li>
                         <li>I will comply with all of ResearchFreelancer’s policies.</li>
                         <li>I will respect the rights of all Users.</li>
                         <li>I will not seek to communicate or receive payments off-site.</li>
                         <li>I will not agree to do work I am not capable of doing.</li>
                         <li>I will not request the upfront release of Milestone Payments before I delivered work.</li>
                         <li>I will not abuse confidential information, or participate in any other illegal practice.</li>
                         <li>I will have regard for Users` interests, rights and safety.</li>
                         <li>I will not harass, bully or discriminate.</li>
                         <li>I will not falsify my own or any other identity and I will provide true and correct information.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>User Content</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I am responsible for the content I post on ResearchFreelancer and:</li>
                         <li>I will not post content that infringes upon any copyright or other intellectual property rights.</li>
                         <li>I will not post content that violates any law or regulation.</li>
                         <li>I will not post content that is defamatory.</li>
                         <li>I will not post content that is obscene or contains child pornography.</li>
                         <li>I will not post content that includes incomplete, false or inaccurate information about any person.</li>
                         <li>I will not post content that contains any viruses or programming routines intended to damage any system.</li>
                         <li>I will not post content that creates liability for ResearchFreelancer or harms its business operations or reputation.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Confidentiality</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will respect confidentiality and privacy.</li>
                         <li>I will not disclose information or documents I have acquired, other than as required by law or where authorization is given by ResearchFreelancer.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Contact</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will not ask users or other Freelancers for their private contact details and will communicate with them only through official website features.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Fraud</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will not engage in fraud.</li>
                         <li>I will not create multiple accounts.</li>
                         <li>I will not use the Site to illegally transfer funds.</li>
                         <li>I will not use the Site to generate false feedback.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Communication</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will avoid exaggeration, derogatory remarks, and inappropriate references.</li>
                         <li>I will not engage in personal attacks, negative or other unfair criticism, and any unprofessional conduct.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Bidding</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will not underbid to avoid fees.</li>
                         <li>I will not participate in projects involving illegal behaviour.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Spam or Advertising</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will not spam or advertise my website or service unless otherwise allowed.</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Affiliates</p>
                    </div>
                    <div class="wt-description pb-4">
                    <ul>
                         <li>I will not refer myself for the Affiliate Programme.</li>
                         <li>I will not obtain names from mailing lists, group emails, etc to send unsolicited emails ("Spam").</li>
                    </ul>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Payments</p>
                    </div>
                    <div class="wt-description">
                    <ul>
                         <li>I will not use ResearchFreelancer to facilitate money exchange including, but not limited to, cryptocurrency (e.g. bitcoin, ethereum, etc).</li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 0,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Dispute Resolution Policy',
                    'slug' => 'dispute-resolution-policy',
                    'body' => '<div class="wt-twocolumns wt-haslayout">
                    <div class="wt-submitreportholder wt-bgwhite">
                    <div class="wt-titlebar">
                    <h2 class="wt-chocolate">Milestone Dispute Resolution Policy</h2>
                    </div>
                    <div class="wt-reportdescription">
                    <div class="wt-description wt-black">
                    <p>This Policy sets out the dispute process to be followed when a Buyer and Seller who have used the Milestone Payment system elect to use to the Milestone Dispute Resolution process to resolve a dispute between them.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>The Milestone Dispute Team</p>
                    </div>
                    <div class="wt-description">
                    <p>
                         Both parties of the Dispute case can elect to have their dispute arbitrated by the Dispute Team. The role of the Dispute Team extends to making all actions necessary to resolve the case in an impartial and evidential manner. You acknowledge that the verdict of the Dispute Team is final, binding, and irreversible.
                    </p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>User Responsiveness</p>
                    </div>
                    <div class="wt-desc wt-black">
                    <p>Employers</p>
                    </div>
                    <div class="wt-description">
                    <p>
                         Once a dispute is opened, an employer is given 14 days to respond to it. Otherwise, they will automatically lose the dispute and the pending Milestone will be transferred to the freelancer`s account. 
                    </p>
                    </div>
                    <div class="wt-desc wt-black">
                    <p>Freelancers</p>
                    </div>
                    <div class="wt-description">
                    <p>
                         Once a dispute is opened, a Freelancer is given 4 days to respond to it. Otherwise, they will automatically lose the dispute and the pending Milestone will be returned to the Employer`s account. 
                    </p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Milestone Dispute Resolution Process</p>
                    </div>
                    <ul>
                    <li class="wt-topic wt-black">STAGE 1 - Identifying the issue</li>
                    <div class="wt-description pl-4">
                    <p>The complainant should select the Project and the Milestone payment or payments to be disputed. A User could contest all the Milestones related to a single project in one dispute.</p>
                    <p>After which, a description of the issue and an explanation of why the dispute is being opened should be given. From this stage until Stage 3, users are encouraged to attach any files that could support their claims.</p>
                    <p>Finally, the complainant is requested to enter the amount he or she is prepared to pay for the Project (if an Emplloyer) or wish to get paid for the Project (if a Freelancer). The amount could be between 0 and the total amount of the Milestone Payment(s) in question.</p>
                    </div>
                    <li class="wt-topic wt-black">STAGE 2 - Negotiations</li>
                    <div class="wt-description pl-4">
                    <p>At this stage, either party can negotiate for partial compensation, or (after a period of time) choose to have Freelancer`s Dispute Team arbitrate the dispute. Both parties will have the opportunity to tell their side of the story and also negotiate terms to resolve the issue between themselves.</p>
                    <p>Only the party who originally filed for the dispute can cancel the dispute. If the issue cannot be resolved through negotiation, either party can choose to pay the Arbitration Fee to have the dispute arbitrated by the Dispute Team. The Arbitration Fee will be refunded if the dispute is either settled through mutual agreement or cancelled before reaching arbitration.</p>
                    </div>
                    <li class="wt-topic wt-black">STAGE 3 - Final Offers and Evidence</li>
                    <div class="wt-description pl-4">
                    <p>After one of the involved parties has paid the Arbitration Fee, the other party has 4 days to also pay the fee. Either party still has the option in this period to negotiate with the other party.</p>
                    <p>If the responding party does not pay the arbitration fee within the 4 days, the result will be in favour of the party who escalated the dispute into arbitration first.</p>
                    <p>If a solution is found before the responding party pays the fee, the party who paid the Arbitration Fee will be refunded this fee.</p>
                    <p>Stage 3 is the last stage where both Users can submit their final evidence to support their case. After Stage 3, the involved parties are no longer allowed to submit evidence. The dispute will be resolved based upon the evidence provided through the Dispute System, or that is otherwise available to the Dispute Team, such as the project description and correspondence between the parties.</p>
                    <p>Once the dispute has proceeded to Stage 4, further evidence will no longer be accepted.</p>
                    </div>
                    <li class="wt-topic wt-black">STAGE 4 - Arbitration</li>
                    <div class="wt-description pl-4 pb-4">
                    <p>At Stage 4, the Dispute Team will review all evidence and other information provided to reach a decision (usually within 48 hours). Dispute verdicts are final, binding, and irreversible. The party who wins the dispute will be refunded their Arbitration Fee.</p>
                    <p>In the event that one of the parties of the Dispute has paid the Arbitration Fee, the other party will be given 4 days to pay the Arbitration Fee to move into Arbitration, and failure to do such will close the dispute by default, in favor of the party who initiated stage 4, with the arbitration fee initially paid refunded.</p>
                    </div>
                    </ul>
                    <div class="wt-topic wt-chocolate">
                    <p>Evidential Requirements for Your Dispute</p>
                    </div>
                    <div class="wt-description">
                    <p>
                         Should you elect to have the Dispute Team arbitrate your dispute, you agree to allow the Dispute Team to read all correspondence made on the Site and download or access, and test (if necessary), all uploaded files related to the dispute for the sole purpose of having your dispute resolved.
                    </p>
                    <p>You are highly encouraged to submit all the documents that would support your claims on your dispute.</p>
                    <p>Submit e-mail correspondences as screenshots or as *.eml files. If submitting screenshots, ensure that the "To", "From", and the "Date" bar is visible. E-mail correspondences sent in *.txt or *.doc or any word processing software will not be honoured. For proof of external correspondence, users should provide screenshots of their entire unedited conversation.</p>
                    <p>IM (instant messenger) conversations should be submitted as screenshots of the conversation from the IM software. Correspondences sent in *.txt, *.doc, or any word processing software will not be honoured.</p>
                    <p>Provide the contracts, and other files relating to the project and the dispute.</p>
                    <p>ResearchFreelancer will retain the confidentiality of the project and the privacy of the involved users and will not release the collected information to any party unless required by law.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Fee</p>
                    </div>
                    <div class="wt-description">
                    <p>The fee for a milestone dispute is 5%, payable by each party. The fee will then be refunded to the winner of the dispute. See the <a href="http://localhost/page/fees-and-charges"> Fees and Charges </a> page for details.</p>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 0,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Fees and Charges',
                    'slug' => 'fees-and-charges',
                    'body' => '<div class="wt-twocolumns wt-haslayout">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 float-left">
                    <div class="wt-submitreportholder wt-bgwhite">
                    <div class="wt-titlebar">
                    <h2 class="wt-chocolate">For Employers</h2>
                    </div>
                    <div class="wt-reportdescription">
                    <div class="wt-description wt-black">
                    <p>ResearchFreelancer is free to signup, post a project, receive bids from writers, review the writer`s profile and discuss the project requirements. If you choose to award a project, and the writer accepts, you create a milestone of the agreed price. </p>
                    <p>For each project, an administrative fee of 3% is levied on a project is awarded by employer and has been accepted by a freelancer. If employer subsequently pay the freelancer more than the original bid amount you will also be charged the administrative fee on any payments.</p>
                    <p>Your payment is protected by the Milestone Payment System. Only release the payment once you are 100% happy with the work that has been delivered.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Bonus</p>
                    </div>
                    <div class="wt-description">
                    <p>Users can choose to give bonus to a freelancer when satisfied with job and feels like compensating for well-done job. Bonuses has no administrative charge and service charge, hence maximum bonus is 10% of initial bid.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Dispute and Refunds</p>
                    </div>
                    <div class="wt-description">
                    <p>You may create a dispute request for cancelation of project from your dashboard at any time you have issue with a writer on performance or delay as agreed during negotiation and you cannot continue with him/her. At the end of the resolution, a full or partial refund of your fee based on the dispute resolution team. </p>
                    <p>Resolution could result to;</p>
                    <ul class="wt-accordiontitle">
                         <li>Cancellation of job and full refund to the user,</li>
                         <li>Cancellation of job and partial refund to user and writer based on the level of job done</li>
                         <li>Continuation of job by the writer based on the dispute resolution team and agreement between user and the writer.</li>
                    </ul>
                    <p>You may alternatively choose to move your project to another writer after dispute is resolved or based on mutual agreement between you and the writer.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Arbitration Fees</p>
                    </div>
                    <div class="wt-description">
                    <p>The arbitration fee for a dispute is 5% which is charged on the milestone to be refund. After dispute resolution a user can choose to move is/her job to another writer, in this case, user is charged 3% arbitration fee instead of the 5%.</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 float-left">
                    <div class="wt-submitreportholder wt-bgwhite">
                    <div class="wt-titlebar">
                    <h2 class="wt-chocolate">For Writers/Freelancers</h2>
                    </div>
                    <div class="wt-reportdescription">
                    <div class="wt-description wt-black">
                    <p>ResearchFreelancer is free to sign up, create a profile, select your skills and area of specializations, upload a portfolio, receive project notifications, discuss project details with clients, bid on projects.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Projects</p>
                    </div>
                    <div class="wt-description">
                    <p>When a writer is awarded a project and it’s accepted, researchfreelancer charges 20% of the value of the accepted bid as service charge which is deducted when the client is satisfy and he/she releases the milestone. The remaining 80% is sent to the writer’s account/wallet once client released milestone. If milestones are released in installments, same percentage is applied for every milestone released.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Bonus</p>
                    </div>
                    <div class="wt-description">
                    <p>Clients can choose to give bonus to a writer when satisfied with job and feels like compensating for good job. Bonuses has no administrative charge and service charge, hence maximum bonus is 10% of initial bid.</p>
                    </div>
                    <div class="wt-topic wt-chocolate">
                    <p>Dispute and Refunds</p>
                    </div>
                    <div class="wt-description">
                    <p class="pb-4">Clients could create a dispute request for cancelation of project when a writer fails in delivering the job has negotiated in terms of performance and time frame. At the end of the resolution, a full or partial refund is made to the client based on the dispute resolution team. The dispute resolution team will determine what percent of the payment goes to the writer based on the level of work done so far.
                    </p>
                    <ul class="wt-accordiontitle">
                    <li>Cancellation of job and full refund to the client,</li>
                    <li>Cancellation of job and partial refund to client and writer based on the level of job done</li>
                    <li>Continuation of job by the writer based on dispute resolution team and agreement between client and the writer.</li>
                    </ul>
                    <p>Client could alternatively choose to move your project to another writer after dispute is resolved or based on mutual agreement between client and the writer.</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>',
                    'relation_type' => 0,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
