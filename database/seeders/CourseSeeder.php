<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Define the image directory
        $imageDirectory = 'courses/';

        // Ensure images exist in storage before seeding
        $images = [
            'course-11.jpg', 'course-44.jpg', 'course-22.jpg', 
            'course-33.jpg', 'course-55.jpg', 'course-66.jpg', 'course-77.jpg', 'course-99.jpg'
        ];

        foreach ($images as $image) {
            $path = storage_path("app/public/{$imageDirectory}{$image}");
            if (!file_exists($path)) {
                copy(public_path("images/{$image}"), $path); // Copy from a public images folder
            }
        }

        // Now, seed courses


          Course::create([

            'course_title' => 'RightReset (Intensive)',
            'course_description' => '<h3>RightReset </h3>
                <p>Break Free, Reset and Align With Your True Path, <br><br> Are you feeling stuck, uncertain, or unfulfilled?<br>
                It’s time to break free from limitations and reset your path. <br> Introducing “RightReset: Break Free, Reset, 
                and Align with Your True Path”.</p>
                <p>A transformative one-day intensive masterclass designed to help you discover your true purpose, 
                overcome obstacles, and unlock your full potential.</p>
                <p>In this powerful program;</p>
                <h4>You’ll gain:</h4>
                <ul>
                    <li>Clarity on what matters now</li>
                    <li>Courage to let go of misaligned paths</li>
                    <li>A renewed roadmap rooted in faith and purpose. </li>
                    <li>The confidence, and tools needed to create a life that aligns with your values, passions, and goals.</li>
                </ul>
                <p>Don’t let uncertainty hold you back any longer. Join the "RightReset" cohort and start your journey towards a more purpose-driven, fulfilling life, with this investment.</p>',
            'course_price_usd' => 10.00,  // Store in decimal format
            'course_price_ngn' => 15000.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => $imageDirectory . 'course-33.jpg',
            'pay_link' => 'https://paystack.com/buy/rightreset-hxvysh',
            'register_link' => 'https://forms.gle/XZEtBHEztx31ayuJ6',
            'selar_link' => 'https://selar.com/3a1n9g',
            'course_track' => 'LIFE AND CLARITY TRACK',
            'course_description2' => '<p>Your shift is just a Reset, away! <br> (USD amount is not a conversion rate). </p>',
        ]);

             Course::create([
            'course_title' => 'Mission Mastery (FrameWork)',
            'course_description' => '<h3>Mission Mastery</h3> <br> 
            <p><h4>Unlock Ultimate Uplift </h4><h6>Define It. Align It. Master It.</h6></p>
                <p>You were born with a mission, but how clear are you? The Mission Mastery Framework helps you uncover, 
                articulate, and walk in your God-given assignment with boldness and precision.
                This is for the doers who are ready for divine execution.</p>
                 <p>Discover your purpose, create a plan to achieve your goals and make a lasting impact. <br><br>
                 Unlock Your True Potential <br><br>
                 Are you ready to unleash your inner strength and make a lasting impact? <br>
                 <p><strong>Mission Mastery</strong> is a 6-week guided framework to help with self-discovery, empowerment, and purpose-driven success.
                 </p> </p>
                <h4>You’ll Gain:</h4>
                <ul>
                    <li>Discover your unique purpose and passions</li>
                    <li>A personalized roadmap to your goals.</li>
                    <li>Strength to  overcome self-doubt</li>
                    <li>Courage to make meaningful impact.</li>
                </ul>
                <p>Don’t let uncertainty hold you back. Unlock your ultimate potential and start living the life you were meant to live.</p>',
            'course_price_usd' => 100.00,  // Store in decimal format
    'course_price_ngn' => 150000.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => $imageDirectory . 'course-44.jpg',
            'pay_link' => 'https://paystack.com/buy/mission-mastery-course-wwdjrd',
            'register_link' => 'https://forms.gle/R3qvMEErc3Jt7LK47',
            'selar_link' => 'https://selar.com/o13fl7',
            'course_track' => 'LIFE AND CLARITY TRACK',
            'course_description2' => '<p>Join a purpose-led community and move from confusion to confident execution. <br> (USD amount is not a conversion rate). </p>',

        ]);

         Course::create([
            'course_title' => 'Purposeful Parenting (Intensive)',
            'course_description' => 'Transform Your Parenting, Transform Their Future</h3>
                <p>Learn how to raise confident, resilient, and grounded children through a purpose-driven parenting lens.</p>
                <h4>You will Learn How to:</h4>
                <ul>
                    <li>Raise confident, resilient, and well-grounded children</li>
                    <li>Create a nurturing environment that fosters growth and development</li>
                    <li>Develop a strong, loving relationship with your child</li>
                    <li>Unlock your child’s full potential and empower them to succeed</li>
                </ul>',
            'course_price_usd' => 10.00,  // Store in decimal fomat
    'course_price_ngn' => 15000.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => $imageDirectory . 'course-66.jpg',
            'pay_link' => 'https://paystack.com/buy/purposeful-parenting-dqodyz',
            'register_link' => 'https://forms.gle/Kwt8gkWzfZENKnV68',
            'selar_link' => 'https://selar.com/08477i',
            'course_track' => 'FAMILY AND RELATIONSHIP TRACK',
            'course_description2' => '<p>(USD amount is not a conversion rate). <br> Embrace and start shaping a brighter, more purpose-driven future for your child!   </p>',
        ]);

           Course::create([
            'course_title' => 'Nurtured to Flourish (Framework)',
            'course_description' => '
                <h3>Raising Purpose-Driven Children</h3>
                <p>Give Your Child the Gift of a Purpose-Driven Life <br> <br> 
                As a parent, you want the best for your child. You want them to grow into capable, confident, and 
                compassionate individuals who make a positive impact in the world. <br> <br> 
                In this  4 - 5 week guided framework for intentional parenting. Learn to nurture your child’s identity, purpose, 
                and emotional well-being for long-term success and impact.
                </p>
                <h4>You’ll Gain:</h4>
                <ul>
                    <li>Tools for resilience, discipline and growth.</li>
                    <li>Clarity in parenting with legacy in mind</li>
                    <li>Cultivating a strong sense of identity and purpose</li>
                    <li>Build meaningful relationships and connections</li>
                </ul>',
           'course_price_usd' => 65.00,  // Store in decimal format
    'course_price_ngn' => 100000.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => $imageDirectory . 'course-55.jpg',
            'pay_link' => 'https://paystack.com/buy/nurtured-to-flourish-ftbrmc',
            'register_link' => 'https://forms.gle/1kzBMGbsdsf3Ria87',
            'course_track' => 'FAMILY AND RELATIONSHIP TRACK',
            'course_description2' => '<p>(Amount not at conversion rate)</p>',
        ]);

        Course::create([
            'course_title' => 'As One (Journey)',
            'course_description' => '
                <h3>Two Hearts, One Mission.</h3>
                <p>Marriage is more than companionship - it’s a calling<br> <br> 
                In a world where relationships are constantly tested,<br> <br> 
                it’s easy to lose sight of what truly matters.<br> <br> 
                But what if you could cultivate a deeper, more meaningful connection with your partner?<br> 
                <p><strong>As One is a guided 3-day journey designed to help couples strengthen their bond, 
                deepen emotional connection, and build a God-centered, purpose-driven marriage. </p></strong></p>
                <h4>You’ll Learn How To:</h4>
                <ul>
                    <li>Communicate with depth and resolve conflict</li>
                    <li>Align visions, values, and goals</li>
                    <li>Reignite emotional intimacy and spiritual unity</li>
                    <li>Maintain or craft the unity of purpose in your marriage.</li>
                    <li>Reignite the spark, strengthen your bond, and unify your purpose.</li>
                </ul>
                <p>Join As One today! </p>',
            'course_price_usd' => 25.00,  // Store in decimal format
    'course_price_ngn' => 25000.00, // Equivalent in Naira
            'course_duration' => '2 days',
            'course_image' => $imageDirectory . 'course-11.jpg',
            'pay_link' => 'https://paystack.com/buy/as-one-gxsahq',
            'register_link' => 'https://forms.gle/TzXAddNzoxyZWvyF8',
            'selar_link' => 'https://selar.com/14e24v',
            'course_track' => 'FAMILY AND RELATIONSHIP TRACK',
            'course_description2' => '<p>(Amount not at conversion rate)</p>',
        ]);

       

        Course::create([
            'course_title' => 'Brand Essence Blueprint (5-Day Intensive)',
            'course_description' => '
                <h3>Build A Purpose Aligned Business That Resonates</h3>
                <p>Clarify your brand’s true essence, design a strategy that reflects your values, 
                and connect with your audience in meaningful ways.</p>
                <h4>You’ll Learn To:</h4>
                <ul>
                    <li>Clarify your brand’s unique essence and message</li>
                    <li>Craft a purpose-rooted brand identity</li>
                    <li>Develop a cohesive message and growth strategy</li>
                    <li>Drive loyalty and impact through authenticity </li>
                    <li>Unleash the full potential of your business </li>
                </ul>',
            'course_price_usd' => 65.00,  // Store in decimal format
    'course_price_ngn' => 100000.00, // Equivalent in Naira
    'course_duration' => '3 days',
            'course_image' => $imageDirectory . 'course-22.jpg',
            'pay_link' => 'https://paystack.com/buy/brand-essence-blueprint-bbifvr',
            'register_link' => 'https://forms.gle/77zyCtaMX9mHEuiP8',
            'course_track' => 'WORK & PERSONAL GROWTH TRACK',
            'course_description2' => '<p> (Amount not at conversion rate) <br> For staff or corporate training, please indicate for tailored consult delivery. 
             </p>',
        ]);

      

     

       

        Course::create([
            'course_title' => 'Work Alignment Leap (3-Day Intensive)',
            'course_description' => '
                <h3>Do Work That Feeds Your Purpose</h3>
                <p>This course helps you discover your unique wiring, spiritual giftings, 
                and career sweet spot. So you can thrive in your work - not just survive. <br><br>
                Align your work with your calling <br><br>
                Break free from burnout and step into purpose </p>
                <h4>You’ll Learn how to:</h4>
                <ul>
                    <li>You’ll Learn how to:</li>
                    <li>Align your work with your calling</li>
                    <li>Break free from burnout and step into purpose</li>
                    <li>Navigate a fulfilling career that brings joy, meaning, and success</li>
                </ul>',
           'course_price_usd' => 35.00,  // Store in decimal format
    'course_price_ngn' => 50000.00, // Equivalent in Naira
            'course_duration' => '2-3 days',
            'course_image' => $imageDirectory . 'course-77.jpg',
            'pay_link' => 'https://paystack.com/buy/work-alignment-leap-rzyuxg',
            'register_link' => 'https://forms.gle/X3bTSRHexepBi1e86',
            'selar_link' => 'https://selar.com/z49q4z',
            'course_track' => 'WORK & PERSONAL GROWTH TRACK',
            'course_description2' => '<p>(Amount not at conversion rate) </p>',

        ]);

           Course::create([
            'course_title' => 'Lead With Essence (Framework)',
            'course_description' => '
                <h3> Lead from your core, not just your role.</h3>
                <p>A 6-week leadership transformation experience that empowers you to 
                lead authentically - whether in business, 
                community or ministry.</p>
                <h4>You’ll Gain:</h4>
                <ul>
                    <li>Clarity on your leadership wiring and calling</li>
                    <li>Tools to lead with humility, grace and conviction.</li>
                    <li>Frameworks for team empowerment, influence, decision-making.</li>
                    <li>Insight into communication, legacy building and vision execution.</li>
                </ul>',
           'course_price_usd' => 100.00,  // Store in decimal format
    'course_price_ngn' => 150000.00, // Equivalent in Naira
            'course_duration' => '2-3 days',
            'course_image' => $imageDirectory . 'course-99.jpg',
            'pay_link' => 'https://paystack.com/buy/work-alignment-leap-rzyuxg',
            'register_link' => 'https://forms.gle/X3bTSRHexepBi1e86',
            'selar_link' => 'https://selar.com/z49q4z',
            'course_track' => 'LEADERSHIP TRACK',
            'course_description2' => '<p>(USD amount is not a conversion rate). </p>',

        ]);
    }
}
