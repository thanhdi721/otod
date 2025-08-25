<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentDiscoverController extends Controller
{
    public function index()
    {
        // Sample data for Mini Stories
        $miniStories = [
            [
                'image' => '/public/assets/images/car-sunset.jpg',
                'authorName' => 'Tuấn Trần',
                'authorAvatar' => '/public/assets/images/car-sunset.jpg'
            ],
            [
                'image' => '/public/assets/images/car-sunset.jpg',
                'authorName' => 'Minh Nguyễn',
                'authorAvatar' => '/public/assets/images/car-sunset.jpg'
            ],
            [
                'image' => '/public/assets/images/car-sunset.jpg',
                'authorName' => 'Hương Lê',
                'authorAvatar' => '/public/assets/images/car-sunset.jpg'
            ],
            [
                'image' => '/public/assets/images/car-sunset.jpg',
                'authorName' => 'Dũng Phạm',
                'authorAvatar' => '/public/assets/images/car-sunset.jpg'
            ],
            [
                'image' => '/public/assets/images/car-sunset.jpg',
                'authorName' => 'Linh Hoàng',
                'authorAvatar' => '/public/assets/images/car-sunset.jpg'
            ],
            [
                'image' => '/public/assets/images/car-sunset.jpg',
                'authorName' => 'Anh Vũ',
                'authorAvatar' => '/public/assets/images/car-sunset.jpg'
            ],
            [
                'image' => '/public/assets/images/car-sunset.jpg',
                'authorName' => 'Thảo Đỗ',
                'authorAvatar' => '/public/assets/images/car-sunset.jpg'
            ]
        ];

        // Sample data for Featured Content
        $featuredContent = [
            [
                'image' => '/public/assets/images/japanese-food.jpg',
                'title' => "Experience the Serenity of Japan's Traditional Countryside and Culinary Delights",
                'date' => '12/04/2024'
            ],
            [
                'image' => '/public/assets/images/japanese-food.jpg',
                'title' => "Discover Hidden Gems: A Complete Guide to Vietnam's Coastal Paradise",
                'date' => '10/04/2024'
            ],
            [
                'image' => '/public/assets/images/japanese-food.jpg',
                'title' => 'Ultimate Food Tour: From Street Markets to Fine Dining in Southeast Asia',
                'date' => '08/04/2024'
            ],
            [
                'image' => '/public/assets/images/japanese-food.jpg',
                'title' => 'Spiritual Journey Through Ancient Temples and Sacred Mountains',
                'date' => '05/04/2024'
            ],
            [
                'image' => '/public/assets/images/japanese-food.jpg',
                'title' => 'Adventure Awaits: Extreme Sports and Outdoor Activities for Thrill Seekers',
                'date' => '03/04/2024'
            ],
            [
                'image' => '/public/assets/images/japanese-food.jpg',
                'title' => 'Cultural Immersion: Living with Local Communities Around the World',
                'date' => '01/04/2024'
            ]
        ];

        // Category filters
        $categories = [
            'featured' => 'Bài viết nổi bật',
            'food' => 'Food Tour',
            'sea' => 'Khám phá biển xanh',
            'spiritual' => 'Hành trình tâm linh'
        ];

        return view('content-discover', compact('miniStories', 'featuredContent', 'categories'));
    }

    public function getContentByCategory($category)
    {
        // This method would filter content based on category
        // For now, return sample data
        $content = [];

        switch ($category) {
            case 'food':
                $content = [
                    [
                        'image' => '/public/assets/images/japanese-food.jpg',
                        'title' => 'Best Street Food in Hanoi: A Complete Guide',
                        'date' => '15/04/2024'
                    ],
                    [
                        'image' => '/public/assets/images/japanese-food.jpg',
                        'title' => 'Traditional Vietnamese Cuisine: From Pho to Banh Mi',
                        'date' => '13/04/2024'
                    ]
                ];
                break;
            case 'sea':
                $content = [
                    [
                        'image' => '/public/assets/images/japanese-food.jpg',
                        'title' => "Exploring Nha Trang's Beautiful Beaches",
                        'date' => '14/04/2024'
                    ],
                    [
                        'image' => '/public/assets/images/japanese-food.jpg',
                        'title' => 'Island Hopping in Phu Quoc: Paradise Found',
                        'date' => '12/04/2024'
                    ]
                ];
                break;
            default:
                $content = [
                    [
                        'image' => '/public/assets/images/japanese-food.jpg',
                        'title' => "Experience the Serenity of Japan's Traditional Countryside",
                        'date' => '12/04/2024'
                    ]
                ];
        }

        return response()->json($content);
    }
}

