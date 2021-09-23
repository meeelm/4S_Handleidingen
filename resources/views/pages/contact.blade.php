@extends('layouts.default')

@section('content')

<div class="container-contact">
  <form action="action_page.php">

    <label for="fname">{{ __('misc.name') }}</label>
    <input type="text" id="fname" name="firstname" placeholder="{{ __('misc.name') }}">

    <label for="lname">{{ __('misc.lastname') }}</label>
    <input type="text" id="lname" name="lastname" placeholder="{{ __('misc.lastname') }}">

    <label for="subject">{{ __('misc.subject') }}</label>
    <textarea id="subject" name="subject" placeholder="{{ __('misc.subject') }}" style="height:200px"></textarea>

    <input type="submit" value="{{ __('misc.subject') }}">

  </form>
</div>

@endsection
