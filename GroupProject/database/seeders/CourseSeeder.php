<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Category;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $webDevCategory = Category::firstOrCreate(['name' => 'Web Development']);
        $mobileDevCategory = Category::firstOrCreate(['name' => 'Mobile Development']);
        $dataScienceCategory = Category::firstOrCreate(['name' => 'Data Science']);
        $digitalMarketingCategory = Category::firstOrCreate(['name' => 'Digital Marketing']);
        $graphicDesignCategory = Category::firstOrCreate(['name' => 'Graphic Design']);
        $gameDevCategory = Category::firstOrCreate(['name' => 'Game Development']);
        
        Course::create([
            'title' => 'Learn Laravel - The PHP Framework for Web Artisans',
            'description' => 'Master Laravel, one of the most popular PHP frameworks for building powerful web applications.',
            'price' => 1999.99,
            'category_id' => $webDevCategory->id,
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Master React from Scratch',
            'description' => 'Learn React, the JavaScript library for building user interfaces, from basic to advanced concepts.',
            'price' => 1499.99,
            'category_id' => $webDevCategory->id,
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Build Mobile Apps with Flutter',
            'description' => 'Develop high-performance, cross-platform mobile applications with Flutter.',
            'price' => 1799.99,
            'category_id' => $mobileDevCategory->id,
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Data Science with Python and Machine Learning',
            'description' => 'Learn Python programming and dive into Data Science with hands-on projects and machine learning models.',
            'price' => 2499.99,
            'category_id' => $dataScienceCategory->id,
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Digital Marketing Mastery',
            'description' => 'Become an expert in digital marketing strategies, social media, SEO, and Google Ads.',
            'price' => 1299.99,
            'category_id' => $digitalMarketingCategory->id,
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Advanced JavaScript Concepts',
            'description' => 'Learn advanced JavaScript features such as closures, promises, async/await, and more.',
            'price' => 1699.99,
            'category_id' => $webDevCategory->id,
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Intro to Artificial Intelligence',
            'description' => 'Understand the fundamentals of Artificial Intelligence and its applications in various industries.',
            'price' => 2199.99,
            'category_id' => $dataScienceCategory->id,
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Building Games with Unity',
            'description' => 'Learn how to build 2D and 3D games with the Unity game engine.',
            'price' => 2299.99,
            'category_id' => $gameDevCategory->id,
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Graphic Design for Beginners',
            'description' => 'Learn basic design principles and tools like Photoshop and Illustrator for creating stunning visuals.',
            'price' => 1099.99,
            'category_id' => $graphicDesignCategory->id,
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Mastering SQL for Data Analysts',
            'description' => 'Learn SQL from the ground up and apply it to real-world data analysis projects.',
            'price' => 1399.99,
            'category_id' => $dataScienceCategory->id,
            'featured' => false,
        ]);

        Course::create([
            'title' => 'App Development with React Native',
            'description' => 'Learn how to create cross-platform mobile apps using React Native.',
            'price' => 1799.99,
            'category_id' => $mobileDevCategory->id,
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Digital Marketing for Entrepreneurs',
            'description' => 'Learn how to use digital marketing to grow your own business and increase sales.',
            'price' => 1499.99,
            'category_id' => $digitalMarketingCategory->id,
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Intro to UX/UI Design',
            'description' => 'Learn about user experience and user interface design to create better digital products.',
            'price' => 1099.99,
            'category_id' => $graphicDesignCategory->id,
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Building Responsive Websites with Bootstrap',
            'description' => 'Learn to create fully responsive websites with Bootstrap framework.',
            'price' => 1299.99,
            'category_id' => $webDevCategory->id,
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Full Stack Web Development with Node.js and Express',
            'description' => 'Learn how to build robust and scalable full-stack applications using Node.js, Express, and MongoDB.',
            'price' => 1999.99,
            'category_id' => $webDevCategory->id,  // Assuming you have a category for Web Development
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Introduction to Cloud Computing with AWS',
            'description' => 'Learn the basics of cloud computing and how to use Amazon Web Services (AWS) for your projects.',
            'price' => 1599.99,
            'category_id' => $dataScienceCategory->id,  // Assuming you have a category for Data Science
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Building RESTful APIs with Django',
            'description' => 'Learn how to build RESTful APIs using Django and Django REST Framework.',
            'price' => 1799.99,
            'category_id' => $webDevCategory->id,  // Assuming you have a category for Web Development
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Introduction to Cybersecurity',
            'description' => 'Learn the fundamentals of cybersecurity and how to protect your digital assets.',
            'price' => 1399.99,
            'category_id' => $dataScienceCategory->id,  // Assuming you have a category for Data Science
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Building Chatbots with Python',
            'description' => 'Learn how to create intelligent chatbots using Python and natural language processing.',
            'price' => 1699.99,
            'category_id' => $dataScienceCategory->id,  // Assuming you have a category for Data Science
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Introduction to Blockchain Technology',
            'description' => 'Learn the basics of blockchain technology and its applications in various industries.',
            'price' => 1999.99,
            'category_id' => $dataScienceCategory->id,  // Assuming you have a category for Data Science
            'featured' => false,
        ]);

        Course::create([
            'title' => 'Building E-commerce Websites with Shopify',
            'description' => 'Learn how to create and manage e-commerce websites using Shopify.',
            'price' => 1499.99,
            'category_id' => $webDevCategory->id,  // Assuming you have a category for Web Development
            'featured' => true,
        ]);

        Course::create([
            'title' => 'Introduction to Data Visualization with Tableau',
            'description' => 'Learn how to create stunning data visualizations using Tableau.',
            'price' => 1299.99,
            'category_id' => $dataScienceCategory->id,  
            'featured' => false,
        ]);
        Course::create([
            'title' => 'Building Progressive Web Apps with Angular',
            'description' => 'Learn how to build fast, reliable, and engaging web applications using Angular.',
            'price' => 1799.99,
            'category_id' => $webDevCategory->id, 
            'featured' => true,
        ]);
        Course::create([
            'title' => 'Introduction to Game Development with Unreal Engine',
            'description' => 'Learn the basics of game development using Unreal Engine.',
            'price' => 1999.99,
            'category_id' => $gameDevCategory->id,  
            'featured' => false,
        ]);
        Course::create([
            'title' => 'Building RESTful APIs with Flask',
            'description' => 'Learn how to build RESTful APIs using Flask and SQLAlchemy.',
            'price' => 1599.99,
            'category_id' => $webDevCategory->id, 
            'featured' => true,
        ]);
        Course::create([
            'title' => 'Introduction to Data Science with R',
            'description' => 'Learn the basics of data science using R programming language.',
            'price' => 1399.99,
            'category_id' => $dataScienceCategory->id, 
            'featured' => false,
        ]);
        Course::create([
            'title' => 'Building Web Applications with Ruby on Rails',
            'description' => 'Learn how to build web applications using Ruby on Rails framework.',
            'price' => 1799.99,
            'category_id' => $webDevCategory->id,  
            'featured' => true,
        ]);
        Course::create([
            'title' => 'Introduction to Internet of Things (IoT)',
            'description' => 'Learn the basics of IoT and how to build IoT applications.',
            'price' => 1599.99,
            'category_id' => $dataScienceCategory->id,  
            'featured' => false,
        ]);
        Course::create([
            'title' => 'Building Mobile Apps with React Native',
            'description' => 'Learn how to build cross-platform mobile applications using React Native.',
            'price' => 1999.99,
            'category_id' => $mobileDevCategory->id,   
            'featured' => true,
        ]);
        
        Course::create([
            'title' => 'Building Web Applications with ASP.NET Core',
            'description' => 'Learn how to build web applications using ASP.NET Core framework.',
            'price' => 1799.99,
            'category_id' => $webDevCategory->id,  
            'featured' => true,
        ]);
        
    }
}
