<?php

/**
 * Class SiteManagementSeeder.
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
 * Class SiteManagementSeeder
 */
class SiteManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_managements')->insert(
            [
                [
                    'meta_key' => 'home_settings',
                    'meta_value' => '
                        a:1:{i:0;a:8:{s:11:"home_banner";s:30:"1569957712-background-home.jpg";
                        s:17:"home_banner_image";s:26:"1569957712-images.jpg";s:12:"banner_title";s:59:"Hire 
                        expert and professional writers for your research 
                        work";s:15:"banner_subtitle";s:35:"or get research writing jobs 
                        online";s:18:"banner_description";s:190:"Get the perfect writer to handle your 
                        thesis, research project, data analysis, seminar, term paper, assignment, business 
                        plan, feasibility report, proofreading and all lots of research 
                        work.";s:10:"video_link";s:43:"https://www.youtube.com/
                        watch?v=B-ph2g5o2K4";s:11:"video_title";s:17:"See For 
                        Yourself!";s:10:"video_desc";s:43:"How it works & experience the ultimate joy.";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'app_desc',
                    'meta_value' => '<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumed perspiciatis.</p>',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'app_android_link',
                    'meta_value' => 'https://play.google.com/store/apps/details?id=com.app.amento.worketic',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'app_ios_link',
                    'meta_value' => '#',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'socials',
                    'meta_value' => 'a:5:{i:0;a:2:{s:5:"title";s:8:"facebook";s:3:"url";s:87:"https://www.facebook.com/ResearchFreelancers/?modal=admin_todo_tour@ResearchFreelancers";}i:1;a:2:{s:5:"title";s:7:"twitter";s:3:"url";s:72:"https://twitter.com/home?prefetchTimestamp=1563411976253@ResearchFreela1";}i:2;a:2:{s:5:"title";s:9:"instagram";s:3:"url";s:48:"https://www.instagram.com/researchfreelancerltd/";}i:3;a:2:{s:5:"title";s:9:"pinterest";s:3:"url";s:53:"https://www.pinterest.com/researchfreelancerltd/pins/";}i:4;a:2:{s:5:"title";s:7:"youtube";s:3:"url";s:23:"https://www.youtube.com";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'footer_settings',
                    'meta_value' => 'a:5:{s:11:"footer_logo";s:20:"1554450384-flogo.png";s:11:"description";s:199:"Hire expert and professional research writers to handle your thesis, research project, data analysis, seminar, term paper, assignment, business plan, feasibility report and all lots of research work.";s:9:"copyright";s:72:"Copyright © 2019 The Research Freelancer, All Right Reserved Amentotech";s:12:"menu_title_1";s:7:"Company";s:12:"menu_pages_1";a:3:{i:0;s:1:"3";i:1;s:1:"4";i:2;s:1:"5";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'commision',
                    'meta_value' => 'a:1:{i:0;a:6:{s:9:"commision";s:2:"20";s:10:"min_payout";s:3:"250";s:14:"payment_method";a:2:{i:0;s:6:"paypal";i:1;s:4:"rave";}s:8:"currency";s:3:"NGN";s:15:"enable_packages";s:4:"true";s:16:"employer_package";s:4:"true";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'menu_title',
                    'meta_value' => 'Terms',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'search_menu',
                    'meta_value' => 'a:5:{i:0;a:2:{s:5:"title";s:18:"User Agreement";s:3:"url";s:1:"page/user-agreement";}i:1;a:2:{s:5:"title";s:21:"Code of Conduct";s:3:"url";s:1:"page/code-conduct";}i:2;a:2:{s:5:"title";s:11:"Dispute Resolution Policy";s:3:"url";s:1:"page/dispute-resolution-policy";}i:3;a:2:{s:5:"title";s:9:"Fees and Charges";s:3:"url";s:1:"page/fees-and-charges";}i:4;a:2:{s:5:"title";s:9:"Privacy Policy";s:3:"url";s:1:"page/privacy-policy";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'settings',
                    'meta_value' => 'a:1:{i:0;a:9:{s:5:"title";s:19:"Research Freelancer";s:16:"connects_per_job";N;s:12:"gmap_api_key";N;s:12:"chat_display";s:4:"true";s:18:"enable_theme_color";s:5:"false";s:4:"logo";s:19:"1555333800-logo.png";s:7:"favicon";s:25:"1569767675-rf_favicon.ico";s:8:"language";s:2:"en";s:15:"body-lang-class";s:7:"lang-en";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'email_data',
                    'meta_value' => 'a:1:{i:0;a:7:{s:10:"from_email";s:16:"info@noreply.com";s:13:"from_email_id";s:16:"info@noreply.com";s:11:"sender_name";s:6:"Amento";s:14:"sender_tagline";s:17:"Your Work Partner";s:10:"sender_url";s:39:"http://amentotech.com/projects/researchfreelancer";s:10:"email_logo";s:22:"1555743744-favicon.png";s:12:"email_banner";s:21:"1555743744-banner.jpg";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'section_settings',
                    'meta_value' => 'a:1:{i:0;a:12:{s:20:"home_section_display";s:4:"true";s:10:"section_bg";s:21:"1557484284-banner.jpg";s:13:"company_title";s:16:"Start As Company";s:12:"company_desc";s:172:"Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.";s:11:"company_url";s:1:"#";s:16:"freelancer_title";s:19:"Start As Freelancer";s:15:"freelancer_desc";s:172:"Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.";s:14:"freelancer_url";s:1:"#";s:19:"app_section_display";s:4:"true";s:16:"download_app_img";s:36:"1558518016-1557484284-mobile-img.png";s:9:"app_title";s:20:"Limitless Experience";s:12:"app_subtitle";s:30:"Roam Around With Your Business";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'inner_page_data',
                    'meta_value' => 'a:1:{i:0;a:15:{s:17:"f_list_meta_title";N;s:16:"f_list_meta_desc";N;s:13:"show_f_banner";s:4:"true";s:19:"emp_list_meta_title";N;s:18:"emp_list_meta_desc";N;s:15:"show_emp_banner";s:4:"true";s:19:"job_list_meta_title";N;s:18:"job_list_meta_desc";N;s:15:"show_job_banner";s:4:"true";s:23:"service_list_meta_title";N;s:22:"service_list_meta_desc";N;s:19:"show_service_banner";s:5:"false";s:14:"f_inner_banner";s:32:"1570471910-frbanner-1920x400.jpg";s:14:"e_inner_banner";s:25:"1570471910-e-1110x300.jpg";s:16:"job_inner_banner";s:32:"1570471910-medium-e-1110x300.jpg";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'show-page-1',
                    'meta_value' => 'true',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'show-page-4',
                    'meta_value' => 'true',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'meta_key' => 'rave_settings',
                    'meta_value' => 'a:1:{i:0;a:5:{s:10:"rave_title";s:20:"Rave Payment Gateway";s:8:"rave_key";s:47:"FLWPUBK_TEST-87b56e56d0e860227d42e69f52d948f4-X";s:11:"rave_secret";s:47:"FLWSECK_TEST-922c752cf23ac31835022e0a26417e6e-X";s:16:"rave_secret_hash";s:21:"researchfreelancerltd";s:11:"enable_test";s:4:"true";}}',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
