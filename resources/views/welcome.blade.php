<!DOCTYPE html>
<html>
<body>

<a href="{{ route('change_lang', ['lang' => 'en']) }}">ENGLISH</a>
<a href="{{ route('change_lang', ['lang' => 'ms']) }}">BAHASA MALAYSIA</a>

<h2>@lang('tracking.title')</h2>

<form method="get" action="track">

    <input type="text" name="trackid" value="">


    <input type="submit">
</form>

<br> 
@if (isset($tracking_no))
 @lang('tracking.result') <b>{{ $tracking_no }}</b>
 
@endif

</body>
</html>
