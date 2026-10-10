<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Purpose Insight: {{ $insight->title }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f6f9; color: #333333;">
    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f4f6f9; padding: 20px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #3F207F; padding: 30px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: bold;">Bimbo Ilori Programs</h1>
                            <p style="color: #E4B548; margin: 5px 0 0 0; font-style: italic; font-size: 13px;">...Transforming Lives, Translating Purpose...</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 35px 30px;">
                            <span style="display: inline-block; background-color: rgba(63, 32, 127, 0.1); color: #3F207F; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 15px; text-transform: uppercase; margin-bottom: 15px;">
                                {{ $insight->category }}
                            </span>
                            
                            <h2 style="color: #2b1559; font-size: 22px; margin: 10px 0 15px 0; line-height: 1.3;">
                                {{ $insight->title }}
                            </h2>

                            <p style="font-size: 15px; line-height: 1.6; color: #555555; margin-bottom: 20px;">
                                Dear Subscriber,
                            </p>

                            <p style="font-size: 15px; line-height: 1.6; color: #555555; margin-bottom: 20px;">
                                Here is an opening insight snippet from our latest post on <strong>Purpose Insights</strong>:
                            </p>

                            <!-- Opening Tip Highlight Box -->
                            <div style="background-color: #f8f6ff; border-left: 4px solid #3F207F; padding: 20px; border-radius: 4px; margin-bottom: 25px;">
                                <h4 style="margin: 0 0 8px 0; color: #3F207F; font-size: 15px; font-weight: 600;">Opening Tip:</h4>
                                <p style="margin: 0; font-size: 15px; line-height: 1.6; color: #333333; font-style: italic;">
                                    "{{ $insight->opening_tip }}"
                                </p>
                            </div>

                            <!-- Read More CTA Button -->
                            <div style="text-align: center; margin: 30px 0;">
                                <a href="{{ route('purpose-insight.show', $insight->slug) }}" target="_blank" style="background-color: #3F207F; color: #ffffff; text-decoration: none; padding: 14px 32px; font-size: 16px; font-weight: bold; border-radius: 25px; display: inline-block; box-shadow: 0 4px 10px rgba(63, 32, 127, 0.25);">
                                    Read Full Article →
                                </a>
                            </div>

                            <p style="font-size: 14px; color: #777777; line-height: 1.5; margin-top: 25px;">
                                Stay aligned, purposeful, and continually blessed on your journey of growth!
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #151c23; padding: 20px; text-align: center; color: #aaaaaa; font-size: 12px;">
                            <p style="margin: 0 0 8px 0; color: #E4B548; font-style: italic;">...Principles, Purpose, Progress...</p>
                            <p style="margin: 0;">&copy; {{ date('Y') }} <a href="https://bimboilori.com" style="color: #ffffff; text-decoration: none;">bimboilori.com</a>. All rights reserved.</p>
                            <p style="margin: 10px 0 0 0; font-size: 11px; color: #777777;">
                                You are receiving this because you subscribed to updates on Bimbo Ilori Programs.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
