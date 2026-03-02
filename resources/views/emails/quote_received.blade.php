<h2>Hello {{ $quoteData['name'] }},</h2>

<p>Thank you for reaching out to us. We have successfully received your renovation and window replacement quote request.</p>

<p>Our team is currently reviewing your details for your <strong>{{ $quoteData['property_type'] }}</strong> project. We will get back to you shortly with a tailored solution designed to withstand Alberta's extreme weather conditions.</p>

<p><strong>Here is a summary of your request:</strong></p>
<ul>
    <li><strong>Property Type:</strong> {{ $quoteData['property_type'] }}</li>
    <li><strong>Area Size:</strong> {{ $quoteData['area_size'] }} {{ $quoteData['unit_size'] }}</li>
    <li><strong>Budget:</strong> {{ $quoteData['budget'] }}</li>
    <li><strong>Phone:</strong> {{ $quoteData['phone'] }}</li>
</ul>

<p>Best regards,<br>
    <strong>Kulu Windows & Doors Team</strong><br>
    Calgary, Alberta</p>
