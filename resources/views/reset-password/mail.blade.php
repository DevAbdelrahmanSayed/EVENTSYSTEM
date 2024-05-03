<p>Hello {{ $user->name }},</p>
<p>Click here to reset your password: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a></p>
