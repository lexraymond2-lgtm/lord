<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: #000000;
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #FF0000;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #FF0000;
            margin-bottom: 5px;
        }
        .field-value {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            border-left: 4px solid #FF0000;
        }
        .message-content {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #FF0000;
            white-space: pre-wrap;
        }
        .footer {
            background: #000000;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        .timestamp {
            color: #666;
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>offthegridgh</h1>
            <p>New Contact Form Submission</p>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="field-label">Name:</div>
                <div class="field-value">{{ (string) $name }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Email:</div>
                <div class="field-value">{{ (string) $email }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Project Type:</div>
                <div class="field-value">{{ (string) $project_type }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Message:</div>
                <div class="message-content">{{ (string) $user_message }}</div>
            </div>
            
            <div class="timestamp">
                Received on: {{ (string) $timestamp }}
            </div>
        </div>
        
        <div class="footer">
            <p>This message was sent from your portfolio contact form.</p>
            <p>Reply directly to this email to respond to {{ (string) $name }}.</p>
        </div>
    </div>
</body>
</html>
