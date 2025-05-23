<?php
namespace App\Services;

use OpenAI;

class AIProductGenerator
{
    public static function generate(string $productName): string
    {
        $client = OpenAI::client(config('services.openai.key'));

        $prompt = "Generate a compelling, SEO-optimized product description for an e-commerce website selling: {$productName}. 
        Make sure to specifically mention the product name '{$productName}' in the description.
        Focus on its key features, benefits, and value proposition. 
        Keep it between 100-150 words and make it appealing to Sri Lankan customers.";

        $response = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a professional Sri Lankan e-commerce content writer who creates specific, product-focused descriptions.'],
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return trim($response['choices'][0]['message']['content'] ?? 'A great product!');
    }
}
