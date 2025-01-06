<?php
namespace TopicSuggestions\Generator;

use AIEngine\AIEngine;

class TopicGenerator {

    /**
     * Topic generated as per response mode
     */
    public function _construct() {

        $limit = 10;
        
        // Get AI API key from settings
        $api_key = get_option( 'api_key', '' );
        if ( empty( $api_key ) ) {
            error_log( 'API key is missing in the AI Comment Moderator plugin settings.' );
            return;
        }
    
        // Initialize AI engine with API key
        $ai_client = new AIEngine( $api_key );
        $response_mode = get_option( 'response_mode', 'professional' );
    
        // Response format for AI prompt

        $prompt = "Generate and return $limit blog post topics customized to the specified $response_mode level.";
    
        // Get the AI response
        $response_data = $ai_client->generateContent($prompt);

        // error_log( 'AI response: ' . print_r( $response_data, true ) );
    
    }
}