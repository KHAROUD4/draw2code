<!DOCTYPE html>
<html>
<body>
    <h2>New message from Draw2Code contact form</h2>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Message:</strong> {{ $formData['message'] }}</p>
    <p><strong>Budget:</strong> {{ $formData['ag-budget'] ?? 'Not specified' }}</p>
</body>
</html>