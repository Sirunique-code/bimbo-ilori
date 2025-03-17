<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'course_title' => 'As One',
            'course_description' => '<h3>Maintain the unity of purpose in your marriage. </h3>
                <p>Strengthen Your Bond, Unify Your Purpose
                In a world where relationships are constantly tested, it’s easy to lose sight of what truly matters.
                But what if you could cultivate a deeper, more meaningful connection with your partner?
                Be a part of ‘As One’ and discover the secrets to maintaining unity in your marriage.</p>
                <h4>Lear how to:</h4>
                <ul>
                    <li>Communicate effectively and resolve conflicts</li>
                    <li>Build trust, intimacy, and emotional connection</li>
                    <li>Align your values, goals, and purpose</li>
                    <li>Navigate life’s challenges together, as a team</li>
                </ul>
                <p>Reignite the spark, strengthen your bond, and unify your purpose.Join As One today! </p>',
            'course_price_usd' => 25.00,  // Store in decimal format
    'course_price_ngn' => 25000.00, // Equivalent in Naira
            'course_duration' => '2 days',
            'course_image' => 'course-11.jpg',
            'pay_link' => 'https://paystack.com/buy/as-one-gxsahq',
            'register_link' => 'https://forms.gle/TzXAddNzoxyZWvyF8',
        ]);

        Course::create([
            'course_title' => 'Mission Mastery',
            'course_description' => '<h3>Discover your purpose, create a plan to achieve your goals and make a lasting impact.</h3>
                <p>Unlock Your True Potential, Are you ready to unleash your inner strength and make a lasting impact? 
                Mission Mastery is here to guide you on a transformative journey of self-discovery, empowerment, and purpose-driven success.
                Discover Your Purpose, Achieve Your Goals, Join Mission Mastery: Unlock Ultimate Uplift and gain the clarity, direction, and confidence</p>
                <h4>Needed to:</h4>
                <ul>
                    <li>Discover your unique purpose and passions</li>
                    <li> Create a personalized plan to achieve your goals.</li>
                    <li>Break through obstacles and overcome self-doubt.</li>
                    <li>Make a meaningful impact in the world</li>
                </ul>
                <p>Don’t let uncertainty hold you back. Unlock your ultimate potential and start living the life  you were meant to live. 
                 Join the Mission Mastery Course Program today!</p>',
            'course_price_usd' => 100.00,  // Store in decimal format
    'course_price_ngn' => 150000.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => 'course-44.jpg',
            'pay_link' => 'https://paystack.com/buy/mission-mastery-course-wwdjrd',
            'register_link' => 'https://forms.gle/R3qvMEErc3Jt7LK47',
        ]);

        Course::create([
            'course_title' => 'Brand Essence Blueprint',
            'course_description' => '<h3>Success Mindset</h3>
                <p>Is your business truly aligned with your values and purpose? Or are you just going through the motions?
                Join Brand Essence Blueprint and discover the transformative power of building a business that’s integrated 
                and aligned with purpose.</p>
                <h4>Learn how to:</h4>
                <ul>
                    <li> Clarify your brand’s unique essence and message</li>
                    <li>Develop a purpose-driven strategy that resonates with your audience.</li>
                    <li>Drive growth, engagement, and loyalty through meaningful connections</li>
                    <li>Unlock the full potential of your business. </li>
                </ul>
                <p>Register for the “Brand Essence Blueprint” 3 day Masterclass!</p>',
            'course_price_usd' => 10.00,  // Store in decimal format
    'course_price_ngn' => 15500.00, // Equivalent in Naira
    'course_duration' => '3 days',
            'course_image' => 'course-22.jpg',
            'pay_link' => 'https://payment-gateway.com/pay/as-one',
            'register_link' => 'https://bimboiloriministries.com/register/as-one',
        ]);

        Course::create([

            'course_title' => 'RightReset',
            'course_description' => '<h3>RightReset</h3>
                <p>Break Free, Reset and Align With Your True Path, Are you feeling stuck, uncertain, or unfulfilled?
                It’s time to break free from limitations and reset your path. Introducing “RightReset: Break Free, Reset, 
                and Align with Your True Path”.</p>
                <h4>Course Highlights:</h4>
                <ul>
                    <li>Discover your true purpose</li>
                    <li>Overcome obstacles, and unlock your full potential</li>
                    <li>gain the clarity, confidence, and tools needed to create a life that truly aligns with your values, passions, and goals. </li>
                    <li>Exclusive mentorship sessions</li>
                </ul>
                <p>Don’t let uncertainty hold you back any longer. Join the “RightReset” cohort and start your journey
                towards more purpose-driven, fulfilling life!</p>',
            'course_price_usd' => 10.00,  // Store in decimal format
            'course_price_ngn' => 15500.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => 'course-33.jpg',
            'pay_link' => 'https://paystack.com/buy/rightreset-hxvysh',
            'register_link' => 'https://forms.gle/R3qvMEErc3Jt7LK47',
           
        ]);

        Course::create([
            'course_title' => 'Nurtured to Flourish',
            'course_description' => '<h3>Give Your Child the Gift of a Purpose-Driven Life As a parent, you want the best for your child.</h3>
                <p>You want them to grow into capable, confident, and compassionate individuals who would make a positive impact in the world. 
                Join Nurtured to Flourish Parenting Course and discover the essential tools and strategies to;</p>
                <h4>Raise purpose-driven children who:</h4>
                <ul>
                    <li>Develop a strong sense of identity and purpose</li>
                    <li>Cultivate resilience, self-discipline, and determination</li>
                    <li>Build meaningful relationships and connections</li>
                    <li>Unlock their full potential and make a lasting impact</li>
                </ul>
                <p>Nourish your child’s mind, heart, and spirit. Enroll in the “Nurtured to Flourish” Parenting Course and start empowering your child to flourish and thrive!</p>',
           'course_price_usd' => 65.00,  // Store in decimal format
    'course_price_ngn' => 10000.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => 'course-55.jpg',
            'pay_link' => 'https://payment-gateway.com/pay/as-one',
            'register_link' => 'https://bimboiloriministries.com/register/as-one',
        ]);

        Course::create([
            'course_title' => 'Purposeful Parenting',
            'course_description' => '<h3>Unlock the Power of Purposeful Parenting </h3>
                <p>Transform Your Parenting, Transform Their Future
                Discover the purpose-driven parenting approach that will help you:</p>
                <h4>Raise purpose-driven children who:</h4>
                <ul>
                    <li>Raise confident, resilient, and compassionate children.</li>
                    <li>Create a nurturing environment that fosters growth and development</li>
                    <li>Develop a strong, loving relationship with your child</li>
                    <li>Unlock your child’s full potential and empower them to succeed</li>
                </ul>
                <p>Register for the “Purposeful Parenting” masterclass today and embrace and start shaping a brighter, more purpose-driven future for your child!</p>',
            'course_price_usd' => 10.00,  // Store in decimal fomat
    'course_price_ngn' => 15500.00, // Equivalent in Naira
            'course_duration' => '6 weeks',
            'course_image' => 'course-66.jpg',
            'pay_link' => 'https://paystack.com/buy/purposeful-parenting-dqodyz',
            'register_link' => 'https://forms.gle/Kwt8gkWzfZENKnV68',
        ]);

        Course::create([
            'course_title' => 'Work Alignment Leap',
            'course_description' => '<h3>Transform your work, transform your life, Align With Your Purpose.</h3>
                <p>Are  you feeling unfulfilled, restless, or not getting a grip in your career?
                It’s time to check in and align your work with your purpose. Join Work Alignment Leap and discover the powerful process to transform your work and transform your life. </p>
                <h4>Learn how to:</h4>
                <ul>
                    <li>Identify your core values, passions, and strengths.</li>
                    <li>Discover your purpose and align your work with it..</li>
                    <li>Break through obstacles and overcome self-doubt.</li>
                    <li>Create a fulfilling career that brings joy, meaning, and success</li>
                </ul>
                <p>Take the leap and start living a life that truly reflects your purpose. Join the “Work Alignment Leap” masterclass today!</p>',
           'course_price_usd' => 35.00,  // Store in decimal format
    'course_price_ngn' => 50000.00, // Equivalent in Naira
            'course_duration' => '2-3 days',
            'course_image' => 'course-77.jpg',
            'pay_link' => 'https://paystack.com/buy/nurtured-to-flourish-ftbrmc',
            'register_link' => 'https://forms.gle/1kzBMGbsdsf3Ria87',
        ]);
        
        
        
    }
}
