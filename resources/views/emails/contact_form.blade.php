@include('emails.layouts.header')

<table align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #e0e0e0; background-color: #ffffff; font-family: Arial, sans-serif;">
    <tr>
        <td style="padding: 20px;">
            <h2>You've received a new message</h2>
            <p><strong>Name</strong>: {{ $email['name'] ?? null }}</p>
            <p><strong>Email</strong>: {{ $email['email'] ?? null }}</p>
            <p><strong>Phone</strong>: {{ $email['phone'] ?? null }}</p>
            <p><strong>Message</strong>: {{ $email['message'] ?? null }}</p>
        </td>
    </tr>
</table>

@include('emails.layouts.footer')