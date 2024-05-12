<x-mail::message>
# Congratulations {{ $name }} You Are Registered

Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, consequuntur.

<x-mail::button :url="''">
Verify your email
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
