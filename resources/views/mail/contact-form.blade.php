<div style="font-family: sans-serif;">
    Zpráva z kontaktního formuláře 
    <br>
    <br>
    <b>Jméno:</b> {{ $email['first_name'] }} <br>
    <b>Příjemní:</b> {{ $email['sur_name'] }} <br>
    <b>Email:</b> {{ $email['email'] }} <br>
    <b>Obsah:</b> <br>
    {!! str_replace("\n", "<br>", $email['text']); !!} <br>
</div>