<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $githubSecret = 'aKto!o369[@&';

        $signature = $request->header('X-Hub-Signature-256');
        $payload = $request->getContent();

        $computedSignature = hash_hmac('sha256', $payload, $githubSecret);

        if (hash_equals('sha256=' . $computedSignature, $signature)) {
            // Request is verified, process the payload
            // Your logic to handle the webhook payload goes here
            return response('Webhook received and verified', 200);
        } else {
            // Invalid request, handle accordingly (log, reject, etc.)
            return response('Invalid webhook request', 401);
        }
    }
}
