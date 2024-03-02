<?php

namespace Database\Seeders;

use App\Models\PathServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PathServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathServices = new PathServices();
        foreach (
            [
                'Clipping Path',
                'Background Remove',
                'Image Masking',
                'Shadow Masking',
                'Ghost Mannequin',
                'Photo Retouching',
                'Cropping & Resize',
                'Image Recoloring',
                'Headshot Retouching',
                'Ecommerce Editing',
                'Food Photo Retouching',
                'Jewelry Retouching',
                'Baby Photo Editing',
                'Real State Editing',
                'School Photo Editing',
                'Head Swap',
            ] as $service_name) {
            $starting_price = 0;
            switch ($service_name) {
                case "Clipping Path":
                    $starting_price = 0.29;
                    break;
                case "Background Remove":
                    $starting_price = 0.29;
                    break;
                case "Image Masking":
                    $starting_price = 0.49;
                    break;
                case "Shadow Masking":
                    $starting_price = 0.19;
                    break;
                case "Ghost Mannequin":
                    $starting_price = 0.79;
                    break;
                case "Photo Retouching":
                    $starting_price = 1.00;
                    break;
                case "Cropping & Resize":
                    $starting_price = 0.10;
                    break;
                case "Image Recoloring":
                    $starting_price = 0.79;
                    break;
                case "Headshot Retouching":
                    $starting_price = 2.49;
                    break;
                case "Ecommerce Editing":
                    $starting_price = 0.59;
                    break;
                case "Food Photo Retouching":
                    $starting_price = 0.99;
                    break;
                case "Jewelry Retouching":
                    $starting_price = 3.50;
                    break;
                case "Baby Photo Editing":
                    $starting_price = 0.99;
                    break;
                case "Real State Editing":
                    $starting_price = 0.99;
                    break;
                case "School Photo Editing":
                    $starting_price = 0.19;
                    break;
                case "Head Swap":
                    $starting_price = 5.00;
                    break;
            }
            $pathServices->create([
                'service_name' => $service_name,
                'slug' => Str::slug($service_name),
                'starting_price' => $starting_price,
                'description' => __('This is ' . $service_name . ' service')
            ]);
        }
    }
}
