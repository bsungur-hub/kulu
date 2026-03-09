<div
    style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; padding: 0; border-radius: 8px; overflow: hidden; background-color: #ffffff;">

    <div style="background-color: #1a1a1a; padding: 25px; text-align: center; border-bottom: 4px solid #dc2626;">
        <img src="{{ $message->embed(public_path('assets/images/logo/logo.jpg')) }}" alt="Kulu Windows & Doors"
             style="max-width: 180px; height: auto;">
    </div>

    <div style="padding: 35px 30px;">

        <h2 style="color: #1a1a1a; font-size: 22px; margin-top: 0;">{{ $isAdmin ? "Dear Admin" : "Hello " . $quoteData['name'] }}, </h2>

        <p style="line-height: 1.6; font-size: 15px; color: #444;">
            {!! $isAdmin ? "You have received a new quote request from the website. Please find the details of the message below." : " Thank you for requesting a quote from <strong>Kulu Windows & Doors</strong>. We have successfully received
             your project details. Our technical team will review your requirements and get back to you with a
             comprehensive solution as soon as possible." !!}
        </p>

        <div
            style="background-color: #f9f9f9; border-left: 4px solid #dc2626; padding: 20px; margin: 30px 0; border-radius: 0 4px 4px 0;">
            <h3 style="margin-top: 0; color: #1a1a1a; font-size: 16px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px;">
                Project Details Summary</h3>

            <table style="width: 100%; font-size: 14px; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eaeaea; font-weight: bold; width: 40%; color: #222;">
                        Property Type:
                    </td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eaeaea; color: #555;">{{ $quoteData['property_type'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eaeaea; font-weight: bold; color: #222;">
                        Project:
                    </td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eaeaea; color: #555;">{{ $quoteData['budget'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold; color: #222; vertical-align: top;">Additional
                        Message:
                    </td>
                    <td style="padding: 10px 0; color: #555; line-height: 1.5;">{{ $quoteData['message'] }}</td>
                </tr>
            </table>
        </div>

        <p style="line-height: 1.6; font-size: 14px; color: #666; font-style: italic;">
            {{ $isAdmin ? "* If the customer has attached any files, you will see them at the end of the message." : "* If you have attached any project files (images, PDF, DWG, etc.), they have been securely forwarded to our
            engineering team along with your request." }}
        </p>
    </div>

    @if (!$isAdmin)
        <div
            style="background-color: #f4f4f4; padding: 25px 30px; font-size: 14px; color: #555; border-top: 1px solid #e0e0e0;">
            <p style="margin: 0 0 10px 0;"><strong>Best regards,</strong></p>
            <p style="margin: 5px 0 8px 0;">
                <span style="color: #dc2626;">&#9632;</span> <strong style="color: #1a1a1a;">Kulu Windows & Doors</strong>
            </p>
            <p style="margin: 4px 0; font-size: 13px;">📍 <a href="https://maps.app.goo.gl/wUmyr4rGJP3cXibBA">4911 77 Ave SE,
                    Calgary, AB T2C 2X4</a></p>
            <p style="margin: 4px 0; font-size: 13px;">📞 <a href="tel:+14034757575">+1 (403) 475-7575</a></p>
            <p style="margin: 4px 0; font-size: 13px;">✉️ <a href="mailto:info@kuluwindows.com"
                                                             style="color: #dc2626; text-decoration: none;">info@kuluwindows.com</a>
            </p>
        </div>
    @endif

</div>
