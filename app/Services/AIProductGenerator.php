<?php
namespace App\Services;

use OpenAI;

class AIProductGenerator
{
    public static function generate(string $productName): string
    {
        $client = OpenAI::client(config('services.openai.key'));

        $prompt = "Generate a compelling, SEO-optimized product description for: {$productName}";

        $response = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a professional Sri Lankan e-commerce content writer.'],
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return trim($response['choices'][0]['message']['content'] ?? 'A great product!');
    }
}
