<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display the car detail page
     */
    public function show($id = null)
    {
        // Mock car data - in real application, this would come from database
        $car = [
            'id' => $id ?? 1,
            'name' => 'Hyundai Elantra',
            'model' => 'Sedan hạng C',
            'year' => '2024',
            'price' => '750 triệu',
            'engine' => '2.0L',
            'transmission' => 'Tự động',
            'fuel' => 'Xăng',
            'color' => 'Trắng',
            'images' => [
                'img-car.png',
                '16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png',
                'img-car.png',
                '16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png'
            ],
            'description' => 'Hyundai Elantra 2024 với thiết kế hiện đại, động cơ mạnh mẽ và công nghệ tiên tiến.',
            'features' => [
                'LED Headlights',
                'Smart Key',
                'Bluetooth Connectivity',
                'Backup Camera',
                'Apple CarPlay/Android Auto',
                'Lane Departure Warning'
            ]
        ];

        return view('car-detail', compact('car'));
    }

    /**
     * Get car images for API
     */
    public function getImages($id)
    {
        // Mock images data
        $images = [
            'img-car.png',
            '16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png',
            'img-car.png',
            '16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png'
        ];

        return response()->json([
            'success' => true,
            'images' => $images
        ]);
    }
}
