{{-- @include('common.header') --}}
<h1>Home Page</h1>


<x-message-banner msg="User login successful!" /> {{-- This will include the message-banner component and render its content in place. --}}
<br/>

<x-message-banner msg="Welcome to the home page!" /> {{-- This will include the message-banner component and render its content in place. --}}

{{-- @include('common.inner',['page'=>'This is the home page.'])
@includeIf('common.common', ['data' => 'This is some common data.'])  --}}
{{-- This will include the common.common view if it exists, and pass the data variable to it. If the view does not exist, it will simply ignore the include statement without throwing an error. --}}

{{-- <h1>{{ $name }}</h1> --}}
{{-- <h1>{{ rand() }}</h1>

<h2>
{{ 
$users[2]
}}
</h2> --}}

{{-- @if($name == 'Ayush')
    <h1>Welcome Ayush</h1>
@elseif($name == 'John')
    <h1>Welcome John</h1>
@else
    <h1>Welcome Guest</h1>
@endif
 --}}

<div>
{{-- @for($i=0;$i<10;$i++)
    <h1>{{ $i }}</h1>
@endfor --}}
{{-- 
@foreach ($users as $user)
    <h1>{{ $user }}</h1>
@endforeach --}}
</div>