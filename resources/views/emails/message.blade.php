<!DOCTYPE html>
<html lang="en">
<head>

    {{-- META DATA--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Acountability is a web-based service that was created with the aim of ">
    <meta name="author" content="">
    <meta name="keywords"
          content="Accountability, Commercial credit Risk Management, Online credit checks for consumers, Debt Collection Agencies">
    <meta name="Accountability" content="">
    <meta name="theme-color" content="#52BC71">

</head>
<body>

<p>From: {{ $contact->name }}</p>
<p>Email: {{ $contact->email }}</p>
<p>Contact Number: {{ $contact->contact_no }}</p>
<p>Member Status: {{ $contact->member_status }}</p>
<p>Message: {{ $contact->contact_message }}</p>
<p>Category: {{ $contact->category }}</p>

</body>
</html>
